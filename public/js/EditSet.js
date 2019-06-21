<<<<<<< Updated upstream
(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{"18k5":function(t,e,s){"use strict";function r(t,e){for(var s=0;s<e.length;s++){var r=e[s];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}var i=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.originalData=JSON.parse(JSON.stringify(e)),Object.assign(this,e),this.errors={},this.submitted=!1}var e,s,i;return e=t,(s=[{key:"data",value:function(){var t=this;return Object.keys(this.originalData).reduce(function(e,s){return e[s]=t[s],e},{})}},{key:"get",value:function(t){return axios.get(t).catch(this.onFail.bind(this)).then(this.onSuccess.bind(this))}},{key:"delete",value:function(t){this.submit(t,"delete")}},{key:"patch",value:function(t){this.submit(t,"patch")}},{key:"post",value:function(t){this.submit(t)}},{key:"submit",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"post";return axios[e](t,this.data()).catch(this.onFail.bind(this)).then(this.onSuccess.bind(this))}},{key:"onSuccess",value:function(t){return this.submitted=!0,this.errors={},t}},{key:"onFail",value:function(t){throw console.log(t),this.errors=t.response.data.errors,this.submitted=!1,t}},{key:"reset",value:function(){Object.assign(this,this.originalData)}}])&&r(e.prototype,s),i&&r(e,i),t}();e.a=i},"KHd+":function(t,e,s){"use strict";function r(t,e,s,r,i,n,o,a){var c,u="function"==typeof t?t.options:t;if(e&&(u.render=e,u.staticRenderFns=s,u._compiled=!0),r&&(u.functional=!0),n&&(u._scopeId="data-v-"+n),o?(c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),i&&i.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(o)},u._ssrRegister=c):i&&(c=a?function(){i.call(this,this.$root.$options.shadowRoot)}:i),c)if(u.functional){u._injectStyles=c;var l=u.render;u.render=function(t,e){return c.call(e),l(t,e)}}else{var d=u.beforeCreate;u.beforeCreate=d?[].concat(d,c):[c]}return{exports:t,options:u}}s.d(e,"a",function(){return r})},KqqD:function(t,e,s){"use strict";s.r(e);var r=s("18k5"),i={props:{set:Object,"selected-products":Array,chefs:Array,products:Array},data:function(){return{form:new r.a({chef:this.set.chef.id,products:this.selectedProducts})}},methods:{addProduct:function(t){this.form.products.push(this.products.find(function(e){return e.id===t}))},removeProduct:function(t){this.form.products=this.form.products.filter(function(e){return e.id!==t})},submit:function(){if(0===this.form.products.length)return this.form.errors={},void(this.form.errors.products="Le Set doit contenir au moins un produit.");var t=this.set.id;this.form.submit("/dashboard/sets/".concat(t),"patch").then(function(t){return location=t.data.message}).catch(function(t){})}}},n=s("KHd+"),o=Object(n.a)(i,function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"mt-6 max-w-xl bg-white rounded shadow p-8"},[s("form",{attrs:{method:"POST"},on:{submit:function(e){return e.preventDefault(),t.submit(e)}}},[s("label",{staticClass:"block"},[s("span",{staticClass:"font-semibold"},[t._v("Chef / Groupe")]),t._v(" "),s("select",{directives:[{name:"model",rawName:"v-model",value:t.form.chef,expression:"form.chef"}],staticClass:"form-select block w-full mt-1 border-gray-400",attrs:{name:"chef"},on:{change:function(e){var s=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){return"_value"in t?t._value:t.value});t.$set(t.form,"chef",e.target.multiple?s:s[0])}}},t._l(t.chefs,function(e){return s("option",{key:e.id,domProps:{value:e.id,selected:e.id===t.set.chef.id}},[t._v(t._s(e.first_name)+" "+t._s(e.last_name))])}),0)]),t._v(" "),s("div",{staticClass:"mt-6"},[s("h3",{staticClass:"font-semibold mb-3"},[t._v("Produits actuellement dans le Set")]),t._v(" "),t._l(t.form.products,function(e){return s("div",{key:"selected-"+e.id,staticClass:"inline-block",on:{click:function(s){return t.removeProduct(e.id)}}},[s("div",{staticClass:"group label-edit bg-green-500 hover:bg-red-500"},[s("span",[t._v(t._s(e.name))]),t._v(" "),s("span",{staticClass:"ml-2 opacity-0 group-hover:opacity-100"},[s("svg",{staticClass:"fill-current w-2",attrs:{viewBox:"0 0 20 20"}},[s("path",{attrs:{d:"M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"}})])])])])})],2),t._v(" "),s("div",{staticClass:"mt-6"},[s("h3",{staticClass:"font-semibold mb-3"},[t._v("Autres Produits")]),t._v(" "),t._l(t.products,function(e){return s("div",{key:e.id,staticClass:"inline-block",on:{click:function(s){return t.addProduct(e.id)}}},[t.form.products.some(function(t){return t.id===e.id})?t._e():s("div",{staticClass:"group label-edit bg-red-500 hover:bg-green-500"},[s("span",[t._v(t._s(e.name))]),t._v(" "),s("span",{staticClass:"ml-2 opacity-0 group-hover:opacity-100"},[s("svg",{staticClass:"fill-current w-2",attrs:{viewBox:"0 0 20 20"}},[s("path",{attrs:{d:"M0 11l2-2 5 5L18 3l2 2L7 18z"}})])])])])})],2),t._v(" "),t.form.errors.products?s("span",{staticClass:"mt-2 text-xs text-red-600 italic"},[t._v(t._s(t.form.errors.products))]):t._e(),t._v(" "),s("button",{staticClass:"mt-8 ml-auto block btn-primary",attrs:{type:"submit"}},[t._v("Valider les modifications")])])])},[],!1,null,null,null);e.default=o.exports}}]);
=======
(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/EditSet"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/EditSet.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/EditSet.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************/
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

/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    'set': Object,
    'selected-products': Array,
    'chefs': Array,
    'products': Array
  },
  data: function data() {
    return {
      form: new _ZyrtechForm__WEBPACK_IMPORTED_MODULE_0__["default"]({
        chef: this.set.chef.id,
        products: this.selectedProducts
      })
    };
  },
  methods: {
    addProduct: function addProduct(id) {
      this.form.products.push(this.products.find(function (item) {
        return item.id === id;
      }));
    },
    removeProduct: function removeProduct(id) {
      this.form.products = this.form.products.filter(function (item) {
        return item.id !== id;
      });
    },
    submit: function submit() {
      var setId = this.set.id;
      this.form.submit("/dashboard/sets/".concat(setId), 'patch').then(function (response) {
        return location = response.data.message;
      })["catch"](function (err) {});
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/EditSet.vue?vue&type=template&id=83e9e146&":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/EditSet.vue?vue&type=template&id=83e9e146& ***!
  \**********************************************************************************************************************************************************************************************************/
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
    { staticClass: "mt-6 max-w-xl bg-white rounded shadow p-8" },
    [
      _c(
        "form",
        {
          attrs: { method: "POST" },
          on: {
            submit: function($event) {
              $event.preventDefault()
              return _vm.submit($event)
            }
          }
        },
        [
          _c("label", { staticClass: "block" }, [
            _c("span", { staticClass: "font-semibold" }, [
              _vm._v("Chef / Groupe")
            ]),
            _vm._v(" "),
            _c(
              "select",
              {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.form.chef,
                    expression: "form.chef"
                  }
                ],
                staticClass: "form-select block w-full mt-1 border-gray-400",
                attrs: { name: "chef" },
                on: {
                  change: function($event) {
                    var $$selectedVal = Array.prototype.filter
                      .call($event.target.options, function(o) {
                        return o.selected
                      })
                      .map(function(o) {
                        var val = "_value" in o ? o._value : o.value
                        return val
                      })
                    _vm.$set(
                      _vm.form,
                      "chef",
                      $event.target.multiple ? $$selectedVal : $$selectedVal[0]
                    )
                  }
                }
              },
              _vm._l(_vm.chefs, function(chef) {
                return _c(
                  "option",
                  {
                    key: chef.id,
                    domProps: {
                      value: chef.id,
                      selected: chef.id === _vm.set.chef.id
                    }
                  },
                  [
                    _vm._v(
                      "\n              " +
                        _vm._s(chef.first_name) +
                        " " +
                        _vm._s(chef.last_name) +
                        "\n            "
                    )
                  ]
                )
              }),
              0
            )
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "mt-6" },
            [
              _c("h3", { staticClass: "font-semibold mb-3" }, [
                _vm._v("Produits actuellement dans le Set")
              ]),
              _vm._v(" "),
              _vm._l(_vm.form.products, function(product) {
                return _c(
                  "div",
                  {
                    key: "selected-" + product.id,
                    staticClass: "inline-block",
                    on: {
                      click: function($event) {
                        return _vm.removeProduct(product.id)
                      }
                    }
                  },
                  [
                    _c(
                      "div",
                      {
                        staticClass:
                          "group label-edit bg-green-500 hover:bg-red-500"
                      },
                      [
                        _c("span", [_vm._v(_vm._s(product.name))]),
                        _vm._v(" "),
                        _c(
                          "span",
                          {
                            staticClass:
                              "ml-2 opacity-0 group-hover:opacity-100"
                          },
                          [
                            _c(
                              "svg",
                              {
                                staticClass: "fill-current w-2",
                                attrs: { viewBox: "0 0 20 20" }
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    d:
                                      "M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"
                                  }
                                })
                              ]
                            )
                          ]
                        )
                      ]
                    )
                  ]
                )
              })
            ],
            2
          ),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "mt-6" },
            [
              _c("h3", { staticClass: "font-semibold mb-3" }, [
                _vm._v("Autres Produits")
              ]),
              _vm._v(" "),
              _vm._l(_vm.products, function(product) {
                return _c(
                  "div",
                  {
                    key: product.id,
                    staticClass: "inline-block",
                    on: {
                      click: function($event) {
                        return _vm.addProduct(product.id)
                      }
                    }
                  },
                  [
                    !_vm.form.products.some(function(c) {
                      return c.id === product.id
                    })
                      ? _c(
                          "div",
                          {
                            staticClass:
                              "group label-edit bg-red-500 hover:bg-green-500"
                          },
                          [
                            _c("span", [_vm._v(_vm._s(product.name))]),
                            _vm._v(" "),
                            _c(
                              "span",
                              {
                                staticClass:
                                  "ml-2 opacity-0 group-hover:opacity-100"
                              },
                              [
                                _c(
                                  "svg",
                                  {
                                    staticClass: "fill-current w-2",
                                    attrs: { viewBox: "0 0 20 20" }
                                  },
                                  [
                                    _c("path", {
                                      attrs: {
                                        d: "M0 11l2-2 5 5L18 3l2 2L7 18z"
                                      }
                                    })
                                  ]
                                )
                              ]
                            )
                          ]
                        )
                      : _vm._e()
                  ]
                )
              })
            ],
            2
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "mt-8 ml-auto block btn-primary",
              attrs: { type: "submit" }
            },
            [_vm._v("Valider les modifications")]
          )
        ]
      )
    ]
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

/***/ "./resources/js/components/EditSet.vue":
/*!*********************************************!*\
  !*** ./resources/js/components/EditSet.vue ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _EditSet_vue_vue_type_template_id_83e9e146___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./EditSet.vue?vue&type=template&id=83e9e146& */ "./resources/js/components/EditSet.vue?vue&type=template&id=83e9e146&");
/* harmony import */ var _EditSet_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./EditSet.vue?vue&type=script&lang=js& */ "./resources/js/components/EditSet.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _EditSet_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _EditSet_vue_vue_type_template_id_83e9e146___WEBPACK_IMPORTED_MODULE_0__["render"],
  _EditSet_vue_vue_type_template_id_83e9e146___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/EditSet.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/EditSet.vue?vue&type=script&lang=js&":
/*!**********************************************************************!*\
  !*** ./resources/js/components/EditSet.vue?vue&type=script&lang=js& ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EditSet_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./EditSet.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/EditSet.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EditSet_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/EditSet.vue?vue&type=template&id=83e9e146&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/EditSet.vue?vue&type=template&id=83e9e146& ***!
  \****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditSet_vue_vue_type_template_id_83e9e146___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./EditSet.vue?vue&type=template&id=83e9e146& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/EditSet.vue?vue&type=template&id=83e9e146&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditSet_vue_vue_type_template_id_83e9e146___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditSet_vue_vue_type_template_id_83e9e146___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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
>>>>>>> Stashed changes
