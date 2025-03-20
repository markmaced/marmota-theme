<?php

add_action('template_redirect', function () {
    if (is_page('obrigado')) {
        // if (!isset($_GET['receipt_url']) || !isset($_GET['transaction_id'])) {
        //     wp_redirect(home_url());
        //     exit;
        // }

        // $user_id = get_current_user_id();
        $user_id = 1;
        if (!$user_id) {
            log_to_file('Não tá logado');
            wp_redirect(home_url());
            exit;
        }

        $descricao = 'Lorem Ipsum';
        $valor = 1000;
        $quantidade = 1;

        // Buscar o produto pela descrição
        $product = wc_get_product(69);
        log_to_file('-----------------------------');
        log_to_file(print_r($product , true));
        $order = wc_create_order([
            'customer_id' => $user_id
        ]);
        log_to_file(print_r($order, true));
        $order->add_product(wc_get_product(69), $quantidade);
        $order->set_payment_method('infinitepay');
        $order->set_payment_method_title('InfinitePay');
        $order->calculate_totals();
        $order->update_status('processing', 'Pagamento confirmado via InfinitePay.');

        // Redirecionar para a página de obrigado com o ID do pedido
        $order_id = $order->get_id();
        // wp_redirect(add_query_arg('order_id', $order_id, get_permalink()));
        exit;
    } else {
        wp_redirect(home_url());
        exit;
    }
    if (isset($_GET['order_id'])) {
        $order = wc_get_order(intval($_GET['order_id']));
        if ($order) {
            ?>
            <h2>Pedido Confirmado!</h2>
            <p>Número do pedido: <?php echo $order->get_id(); ?></p>
            <p>Valor total: R$<?php echo number_format($order->get_total(), 2, ',', '.'); ?></p>
            <p>Produtos:</p>
            <ul>
                <?php
                foreach ($order->get_items() as $item) {
                    echo '<li>' . $item->get_name() . ' x ' . $item->get_quantity() . '</li>';
                }
                ?>
            </ul>
            <?php
        } else {
            echo '<p>Pedido não encontrado.</p>';
        }
    }
});