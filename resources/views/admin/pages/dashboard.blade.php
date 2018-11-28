<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 11/26/2018
 * Time: 5:15 PM
 */ ?>
@extends('layouts.admin')
@section('title')
    Dashboard
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <span class="label">Email address</span>
                            <span class="error"></span>
                        </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="cta cta-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src=".../100px180/" alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                One of three columns
            </div>
        </div>
    </div>
@endsection
