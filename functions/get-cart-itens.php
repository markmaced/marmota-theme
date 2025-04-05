<?php

add_action('wp_ajax_get_cart_items', 'custom_get_cart_items');
add_action('wp_ajax_nopriv_get_cart_items', 'custom_get_cart_items');

function custom_get_cart_items()
{
    $items = array();

    foreach (WC()->cart->get_cart() as $cart_item) {
        $product = $cart_item['data'];
        $items[] = array(
            'id'       => $product->get_id(),
            'name'     => $product->get_name(),
            'price'    => (float) $product->get_price(), // será convertido para centavos no JS
            'quantity' => $cart_item['quantity'],
        );
    }

    $current_user = wp_get_current_user();
    $user_data = array(
        'name'  => $current_user->display_name,
        'email' => $current_user->user_email,
        'phone' => get_user_meta($current_user->ID, 'billing_phone', true),
    );

    wp_send_json(array(
        'items'    => $items,
        'customer' => $user_data,
    ));
}
