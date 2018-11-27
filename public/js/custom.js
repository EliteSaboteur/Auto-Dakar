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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 45);
/******/ })
/************************************************************************/
/******/ ({

/***/ 45:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(46);


/***/ }),

/***/ 46:
/***/ (function(module, exports) {

/**
 * Created by Intern on 11/12/2018.
 */

var unitati = ['unu', 'doi', 'trei', 'patru', 'cinci', 'șase', 'șapte', 'opt', 'nouă'];
var zecimale = ['', 'două', 'trei', 'patru', 'cinci', 'șai', 'șapte', 'opt', 'nouă'];
var zeci = ['una ', 'două ', 'trei ', 'patru ', 'cinci ', 'șase ', 'șapte ', 'opt ', 'nouă ', 'zece ', 'unsprezece ', 'doisprezece ', 'treisprezece ', 'paisprezece ', 'cincisprezece ', 'șaisprezece ', 'șaptesprezece ', 'optsprezece ', 'nouăsprezce '];
var sute = ['una', 'două', 'trei', 'patru', 'cinci', 'șase', 'șapte', 'opt', 'nouă'];
$("button").click(function () {
    var input = $("#valoare").val();
    var value = '';
    var lei;
    var bani;
    if (input.indexOf('.') != -1) {
        value = input.split('.');
        lei = value[0];
        bani = value[1];
    } else if (input.indexOf(',') != -1) {
        value = input.split(',');
        lei = value[0];
        bani = value[1];
    } else {
        lei = input;
        bani = '00';
    }
    var strValue = translate(lei.length, lei);
    $(".val").html(strValue + ' LEI și ' + translate(bani.length, bani) + ' BANI');
    //            alert(strValue)
});

function translate(length, value) {
    var strValue = '';
    for (i = 1; i <= length; i++) {
        currentVal = value.charAt(value.length - 1);
        switch (i) {
            case 1:
                if (currentVal != '0') {
                    nextVal = value.charAt(value.length - 2);
                    if (nextVal == '0' || nextVal == '1' || nextVal == '') {
                        strValue = zeci[parseInt(nextVal + currentVal) - 1];
                        i++;
                        value = value.slice(0, -1);
                    } else {
                        strValue = ' și ' + unitati[parseInt(currentVal) - 1];
                    }
                } else {

                    nextVal = value.charAt(value.length - 2);
                    if (nextVal == '0' || nextVal == '1' || nextVal == '') {
                        strValue = zeci[parseInt(nextVal + currentVal) - 1];
                        i++;
                        value = value.slice(0, -1);
                    } else {
                        strValue = ' și ' + unitati[parseInt(currentVal) - 1];
                    }

                    if (value == '00' || value == '0') {
                        strValue = 'zero';
                    }
                }
                break; //unitati
            case 2:
                if (currentVal != '0') {
                    strValue = zecimale[parseInt(currentVal) - 1] + 'zeci' + strValue;
                }
                break; //zeci
            case 3:
                if (currentVal != '0') {
                    if (currentVal == '1') {
                        strValue = 'una sută ' + strValue;
                    } else {
                        strValue = sute[parseInt(currentVal) - 1] + ' sute ' + strValue;
                    }
                }
                break; //sute
            case 4:
                if (i == length) {
                    if (currentVal == '1') {
                        strValue = 'una mie ' + strValue;
                        break;
                    }
                } else {
                    strValue = ' mii ' + strValue;
                }
                nextVal = value.charAt(value.length - 2);
                if (nextVal == '0' || nextVal == '1' || nextVal == '') {
                    strValue = zeci[parseInt(nextVal + currentVal) - 1] + strValue;
                    i++;
                    value = value.slice(0, -1);
                } else {
                    if (unitati[parseInt(currentVal) - 1] == 'doi') {
                        strValue = ' și două' + strValue;
                    } else {
                        strValue = ' și ' + unitati[parseInt(currentVal) - 1] + strValue;
                    }
                }
                break; //mii
            case 5:
                if (currentVal != '0') {
                    strValue = zecimale[parseInt(currentVal) - 1] + 'zeci' + strValue;
                }
                break; //zeci de mii
            case 6:
                if (sute[parseInt(currentVal) - 1] !== 'undefined') {
                    if (parseInt(currentVal) - 1 == 0) {
                        strValue = sute[parseInt(currentVal) - 1] + " sută " + strValue;
                    } else {
                        strValue = sute[parseInt(currentVal) - 1] + " sute " + strValue;
                    }
                }
                break; //sute de mii
        }
        value = value.slice(0, -1);
    }
    return strValue;
}

/***/ })

/******/ });