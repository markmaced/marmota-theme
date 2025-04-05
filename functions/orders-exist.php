<?php

function infinitepay_order_exists($transaction_nsu) {
    $args = array(
        'post_type'      => wc_get_order_types( 'shop_order' ),
        'post_status'    => 'any',
        'posts_per_page' => 1,
        'fields'         => 'ids',
        'cache_results' => false,
        'meta_query'     => array(
            array(
                'key'     => '_transaction_nsu',
                'value'   => $transaction_nsu,
                'compare' => '='
            )
        )
    );

    $orders = get_posts($args);

    return !empty($orders) ? $orders[0] : false;
}
