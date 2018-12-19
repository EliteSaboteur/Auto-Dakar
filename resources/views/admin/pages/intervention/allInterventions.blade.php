<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 11/26/18
 * Time: 9:20 PM
 */ ?>
@extends('layouts.admin')
@section('title')
    Interventii
@stop
@section('toggle_navbar')
    open
@endsection
@section('content')


    <div class="divider margin-bottom-30"></div>

    <div id="interventionsGrid">
        <div class="grid-view-mode">
            <div class="filter-title">
                <p>Mod de vizualizare </p>
            </div>
            <ul class="grid-view-mode-list">
                <li class="grid-view-mode-list-item active grid-mode-switcher">
                    <i class="material-icons">view_module</i>
                </li>
                <li class="grid-view-mode-list-item grid-mode-switcher">
                    <i class="material-icons">view_list</i>
                </li>
            </ul>
        </div>
        <div class="grid-content" id="interventionsGridContent" data-view="grid">

            <!-- This PHP is used just to create multiple cards with same content -->
            <!-- For the purpose of showing the animation -->
            <?php

            $card = "<div class='intervention-card da-card'>
                    <div class='da-card-body'>
                        <ul class='flex-list info-properties'>
                            <li class='flex-item' data-title='Nr Auto'>AB 15 FLN</li>
                            <li class='flex-item' data-title='Marca & Model'>VW Golf 4</li>
                            <li class='flex-item' data-title='Data estimata'>22.10.2018</li>
                        </ul>

                    </div>
                    <div class='da-card-footer da-background-primary padding-all-0'>
                    <div class='cta-button-group text-center'>
                            <button class='cta cta-link cta-small da-text-light btn-block'>Vezi detalii</button>
                        </div>
                    </div>
                    <a href='intervention/AB%2015%20FLN' class='absolute absolute-full overlay-link' data-ripple></a>
                </div>";

            echo str_repeat($card, 50);

            ?>

                    <!-- I commented out the real card-markup -->
            <!-- The above one is just for presnetation  -->
            <!-- But they are the same    -->

            <!-- <div class="intervention-card da-card">
                <div class="da-card-body">
                    <ul class="flex-list info-properties">
                        <li class="flex-item" data-title="Nr Auto">AB 15 FLN</li>
                        <li class="flex-item" data-title="Marca & Model">VW Golf 4</li>
                        <li class="flex-item" data-title="Data estimata">22.10.2018</li>
                    </ul>
                    <div class='cta-button-group text-left'>
                            <button class='cta cta-link cta-small btn-block'>Vezi detalii</button>
                    </div>
                </div>
                <a href="{{route('intervention.show',['id'=>'AB 15 FLN'])}}" class="absolute absolute-full overlay-link" data-ripple></a>
            </div> -->
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function ($) {

            var switcher = $('.grid-mode-switcher'),
                    grid = $('#interventionsGrid .grid-content'),
                    card = $(".intervention-card");

            // pre add animation delays

            var delay = 50;
            card.each(function () {

                $(this).css('animation-delay', delay + 'ms');
                delay += 50;

            });


            // switch grid view mode

            switcher.on('click', function (e) {

                if ($(this).hasClass('active')) {

                    e.preventDefault();

                } else {

                    changeView();
                    switcherActive($(this));

                }
            });


            function changeView() {
                var currentState = grid.attr('data-view');
                if (currentState == "grid") {
                    card.removeClass('animate-list-in animate-grid-in is-animating-grid').addClass('is-animating-list');
                } else {
                    card.removeClass('animate-list-in animate-grid-in is-animating-list').addClass('is-animating-grid');
                }

                setTimeout(function () {
                    if (currentState == "grid") {
                        grid.attr('data-view', 'list');
                        card.attr('data-view', 'list').removeClass('animate-grid-in').addClass('animate-list-in');
                    } else {
                        grid.attr('data-view', 'grid');
                        card.attr('data-view', 'grid').removeClass('animate-list-in').addClass('animate-grid-in');
                    }
                }, 700);

                setTimeout(function () {
                    card.removeClass('is-animating-list is-animating-grid');
                }, 800);

            }

            function switcherActive(el) {

                switcher.removeClass('active');
                el.addClass('active');

            }

        });
    </script>
@stop
