<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 10/29/2018
 * Time: 1:21 PM
 */?>

        <!-- Admin navbar -->
<div class="admin-nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse"><span class="navbar-toggler-icon">X</span></button>
    <div class="admin-nav-header">
        <span class="admin-user">Admin</span>
    </div>
    <div class="admin-nav-body">
        <ul class="nav-items">

            <li class="nav-item">
                <a class="nav-link active" href="/dashboard">Panou de administrare</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/intervention/create">Adauga Interventie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/intervention">Interventii</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/statistics">Statistici</a>
            </li>
        </ul>
    </div>
    <div class="admin-nav-footer">
        <a class="nav-link " href="/components">Components</a>
        <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
