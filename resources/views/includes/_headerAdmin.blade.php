<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 10/29/2018
 * Time: 1:21 PM
 */?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Site <span class="sr-only">(current)</span></a>
            {{--<a class="nav-item nav-link" href="/dashboard">Dashboard</a>--}}
            <a class="nav-item nav-link" href="/intervention/create">Adauga Interventie</a>
            <a class="nav-item nav-link" href="/intervention">Interventii</a>
            <a class="nav-item nav-link" href="/statistics">Statistici</a>
            <a class="nav-item nav-link" href="/components">Components</a>

            <a class="nav-item nav-link" href="/pdf" target="_blank">PDF</a>
        </div>
    </div>
</nav>