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
    <div class="divider margin-bottom-30"></div>
    <div class="row">
        <div class="col-sm">
            <div class="da-card">
                <div class="da-card-header">
                    <h1 class="da-text-primary">Automobil</h1>
                </div>
                <div class="da-card-body">
                    <form action="">
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" id="numar" aria-describedby="emailHelp" min="10" required="required" placeholder="&nbsp;">
                            <label for="numar">
                                <span class="placeholder">Numar de inmatriculare</span>
                                <span class="error">Numele nu trebuie sa contina spatii albe!</span>
                            </label>
                            <span class="material-icons icon directions_car"></span>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" id="serie" aria-describedby="emailHelp" min="10" required="required" placeholder="&nbsp;">
                            <label for="serie">
                                <span class="placeholder">Serie</span>
                                <span class="error">Seria trebuie sa aiba minim 10 caractere!</span>
                            </label>
                            <span class="material-icons icon directions_car"></span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group has-float-label">
                                    <select class="selectpicker" id="marca" title="Selecteaza">
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
                                    <select class="selectpicker" id="model" title="Selecteaza">
                                        <option value="model1">Model </option>
                                        <option value="model2">Model </option>
                                        <option value="model3">Model </option>
                                        <option value="model3">Model </option>
                                    </select>
                                    <label for="model">
                                        <span class="placeholder">Model</span>
                                        <span class="error">Acest camp este obligatoriu</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="divider margin-bottom-30"></div>
                        <div class="form-group margin-all-0">
                            <div class="text-left">
                                <button type="button" class="cta cta-primary" data-ripple>Persoana Fizica</button>
                                <button type="button" class="cta cta-default" data-ripple>Persoana Juridica</button>
                            </div>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" id="denumire" aria-describedby="emailHelp" min="10" required="required" placeholder="&nbsp;">
                            <label for="denumire">
                                <span class="placeholder">Nume si Prenume</span>
                                <span class="error">Acest camp e obligatoriu!</span>
                            </label>
                            <span class="material-icons icon perm_identity"></span>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" id="telefon" aria-describedby="emailHelp" min="10" required="required" placeholder="&nbsp;">
                            <label for="telefon">
                                <span class="placeholder">Telefon</span>
                                <span class="error">Acest camp e obligatoriu!</span>
                            </label>
                            <span class="material-icons icon phone"></span>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" id="cnp/cui" aria-describedby="emailHelp" min="10" required="required" placeholder="&nbsp;">
                            <label for="cnp/cui">
                                <span class="placeholder">CNP</span>
                                <span class="error">Acest camp e obligatoriu!</span>
                            </label>
                            <span class="material-icons icon credit_card"></span>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" min="10" required="required" placeholder="&nbsp;">
                            <label for="cnp/cui">
                                <span class="placeholder">Email</span>
                                <span class="error">Acest camp e obligatoriu!</span>
                            </label>
                            <span class="material-icons icon email"></span>
                        </div>

                        <div class="form-group margin-all-0">
                            <div class="text-right">
                                <button type="submit" class="cta cta-accent" data-ripple>Trimite</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



