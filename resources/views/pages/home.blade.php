<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 10/29/2018
 * Time: 1:20 PM
 */?>

@extends('layouts.default')
@section('title')
    Acasă
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (Auth::check())
                            <div class="alert alert-success" role="alert">
                                You are logged in!
                            </div>

                        @else
                            <div class="alert alert-danger" role="alert">
                                You are Not logged in!
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
