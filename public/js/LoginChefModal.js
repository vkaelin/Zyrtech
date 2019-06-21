<<<<<<< Updated upstream
(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{"18k5":function(t,e,n){"use strict";function o(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}var s=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.originalData=JSON.parse(JSON.stringify(e)),Object.assign(this,e),this.errors={},this.submitted=!1}var e,n,s;return e=t,(n=[{key:"data",value:function(){var t=this;return Object.keys(this.originalData).reduce(function(e,n){return e[n]=t[n],e},{})}},{key:"get",value:function(t){return axios.get(t).catch(this.onFail.bind(this)).then(this.onSuccess.bind(this))}},{key:"delete",value:function(t){this.submit(t,"delete")}},{key:"patch",value:function(t){this.submit(t,"patch")}},{key:"post",value:function(t){this.submit(t)}},{key:"submit",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"post";return axios[e](t,this.data()).catch(this.onFail.bind(this)).then(this.onSuccess.bind(this))}},{key:"onSuccess",value:function(t){return this.submitted=!0,this.errors={},t}},{key:"onFail",value:function(t){throw console.log(t),this.errors=t.response.data.errors,this.submitted=!1,t}},{key:"reset",value:function(){Object.assign(this,this.originalData)}}])&&o(e.prototype,n),s&&o(e,s),t}();e.a=s},"KHd+":function(t,e,n){"use strict";function o(t,e,n,o,s,i,r,a){var c,u="function"==typeof t?t.options:t;if(e&&(u.render=e,u.staticRenderFns=n,u._compiled=!0),o&&(u.functional=!0),i&&(u._scopeId="data-v-"+i),r?(c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),s&&s.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(r)},u._ssrRegister=c):s&&(c=a?function(){s.call(this,this.$root.$options.shadowRoot)}:s),c)if(u.functional){u._injectStyles=c;var l=u.render;u.render=function(t,e){return c.call(e),l(t,e)}}else{var d=u.beforeCreate;u.beforeCreate=d?[].concat(d,c):[c]}return{exports:t,options:u}}n.d(e,"a",function(){return o})},KJnT:function(t,e,n){"use strict";n.r(e);var o=n("18k5"),s={data:function(){return{form:new o.a({code:""})}},methods:{submit:function(){this.form.submit("/api/loginChef").then(function(t){return location=t.data.message}).catch(function(t){})}}},i=n("KHd+"),r=Object(i.a)(s,function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("modal",{attrs:{name:"login-chef",classes:"md-w-600 p-10 bg-white rounded-lg",width:"90%",height:"auto"}},[n("h1",{staticClass:"text-2xl font-bold mb-16 text-center"},[t._v("Entrez votre code")]),t._v(" "),n("form",{attrs:{method:"POST"},on:{submit:function(e){return e.preventDefault(),t.submit(e)}}},[n("label",{staticClass:"block mb-4"},[n("span",{staticClass:"text-gray-700"},[t._v("Code")]),t._v(" "),n("input",{directives:[{name:"model",rawName:"v-model",value:t.form.code,expression:"form.code"}],staticClass:"form-input mt-1 block w-full",class:t.form.errors.code?"border-red-600":"",attrs:{type:"text",placeholder:"Ex. 78FH9EF9FB"},domProps:{value:t.form.code},on:{input:function(e){e.target.composing||t.$set(t.form,"code",e.target.value)}}})]),t._v(" "),t.form.errors.code?n("span",{staticClass:"text-red-600 italic"},[t._v(t._s(t.form.errors.code))]):t._e(),t._v(" "),n("footer",{staticClass:"flex justify-end"},[n("button",{staticClass:"bg-gray-300 px-4 py-2 rounded font-bold mr-4",attrs:{type:"button"},on:{click:function(e){return t.$modal.hide("login-chef")}}},[t._v("Annuler")]),t._v(" "),n("button",{staticClass:"btn-primary font-bold",attrs:{type:"submit"}},[t._v("Connexion")])])])])},[],!1,null,null,null);e.default=r.exports}}]);
=======
(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/LoginChefModal"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/LoginChefModal.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/LoginChefModal.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************/
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      form: new _ZyrtechForm__WEBPACK_IMPORTED_MODULE_0__["default"]({
        code: ''
      })
    };
  },
  methods: {
    submit: function submit() {
      this.form.submit('/login/chefs/').then(function (response) {
        return location = response.data.message;
      })["catch"](function (err) {});
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/LoginChefModal.vue?vue&type=template&id=50890549&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/LoginChefModal.vue?vue&type=template&id=50890549& ***!
  \*****************************************************************************************************************************************************************************************************************/
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
    "modal",
    {
      attrs: {
        name: "login-chef",
        classes: "md-w-600 p-10 bg-white rounded-lg",
        width: "90%",
        height: "auto"
      }
    },
    [
      _c("h1", { staticClass: "text-2xl font-bold mb-16 text-center" }, [
        _vm._v("Entrez votre code")
      ]),
      _vm._v(" "),
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
          _c("label", { staticClass: "block mb-4" }, [
            _c("span", { staticClass: "text-gray-700" }, [_vm._v("Code")]),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.form.code,
                  expression: "form.code"
                }
              ],
              staticClass: "form-input mt-1 block w-full",
              class: _vm.form.errors.code ? "border-red-600" : "",
              attrs: { type: "text", placeholder: "Ex. 78FH9EF9FB" },
              domProps: { value: _vm.form.code },
              on: {
                input: function($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.form, "code", $event.target.value)
                }
              }
            })
          ]),
          _vm._v(" "),
          _vm.form.errors.code
            ? _c("span", { staticClass: "text-red-600 italic" }, [
                _vm._v(_vm._s(_vm.form.errors.code))
              ])
            : _vm._e(),
          _vm._v(" "),
          _c("footer", { staticClass: "flex justify-end" }, [
            _c(
              "button",
              {
                staticClass: "bg-gray-300 px-4 py-2 rounded font-bold mr-4",
                attrs: { type: "button" },
                on: {
                  click: function($event) {
                    return _vm.$modal.hide("login-chef")
                  }
                }
              },
              [_vm._v("Annuler")]
            ),
            _vm._v(" "),
            _c(
              "button",
              {
                staticClass: "btn-primary font-bold",
                attrs: { type: "submit" }
              },
              [_vm._v("Connexion")]
            )
          ])
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

/***/ "./resources/js/components/LoginChefModal.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/LoginChefModal.vue ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _LoginChefModal_vue_vue_type_template_id_50890549___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./LoginChefModal.vue?vue&type=template&id=50890549& */ "./resources/js/components/LoginChefModal.vue?vue&type=template&id=50890549&");
/* harmony import */ var _LoginChefModal_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./LoginChefModal.vue?vue&type=script&lang=js& */ "./resources/js/components/LoginChefModal.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _LoginChefModal_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _LoginChefModal_vue_vue_type_template_id_50890549___WEBPACK_IMPORTED_MODULE_0__["render"],
  _LoginChefModal_vue_vue_type_template_id_50890549___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/LoginChefModal.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/LoginChefModal.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/LoginChefModal.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_LoginChefModal_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./LoginChefModal.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/LoginChefModal.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_LoginChefModal_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/LoginChefModal.vue?vue&type=template&id=50890549&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/LoginChefModal.vue?vue&type=template&id=50890549& ***!
  \***********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_LoginChefModal_vue_vue_type_template_id_50890549___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./LoginChefModal.vue?vue&type=template&id=50890549& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/LoginChefModal.vue?vue&type=template&id=50890549&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_LoginChefModal_vue_vue_type_template_id_50890549___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_LoginChefModal_vue_vue_type_template_id_50890549___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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
