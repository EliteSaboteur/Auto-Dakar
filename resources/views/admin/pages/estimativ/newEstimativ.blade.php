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
                    <h3>Estimativ</h3>
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

                                <input type="text" id="data-comanda" name="deliveryDate" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#data-comanda">
                                <label for="data-comanda">
                                    <span class="placeholder">Dată comandă:</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group has-float-label">
                                <input type="text" class="form-control" id="numar-comanda" aria-describedby="emailHelp"
                                       min="10"
                                       required="required" placeholder="&nbsp;">
                                <label for="numar-comanda">
                                    <span class="placeholder">Lucrări</span>
                                    <span class="error">Numele nu trebuie sa contina spatii albe!</span>
                                </label>
                                <span class="material-icons icon assignment"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="da-card">
                <div class="da-card-header">
                    <h3>Lucrări estimate</h3>
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
                                {{--<input type="text" id="data-comanda" name="deliveryDate" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#data-comanda">--}}
                                <input type="text" id="data-estimata" name="data-estimata" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#data-estimata">
                                <label for="data-estimata">
                                    <span class="placeholder">Dată estimată:</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1">
                                    <label class="form-check-label" for="check1">Check me out</label>
                                </div>
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
    <script src="{{ asset('js/datetimepicker.min.js') }}" defer></script>
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
