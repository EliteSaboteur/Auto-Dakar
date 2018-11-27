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
/******/ 	return __webpack_require__(__webpack_require__.s = 47);
/******/ })
/************************************************************************/
/******/ ({

/***/ 47:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(48);


/***/ }),

/***/ 48:
/***/ (function(module, exports) {

// floating buttons
jQuery.fn.semiCircle = function (cx, cy, radius, radiusY, startDegrees, endDegrees, length) {
    if (radiusY === undefined) radiusY = radius;
    if (startDegrees === undefined) startDegrees = 0;
    if (endDegrees === undefined) endDegrees = 360;
    var startRadians = startDegrees * Math.PI / 180,
        endRadians = endDegrees * Math.PI / 180,
        stepRadians = (endRadians - startRadians) / (this.length - length);
    return this.each(function (i) {
        var a = i * stepRadians + startRadians,
            x = Math.cos(a) * radius + cx,
            y = Math.sin(a) * radiusY + cy;
        $(this).css({
            left: x + 'px',
            top: y + 'px'
        });
    });
};

jQuery.fn.float = function (cx, cy, radius, radiusY, startDegrees, endDegrees, length, iconOff, iconOn) {

    $(this).on('click', function () {
        var floatingEl = $(this).parents('.floating-share').find('.floating-item');
        var floatParent = $(this).parents('.floating-share');
        $(this).find('.fa').toggleClass(iconOff + " " + iconOn);
        if (floatParent.hasClass("opened")) {
            floatingEl.semiCircle(0, 0, 0, 0, 0, 0, 0);
            floatParent.removeClass("opened").addClass("closing");
            setTimeout(function () {
                floatParent.removeClass("closing");
            }, 200);
        } else {
            floatingEl.semiCircle(cx, cy, radius, radiusY, startDegrees, endDegrees, length);
            floatParent.addClass("opened").removeClass("closing");
        }
    });
};

// toggle text function
jQuery.fn.extend({
    toggleText: function toggleText(a, b) {
        var that = this;
        if (that.text() != a && that.text() != b) {
            that.text(a);
        } else if (that.text() == a) {
            that.text(b);
        } else if (that.text() == b) {
            that.text(a);
        }
        return this;
    }
});

jQuery(document).ready(function ($) {

    var windowWidth = $(window).width();

    // menu toggle
    $('.menu-toggle').on('click', function () {
        togglemenu($(this));
    });

    if (windowWidth < 768) {
        $('.menu .anchor').on('click', function () {
            setTimeout(togglemenu, 250, $(this));
        });
    }

    $(window).on('resize', function () {
        var windowWidth = $(window).width();
        if (windowWidth < 768) {
            $('.menu .anchor').on('click', function () {
                setTimeout(togglemenu, 250, $(this));
            });
        }
    });

    // toggle menu function
    function togglemenu(toggleBtn) {
        $('.menu-toggle').toggleText('⋮', '⨯');
        var menu = toggleBtn.parents('.menu');
        menu.toggleClass('open');
        $('body').toggleClass('locked');
    }

    //menu smooth scroll function
    $('.anchor').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 40
                }, 500);
                return false;
            }
        }
    });

    // sticky menu on scroll
    var menuOffset = $('.menu').offset();
    $(window).on('scroll', function () {
        if ($('.menu').hasClass('fixed-on-scroll')) {
            var windowScroll = $(window).scrollTop();
            console.log("Window: " + windowScroll);
            console.log("menu offset: " + menuOffset.top);
            if (windowScroll >= menuOffset.top) {
                $('.menu').addClass('fixed-active');
            } else {
                $('.menu').removeClass('fixed-active');
            }
        }
    });

    // init floating buttons
    $('.floating-share .floating-item').semiCircle(0, 0, 0, 0, 0, 0, 0);

    //ripple effect on buttons
    $(document).on("mousedown", "[data-ripple]", function (e) {

        var $self = $(this);

        if ($self.is(".btn-disabled")) {
            return;
        }
        if ($self.closest("[data-ripple]")) {
            e.stopPropagation();
        }

        var initPos = $self.css("position"),
            offs = $self.offset(),
            x = e.pageX - offs.left,
            y = e.pageY - offs.top,
            dia = Math.min(this.offsetHeight, this.offsetWidth, 100),
            // start diameter
        $ripple = $('<div/>', {
            class: "ripple",
            appendTo: $self
        });

        if (!initPos || initPos === "static") {
            $self.css({
                position: "relative"
            });
        }

        $('<div/>', {
            class: "rippleWave",
            css: {
                background: $self.data("ripple"),
                width: dia,
                height: dia,
                left: x - dia / 2,
                top: y - dia / 2
            },
            appendTo: $ripple,
            one: {
                animationend: function animationend() {
                    $ripple.remove();
                }
            }
        });
    });
});

/***/ })

/******/ });