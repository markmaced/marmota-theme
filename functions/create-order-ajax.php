<?php

add_action('wp_ajax_check_or_create_order', 'check_or_create_order');
add_action('wp_ajax_nopriv_check_or_create_order', 'check_or_create_order');

function check_or_create_order()
{
    $transaction_nsu = trim($_POST['transaction_nsu'] ?? '');
    $cart_items_json = stripslashes($_POST['cart_items'] ?? '[]');
    $cart_items = json_decode($cart_items_json, true);

    if(!is_user_logged_in()){
        wp_send_json_error('Você precisa logar para ver o pedido!');
    }

    // Verificar se já existe o pedido
    $existing_order_id = infinitepay_order_exists($transaction_nsu);
    if ($existing_order_id) {
        $order = wc_get_order($existing_order_id);
        $current_user_id = get_current_user_id();
    
        // Verifica se o pedido pertence ao usuário logado
        if ($order->get_user_id() === $current_user_id) {
            wp_send_json_success(format_order_response($order));
        } else {
            wp_send_json_error('Pedido não pertence ao usuário atual.', 403);
        }
    }

    if (!$transaction_nsu || empty($cart_items)) {
        wp_send_json_error('Parâmetros ausentes');
    }

    // Criar novo pedido
    $order = wc_create_order();

    foreach ($cart_items as $item) {
        $product_id = intval($item['id'] ?? 0);
        $quantity = intval($item['quantity'] ?? 1);

        if ($product_id && $quantity) {
            $product = wc_get_product($product_id);
            if ($product) {
                $order->add_product($product, $quantity);
            }
        }
    }

    $order->set_customer_id(get_current_user_id());
    $order->set_payment_method('infinite_pay');
    $order->set_payment_method_title('Infinite Pay');
    $order->set_status('processing');
    $order->calculate_totals();
    update_post_meta($order->get_id(), '_transaction_nsu', sanitize_text_field($transaction_nsu));
    $order->save();

    // $nsu_check = get_post_meta($order->get_id(), '_transaction_nsu', true);
    // log_to_file('NSU direto do postmeta: ' . $nsu_check);

    if (function_exists('WC') && WC()->cart) {
        WC()->cart->empty_cart();
    }

    wp_send_json_success(format_order_response($order));
}

function format_order_response($order)
{
    $items = [];

    foreach ($order->get_items() as $item) {
        $product = $item->get_product();
        $items[] = [
            'name'     => $product ? $product->get_name() : $item->get_name(),
            'quantity' => $item->get_quantity(),
            'total'    => wc_price($item->get_total()),
        ];
    }

    return [
        'order_id'    => $order->get_id(),
        'status'      => $order->get_status(),
        'total'       => wc_price($order->get_total()),
        'items'       => $items,
        'customer'    => [
            'name'  => $order->get_billing_first_name() . ' ' . $order->get_billing_last_name(),
            'email' => $order->get_billing_email(),
            'phone' => $order->get_billing_phone(),
        ],
    ];
}
