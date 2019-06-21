(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/ChefsTable"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ChefsTable.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/ChefsTable.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
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

/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    'headers': Array,
    'allChefs': Object,
    'csrf': String
  },
  data: function data() {
    return {
      chefs: this.allChefs,
      form: new _ZyrtechForm__WEBPACK_IMPORTED_MODULE_0__["default"]({
        search: ''
      })
    };
  },
  methods: {
    filterChefs: function filterChefs(value) {
      var _this = this;

      // Empty Search
      if (!value) {
        this.chefs = this.allChefs;
        return;
      }

      this.form.get('/api/findChef?search=' + value).then(function (response) {
        _this.chefs = response.data;
      })["catch"](function (err) {});
    },
    getChefsPerPage: function getChefsPerPage() {
      var _this2 = this;

      this.form.get('/dashboard/chefs/?page=' + this.chefs.current_page).then(function (response) {
        _this2.chefs = response.data;
      })["catch"](function (err) {});
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ChefsTable.vue?vue&type=template&id=387f52e8&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/ChefsTable.vue?vue&type=template&id=387f52e8& ***!
  \*************************************************************************************************************************************************************************************************************/
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
        { staticClass: " mt-4 flex items-center justify-between flex-wrap" },
        [
          _c("search-dashboard", {
            staticClass: "mt-2",
            on: { searching: _vm.filterChefs }
          }),
          _vm._v(" "),
          _c(
            "a",
            {
              staticClass:
                "mt-2 bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400",
              attrs: { href: "/dashboard/chefs/create" }
            },
            [_vm._v("Ajouter un chef")]
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
                  [
                    _vm._v(
                      "\n                        " +
                        _vm._s(title) +
                        "\n                    "
                    )
                  ]
                )
              }),
              0
            )
          ]),
          _vm._v(" "),
          _c(
            "tbody",
            [
              !_vm.chefs.data.length
                ? _c("tr", { staticClass: "hover:bg-gray-300" }, [
                    _c(
                      "td",
                      { staticClass: "py-3 px-6", attrs: { colspan: "3" } },
                      [_vm._v("Vous n'avez pas de chefs.")]
                    )
                  ])
                : _vm._e(),
              _vm._v(" "),
              _vm._l(_vm.chefs.data, function(chef, index) {
                return _c("tr", { key: "chef-" + index }, [
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [
                      chef.group
                        ? _c(
                            "svg",
                            {
                              staticClass: "fill-current w-4",
                              attrs: { viewBox: "0 0 20 20" }
                            },
                            [
                              _c("path", {
                                attrs: {
                                  d:
                                    "M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z"
                                }
                              })
                            ]
                          )
                        : _c(
                            "svg",
                            {
                              staticClass: "fill-current w-4",
                              attrs: { viewBox: "0 0 20 20" }
                            },
                            [
                              _c("path", {
                                attrs: {
                                  d:
                                    "M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"
                                }
                              })
                            ]
                          )
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "py-3 px-6 border-b border-gray-200" },
                    [
                      _vm._v(
                        "\n                        " +
                          _vm._s(chef["first_name"]) +
                          " " +
                          _vm._s(chef["last_name"]) +
                          "\n                    "
                      )
                    ]
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
                              href: "/dashboard/chefs/" + chef.id + "/edit"
                            }
                          },
                          [
                            _vm._v(
                              "\n                                Modifier\n                            "
                            )
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "form",
                          {
                            staticClass: "inline-block",
                            attrs: {
                              method: "POST",
                              action: "/dashboard/chefs/" + chef.id
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
                              [
                                _vm._v(
                                  "\n                                    Supprimer\n                                "
                                )
                              ]
                            )
                          ]
                        )
                      ])
                    ]
                  )
                ])
              })
            ],
            2
          )
        ])
      ]),
      _vm._v(" "),
      _c("pagination", {
        attrs: { pagination: _vm.chefs, offset: 5 },
        on: { paginate: _vm.getChefsPerPage }
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

/***/ "./resources/js/components/ChefsTable.vue":
/*!************************************************!*\
  !*** ./resources/js/components/ChefsTable.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ChefsTable_vue_vue_type_template_id_387f52e8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ChefsTable.vue?vue&type=template&id=387f52e8& */ "./resources/js/components/ChefsTable.vue?vue&type=template&id=387f52e8&");
/* harmony import */ var _ChefsTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ChefsTable.vue?vue&type=script&lang=js& */ "./resources/js/components/ChefsTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ChefsTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ChefsTable_vue_vue_type_template_id_387f52e8___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ChefsTable_vue_vue_type_template_id_387f52e8___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/ChefsTable.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/ChefsTable.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/ChefsTable.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ChefsTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./ChefsTable.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ChefsTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ChefsTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/ChefsTable.vue?vue&type=template&id=387f52e8&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/ChefsTable.vue?vue&type=template&id=387f52e8& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ChefsTable_vue_vue_type_template_id_387f52e8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./ChefsTable.vue?vue&type=template&id=387f52e8& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ChefsTable.vue?vue&type=template&id=387f52e8&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ChefsTable_vue_vue_type_template_id_387f52e8___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ChefsTable_vue_vue_type_template_id_387f52e8___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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