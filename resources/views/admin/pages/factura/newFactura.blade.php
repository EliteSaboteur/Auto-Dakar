<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 12/11/18
 * Time: 8:12 AM
 */ ?>
@extends('layouts.admin')
@section('title')
    Emite factură
@stop
@section('content')
    <div class="divider margin-bottom-30"></div>
    <div class="row">
        <div class="col-sm-6">
            <div class="da-card">
                <div class="da-card-header">
                    <h3>Date Factură</h3>
                </div>
                <div class="da-card-body">
                    <div class="form-group has-float-label">
                        <input type="text" class="form-control" id="numar" aria-describedby="emailHelp" min="10"
                               required="required" placeholder="&nbsp;">
                        <label for="numar">
                            <span class="placeholder">Serie factură</span>
                            <span class="error">Numele nu trebuie sa contina spatii albe!</span>
                        </label>
                        <span class="material-icons icon assignment"></span>
                    </div>
                    <div class="form-group has-float-label">
                        <input type="text" class="form-control" id="numar" aria-describedby="emailHelp" min="10"
                               required="required" placeholder="&nbsp;">
                        <label for="numar">
                            <span class="placeholder">Număr factură</span>
                            <span class="error">Numele nu trebuie sa contina spatii albe!</span>
                        </label>
                        <span class="material-icons icon assignment"></span>
                    </div>
                    <div class="form-group has-float-label">
                        <input type="text" id="deliveryDate" name="deliveryDate" class="form-control">
                        <label for="deliveryDate">
                            <span class="placeholder">Data eliberării facturii:</span>
                        </label>
                        <div id="deliveryDatePicker"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="da-card">
                <div class="da-card-header">
                    <h3>Factură</h3>
                </div>
                <div class="da-card-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p>Cumărător: <strong>Gruian David</strong></p>
                            <p>Nr. reg.com/an.: <strong>AX 266255</strong></p>
                            <p>CUI: <strong>1980107256545</strong></p>
                            <p>Sediul: <strong>Str. București nr.56</strong></p>
                            <p>Județul: <strong>Alba</strong></p>
                            <p>Contul:  <strong>-</strong></p>
                            <p>Banca: <strong>-</strong></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p>Numele delegatului: <strong> Gruian David</strong></p>
                            <p>Buletinul/cartea de identitate
                                seria <strong>AX</strong> nr. <strong>266255</strong> eliberat(a)  <strong>SPCLEP ALBA IULIA</strong></p>
                            <p>Mijlocul de transport <strong>-</strong>
                                nr. <strong>-</strong></p>
                        </div>
                    </div>
                    <div class=" margin-bottom-30">
                        <hr>
                        <h4>Conținut Factură</h4>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p>Reparație auto (conform deviz nr. <strong>01</strong> din <strong>22.12.2019</strong>)</p>
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
            $('#deliveryDatePicker').datetimepicker({
                inline: true,
                sideBySide: true,
                stepping: 15,
                locale: 'ro',
                enabledHours: [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
                format: "DD MMMM YYYY HH:mm",
                minDate: moment().add('h', 2).toDate(),
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
            $('#deliveryDatePicker').on('dp.change', function (event) {
                var formatted_date = event.date.format('DD MMMM YYYY HH:mm');
                $('#deliveryDate').val(formatted_date);
            });
        });
    </script>
@stop
