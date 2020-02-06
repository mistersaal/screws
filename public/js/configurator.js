/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/components/configurator.js":
/*!*************************************************!*\
  !*** ./resources/js/components/configurator.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  setActive('manufacturer');
  $('.configurator-select').change(function () {
    var formId = $(this).attr('id');
    var $another_input = $('#another_' + formId);
    var $another = $another_input.closest('.field');

    if ($(this).val() === '0') {
      $another.removeClass('is-slim');

      if ($another_input.val().length === 0) {
        setActive(formId);
      }
    } else {
      $another.addClass('is-slim');

      if (forms.indexOf(formId) + 1 < forms.length) {
        setActive(forms[forms.indexOf(formId) + 1]);
      }
    }
  });
  $('.configurator-another').on('input', function () {
    var formId = $(this).attr('id');
    formId = formId.replace('another_', '');
    console.log(formId);

    if ($(this).val().length !== 0) {
      if (forms.indexOf(formId) + 1 < forms.length) {
        setActive(forms[forms.indexOf(formId) + 1]);
      }
    } else {
      setActive(formId);
    }
  });
});
var forms = ['manufacturer', 'type'];

function setActive(active) {
  var formsDisabled = [].concat(forms);
  var formsEnabled = [].concat(forms);
  formsDisabled = formsDisabled.slice(formsDisabled.indexOf(active) + 1);
  formsEnabled.splice(formsEnabled.indexOf(active) + 1);

  for (var i = 0; i < formsEnabled.length; i++) {
    $('#' + formsEnabled[i]).prop('disabled', false);
    $('#another_' + formsEnabled[i]).prop('disabled', false);
  }

  for (var _i = 0; _i < formsDisabled.length; _i++) {
    $('#' + formsDisabled[_i]).prop('disabled', true).val(-1).change();
    $('#another_' + formsDisabled[_i]).prop('disabled', true);
  }
}

/***/ }),

/***/ "./resources/js/configurator.js":
/*!**************************************!*\
  !*** ./resources/js/configurator.js ***!
  \**************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_configurator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/configurator */ "./resources/js/components/configurator.js");
/* harmony import */ var _components_configurator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_components_configurator__WEBPACK_IMPORTED_MODULE_0__);


/***/ }),

/***/ 1:
/*!********************************************!*\
  !*** multi ./resources/js/configurator.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\OSPanel\domains\screws\resources\js\configurator.js */"./resources/js/configurator.js");


/***/ })

/******/ });