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

    <div class="row">
        <div class="col-sm-12">
            <div class="da-card admin-hero da-background-dark padding-all-30">
                <div class="da-card-header">
                    <h1 class="da-text-light-grey text-center">AutoDakar - Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="divider margin-bottom-30"></div>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="da-card">
                <div class="da-card-header da-background-accent">
                   
                </div>
                <div class="da-card-body">
                    <h3 class="text-center">Adauga automobil </h3>
                </div>
                <div class="da-card-footer text-center">
                    <a href="#!" data-ripple class="cta cta-accent">Button</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="da-card">
                <div class="da-card-header da-background-primary">

                </div>
                <div class="da-card-body">
                    <h3 class="text-center">Interventii curente</h3>
                </div>
                <div class="da-card-footer text-center">
                    <a href="#!" data-ripple class="cta cta-primary">Button</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="da-card">
                <div class="da-card-header da-background-light-grey">

                </div>
                <div class="da-card-body">
                    <h3 class="text-center">Istoric interventii</h3>
                </div>
                <div class="da-card-footer text-center">
                <a href="#!" data-ripple class="cta cta-default">Button</a>
                </div>
            </div>
        </div>
    </div>

    <div class="divider margin-bottom-30"></div>
    
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="da-card">
                <div class="da-card-header">
                    <h4 class="da-card-title">Inputs & selects</h4>
                </div>
                <div class="da-card-body">
                    <form action="">
                        <div class="form-group has-float-label">
                            <input type="email" class="form-control" id="inputTypeText" aria-describedby="emailHelp" placeholder="&nbsp;">
                            <label for="inputTypeText">
                                <span class="placeholder">I'm an input type text</span>
                                <span class="error">Acest camp nu este completat corect</span>
                            </label>
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </form>
                </div>
                <div class="da-card-footer">
                    <div class="text-right">
                        <a href="#!" data-ripple class="cta cta-accent">Submit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
        <div class="da-card">
                <div class="da-card-header">
                    <h4 class="da-card-title">Checkboxes and other form fields</h4>
                </div>
                <div class="da-card-body">
                    <form action="">
                        
                    </form>
                </div>
                <div class="da-card-footer">
                    <div class="text-right">
                        <a href="#!" data-ripple class="cta cta-accent">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
