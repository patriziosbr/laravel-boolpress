(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["about"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Blog.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/Blog.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
!(function webpackMissingModule() { var e = new Error("Cannot find module '../js/components/Card'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
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
  name: 'Blog',
  components: {
    Card: !(function webpackMissingModule() { var e = new Error("Cannot find module '../js/components/Card'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())
  },
  data: function data() {
    return {
      posts: [],
      currentPage: 1,
      lastPage: 1
    };
  },
  methods: {
    truncateTxt: function truncateTxt(text, len) {
      if (text.length > len) {
        return text.substring(0, len) + '...';
      } else {
        return text;
      }
    },
    callApi: function callApi() {
      var _this = this;

      var page = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 1;
      axios.get("http://localhost:8000/api/posts?page=".concat(page)).then(function (res) {
        console.log(res.data);
        _this.posts = res.data.data;
        _this.currentPage = res.data.current_page;
        _this.lastPage = res.data.last_page;

        _this.posts.forEach(function (ele) {
          console.log(ele);
          ele.extract = _this.truncateTxt(ele.content, 150);
        });
      })["catch"](function (err) {
        console.log(err);
      });
    }
  },
  mounted: function mounted() {
    this.callApi(this.currentPage = 1);
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Blog.vue?vue&type=template&id=c8ad8caa&":
/*!**************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/Blog.vue?vue&type=template&id=c8ad8caa& ***!
  \**************************************************************************************************************************************************************************************************/
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
      _c("div", { staticClass: "main-box container" }, [
        _c(
          "div",
          { staticClass: "row" },
          _vm._l(_vm.posts, function(post) {
            return _c("Card", {
              key: post.id,
              staticClass: "col-4 d-flex justify-content-center",
              attrs: { item: post }
            })
          }),
          1
        ),
        _vm._v(" "),
        _c("div", { staticClass: "row " }, [
          _c(
            "div",
            { staticClass: "col-12 text-center" },
            [
              _c(
                "button",
                {
                  directives: [
                    {
                      name: "show",
                      rawName: "v-show",
                      value: _vm.currentPage > 1,
                      expression: "(currentPage > 1)"
                    }
                  ],
                  staticClass: "btn btn-info m-3",
                  on: {
                    click: function($event) {
                      return _vm.callApi(_vm.currentPage - 1)
                    }
                  }
                },
                [_vm._v("Prev")]
              ),
              _vm._v(" "),
              _vm._l(_vm.lastPage, function(n) {
                return _c(
                  "button",
                  {
                    key: n,
                    staticClass: "mx-2",
                    class:
                      n == _vm.currentPage ? "btn btn-info" : "btn btn-light",
                    on: {
                      click: function($event) {
                        return _vm.callApi((_vm.currentPage = n))
                      }
                    }
                  },
                  [_vm._v(_vm._s(n))]
                )
              }),
              _vm._v(" "),
              _c(
                "button",
                {
                  directives: [
                    {
                      name: "show",
                      rawName: "v-show",
                      value: _vm.currentPage < _vm.lastPage,
                      expression: "(currentPage < lastPage)"
                    }
                  ],
                  staticClass: "btn btn-info m-3",
                  on: {
                    click: function($event) {
                      return _vm.callApi(_vm.currentPage + 1)
                    }
                  }
                },
                [_vm._v("Next")]
              )
            ],
            2
          )
        ])
      ]),
      _vm._v(" "),
      _c("Footer")
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/pages/Blog.vue":
/*!*************************************!*\
  !*** ./resources/js/pages/Blog.vue ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Blog_vue_vue_type_template_id_c8ad8caa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Blog.vue?vue&type=template&id=c8ad8caa& */ "./resources/js/pages/Blog.vue?vue&type=template&id=c8ad8caa&");
/* harmony import */ var _Blog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Blog.vue?vue&type=script&lang=js& */ "./resources/js/pages/Blog.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Blog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Blog_vue_vue_type_template_id_c8ad8caa___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Blog_vue_vue_type_template_id_c8ad8caa___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/Blog.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/pages/Blog.vue?vue&type=script&lang=js&":
/*!**************************************************************!*\
  !*** ./resources/js/pages/Blog.vue?vue&type=script&lang=js& ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Blog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Blog.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Blog.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Blog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/Blog.vue?vue&type=template&id=c8ad8caa&":
/*!********************************************************************!*\
  !*** ./resources/js/pages/Blog.vue?vue&type=template&id=c8ad8caa& ***!
  \********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Blog_vue_vue_type_template_id_c8ad8caa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Blog.vue?vue&type=template&id=c8ad8caa& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Blog.vue?vue&type=template&id=c8ad8caa&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Blog_vue_vue_type_template_id_c8ad8caa___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Blog_vue_vue_type_template_id_c8ad8caa___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);