<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 11/26/18
 * Time: 9:20 PM
 */ ?>
@extends('layouts.admin')
@section('title')
    Adauga Interventie
@stop
@section('toggle_navbar')
    open
@endsection
@section('content')
    <div class="divider margin-bottom-30"></div>
    <div class="row">
        <div class="col-sm">
            <form method="POST" action="{{ route('intervention.store') }}">
                @csrf
                <div class="da-card">
                    <div class="da-card-header">
                        <h3 class="da-text-primary">Automobil</h3>
                    </div>
                    <div class="da-card-body">
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="numar" name="numar" aria-describedby="Număr înmatriculare"
                                           min="10" required="required" placeholder="&nbsp;">
                                    <label for="numar">
                                        <span class="placeholder">Numar de înmatriculare</span>
                                        <span class="error">Numele nu trebuie să conțina spatii albe!</span>
                                    </label>
                                    <span class="material-icons icon directions_car"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-8">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="serie-caroserie" name="serie-caroserie"
                                           aria-describedby="emailHelp" min="10" required="required"
                                           placeholder="&nbsp;">
                                    <label for="serie-caroserie">
                                        <span class="placeholder">Serie Caroserie</span>
                                        <span class="error">Seria trebuie sa aiba minim 10 caractere!</span>
                                    </label>
                                    <span class="material-icons icon directions_car"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group has-float-label">
                                    <select class="selectpicker" id="marca" name="marca" title="Selecteaza">
                                        <option value="audi">Audi</option>
                                        <option value="bmw">BMW</option>
                                        <option value="dacia">Dacia</option>
                                        <option value="volvo">Volvo</option>
                                    </select>
                                    <label for="marca">
                                        <span class="placeholder">Marca</span>
                                        <span class="error">Acest camp este obligatoriu</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group has-float-label">
                                    <select class="selectpicker" id="model" name="model" title="Selecteaza">
                                        <option value="model1">Model</option>
                                        <option value="model2">Model</option>
                                        <option value="model3">Model</option>
                                        <option value="model3">Model</option>
                                    </select>
                                    <label for="model">
                                        <span class="placeholder">Model</span>
                                        <span class="error">Acest camp este obligatoriu</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-right">
                                    <a href="#" class="cta cta-default da-text-primary">Verifică<span class="material-icons search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="margin-bottom-30"></div>
                <div class="da-card">
                    <div class="da-card-header">
                        <h3 class="da-text-primary">Client</h3>
                    </div>
                    <div class="da-card-body">
                        <div class="form-group margin-all-0">
                            <div class="text-left">
                                <button type="button" class="cta cta-primary" id="persoana-fizica" data-ripple>Persoana Fizica</button>
                                <button type="button" class="cta cta-default" id="persoana-juridica" data-ripple>Persoana Juridica</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="denumire" name="denumire" aria-describedby="Nume si prenume"
                                           min="10" required="required" placeholder="&nbsp;">
                                    <label for="denumire">
                                        <span class="placeholder" id="denumire-placeholder">Nume si Prenume</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon perm_identity"></span>
                                </div>

                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="telefon" name="telefon" aria-describedby="emailHelp"
                                           min="10" required="required" placeholder="&nbsp;">
                                    <label for="telefon">
                                        <span class="placeholder">Telefon</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon phone"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                                           min="10"  placeholder="&nbsp;">
                                    <label for="cnp/cui">
                                        <span class="placeholder">Email</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon email"></span>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="judet" name="judet" aria-describedby="emailHelp"
                                           min="10" required="required" placeholder="&nbsp;">
                                    <label for="judet">
                                        <span class="placeholder">Judet</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon location_on"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="cnp/cui" name="cnp/cui" aria-describedby="emailHelp"
                                           min="10" required="required" placeholder="&nbsp;">
                                    <label for="cnp/cui">
                                        <span class="placeholder" id="cnp-placeholder">CNP</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon credit_card"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 animated d-none">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="regcom" name="regcom" aria-describedby="emailHelp"
                                           min="10" placeholder="&nbsp;">
                                    <label for="regcom">
                                        <span class="placeholder">Nr. Reg.com/an.</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon credit_card"></span>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="cont" name="cont" aria-describedby="emailHelp"
                                           min="10" placeholder="&nbsp;">
                                    <label for="cont">
                                        <span class="placeholder">Cont</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon account_balance_wallet"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="banca" name="banca" aria-describedby="emailHelp"
                                           min="10" placeholder="&nbsp;">
                                    <label for="banca">
                                        <span class="placeholder">Banca</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon account_balance"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="adresa" name="adresa" aria-describedby="emailHelp"
                                           min="10" placeholder="&nbsp;">
                                    <label for="adresa">
                                        <span class="placeholder">Adresa</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon location_on"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="reprezentant" name="reprezentant"
                                           aria-describedby="emailHelp" min="10"
                                           placeholder="&nbsp;">
                                    <label for="reprezentant">
                                        <span class="placeholder">Reprezentant</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon perm_identity"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="serie-ci" name="serie-ci" aria-describedby="emailHelp"
                                           min="10" placeholder="&nbsp;">
                                    <label for="serie-ci">
                                        <span class="placeholder">Serie CI</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon credit_card"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="numar-ci" name="numar-ci" aria-describedby="emailHelp"
                                           min="10" placeholder="&nbsp;">
                                    <label for="numar-ci">
                                        <span class="placeholder">Numar CI</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon credit_card"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" id="eliberat" name="eliberat" aria-describedby="emailHelp"
                                           min="10" placeholder="&nbsp;">
                                    <label for="eliberat">
                                        <span class="placeholder">Eliberat de</span>
                                        <span class="error">Acest camp e obligatoriu!</span>
                                    </label>
                                    <span class="material-icons icon credit_card"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group margin-all-0">
                    <div class="text-right">
                        <button type="submit" class="cta cta-accent" data-ripple>Adauga</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


