<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 10/29/2018
 * Time: 1:22 PM
 */ ?>
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes._head')
</head>
<body>
<div id='app'></div>

    <!-- Page Header -->
    <header class="da-frontend-menu">
        @include('includes._header')

        @push('scripts')

        <script type="text/javascript">
            const nav = $('.da-frontend-menu');
            var offset = $(window).height(),
                scrolled;

            $(window).on('scroll load', function(){
                var scrolled = $(window).scrollTop();
                if (scrolled >= offset / 2) {
                    nav.addClass('fixed');
                } else if (scrolled < offset * 2) {
                    nav.removeClass('fixed');
                }
            });
        </script>

        @endpush
    </header>

    <!-- Page Body -->
    <main id="main">
        @yield('content')
    </main>

    <!-- Page Footer -->
    <footer>
        @include('includes._footer')
    </footer>

</div>

    @include('includes._scripts')
    <script>
        jQuery(document).ready(function($){

            // Auto adjust page components height so 
            //the footer always stays at the bottom

            // declare elements
            var hH =    $('header').outerHeight(),
                m =     $('main'),
                fH =    $('footer').outerHeight(),
                wH =    $(window).height(),
                min =   wH - (hH + fH);

            // declare function to calc main min height
            function mainCalcHeight() {
                m.css('min-height', min + 'px');
            }

            // init calc function
            mainCalcHeight();

        });
    </script>
    @stack('scripts')
</body>
</html>

