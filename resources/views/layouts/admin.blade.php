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
        <aside class="admin-sidemenu @yield('toggle_navbar')">
            @include('includes._headerAdmin')
        </aside>

        <!-- admin content  -->
        <div id="main" class="admin-content">

            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="da-card admin-hero da-background-dark padding-all-30">
                            <div class="da-card-header">
                                <h1 class="da-text-light-grey text-center">AutoDakar - @yield('title')</h1>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>

            <!-- <footer >
                @include('includes._footer')
            </footer> -->

        </div>

    </div>

@include('includes._scripts')
@yield ('scripts')
</body>
</html>


