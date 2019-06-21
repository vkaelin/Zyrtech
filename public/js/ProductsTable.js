(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/ProductsTable"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ProductsTable.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/ProductsTable.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ZyrtechForm__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ZyrtechForm */ "./resources/js/components/ZyrtechForm.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    'headers': Array,
    'allProducts': Object,
    'csrf': String
  },
  data: function data() {
    return {
      products: this.allProducts,
      form: new _ZyrtechForm__WEBPACK_IMPORTED_MODULE_0__["default"]({
        search: ''
      })
    };
  },
  filters: {
    capitalize: function capitalize(value) {
      if (!value) return '';
      value = value.toString();
      return value.charAt(0).toUpperCase() + value.slice(1);
    }
  },
  methods: {
    filterProducts: function filterProducts(value) {
      var _this = this;

      // Empty Search
      if (!value) {
        this.products = this.allProducts;
        return;
      }

      this.form.get('/api/findProduct?search=' + value).then(function (response) {
        _this.products = response.data;
      })["catch"](function (err) {});
    },
    getProductsPerPage: function getProductsPerPage() {
      var _this2 = this;

      this.form.get('/admin/products/?page=' + this.products.current_page).then(function (response) {
        _this2.products = response.data;
      })["catch"](function (err) {});
    },
    maxLength: function maxLength(text, length) {
      if (text.length > length) {
        return text.substring(0, length) + '...';
      } else {
        return text;
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ProductsTable.vue?vue&type=template&id=0fd55f6f&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/ProductsTable.vue?vue&type=template&id=0fd55f6f& ***!
  \****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "div",
        { staticClass: "mt-4 flex items-center justify-between flex-wrap" },
        [
          _c("search-dashboard", {
            staticClass: "mt-2",
            on: { searching: _vm.filterProducts }
          }),
          _vm._v(" "),
          _c(
            "a",
            {
              staticClass:
                "mt-2 bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400",
              attrs: { href: "/admin/products/create" }
            },
            [_vm._v("Ajouter un produit")]
          )
        ],
        1
      ),
      _vm._v(" "),
      _c("div", { staticClass: "mt-4 table-container" }, [
        _c("table", { staticClass: "table" }, [
          _c("thead", [
            _c(
              "tr",
              _vm._l(_vm.headers, function(title, index) {
                return _c(
                  "th",
                  {
                    key: "title-" + index,
                    staticClass:
                      "py-3 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white"
                  },
                  [_vm._v(_vm._s(title))]
                )
              }),
              0
            )
          ]),
          _vm._v(" "),
          _c(
            "tbody",
            _vm._l(_vm.products.data, function(product, index) {
              return _c(
                "tr",
                { key: "product-" + index },
                [
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [_vm._v(_vm._s(product.name))]
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [_vm._v(_vm._s(_vm.maxLength(product.description, 20)))]
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [
                      _c(
                        "div",
                        {
                          staticClass: "cursor-pointer",
                          on: {
                            click: function($event) {
                              return _vm.$modal.show("image-modal", {
                                imageUrl: "/storage/" + product["image_src"]
                              })
                            }
                          }
                        },
                        [
                          _c(
                            "svg",
                            {
                              staticClass: "w-6 h-auto inline",
                              attrs: { viewBox: "0 0 20 20" }
                            },
                            [
                              _c("path", {
                                attrs: {
                                  d:
                                    "M0 6c0-1.1.9-2 2-2h3l2-2h6l2 2h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm10 10a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                                }
                              })
                            ]
                          )
                        ]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [_vm._v(_vm._s(product.type.name))]
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [_vm._v(_vm._s(product.period.name))]
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    _vm._l(product.labels, function(label, index) {
                      return _c("span", { key: "label-" + index }, [
                        _vm._v(_vm._s(label.name) + ",")
                      ])
                    }),
                    0
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [
                      _c(
                        "div",
                        {
                          staticClass: "cursor-pointer",
                          on: {
                            click: function($event) {
                              return _vm.$modal.show("youtube-modal", {
                                videoId: product.id
                              })
                            }
                          }
                        },
                        [
                          _c(
                            "svg",
                            {
                              staticClass:
                                "w-6 h-auto inline text-red-700 fill-current",
                              attrs: {
                                viewBox: "0 0 90 90",
                                xmlns: "http://www.w3.org/2000/svg"
                              }
                            },
                            [
                              _c("path", {
                                attrs: {
                                  d:
                                    "M70.939 65.832H66l.023-2.869a2.329 2.329 0 0 1 2.326-2.318h.315a2.332 2.332 0 0 1 2.332 2.318l-.057 2.869zm-18.526-6.148c-1.253 0-2.278.842-2.278 1.873V75.51c0 1.029 1.025 1.869 2.278 1.869 1.258 0 2.284-.84 2.284-1.869V61.557c0-1.032-1.026-1.873-2.284-1.873zM82.5 51.879v26.544C82.5 84.79 76.979 90 70.23 90H19.771C13.02 90 7.5 84.79 7.5 78.423V51.879c0-6.367 5.52-11.578 12.271-11.578H70.23c6.749 0 12.27 5.211 12.27 11.578zM23.137 81.305l-.004-27.961 6.255.002v-4.143l-16.674-.025v4.073l5.205.015v28.039h5.218zm18.75-23.796h-5.215V72.44c0 2.16.131 3.24-.008 3.621-.424 1.158-2.33 2.388-3.073.125-.126-.396-.015-1.591-.017-3.643l-.021-15.034h-5.186l.016 14.798c.004 2.268-.051 3.959.018 4.729.127 1.357.082 2.939 1.341 3.843 2.346 1.69 6.843-.252 7.968-2.668l-.01 3.083 4.188.005-.001-23.79zM58.57 74.607l-.011-12.427c-.004-4.736-3.547-7.572-8.356-3.74l.021-9.239-5.209.008-.025 31.89 4.284-.062.39-1.986c5.473 5.021 8.914 1.58 8.906-4.444zm16.321-1.647l-3.91.021c-.002.155-.008.334-.01.529v2.182c0 1.168-.965 2.119-2.137 2.119h-.766c-1.174 0-2.139-.951-2.139-2.119v-5.739h8.954v-3.37c0-2.463-.063-4.925-.267-6.333-.641-4.454-6.893-5.161-10.051-2.881a5.887 5.887 0 0 0-2.188 2.945c-.444 1.281-.665 3.031-.665 5.254v7.41c.002 12.318 14.964 10.577 13.179-.018zM54.833 32.732a3.55 3.55 0 0 0 1.254 1.584c.56.394 1.276.592 2.134.592.752 0 1.418-.203 1.998-.622.578-.417 1.065-1.04 1.463-1.871l-.099 2.046h5.813V9.74H62.82v19.24a1.907 1.907 0 0 1-3.811 0V9.74h-4.776v16.674c0 2.124.039 3.54.102 4.258.065.713.229 1.397.498 2.06zM37.217 18.77c0-2.373.198-4.226.591-5.562.396-1.331 1.107-2.401 2.137-3.208 1.027-.811 2.342-1.217 3.941-1.217 1.345 0 2.497.264 3.459.781.967.52 1.713 1.195 2.23 2.028a8 8 0 0 1 1.076 2.574c.195.891.291 2.235.291 4.048v6.252c0 2.293-.092 3.98-.271 5.051a8.006 8.006 0 0 1-1.146 3.004c-.58.924-1.329 1.615-2.237 2.056-.918.445-1.968.663-3.154.663-1.325 0-2.441-.183-3.361-.565-.923-.38-1.636-.953-2.144-1.714-.513-.762-.874-1.69-1.092-2.772-.219-1.081-.323-2.707-.323-4.874l.003-6.545zm4.553 9.82c0 1.4 1.042 2.543 2.311 2.543 1.27 0 2.308-1.143 2.308-2.543V15.43c0-1.398-1.038-2.541-2.308-2.541-1.269 0-2.311 1.143-2.311 2.541v13.16zm-16.088 6.645h5.484l.006-18.96L37.652.033h-5.998l-3.445 12.064L24.715 0h-5.936l6.894 16.284.009 18.951z"
                                }
                              })
                            ]
                          )
                        ]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [_vm._v("pdf")]
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [
                      _c("div", { staticClass: "flex" }, [
                        _c(
                          "a",
                          {
                            staticClass: "inline-block btn-primary btn-sm",
                            attrs: {
                              href: "/admin/products/" + product.id + "/edit"
                            }
                          },
                          [_vm._v("Modifier")]
                        ),
                        _vm._v(" "),
                        _c(
                          "form",
                          {
                            staticClass: "inline-block",
                            attrs: {
                              method: "POST",
                              action: "/admin/products/" + product.id
                            }
                          },
                          [
                            _c("input", {
                              attrs: { type: "hidden", name: "_token" },
                              domProps: { value: _vm.csrf }
                            }),
                            _vm._v(" "),
                            _c("input", {
                              attrs: {
                                type: "hidden",
                                name: "_method",
                                value: "DELETE"
                              }
                            }),
                            _vm._v(" "),
                            _c(
                              "button",
                              {
                                staticClass: "ml-3 btn-danger btn-sm",
                                attrs: { type: "submit" }
                              },
                              [_vm._v("Supprimer")]
                            )
                          ]
                        )
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c("youtube-modal", {
                    attrs: { link: product["video_link"], id: product.id }
                  })
                ],
                1
              )
            }),
            0
          )
        ])
      ]),
      _vm._v(" "),
      _c("image-modal"),
      _vm._v(" "),
      _c("pagination", {
        attrs: { pagination: _vm.products, offset: 5 },
        on: { paginate: _vm.getProductsPerPage }
      })
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/components/ProductsTable.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/ProductsTable.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ProductsTable_vue_vue_type_template_id_0fd55f6f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ProductsTable.vue?vue&type=template&id=0fd55f6f& */ "./resources/js/components/ProductsTable.vue?vue&type=template&id=0fd55f6f&");
/* harmony import */ var _ProductsTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ProductsTable.vue?vue&type=script&lang=js& */ "./resources/js/components/ProductsTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ProductsTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ProductsTable_vue_vue_type_template_id_0fd55f6f___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ProductsTable_vue_vue_type_template_id_0fd55f6f___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/ProductsTable.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/ProductsTable.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/ProductsTable.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductsTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./ProductsTable.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ProductsTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductsTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/ProductsTable.vue?vue&type=template&id=0fd55f6f&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/ProductsTable.vue?vue&type=template&id=0fd55f6f& ***!
  \**********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductsTable_vue_vue_type_template_id_0fd55f6f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./ProductsTable.vue?vue&type=template&id=0fd55f6f& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ProductsTable.vue?vue&type=template&id=0fd55f6f&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductsTable_vue_vue_type_template_id_0fd55f6f___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductsTable_vue_vue_type_template_id_0fd55f6f___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/ZyrtechForm.js":
/*!************************************************!*\
  !*** ./resources/js/components/ZyrtechForm.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var ZyrtechForm =
/*#__PURE__*/
function () {
  function ZyrtechForm(data) {
    _classCallCheck(this, ZyrtechForm);

    this.originalData = JSON.parse(JSON.stringify(data));
    Object.assign(this, data);
    this.errors = {};
    this.submitted = false;
  }

  _createClass(ZyrtechForm, [{
    key: "data",
    value: function data() {
      var _this = this;

      return Object.keys(this.originalData).reduce(function (data, attribute) {
        data[attribute] = _this[attribute];
        return data;
      }, {});
    }
  }, {
    key: "get",
    value: function get(endpoint) {
      return axios.get(endpoint)["catch"](this.onFail.bind(this)).then(this.onSuccess.bind(this));
    }
  }, {
    key: "delete",
    value: function _delete(endpoint) {
      this.submit(endpoint, 'delete');
    }
  }, {
    key: "patch",
    value: function patch(endpoint) {
      this.submit(endpoint, 'patch');
    }
  }, {
    key: "post",
    value: function post(endpoint) {
      this.submit(endpoint);
    }
  }, {
    key: "submit",
    value: function submit(endpoint) {
      var requestType = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'post';
      return axios[requestType](endpoint, this.data())["catch"](this.onFail.bind(this)).then(this.onSuccess.bind(this));
    }
  }, {
    key: "onSuccess",
    value: function onSuccess(response) {
      this.submitted = true;
      this.errors = {};
      return response;
    }
  }, {
    key: "onFail",
    value: function onFail(error) {
      console.log(error);
      this.errors = error.response.data.errors;
      this.submitted = false;
      throw error;
    }
  }, {
    key: "reset",
    value: function reset() {
      Object.assign(this, this.originalData);
    }
  }]);

  return ZyrtechForm;
}();

/* harmony default export */ __webpack_exports__["default"] = (ZyrtechForm);

/***/ })

}]);