<?php

function infinitepay_order_exists($transaction_nsu) {
    $args = array(
        'post_type'      => 'shop_order',
        'post_status'    => array_keys( wc_get_order_statuses() ),
        'meta_key'       => '_transaction_nsu',
        'meta_value'     => $transaction_nsu,
        'posts_per_page' => 1,
        'fields'         => 'ids'
    );

    $orders = get_posts($args);

    return !empty($orders) ? $orders[0] : false;
}