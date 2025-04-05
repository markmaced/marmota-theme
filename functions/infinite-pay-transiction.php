<?php

function infinitepay_is_transaction_paid($handle, $transaction_nsu, $external_order_nsu, $slug) {
    $url = "https://api.infinitepay.io/invoices/public/checkout/payment_check/{$handle}";

    $args = array(
        'method' => 'POST',
        'body'   => array(
            'slug' => $slug,
            'transaction_nsu' => $transaction_nsu,
            'external_order_nsu' => $external_order_nsu
        ),
        'timeout' => 10,
    );

    $response = wp_remote_post($url, $args);

    if (is_wp_error($response)) {
        return false;
    }

    $body = json_decode(wp_remote_retrieve_body($response), true);

    return isset($body['success'], $body['paid']) && $body['success'] === true && $body['paid'] === true;
}