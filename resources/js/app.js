jQuery(document).ready(function ($) {
      AOS.init()
      jQuery(document).ready(function ($) {
            $(".model-selected").click(function () {
                  var product_id = $(this).attr("product_id");

                  Swal.fire({
                        title: "Adicionando ao carrinho...",
                        text: "Aguarde um momento.",
                        icon: "info",
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                              Swal.showLoading();
                        }
                  });

                  $.ajax({
                        type: "POST",
                        url: wpurl.ajax,
                        data: {
                              action: "woocommerce_ajax_add_to_cart",
                              product_id: product_id,
                        },
                        success: function (response) {
                              Swal.close(); // Fecha o alerta de loading

                              // Exibe alerta de sucesso
                              Swal.fire({
                                    title: "Produto adicionado!",
                                    text: "O produto foi adicionado ao carrinho.",
                                    icon: "success",
                                    showCancelButton: true,
                                    confirmButtonText: "Ir para o carrinho",
                              }).then((result) => {
                                    if (result.isConfirmed) {
                                          window.location.href = "/carrinho/"; // Redireciona para o carrinho
                                    }
                              });
                        },
                        error: function () {
                              Swal.fire({
                                    title: "Erro!",
                                    text: "Ocorreu um erro ao adicionar o produto.",
                                    icon: "error"
                              });
                        }
                  });
            });
            $(document).on('click', 'button[act="#planos"]', function (event) {
                  event.preventDefault();

                  var target = $($.attr(this, 'act'));

                  if (target.length) {
                        $('html, body').animate({
                              scrollTop: target.offset().top
                        }, 800);
                  }
            });
            function updateFee() {
                  var paymentMethod = $('input[name="payment_method"]:checked').val();

                  Swal.fire({
                        title: "Alterando método de pagamento...",
                        text: "Aguarde um momento.",
                        icon: "info",
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                              Swal.showLoading();
                        }
                  });

                  $.ajax({
                        type: 'POST',
                        url: wpurl.ajax,
                        data: {
                              action: 'calculate_custom_fee',
                              payment_method: paymentMethod
                        },
                        success: function (response) {
                              if (response.success) {
                                    console.log(response.data)
                                    $('.order-total').html('<th>Total</th><td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">R$</span>&nbsp;'+response.data.total+'</bdi></span></strong> </td>')
                                    if(response.data.fee == 0){
                                          $('.fee').html('')
                                    }else{
                                          $('.fee').html('<th>Taxa Crédito</th><td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">R$</span>&nbsp;'+response.data.fee+'</bdi></span></td>')
                                    }
                                    Swal.close();
                              }
                        }
                  });
            }
            $(document).on('change', '.woocommerce-checkout-payment input[name="payment_method"]', function () {
                  updateFee()
            });
      });
})