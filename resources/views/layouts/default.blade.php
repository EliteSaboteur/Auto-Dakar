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
<div class="container">

    <header class="row">
        @include('includes._header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes._footer')
    </footer>

</div>

    @include('includes._scripts')
</body>
</html>

