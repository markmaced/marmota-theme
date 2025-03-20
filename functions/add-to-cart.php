<?php
add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');

function woocommerce_ajax_add_to_cart()
{
    $product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = 1;

    $added = WC()->cart->add_to_cart($product_id, $quantity);

    if ($added) {
        wp_send_json([
            'success' => true,
            'product_url' => wc_get_cart_url()
        ]);
    } else {
        wp_send_json([
            'error' => true,
            'product_url' => get_permalink($product_id)
        ]);
    }

    wp_die();
}

?>