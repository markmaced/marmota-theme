jQuery(document).ready(function ($) {
      AOS.init()
      $(document).on('click', 'button[act="#planos"]', function (event) {
            event.preventDefault();

            var target = $($.attr(this, 'act'));

            if (target.length) {
                  $('html, body').animate({
                        scrollTop: target.offset().top
                  }, 800);
            }
      });
      $(document).on('click', '.modalBtn', function () {
            $("#customModal").fadeIn(300).css("display", "flex");
      });
      $('#loginModal').on('click', function (e) {
            e.preventDefault()
            $('#loginForm').removeClass('hidden')
            $('#registerForm').addClass('hidden')
      })
      $('#registerModal').on('click', function (e) {
            e.preventDefault()
            $('#registerForm').removeClass('hidden')
            $('#loginForm').addClass('hidden')
      })
      $("#closeModal, #customModal").click(function (e) {
            if (e.target.id === "customModal" || e.target.id === "closeModal") {
                  $("#customModal").fadeOut(300);
            }
      });
      $("#sendLogin").on("click", function (e) {
            e.preventDefault();

            let email = $("#floating_login_email").val();
            let password = $("#floating_login_password").val();

            if (!email || !password) {
                  Swal.fire({
                        icon: "warning",
                        title: "Atenção",
                        text: "Preencha todos os campos!"
                  });
                  return;
            }

            $.ajax({
                  type: "POST",
                  url: wpurl.ajax,
                  data: {
                        action: "custom_ajax_login",
                        email: email,
                        password: password
                  },
                  beforeSend: function () {
                        $("#sendLogin").text("Entrando...").prop("disabled", true);
                  },
                  success: function (response) {
                        if (response.success) {
                              Swal.fire({
                                    icon: "success",
                                    title: "Login realizado!",
                                    text: "Redirecionando...",
                                    showConfirmButton: true
                              }).then(() => {
                                    window.location.hash = "planos";
                                    window.location.reload();
                              });
                        } else {
                              Swal.fire({
                                    icon: "error",
                                    title: "Erro no login",
                                    text: response.message
                              });
                        }
                  },
                  error: function () {
                        Swal.fire({
                              icon: "error",
                              title: "Erro",
                              text: "Ocorreu um erro ao tentar fazer login."
                        });
                  },
                  complete: function () {
                        $("#sendLogin").text("Entrar").prop("disabled", false);
                  }
            });
      });
      $("#registerLeadWpp").on("click", function (e) {
            e.preventDefault();

            let name = $("#register_name").val();
            let email = $("#register_email").val();
            let telefone = $("#register_telefone").val();
            let password = $("#register_password").val();

            if (!name || !email || !telefone || !password) {
                  Swal.fire({
                        icon: "warning",
                        title: "Atenção",
                        text: "Preencha todos os campos!"
                  });
                  return;
            }

            $.ajax({
                  type: "POST",
                  url: wpurl.ajax,
                  data: {
                        action: "custom_ajax_register",
                        name: name,
                        email: email,
                        telefone: telefone,
                        password: password
                  },
                  beforeSend: function () {
                        $("#registerLeadWpp").text("Registrando...").prop("disabled", true);
                  },
                  success: function (response) {
                        if (response.success) {
                              Swal.fire({
                                    icon: "success",
                                    title: "Cadastro realizado!",
                                    text: "Redirecionando...",
                                    showConfirmButton: false,
                                    timer: 500
                              }).then(() => {
                                    window.location.hash = "planos";
                                    window.location.reload();
                              });
                        } else {
                              Swal.fire({
                                    icon: "error",
                                    title: "Erro no cadastro",
                                    text: response.message
                              });
                        }
                  },
                  error: function (error) {
                        console.log(error)
                        Swal.fire({
                              icon: "error",
                              title: "Erro",
                              text: "Ocorreu um erro ao tentar fazer o cadastro."
                        });
                  },
                  complete: function () {
                        $("#registerLeadWpp").text("Registrar").prop("disabled", false);
                  }
            });
      });

      async function getCartItems(isCart) {
            return new Promise((resolve, reject) => {
                  $.ajax({
                        url: wpurl.ajax,
                        method: 'POST',
                        data: {
                              action: 'get_cart_items'
                        },
                        success: function (response) {
                              const items = response.items.map(item => ({
                                    id: item.id,
                                    name: item.name,
                                    price: Math.round(item.price * 100), // em centavos
                                    quantity: item.quantity
                              }));

                              localStorage.setItem('cartItems', JSON.stringify(items));

                              const params = new URLSearchParams({
                                    items: JSON.stringify(items),
                                    redirect_url: 'https://marmota.devhouse.com.br/obrigado',
                                    customer_name: response.customer.name || '',
                                    customer_email: response.customer.email || '',
                                    customer_cellphone: response.customer.phone || ''
                              });

                              if (isCart) {
                                    const url = `https://checkout.infinitepay.io/aline_laranjo?${params.toString()}`;
                                    window.location.href = url;
                                    resolve(); // nada a retornar
                              } else {
                                    resolve(items); // retorna os itens
                              }
                        },
                        error: function (err) {
                              console.error('Erro ao coletar dados:', err);
                              reject(err);
                        }
                  });
            });
      }

      $(document).on('click', '#proceedToInfinite', function (e) {
            e.preventDefault();
            getCartItems(true)
      });

      if (wpurl.isPage) {
            Swal.fire({
                  title: 'Carregando pedido...',
                  text: 'Estamos verificando os dados da sua compra',
                  allowOutsideClick: false,
                  didOpen: () => {
                        Swal.showLoading();
                  }
            });

            const transaction_id = new URLSearchParams(window.location.search).get('order_nsu');
            if (!transaction_id) return;

            (async () => {
                  try {
                        const cartItems = await getCartItems(false);


                        $.ajax({
                              url: wpurl.ajax,
                              method: 'POST',
                              data: {
                                    action: 'check_or_create_order',
                                    transaction_nsu: transaction_id,
                                    cart_items: JSON.stringify(cartItems)
                              },
                              success: function (response) {
                                    if (!response.success) {
                                          console.error('Erro:', response.data);
                                          Swal.fire('Erro', response.data || 'Erro ao processar o pedido.', 'error');
                                          return;
                                    }

                                    const order = response.data;

                                    $('#order-id').html(`#${order.order_id}`);
                                    $('#customer-name').html(order.customer.name);
                                    $('#customer-email').html(order.customer.email);
                                    $('#customer-phone').html(order.customer.phone);
                                    $('#order-total').html(order.total);

                                    const $itemsList = $('#order-items');
                                    $itemsList.empty();

                                    order.items.forEach(item => {
                                          const $li = $('<li>').addClass('text-gray-700').html(`${item.quantity}x ${item.name} - ${item.total}`);
                                          $itemsList.append($li);
                                    });

                                    Swal.close();
                                    localStorage.clear();
                              },
                              error: function (err) {
                                    console.error('Erro na requisição AJAX:', err);
                                    Swal.fire('Erro', 'Erro na comunicação com o servidor.', 'error');
                              }
                        });
                  } catch (err) {
                        console.error('Erro ao obter itens do carrinho:', err);
                        Swal.fire('Erro', 'Não foi possível recuperar os itens do carrinho.', 'error');
                  }
            })();
      }
      var firstTabId = $('[data-tabs-target]').first().data('tabs-target');
      $(firstTabId).removeClass('hidden').addClass('flex');
      $('[data-tabs-target]').on('click', function () {
            var tabId = $(this).data('tabs-target');
            var tabContent = $(tabId);

            // Esconde todas as tabs
            $('.hidden').addClass('hidden');

            // Mostra a tab clicada
            tabContent.removeClass('hidden').addClass('flex');
      });
});