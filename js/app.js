/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

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


/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

function _regenerator() { /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/babel/babel/blob/main/packages/babel-helpers/LICENSE */ var e, t, r = "function" == typeof Symbol ? Symbol : {}, n = r.iterator || "@@iterator", o = r.toStringTag || "@@toStringTag"; function i(r, n, o, i) { var c = n && n.prototype instanceof Generator ? n : Generator, u = Object.create(c.prototype); return _regeneratorDefine2(u, "_invoke", function (r, n, o) { var i, c, u, f = 0, p = o || [], y = !1, G = { p: 0, n: 0, v: e, a: d, f: d.bind(e, 4), d: function d(t, r) { return i = t, c = 0, u = e, G.n = r, a; } }; function d(r, n) { for (c = r, u = n, t = 0; !y && f && !o && t < p.length; t++) { var o, i = p[t], d = G.p, l = i[2]; r > 3 ? (o = l === n) && (u = i[(c = i[4]) ? 5 : (c = 3, 3)], i[4] = i[5] = e) : i[0] <= d && ((o = r < 2 && d < i[1]) ? (c = 0, G.v = n, G.n = i[1]) : d < l && (o = r < 3 || i[0] > n || n > l) && (i[4] = r, i[5] = n, G.n = l, c = 0)); } if (o || r > 1) return a; throw y = !0, n; } return function (o, p, l) { if (f > 1) throw TypeError("Generator is already running"); for (y && 1 === p && d(p, l), c = p, u = l; (t = c < 2 ? e : u) || !y;) { i || (c ? c < 3 ? (c > 1 && (G.n = -1), d(c, u)) : G.n = u : G.v = u); try { if (f = 2, i) { if (c || (o = "next"), t = i[o]) { if (!(t = t.call(i, u))) throw TypeError("iterator result is not an object"); if (!t.done) return t; u = t.value, c < 2 && (c = 0); } else 1 === c && (t = i["return"]) && t.call(i), c < 2 && (u = TypeError("The iterator does not provide a '" + o + "' method"), c = 1); i = e; } else if ((t = (y = G.n < 0) ? u : r.call(n, G)) !== a) break; } catch (t) { i = e, c = 1, u = t; } finally { f = 1; } } return { value: t, done: y }; }; }(r, o, i), !0), u; } var a = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} t = Object.getPrototypeOf; var c = [][n] ? t(t([][n]())) : (_regeneratorDefine2(t = {}, n, function () { return this; }), t), u = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(c); function f(e) { return Object.setPrototypeOf ? Object.setPrototypeOf(e, GeneratorFunctionPrototype) : (e.__proto__ = GeneratorFunctionPrototype, _regeneratorDefine2(e, o, "GeneratorFunction")), e.prototype = Object.create(u), e; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, _regeneratorDefine2(u, "constructor", GeneratorFunctionPrototype), _regeneratorDefine2(GeneratorFunctionPrototype, "constructor", GeneratorFunction), GeneratorFunction.displayName = "GeneratorFunction", _regeneratorDefine2(GeneratorFunctionPrototype, o, "GeneratorFunction"), _regeneratorDefine2(u), _regeneratorDefine2(u, o, "Generator"), _regeneratorDefine2(u, n, function () { return this; }), _regeneratorDefine2(u, "toString", function () { return "[object Generator]"; }), (_regenerator = function _regenerator() { return { w: i, m: f }; })(); }
function _regeneratorDefine2(e, r, n, t) { var i = Object.defineProperty; try { i({}, "", {}); } catch (e) { i = 0; } _regeneratorDefine2 = function _regeneratorDefine(e, r, n, t) { function o(r, n) { _regeneratorDefine2(e, r, function (e) { return this._invoke(r, n, e); }); } r ? i ? i(e, r, { value: n, enumerable: !t, configurable: !t, writable: !t }) : e[r] = n : (o("next", 0), o("throw", 1), o("return", 2)); }, _regeneratorDefine2(e, r, n, t); }
function asyncGeneratorStep(n, t, e, r, o, a, c) { try { var i = n[a](c), u = i.value; } catch (n) { return void e(n); } i.done ? t(u) : Promise.resolve(u).then(r, o); }
function _asyncToGenerator(n) { return function () { var t = this, e = arguments; return new Promise(function (r, o) { var a = n.apply(t, e); function _next(n) { asyncGeneratorStep(a, r, o, _next, _throw, "next", n); } function _throw(n) { asyncGeneratorStep(a, r, o, _next, _throw, "throw", n); } _next(void 0); }); }; }
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
  function getCartItems(_x) {
    return _getCartItems.apply(this, arguments);
  }
  function _getCartItems() {
    _getCartItems = _asyncToGenerator(/*#__PURE__*/_regenerator().m(function _callee2(isCart) {
      return _regenerator().w(function (_context2) {
        while (1) switch (_context2.n) {
          case 0:
            return _context2.a(2, new Promise(function (resolve, reject) {
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
                  if (isCart) {
                    var url = "https://checkout.infinitepay.io/aline_laranjo?".concat(params.toString());
                    window.location.href = url;
                    resolve(); // nada a retornar
                  } else {
                    resolve(items); // retorna os itens
                  }
                },
                error: function error(err) {
                  console.error('Erro ao coletar dados:', err);
                  reject(err);
                }
              });
            }));
        }
      }, _callee2);
    }));
    return _getCartItems.apply(this, arguments);
  }
  $(document).on('click', '#proceedToInfinite', function (e) {
    e.preventDefault();
    getCartItems(true);
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
    var transaction_id = new URLSearchParams(window.location.search).get('order_nsu');
    if (!transaction_id) return;
    _asyncToGenerator(/*#__PURE__*/_regenerator().m(function _callee() {
      var cartItems, _t;
      return _regenerator().w(function (_context) {
        while (1) switch (_context.p = _context.n) {
          case 0:
            _context.p = 0;
            _context.n = 1;
            return getCartItems(false);
          case 1:
            cartItems = _context.v;
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
                  Swal.fire('Erro', response.data || 'Erro ao processar o pedido.', 'error');
                  return;
                }
                var order = response.data;
                $('#order-id').html("#".concat(order.order_id));
                $('#customer-name').html(order.customer.name);
                $('#customer-email').html(order.customer.email);
                $('#customer-phone').html(order.customer.phone);
                $('#order-total').html(order.total);
                var $itemsList = $('#order-items');
                $itemsList.empty();
                order.items.forEach(function (item) {
                  var $li = $('<li>').addClass('text-gray-700').html("".concat(item.quantity, "x ").concat(item.name, " - ").concat(item.total));
                  $itemsList.append($li);
                });
                Swal.close();
                localStorage.clear();
              },
              error: function error(err) {
                console.error('Erro na requisição AJAX:', err);
                Swal.fire('Erro', 'Erro na comunicação com o servidor.', 'error');
              }
            });
            _context.n = 3;
            break;
          case 2:
            _context.p = 2;
            _t = _context.v;
            console.error('Erro ao obter itens do carrinho:', _t);
            Swal.fire('Erro', 'Não foi possível recuperar os itens do carrinho.', 'error');
          case 3:
            return _context.a(2);
        }
      }, _callee, null, [[0, 2]]);
    }))();
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