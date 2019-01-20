<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 12/11/18
 * Time: 8:12 AM
 */ ?>
@extends('layouts.admin')
@section('title')
    Emite deviz
@stop
@section('content')
<div class="da-deviz">
    <div class="margin-bottom-30"></div>
    <div class="flex-list flex-2 flex-wrap">
        <div class="flex-item">
            <div class="da-card">
                <div class="da-card-header">
                    <h3>Date Deviz</h3>
                </div>
                <div class="da-card-body">
                    <div class="flex-list flex-column">
                        <div class="flex-item">
                            <div class="flex-list flex-2 flex-wrap">
                                <div class="flex-item">
                                    <div class="form-radio form-big">
                                        <input type="radio" name="adauga" id="adauga-manopera">
                                        <label for="adauga-manopera">
                                            <span class="material-icons widgets"></span>
                                            <span> Adaugă Manoperă</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex-item">
                                    <div class="form-radio form-big">
                                        <input type="radio" name="adauga" id="adauga-piesa">
                                        <label for="adauga-piesa">
                                            <span class="material-icons widgets"></span>
                                            <span>Adaugă Piesă</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-item">
                            <div class="margin-bottom-30"></div>
                        </div>
                        <div class="flex-item" id="input-lucrare">
                            <div class="form-options-wrapper type-of-service">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group has-float-label">
                                            <input type="text" class="form-control" id="optiune-lucrare"
                                                   aria-describedby="optiune-lucrare" min="10" placeholder="&nbsp;">
                                            <label for="optiune-lucrare">
                                                <span class="placeholder">Lucrare solicitată</span>
                                                <span class="error">Numele nu trebuie sa contina spatii albe!</span>
                                            </label>
                                            <span class="material-icons icon assignment"></span>
                                        </div>
                                    </div>
                                    <div class="col col-auto">
                                        <button class="cta cta-accent" id="sterge" data-ripple>Șterge</button>
                                    </div>
                                    <div class="col col-auto">
                                        <button class="cta cta-primary" id="adauga" data-ripple>Adaugă</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-item d-none animated" id="alege-manopera">
                            <h5>Manoperă</h5>


                            <div class="form-options-list manopera-field">
                                <div class="form-radio form-big">
                                    <input type="radio" name="add-manopera" id="inlocuit">
                                    <label for="inlocuit">
                                        <span class="material-icons widgets"></span>
                                        <span>Înlocuit</span>
                                    </label>
                                </div>
                                <div class="form-radio form-big">
                                    <input type="radio" name="add-manopera" id="vopsit">
                                    <label for="vopsit">
                                        <span class="material-icons widgets"></span>
                                        <span>Vopsit</span>
                                    </label>
                                </div>
                                <div class="form-radio form-big">
                                    <input type="radio" name="add-manopera" id="reparat">
                                    <label for="reparat">
                                        <span class="material-icons widgets"></span>
                                        <span>Reparat</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex-item d-none animated" id="alege-piese">
                            <h5>Piese</h5>
                            <div class="form-options-list">
                                <div class="floating-share service-option two-children">
                                    <button class="float-trigger float-btn cta cta-default">Capotă</button>
                                    <ul class="share-items">
                                        <li class="floating-item item-folder">
                                            <span class="float-btn" data-ripple>spate</sp>
                                        </li>
                                        <li class="floating-item item-paper-plane">
                                            <span class="float-btn" data-ripple>față</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="floating-share service-option four-children">
                                    <button class="float-trigger float-btn cta cta-default">Portieră</button>
                                    <ul class="share-items">
                                        <li class="floating-item item-cloud">
                                            <span class="float-btn" data-ripple>dreapta față</span>
                                        </li>
                                        <li class="floating-item item-cog">
                                            <span class="float-btn" data-ripple>dreapta spate</span>
                                        </li>
                                        <li class="floating-item item-folder">
                                            <span class="float-btn" data-ripple>stânga spate</span>
                                        </li>
                                        <li class="floating-item item-paper-plane">
                                            <span class="float-btn" data-ripple>stânga față</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="floating-share service-option four-children">
                                    <button class="float-trigger float-btn cta cta-default">Aripă</button>
                                    <ul class="share-items">
                                        <li class="floating-item item-cloud">
                                            <span class="float-btn" data-ripple>dreapta față</span>
                                        </li>
                                        <li class="floating-item item-cog">
                                            <span class="float-btn" data-ripple>dreapta spate</span>
                                        </li>
                                        <li class="floating-item item-folder">
                                            <span class="float-btn" data-ripple>stânga spate</span>
                                        </li>
                                        <li class="floating-item item-paper-plane">
                                            <span class="float-btn" data-ripple>stânga față</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="floating-share service-option four-children">
                                    <button class="float-trigger float-btn cta cta-default">Geam</button>
                                    <ul class="share-items">
                                        <li class="floating-item item-cloud">
                                            <span class="float-btn" data-ripple>dreapta față </span>
                                        </li>
                                        <li class="floating-item item-cog">
                                            <span class="float-btn" data-ripple>dreapta spate</span>
                                        </li>
                                        <li class="floating-item item-folder">
                                            <span class="float-btn" data-ripple>stânga spate</span>
                                        </li>
                                        <li class="floating-item item-paper-plane">
                                            <span class="float-btn" data-ripple>stânga față</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="floating-share service-option one-child">
                                    <button class="float-trigger float-btn cta cta-default">Parbriz</button>
                                    <ul class="share-items">
                                        <li class="floating-item item-cloud">
                                            <span class="float-btn" data-ripple>
                                                <i class="material-icons add"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="floating-share service-option one-child">
                                    <button class="float-trigger float-btn cta cta-default">Lunetă</button>
                                    <ul class="share-items">
                                        <li class="floating-item item-cloud">
                                            <span class="float-btn" data-ripple>
                                                <i class="material-icons add"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="floating-share service-option three-children">
                                    <button class="float-trigger float-btn cta cta-default">Kit</button>
                                    <ul class="share-items">
                                        <li class="floating-item item-cloud">
                                            <span class="float-btn" data-ripple>vopsitorie</span>
                                        </li>
                                        <li class="floating-item item-cog">
                                            <span class="float-btn" data-ripple>parbriz</span>
                                        </li>
                                        <li class="floating-item item-folder">
                                            <span class="float-btn" data-ripple>tinichigerie</span>
                                        </li>
                                    </ul>
                                </div>

                                    {{--<div class="form-radio form-big">--}}
                                    {{--<input type="radio" name="piesa" id="kit">--}}
                                    {{--<label for="kit">--}}
                                    {{--<span class="material-icons widgets"></span>--}}
                                    {{--<span>Kituri</span>--}}
                                    {{--</label>--}}
                                    {{--</div>--}}
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-item">
            <div class="da-card">
                <div class="da-card-header">
                    <h3>Costuri</h3>
                </div>
                <div class="da-card-body">
                    <div class="flex-list flex-column">
                        <div class="flex-item">
                            <p>Deviz lucrări la comanda numarul 12 din 20.12.2018</p>
                            <hr>
                        </div>
                        <div class="flex-item">
                            <h5>Denumirea lucrării:</h5>
                        </div>
                        <div class="flex-item canBeErased">
                            <div id="manopera" class="has-numbered-items"></div>
                        </div>
                        <div class="flex-item">
                            <h5>Piese / Materiale:</h5>
                        </div>
                        <div class="flex-item canBeErased">
                            <div id="piese" class="has-numbered-items"></div>
                        </div>
                        <div class="flex-item">
                            <div class="text-right">
                                <a href="" class="cta cta-primary" data-ripple>Emite Deviz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection