<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 11/26/18
 * Time: 9:20 PM
 */ ?>
@extends('layouts.admin')
@section('title')
    Interventii
@stop
@section('content')
    <div class="divider margin-bottom-30"></div>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="da-card">
                <div class="da-card-header da-background-accent">
                </div>
                <div class="da-card-body">
                    <h3 class="text-center">AB 15 FLN | VW Golf 4 | Data estimata: 22.10.2018</h3>
                </div>
                <a href="{{route('intervention.show',['id'=>'AB 15 FLN'])}}" class="absolute absolute-full"></a>
            </div>
        </div>
    </div>
    <div class="divider margin-bottom-30"></div>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="da-card">
                <div class="da-card-header da-background-accent"></div>
                <div class="da-card-body">
                    <h3 class="text-center">AB 12 NHN | Dacia Logan | Data estimata: 25.10.2018</h3>
                </div>
                <a href="" class="absolute absolute-full"></a>
            </div>
        </div>
    </div>
    <div class="divider margin-bottom-30"></div>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="da-card">
                <div class="da-card-header da-background-primary">

                </div>
                <div class="da-card-body">
                    <h3 class="text-center">B 52 FSD | Hyundai ix35 | Data estimata: 27.10.2018</h3>
                </div>
                <a href="" class="absolute absolute-full"></a>

            </div>
        </div>
    </div>
@endsection

