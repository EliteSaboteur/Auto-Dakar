<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 11/26/18
 * Time: 9:20 PM
 */?>
@extends('layouts.admin')
@section('title')
    Adauga Interventie
@stop
@section('content')
    <div class="row">
        <div class="col-sm">
            <div class="da-card">
                <div class="da-card-header">
                    <h1 class="da-text-primary">Forms</h1>
                </div>
                <div class="da-card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Numar Automobil</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div>
                            <div class="form-radio">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-radio">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Second default radio
                                </label>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="cta cta-accent">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



