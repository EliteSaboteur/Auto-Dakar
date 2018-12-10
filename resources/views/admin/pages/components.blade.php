<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 11/26/2018
 * Time: 5:15 PM
 */ ?>
@extends('layouts.admin')
@section('title')
    Components
@stop
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="da-card admin-hero da-background-dark padding-all-30">
                <div class="da-card-header">
                    <h1 class="da-text-light-grey text-center">AutoDakar - @yield('title')</h1>
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
                    <h3 class="text-center">Adauga Interventie </h3>
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
                            <input type="text" class="form-control" id="inputTypeText" aria-describedby="emailHelp" min="10" required="required" placeholder="&nbsp;">
                            <label for="inputTypeText">
                                <span class="placeholder">Utilizator</span>
                                <span class="error">Numele trebuie sa aiba minim 10 caractere</span>
                            </label>
                            <span class="material-icons icon perm_identity"></span>
                        </div>

                        <div class="form-group has-float-label">
                            <input type="email" class="form-control" id="inputTypeEmail" aria-describedby="emailHelp" required="required" placeholder="&nbsp;">
                            <label for="inputTypeEmail">
                                <span class="placeholder">Adresa de email</span>
                                <span class="error">Adresa introdusa nu este valida</span>
                            </label>
                            <span class="material-icons icon mail_outline"></span>
                        </div>

                        <div class="form-group has-float-label">
                            <input type="password" class="form-control" id="inputTypePassword" aria-describedby="emailHelp" pattern=".{10,}" required="required" placeholder="&nbsp;">
                            <label for="inputTypePassword">
                                <span class="placeholder">Parola</span>
                                <span class="error">Parola nu este suficient de puternica</span>
                            </label>
                            <span class="material-icons icon lock_outline"></span>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group has-float-label">
                                    <select class="selectpicker" id="select" title="Selecteaza">
                                        <option value="audi">Audi</option>
                                        <option value="bmw">BMW</option>
                                        <option value="dacia">Dacia</option>
                                        <option value="volvo">Volvo</option>
                                    </select>
                                    <label for="select">
                                        <span class="placeholder">Marca</span>
                                        <span class="error">Acest camp este obligatoriu</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group has-float-label">
                                    <select class="selectpicker" id="select2" title="Selecteaza">
                                        <option value="model1">Model </option>
                                        <option value="model2">Model </option>
                                        <option value="model3">Model </option>
                                        <option value="model3">Model </option>
                                    </select>
                                    <label for="select2">
                                        <span class="placeholder">Model</span>
                                        <span class="error">Acest camp este obligatoriu</span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group has-float-label">
                            <textarea name="textarea" id="textarea" rows="3" class="form-control" placeholder="&nbsp;"></textarea>
                            <label for="textarea">
                                <span class="placeholder">Detaliile comenzii</span>
                                <span class="error">Mesajul nu poate fi gol</span>
                            </label>
                            <span class="material-icons icon message"></span>
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
        <div class="col-sm-12 col-md-6">
            <div class="da-card">
                <div class="da-card-header">
                    <h4 class="da-card-title">Checkboxes and other form fields</h4>
                </div>
                <div class="da-card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Checkboxes</h5>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="check1">
                                        <label class="form-check-label" for="check1">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group form-check">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="check2">
                                        <label class="form-check-label" for="check2">Check me out</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider margin-bottom-30"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Radio buttons</h5>
                                <div class="row">
                                    <div class="form-group col">
                                        <div class="form-radio">
                                            <input type="radio" name="radio" class="form-check-input" id="radio1">
                                            <label class="form-check-label" for="radio1">Pick me</label>
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <div class="form-radio">
                                            <input type="radio" name="radio" class="form-check-input" id="radio2">
                                            <label class="form-check-label" for="radio2">Or me</label>
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <div class="form-radio">
                                            <input type="radio" name="radio" class="form-check-input" id="radio3">
                                            <label class="form-check-label" for="radio3">Never both</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider margin-bottom-30"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Date picker</h5>
                                <div class="form-group has-float-label">
                                    <input type="text" id="deliveryDate" name="deliveryDate" class="form-control">
                                    <label for="deliveryDate">
                                        <span class="placeholder">Data estimativa a finalizarii executiei:</span>
                                    </label>
                                    <div id="deliveryDatePicker"></div>
                                </div>
                            </div>
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
            $('#deliveryDatePicker').on('dp.change', function(event) {
                var formatted_date = event.date.format('DD MMMM YYYY HH:mm');
                $('#deliveryDate').val(formatted_date);
            });
        });
    </script>
@stop


