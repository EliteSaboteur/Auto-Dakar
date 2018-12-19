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

    <div class="margin-bottom-30"></div>

    <div class="row">

        <div class="col-xs-12 col-md-3">
            <div class="da-card">
                <div class="da-card-header">
                    <h5>Documente</h5>
                </div>
                <div class="da-card-body">
                    <div class="form-group margin-all-0">
                        <div class="text-left">
                            <a href="{{route('estimativ.create')}}"  class="cta cta-primary btn-block" data-ripple>Emite Estimativ</a>
                        </div>
                    </div>
                    <div class="form-group margin-all-0">
                        <div class="text-left">
                            <a href="{{route('factura.create')}}"  class="cta cta-primary btn-block" data-ripple>Emite Factura</a>
                        </div>
                    </div>
                    <div class="form-group margin-all-0">
                        <div class="text-left">
                            <a href="{{route('deviz.create')}}" class="cta cta-primary btn-block" data-ripple>Emite Deviz</a>
                        </div>
                    </div>
                    <div class="form-group margin-all-0">
                        <div class="text-left">
                            <a href="{{route('chitanta.create')}}"  class="cta cta-primary btn-block" data-ripple>Emite Chitanta</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-md-6">
            <div class="da-card">
                <div class="da-card-header">
                    <h5>Status</h5>
                </div>
                <div class="da-card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1">
                                    <label class="form-check-label" for="check1">Interventie inregistrata</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-check">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check2">
                                    <label class="form-check-label" for="check2">Efectuarea lucrarilor</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-check">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check4">
                                    <label class="form-check-label" for="check4">Interventie finalizata</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="da-card">
                <div class="da-card-header">
                    <h5>Client</h5>
                </div>
                <div class="da-card-body">
                    <p>Nume: <strong>Gruian David</strong></p>
                    <p>Telefon: <strong>0786941314</strong></p>
                    <p>CNP: <strong>1980107222566</strong></p>
                    <p>CI: <strong>AX 263548</strong></p>
                    <p>Adresa: <strong>Str. Bucuresti, Nr.91</strong></p>
                    <p>Judet: <strong>Alba</strong></p>
                    <p>Cont: <strong>-</strong></p>
                    <p>Banca: <strong>-</strong></p>
                </div>
            </div>
        </div>

    </div>
@endsection
