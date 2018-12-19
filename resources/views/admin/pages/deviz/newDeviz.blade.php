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
                                    <a href="" class="cta cta-default btn-block da-text-primary">
                                        Adaugă Manoperă
                                        <small class="material-icons add"></small>
                                    </a>
                                </div>
                                <div class="flex-item">
                                    <a href="" class="cta cta-default btn-block da-text-primary">
                                        Adaugă Piesă
                                        <small class="material-icons add"></small>
                                    </a>
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
                                        <button class="cta cta-primary" id="adauga" data-ripple>Adaugă</button>
                                    </div>
                                </div>

                                <div class="form-options-list">
                                    <div class="form-radio form-big">
                                        <input type="radio" name="piesa" id="capota">
                                        <label for="capota">
                                            <span class="material-icons directions_car"></span>
                                            <span>Capotă</span>
                                        </label>
                                    </div>
                                    <div class="form-radio form-big">
                                        <input type="radio" name="piesa" id="aripa">
                                        <label for="aripa">
                                            <span class="material-icons local_car_wash"></span>
                                            <span>Aripă</span>
                                        </label>
                                    </div>
                                    <div class="form-radio form-big">
                                        <input type="radio" name="piesa" id="portiera">
                                        <label for="portiera">
                                            <span class="material-icons local_taxi"></span>
                                            <span>Portieră</span>
                                        </label>
                                    </div>
                                    <div class="form-radio form-big">
                                        <input type="radio" name="piesa" id="parbriz">
                                        <label for="parbriz">
                                            <span class="material-icons local_shipping"></span>
                                            <span>Parbriz</span>
                                        </label>
                                    </div>
                                    <div class="form-radio form-big">
                                        <input type="radio" name="piesa" id="geam">
                                        <label for="geam">
                                            <span class="material-icons local_shipping"></span>
                                            <span>Geam</span>
                                        </label>
                                    </div>
                                    <div class="form-radio form-big">
                                        <input type="radio" name="piesa" id="kit">
                                        <label for="kit">
                                            <span class="material-icons widgets"></span>
                                            <span>Kituri</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-item"></div>
                        <div class="flex-item"></div>
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
                        <div class="flex-item">
                            <div id="lucrari" class="has-numbered-items"></div>
                        </div>
                        <div class="flex-item">
                            <h5>Piese de schimb / Materiale:</h5>
                        </div>

                        <div class="flex-item">
                            <div id="piese" class="has-numbered-items"></div>
                        </div>

                        <div class="flex-item">
                            <h1>First try</h1>
                            <div class="floating-share floating-full-circle">
                                <button class="float-trigger float-btn"><i class="main-button material-icons build"></i></button>
                                <ul class="share-items">
                                    <li class="floating-item item-cloud">
                                        <a href="javascript:void(0)" class="float-btn" data-ripple >dreapta față<i class="material-icons alarm"></i></a>
                                    </li>
                                    <li class="floating-item item-cog">
                                        <a href="javascript:void(0)" class="float-btn" data-ripple >stânga față<i class="material-icons alarm_add"></i></a>
                                    </li>
                                    <li class="floating-item item-folder">
                                        <a href="javascript:void(0)" class="float-btn" data-ripple >dreapta spate<i class="material-icons alarm_off"></i></a>
                                    </li>
                                    <li class="floating-item item-paper-plane">
                                        <a href="javascript:void(0)" class="float-btn" data-ripple >stânga spate<i class="material-icons alarm_on"></i></a>
                                    </li>
                                </ul>
                            </div>


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
            $('.floating-full-circle button').float(0, 0, 75, 75, -45, 225, 1, 'build', 'bug_report');
            $('.share-items .floating-item').on('click',function(){
                $('.floating-full-circle button').trigger('click');
            });


            $("#adauga").on("click", function () {
                if ($('#optiune-lucrare').val() != "") {
                    $('#piese').append('<div class="estimated-option is-numbered-item">' + $('#optiune-lucrare').val() + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
                    $('#lucrari').append('<div class="estimated-option is-numbered-item">' + $('#optiune-lucrare').val() + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
                    $('#optiune-lucrare').val("");
                    $('.form-radio input').prop('checked', false);
                }
            });

            $("#lucrari").on("click", '.rem', function () {
                $(this).parent().remove();
            });
            $(".type-of-service label").on("click", function () {
                $('#optiune-lucrare').val($.trim($(this).text()));
            });
        });
    </script>
@endsection