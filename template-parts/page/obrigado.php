<?php
$handle = 'marcos-macedo-bfr';
$slug = $_GET['slug'] ?? '';
$transaction_nsu = $_GET['order_nsu'] ?? '';
$external_order_nsu = $transaction_nsu;

if ($slug && $transaction_nsu) {
    $is_paid = infinitepay_is_transaction_paid($handle, $transaction_nsu, $external_order_nsu, $slug);

    if ($is_paid) {
        echo '<div class="text-green-600 font-bold p-4">✅ Pagamento confirmado com sucesso!</div>';
    } else {
        echo '<div class="text-red-600 font-bold p-4">❌ Pagamento não confirmado. Verifique com o suporte.</div>';
    }
} else {
    echo '<div class="text-gray-600 font-bold p-4">⚠️ Informações de pagamento incompletas.</div>';
}