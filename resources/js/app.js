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
      });
})