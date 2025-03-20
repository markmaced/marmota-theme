<?php

add_action('woocommerce_cart_calculate_fees', function() {
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }
    
    $chosen_gateway = WC()->session->get('chosen_payment_method');
    
    // Definindo as taxas para o cartão de crédito
    $tarifa_fixa = 0.49; 
    $taxa_percentual = 0.0349; 

    // Verifica se o método de pagamento escolhido é o cartão de crédito
    if ($chosen_gateway === 'asaas-credit-card') {
        $cart_total = WC()->cart->cart_contents_total;
        $fee = $tarifa_fixa + ($cart_total * $taxa_percentual);
        WC()->cart->add_fee('Taxa Crédito', $fee, true);
    
    // Verifica se o método de pagamento escolhido é o PIX
    } elseif ($chosen_gateway === 'asaas-pix') {
        // Não aplica nenhuma taxa quando o pagamento é via PIX
        return;
    }
});

add_action('wp_ajax_calculate_custom_fee', 'calculate_custom_fee');
add_action('wp_ajax_nopriv_calculate_custom_fee', 'calculate_custom_fee');

function calculate_custom_fee() {
    if (!defined('DOING_AJAX') || !DOING_AJAX || !WC()->cart) {
        wp_send_json_error(['message' => 'Acesso inválido']);
        wp_die();
    }
    
    $chosen_gateway = isset($_POST['payment_method']) ? sanitize_text_field($_POST['payment_method']) : '';
    $tarifa_fixa = 0.49;
    $taxa_percentual = 0.0349;
    $fee = 0;
    
    if ($chosen_gateway === 'asaas-credit-card') {
        $cart_total = WC()->cart->cart_contents_total;
        $fee = $tarifa_fixa + ($cart_total * $taxa_percentual);
    }else{
        $cart_total = WC()->cart->cart_contents_total;
    }
    
    wp_send_json_success([
        'fee' => $fee,
        'total' => $cart_total + $fee
    ]);
    wp_die();
}