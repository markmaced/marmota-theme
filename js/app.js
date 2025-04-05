/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

jQuery(document).ready(function ($) {
  AOS.init();
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
    e.preventDefault();
    $('#loginForm').removeClass('hidden');
    $('#registerForm').addClass('hidden');
  });
  $('#registerModal').on('click', function (e) {
    e.preventDefault();
    $('#registerForm').removeClass('hidden');
    $('#loginForm').addClass('hidden');
  });
  $("#closeModal, #customModal").click(function (e) {
    if (e.target.id === "customModal" || e.target.id === "closeModal") {
      $("#customModal").fadeOut(300);
    }
  });
  $("#sendLogin").on("click", function (e) {
    e.preventDefault();
    var email = $("#floating_login_email").val();
    var password = $("#floating_login_password").val();
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
      beforeSend: function beforeSend() {
        $("#sendLogin").text("Entrando...").prop("disabled", true);
      },
      success: function success(response) {
        if (response.success) {
          Swal.fire({
            icon: "success",
            title: "Login realizado!",
            text: "Redirecionando...",
            showConfirmButton: true
          }).then(function () {
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
      error: function error() {
        Swal.fire({
          icon: "error",
          title: "Erro",
          text: "Ocorreu um erro ao tentar fazer login."
        });
      },
      complete: function complete() {
        $("#sendLogin").text("Entrar").prop("disabled", false);
      }
    });
  });
  $("#registerLeadWpp").on("click", function (e) {
    e.preventDefault();
    var name = $("#register_name").val();
    var email = $("#register_email").val();
    var telefone = $("#register_telefone").val();
    var password = $("#register_password").val();
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
      beforeSend: function beforeSend() {
        $("#registerLeadWpp").text("Registrando...").prop("disabled", true);
      },
      success: function success(response) {
        if (response.success) {
          Swal.fire({
            icon: "success",
            title: "Cadastro realizado!",
            text: "Redirecionando...",
            showConfirmButton: false,
            timer: 500
          }).then(function () {
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
      error: function error(_error) {
        console.log(_error);
        Swal.fire({
          icon: "error",
          title: "Erro",
          text: "Ocorreu um erro ao tentar fazer o cadastro."
        });
      },
      complete: function complete() {
        $("#registerLeadWpp").text("Registrar").prop("disabled", false);
      }
    });
  });
  $(document).on('click', '#proceedToInfinite', function (e) {
    e.preventDefault();
    $.ajax({
      url: wpurl.ajax,
      method: 'POST',
      data: {
        action: 'get_cart_items'
      },
      success: function success(response) {
        var items = response.items.map(function (item) {
          return {
            id: item.id,
            name: item.name,
            price: Math.round(item.price * 100),
            // em centavos
            quantity: item.quantity
          };
        });
        localStorage.setItem('cartItems', JSON.stringify(items));
        var params = new URLSearchParams({
          items: JSON.stringify(items),
          redirect_url: 'https://marmota.devhouse.com.br/obrigado',
          customer_name: response.customer.name || '',
          customer_email: response.customer.email || '',
          customer_cellphone: response.customer.phone || ''
        });
        var url = "https://checkout.infinitepay.io/marcos-macedo-bfr?".concat(params.toString());

        // Redirecionar
        window.location.href = url;
      },
      error: function error(err) {
        console.error('Erro ao coletar dados:', err);
      }
    });
  });
  if (wpurl.isPage) {
    Swal.fire({
      title: 'Carregando pedido...',
      text: 'Estamos verificando os dados da sua compra',
      allowOutsideClick: false,
      didOpen: function didOpen() {
        Swal.showLoading();
      }
    });
    var urlParams = new URLSearchParams(window.location.search);
    var transaction_nsu = urlParams.get('order_nsu');
    if (!transaction_nsu) return;

    // Verificar se o pedido já existe via Ajax
    $.post(wpurl.ajax, {
      action: 'check_or_create_order',
      transaction_nsu: transaction_nsu,
      cart_items: localStorage.getItem('cart_items') || '[]' // já deve ter sido salvo antes
    }, function (response) {
      if (response.success) {
        console.log('Pedido criado ou já existente:', response.order_id);
        localStorage.removeItem('cart_items');
      } else {
        console.error('Erro ao criar/verificar pedido:', response.data);
      }
    });
    var transaction_id = new URLSearchParams(window.location.search).get('order_nsu');
    if (!transaction_id) return;
    var cartItems = [];
    for (var i = 0; i < localStorage.length; i++) {
      var key = localStorage.key(i);
      try {
        var item = JSON.parse(localStorage.getItem(key));
        if (item !== null && item !== void 0 && item.id && item !== null && item !== void 0 && item.quantity) {
          cartItems.push({
            id: item.id,
            quantity: item.quantity
          });
        }
      } catch (e) {
        console.warn('Erro ao ler item do localStorage:', e);
      }
    }
    $.ajax({
      url: wpurl.ajax,
      method: 'POST',
      data: {
        action: 'check_or_create_order',
        transaction_nsu: transaction_id,
        cart_items: JSON.stringify(cartItems)
      },
      success: function success(response) {
        if (!response.success) {
          console.error('Erro:', response.data);
          return;
        }
        var order = response.data;
        $('#order-id').text("#".concat(order.order_id));
        $('#customer-name').text(order.customer.name);
        $('#customer-email').text(order.customer.email);
        $('#customer-phone').text(order.customer.phone);
        $('#order-total').text(order.total);
        var $itemsList = $('#order-items');
        $itemsList.empty();
        order.items.forEach(function (item) {
          var $li = $('<li>').addClass('text-gray-700').text("".concat(item.quantity, "x ").concat(item.name, " - ").concat(item.total));
          $itemsList.append($li);
        });
        Swal.close();
        localStorage.clear();
      },
      error: function error(err) {
        console.error('Erro na requisição AJAX:', err);
      }
    });
  }
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/editor-style.css":
/*!****************************************!*\
  !*** ./resources/css/editor-style.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/editor-style": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktailpress"] = self["webpackChunktailpress"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/editor-style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;