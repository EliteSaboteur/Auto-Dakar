<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 11/26/18
 * Time: 9:22 PM
 */?>
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes._head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes._headerAdmin')
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


