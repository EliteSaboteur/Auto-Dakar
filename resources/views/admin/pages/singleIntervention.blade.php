<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 12/10/2018
 * Time: 5:22 PM
 */ ?>
@extends('layouts.admin')
@section('title')
    Interventie: {{$id}}
@stop
@section('content')

    <div class="divider margin-bottom-30"></div>
    <div class="form-group margin-all-0">
        <div class="text-left">
            <button type="button" class="cta cta-primary" data-ripple>Emite Factura</button>
        </div>
    </div>
    <div class="form-group margin-all-0">
        <div class="text-left">
            <button type="button" class="cta cta-primary" data-ripple>Emite Deviz</button>
        </div>
    </div>
    <div class="form-group margin-all-0">
        <div class="text-left">
            <button type="button" class="cta cta-primary" data-ripple>Emite Chitanta</button>
        </div>
    </div>
    <div class="row">
        <div class="da-card">
            <div class="da-card-header">
                Client
            </div>
            <div class="da-card-body">
                <p>Nume: Gruian David</p>
                <p>Telefon: 0786941314</p>
                <p>CNP: 1980107222566</p>
                <p>CI: AX 263548</p>
                <p>Adresa: Str. Bucuresti, Nr.91</p>
                <p>Judet: Alba</p>
                <p>Cont: -</p>
                <p>Banca: -</p>
            </div>
        </div>
    </div>
@endsection
