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
    <header>
        @include('includes._header')
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
    @yield ('scripts')
</body>
</html>

