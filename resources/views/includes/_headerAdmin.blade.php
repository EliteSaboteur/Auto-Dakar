<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 10/29/2018
 * Time: 1:21 PM
 */?>

        <!-- Admin navbar -->
<div class="admin-nav">
    <span class="navbar-toggler"></span>
    <div class="admin-nav-header">
        <svg id="AD" data-name="AD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.69 63.49"><title>AD</title><polygon points="20.01 50.74 31.18 26.88 38.8 43.07 51.57 43.07 31.27 0 0 63.49 9.86 63.49 14.04 63.49 40.74 63.49 34.74 50.74 20.01 50.74" style="fill:#231f20"/><path d="M87.85,8.83C82,2.91,73.73,0,63,0H38.94L53,29.77v-17h9.1c7.56,0,12.85,1.72,15.86,5.09s4.64,8.11,4.64,14c0,11.19-5,18.28-18.66,18.82l0,0H42.41l6,12.75H63.08A54,54,0,0,0,70,63.06h0a1.81,1.81,0,0,0,.23,0c.83-.12,1.66-.25,2.46-.4l.23-.06c.76-.15,1.48-.32,2.19-.51l.38-.1c.76-.21,1.5-.44,2.22-.7l.3-.1c.67-.25,1.32-.52,2-.8l.23-.1c.68-.31,1.34-.65,2-1a2.69,2.69,0,0,0,.29-.16c.63-.36,1.24-.73,1.83-1.13l0,0q.9-.63,1.74-1.32l.26-.22c.56-.46,1.1-1,1.61-1.46.35-.34.69-.7,1-1.06l.45-.52.43-.5c.24-.29.47-.58.7-.89,0-.05.09-.1.13-.16.23-.31.45-.63.68-.95a.76.76,0,0,0,.08-.11,28.69,28.69,0,0,0,3.93-8.58,37.62,37.62,0,0,0,1.32-10.28C96.69,22.31,93.77,14.66,87.85,8.83Z" style="fill:#231f20"/></svg>
        <span class="admin-user">Administrator</span>
    </div>
    <div class="admin-nav-body">
        <ul class="nav-items">

            <li class="nav-item">
                <a class="nav-link" href="/dashboard"><i class="material-icons">dashboard</i>Panou de administrare</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/intervention/create"><i class="material-icons">directions_car</i>Adauga Interventie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/intervention"><i class="material-icons">build</i>Interventii</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/statistics"><i class="material-icons">pie_chart</i>Statistici</a>
            </li>
        </ul>
    </div>
    <div class="admin-nav-footer">
        <a class="nav-link " href="/components">Components</a>
        <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="material-icons">power_settings_new</i>Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
