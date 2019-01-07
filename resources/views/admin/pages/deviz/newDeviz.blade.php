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
                                        <input type="radio" name="adauga" id="adauga-manopera" checked>
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
                        <div class="flex-item">
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
                        <div class="flex-item" id="alege-manopera">
                            <h5>Manoperă</h5>
                            <div class="form-options-list">
                                <div class="floating-share floating-full-circle">
                                    <button class="float-trigger float-btn">Înlocuit
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
                                    <button class="float-trigger float-btn">Vopsit
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
                                    <button class="float-trigger float-btn">Reparat
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
                            </div>
                        </div>
                        <div class="flex-item" id="alege-piese">
                            <h5>Piese</h5>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('.floating-full-circle button').float(0, 0, 84, 104, -45, 225, 1, 'build', 'bug_report');

            $('.share-items .floating-item').on('click', function () {
                $('#optiune-lucrare').val($.trim($('#optiune-lucrare').val())+" "+$.trim($(this).parent().siblings().text()) + " " + $.trim($(this).text()));
                $(this).parent().siblings().trigger('click');
            });
//            $('.floating-full-circle button').focusout(function () {
////                $('.opened button').trigger('click');
////                alert($(event.target).attr('class'));
//                currentItem = $(this);
//                setTimeout(
//                        function()
//                        {
//                            if(!$('.float-btn').is(':focus')){
//                                currentItem.trigger('click');
//                            }
//                            //do something special
//                        }, 100);
//            });
            //adauga lucrare from input
            $("#adauga").on("click", function () {
                if ($('#optiune-lucrare').val() != "") {
                    var content = $('#optiune-lucrare').val().toLowerCase();
                    if ($('#adauga-manopera').is(':checked')) {
                        $('#manopera').append('<div class="estimated-option is-numbered-item">' + content.charAt(0).toUpperCase()+ content.slice(1) + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
                    } else {
                        $('#piese').append('<div class="estimated-option is-numbered-item">' + content.charAt(0).toUpperCase()+ content.slice(1) + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
                    }
                    $('#optiune-lucrare').val("");
//                    $('.form-radio input').prop('checked', false);
                }
            });
            //sterge input button
            $('#sterge').on('click',function(){
                $('#optiune-lucrare').val("");
            });

            //sterge lucrare button
            $(".canBeErased").on("click", '.rem', function () {
                $(this).parent().remove();
            });

//            for simple checkbox
//            $(".type-of-service label").on("click", function () {
//                $('#optiune-lucrare').val($.trim($(this).text()));
//            });
        });
    </script>
@endsection