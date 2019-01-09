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
                                    <div class="floating-share floating-full-circle">
                                        <button class="float-trigger float-btn">Capotă
                                            {{--<i class="main-button material-icons build"></i>--}}
                                        </button>
                                        <ul class="share-items">
                                            <li class="floating-item item-folder">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>spate
                                                    {{--<i class="material-icons alarm_off"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-paper-plane">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>față
                                                    {{--<i class="material-icons alarm_on"></i>--}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="floating-share floating-full-circle">
                                        <button class="float-trigger float-btn">Portieră
                                            {{--<i class="main-button material-icons build"></i>--}}
                                        </button>
                                        <ul class="share-items">
                                            <li class="floating-item item-cloud">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>dreapta față
                                                    {{--<i class="material-icons alarm"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-cog">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>dreapta spate
                                                    {{--<i class="material-icons alarm_add"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-folder">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>stânga spate
                                                    {{--<i class="material-icons alarm_off"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-paper-plane">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>stânga față
                                                    {{--<i class="material-icons alarm_on"></i>--}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="floating-share floating-full-circle">
                                        <button class="float-trigger float-btn">Aripă
                                            {{--<i class="main-button material-icons build"></i>--}}
                                        </button>
                                        <ul class="share-items">
                                            <li class="floating-item item-cloud">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>dreapta față
                                                    {{--<i class="material-icons alarm"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-cog">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>dreapta spate
                                                    {{--<i class="material-icons alarm_add"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-folder">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>stânga spate
                                                    {{--<i class="material-icons alarm_off"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-paper-plane">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>stânga față
                                                    {{--<i class="material-icons alarm_on"></i>--}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="floating-share floating-full-circle">
                                        <button class="float-trigger float-btn">Geam
                                            {{--<i class="main-button material-icons build"></i>--}}
                                        </button>
                                        <ul class="share-items">
                                            <li class="floating-item item-cloud">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>dreapta față
                                                    {{--<i class="material-icons alarm"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-cog">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>dreapta spate
                                                    {{--<i class="material-icons alarm_add"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-folder">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>stânga spate
                                                    {{--<i class="material-icons alarm_off"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-paper-plane">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>stânga față
                                                    {{--<i class="material-icons alarm_on"></i>--}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="floating-share floating-full-circle">
                                        <button class="float-trigger float-btn">Parbriz
                                            {{--<i class="main-button material-icons build"></i>--}}
                                        </button>
                                        <ul class="share-items">
                                            <li class="floating-item item-cloud">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>
                                                    <i class="material-icons add"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="floating-share floating-full-circle">
                                        <button class="float-trigger float-btn">Lunetă
                                            {{--<i class="main-button material-icons build"></i>--}}
                                        </button>
                                        <ul class="share-items">
                                            <li class="floating-item item-cloud">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>
                                                    <i class="material-icons add"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="floating-share floating-full-circle">
                                        <button class="float-trigger float-btn">Kit
                                            {{--<i class="main-button material-icons build"></i>--}}
                                        </button>
                                        <ul class="share-items">
                                            <li class="floating-item item-cloud">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>vopsitorie
                                                    {{--<i class="material-icons alarm"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-cog">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>parbriz
                                                    {{--<i class="material-icons alarm_add"></i>--}}
                                                </a>
                                            </li>
                                            <li class="floating-item item-folder">
                                                <a href="javascript:void(0)" class="float-btn" data-ripple>tinichigerie
                                                    {{--<i class="material-icons alarm_off"></i>--}}
                                                </a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/moment.js') }}" defer></script>
    <script src="{{ asset('js/datetimepicker.min.js') }}" defer></script>
    <script type="text/javascript">
        $(function () {

//            $( "#adauga" ).on( "click", function() {
//                if($('#optiune-lucrare').val()!=""){
//                    var content = $('#optiune-lucrare').val().toLowerCase();
//                    $('#lucrari').append('<div class="estimated-option is-numbered-item">' + content.charAt(0).toUpperCase()+ content.slice(1) + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
//                    $('#optiune-lucrare').val("");
//                    $("input[name='lucrare-estimata']").prop('checked',false);
//                }
//            });
//
//            $(".canBeErased").on("click", '.rem', function () {
//                $(this).parent().remove();
//            });
//            $( ".type-of-service label" ).on( "click", function() {
//                $('#optiune-lucrare').val($.trim($( this ).text()));
//                $( "#adauga").trigger('click');
//            });

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
            $('.floating-full-circle button').float(0, 0, 84, 104, -45, 225, 1, 'build', 'bug_report');

            $('.share-items .floating-item').on('click', function () {
                var content = $.trim($('#optiune-lucrare').val()) + " " + $.trim($(this).parent().siblings().text()) + " " + $.trim($(this).text());
                $('#optiune-lucrare').val(content.trim());
                $(this).parent().siblings().trigger('click');
                $("#adauga").trigger('click');
            });

            //adauga lucrare from input
            $("#adauga").on("click", function () {
                if ($('#optiune-lucrare').val() != "") {
                    var content = $('#optiune-lucrare').val().toLowerCase();
                    $('#lucrari').append('<div class="estimated-option is-numbered-item">' + content.charAt(0).toUpperCase() + content.slice(1) + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
                    $('#optiune-lucrare').val("");
                    $("input[name='add-manopera']").prop('checked', false);
                }
            });
            //sterge input button
            $('#sterge').on('click', function () {
                $('#optiune-lucrare').val("");
                if ($('#adauga-manopera').is(':checked')) {
                    $('#adauga-manopera').trigger('click');
                    $("input[name='add-manopera']").prop('checked', false);
                } else {
                    $('#adauga-piese').trigger('click');
                }
            });

            //sterge lucrare button
            $(".canBeErased").on("click", '.rem', function () {
                $(this).parent().remove();
            });
            //scrols so that all options are visible
//            function scrollToInput(){
//                $('html,body').animate({
//                    scrollTop: $('#input-lucrare').offset().top
//                }, 500);
//            }
//            function scrollToButton(){
//                $('html,body').animate({
//                    scrollTop: $('#adauga-manopera').offset().top
//                }, 500);
//            }
            //initiates the addition process
            $("#adauga-manopera").on("click", function () {
                $('#alege-manopera').removeClass('d-none').addClass('zoomIn');
                $('#alege-piese').addClass('zoomOut');
                setTimeout(function () {
                    $('#alege-manopera').removeClass('zoomIn');
                    $('#alege-piese').addClass('d-none').removeClass('zoomOut');
                }, 700);
//                scrollToInput();
            });
            //initiates the addition process
            $("#adauga-piesa").on("click", function () {
                $('#alege-manopera').addClass('zoomOut');
                $('#alege-piese').removeClass('d-none').addClass('zoomIn');
                setTimeout(function () {
                    $('#alege-manopera').addClass('d-none').removeClass('zoomOut');
                    $('#alege-piese').removeClass('zoomIn');
                }, 700);
//                scrollToInput();
            });
//            for manopera field
            $(".manopera-field label").on("click", function () {
                $('#optiune-lucrare').val($.trim($(this).text()));
                $('#alege-manopera').addClass('zoomOut');
                $('#alege-piese').removeClass('d-none').addClass('zoomIn');
                setTimeout(function () {
                    $('#alege-manopera').addClass('d-none').removeClass('zoomOut');
                    $('#alege-piese').removeClass('zoomIn')
                }, 700);
//                scrollToInput();

            });
        });
    </script>
@stop
