<?php
$handle = 'marcos-macedo-bfr';
$slug = $_GET['slug'] ?? '';
$transaction_nsu = $_GET['transaction_id'] ?? '';
$external_order_nsu = $_GET['order_nsu'];

?>

<div class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full bg-white shadow-xl rounded-2xl p-10">
        <?php if ($slug && $transaction_nsu):
            $is_paid = infinitepay_is_transaction_paid($handle, $transaction_nsu, $external_order_nsu, $slug);

            if ($is_paid) {
                ?>
                <div id="thank-you-container" class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="bg-green-100 text-green-600 rounded-full p-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-3xl font-extrabold text-gray-800 mb-4">Pagamento confirmado!</h1>
                    <p class="text-lg text-gray-600 mb-6">Obrigado por sua compra. Abaixo estão os detalhes do seu pedido:</p>

                    <div id="order-details" class="text-left space-y-4 mb-10">
                        <div class="border p-4 rounded-lg shadow-sm bg-gray-100">
                            <p class="text-sm text-gray-500">Número do Pedido:</p>
                            <p id="order-id" class="font-semibold text-gray-800">...</p>
                        </div>
                        <div class="border p-4 rounded-lg shadow-sm bg-gray-100">
                            <p class="text-sm text-gray-500">Cliente:</p>
                            <p id="customer-name" class="font-semibold text-gray-800">...</p>
                            <p id="customer-email" class="text-gray-600">...</p>
                            <p id="customer-phone" class="text-gray-600">...</p>
                        </div>
                        <div class="border p-4 rounded-lg shadow-sm bg-gray-100">
                            <p class="text-sm text-gray-500 mb-2">Produtos:</p>
                            <ul id="order-items" class="space-y-1">
                                
                            </ul>
                        </div>
                        <div class="border p-4 rounded-lg shadow-sm bg-gray-100">
                            <p class="text-sm text-gray-500">Total:</p>
                            <p id="order-total" class="text-lg font-bold text-gray-800">...</p>
                        </div>
                    </div>

                    <a href="/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition">
                        Voltar à Loja
                    </a>
                </div>
            <?php
            } else {
                echo '<div class="text-red-600 text-center text-lg font-semibold">❌ Pagamento não confirmado. Verifique com o suporte.</div>';
            }
        else: ?>
            <div class="text-red-600 text-center text-lg font-semibold">
                ⚠️ Informações de pagamento incompletas.
            </div>
        <?php endif; ?>
    </div>
</div>