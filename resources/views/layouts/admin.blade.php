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
<div id='app'></div>

    <!-- ========= ADMIN DASHBOARD LAYOUT ==========  -->
    <div class="admin-dashboard">

        <!-- admin side menu  -->
        <aside class="admin-sidemenu">
            @include('includes._headerAdmin')
        </aside>

        <!-- admin content  -->
        <div id="main" class="admin-content">

            <div class="content">
                @yield('content')
            </div>

            <footer >
                @include('includes._footer')
            </footer>

        </div>

    </div>

@include('includes._scripts')
@yield ('scripts')
</body>
</html>


