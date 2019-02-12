<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 12/11/18
 * Time: 8:12 AM
 */ ?>
@extends('layouts.admin')
@section('title')
    Emite estimativ
@stop
@section('content')
<div class="da-estimativ">
    <div class="margin-bottom-30"></div>
    <div class="row">
        <div class="col-sm-6">
            <div class="da-card">
                <div class="da-card-header">
                    <h3>Comandă</h3>
                </div>
                <div class="da-card-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group has-float-label">
                                <input type="text" class="form-control" id="numar-comanda" aria-describedby="emailHelp"
                                       min="10"
                                       required="required" placeholder="&nbsp;">
                                <label for="numar-comanda">
                                    <span class="placeholder">Număr Comandă</span>
                                    <span class="error">Numele nu trebuie sa contina spatii albe!</span>
                                </label>
                                <span class="material-icons icon assignment"></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group has-float-label">

                                <input type="text" id="data-comanda" name="deliveryDate" data-toggle="datetimepicker"
                                       class="form-control datetimepicker-input" data-target="#data-comanda">
                                <label for="data-comanda">
                                    <span class="placeholder">Dată comandă:</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <h3>Adaugă lucrare</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
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
                                        <button class="cta cta-primary" id="adauga" data-ripple>Adaugă</button>
                                    </div>
                                </div>

                                {{--<div class="form-options-list">--}}
                                {{--<div class="form-radio form-big">--}}
                                {{--<input type="radio" name="lucrare-estimata" id="capota">--}}
                                {{--<label for="capota">--}}
                                {{--<span class="material-icons directions_car"></span>--}}
                                {{--<span>Capotă</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--<div class="form-radio form-big">--}}
                                {{--<input type="radio" name="lucrare-estimata" id="aripa">--}}
                                {{--<label for="aripa">--}}
                                {{--<span class="material-icons local_car_wash"></span>--}}
                                {{--<span>Aripă</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--<div class="form-radio form-big">--}}
                                {{--<input type="radio" name="lucrare-estimata" id="portiera">--}}
                                {{--<label for="portiera">--}}
                                {{--<span class="material-icons local_taxi"></span>--}}
                                {{--<span>Portieră</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--<div class="form-radio form-big">--}}
                                {{--<input type="radio" name="lucrare-estimata" id="parbriz">--}}
                                {{--<label for="parbriz">--}}
                                {{--<span class="material-icons local_shipping"></span>--}}
                                {{--<span>Parbriz</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--<div class="form-radio form-big">--}}
                                {{--<input type="radio" name="lucrare-estimata" id="geam">--}}
                                {{--<label for="geam">--}}
                                {{--<span class="material-icons local_shipping"></span>--}}
                                {{--<span>Geam</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}

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
                                <div class="margin-bottom-30"></div>

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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="da-card">
                <div class="da-card-header">
                    <h3>Estimări</h3>
                </div>
                <div class="da-card-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group has-float-label">
                                <input type="text" class="form-control" id="numar-comanda" aria-describedby="emailHelp"
                                       min="10"
                                       required="required" placeholder="&nbsp;">
                                <label for="numar-comanda">
                                    <span class="placeholder">Sumă estimată</span>
                                    <span class="error">Numele nu trebuie sa contina spatii albe!</span>
                                </label>
                                <span class="material-icons icon assignment"></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group has-float-label">
                                <input type="text" id="data-estimata" name="data-estimata" data-toggle="datetimepicker"
                                       class="form-control datetimepicker-input" data-target="#data-estimata"
                                       placeholder="&nbsp;">
                                <label for="data-estimata">
                                    <span class="placeholder">Dată estimată:</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <h3>Lucrari soliciate</h3>
                        </div>
                        <div class="col-xs-12 col-md-12 canBeErased">
                            <div id="lucrari" class="has-numbered-items"></div>
                        </div>
                    </div>
                    <div class="margin-bottom-30"></div>
                    <div class="flex-item">
                        <div class="text-right">
                            <a href="" class="cta cta-primary" data-ripple>Emite Estimativ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/moment.js') }}" defer></script>
    <script src="{{ asset('js/tempus-deus.js') }}" defer></script>
    <script type="text/javascript">
        $(function () {

            $('#data-comanda').datetimepicker({
                locale: 'ro',
                format: "DD MM YYYY",
                enabledHours: [9, 10, 11, 12, 13, 14, 15, 16],
                icons: {
                    time: 'material-icons access_time',
                    date: 'material-icons calendar_today',
                    up: 'material-icons expand_less',
                    down: 'material-icons expand_more',
                    previous: 'material-icons chevron_left',
                    next: 'material-icons chevron_right',
                    today: 'material-icons refresh',
                    clear: 'material-icons clear',
                    close: 'material-icons clear'
                },
            });
            $('#data-comanda').val($('#data-comanda').data("datetimepicker").date().format('DD MM YYYY'));

            $('#data-estimata').datetimepicker({
                locale: 'ro',
                format: "DD MM YYYY",
                enabledHours: [9, 10, 11, 12, 13, 14, 15, 16],
                icons: {
                    time: 'material-icons access_time',
                    date: 'material-icons calendar_today',
                    up: 'material-icons expand_less',
                    down: 'material-icons expand_more',
                    previous: 'material-icons chevron_left',
                    next: 'material-icons chevron_right',
                    today: 'material-icons refresh',
                    clear: 'material-icons clear',
                    close: 'material-icons clear'
                },
            });
        });
    </script>
@stop
