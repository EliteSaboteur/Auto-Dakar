<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 11/26/2018
 * Time: 5:15 PM
 */ ?>
@extends('layouts.admin')
@section('title')
    Panou de administrare
@stop
@section('content')
    <div class="divider margin-bottom-30"></div>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="da-card">
                <div class="da-card-header da-background-accent">

                </div>
                <div class="da-card-body">
                    <h3 class="text-center">Adauga Interventie </h3>
                </div>
                <div class="da-card-footer text-center">
                    <a href="/intervention/create" data-ripple class="cta cta-accent">Deschide</a>
                </div>
                {{--<a href="" class="absolute absolute-full"></a>--}}
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="da-card">
                <div class="da-card-header da-background-primary">

                </div>
                <div class="da-card-body">
                    <h3 class="text-center">Interventii</h3>
                </div>
                <div class="da-card-footer text-center">
                    <a href="/intervention" data-ripple class="cta cta-primary">Deschide</a>
                </div>
                {{--<a href="" class="absolute absolute-full"></a>--}}

            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="da-card">
                <div class="da-card-header da-background-dark">

                </div>
                <div class="da-card-body">
                    <h3 class="text-center">Statistici</h3>
                </div>
                <div class="da-card-footer text-center">
                    <a href="/statistics" data-ripple class="cta cta-default">Deschide</a>
                </div>
                {{--<a href="" class="absolute absolute-full"></a>--}}

            </div>
        </div>
    </div>
@endsection
