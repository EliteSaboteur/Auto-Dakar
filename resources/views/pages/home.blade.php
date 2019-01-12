<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 10/29/2018
 * Time: 1:20 PM
 */?>

@extends('layouts.default')
@section('title')
    Acasă
@stop
@section('content')

<!-- HERO -->
<div class="da-hero da-background-dark da-section-padding">
    <div class="da-hero-image">
        <img src="" alt="">
    </div>
    <div class="da-hero-text text-center">
        <h1 class="da-hero-title da-text-light">Auto Dakar</h1>
        <p class="da-hero-tagline da-text-light">un motto sau o propozitie relevanta de introducere. Eventual o intrebare</p>
    </div>
</div>

<!-- QUICK ACCESS -->

<div class="da-quick-access da-section-padding da-background-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 margin-auto">
                <ul class="flex-list flex-center flex-3">
                    <li class="flex-item relative">
                        <div class="da-quick-access-card da-card relative ratio-square">
                            <div class="da-card-body absolute pos-bottom-center">
                                <div class="flex-list flex-full">
                                    <i class="da-icon-user"></i>
                                    <p>Despre Noi</p>
                                </div>
                            </div>
                        </div>
                        <a href="/despre-noi" class="block absolute absolute-full"></a>
                    </li>
                    <li class="flex-item relative">
                        <div class="da-quick-access-card da-card relative ratio-square">
                            <div class="da-card-body absolute pos-bottom-center">
                                <div class="flex-list flex-full">
                                    <i class="da-icon-user"></i>
                                    <p>Servicii</p>
                                </div>
                            </div>
                        </div>
                        <a href="/despre-noi" class="block absolute absolute-full"></a>
                    </li>
                    <li class="flex-item relative">
                        <div class="da-quick-access-card da-card relative ratio-square">
                            <div class="da-card-body absolute pos-bottom-center">
                                <div class="flex-list flex-full">
                                    <i class="da-icon-user"></i>
                                    <p>Contact</p>
                                </div>
                            </div>
                        </div>
                        <a href="/despre-noi" class="block absolute absolute-full"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- PROMOTIONS -->

<div class="da-promotions da-background-primary da-section-padding">
    <div class="container">
        <div class="row">
        <div class="col">
                <div class="da-card da-image-card da-background-dark">
                    <div class="da-card-image">
                        <i class="da-icon icon-round"></i>
                    </div>
                    <div class="da-card-body text-center">
                        <h4 class="da-card-title da-text-primary">Schimbare parbriz Dacia</h4>
                        <p class="da-card-description da-text-light">Lorem ipsum platea litora convallis habitant pretium nunc netus, sem purus </p>
                        <h5 class="da-price da-text-accent">500lei</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="da-card da-image-card da-background-dark">
                    <div class="da-card-image">
                        <i class="da-icon icon-round"></i>
                    </div>
                    <div class="da-card-body text-center">
                        <h4 class="da-card-title da-text-primary">Schimbare parbriz Dacia</h4>
                        <p class="da-card-description da-text-light">Lorem ipsum platea litora convallis habitant pretium nunc netus, sem purus </p>
                        <h5 class="da-price da-text-accent">500lei</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="da-card da-image-card da-background-dark">
                    <div class="da-card-image">
                        <i class="da-icon icon-round"></i>
                    </div>
                    <div class="da-card-body text-center">
                        <h4 class="da-card-title da-text-primary">Schimbare parbriz Dacia</h4>
                        <p class="da-card-description da-text-light">Lorem ipsum platea litora convallis habitant pretium nunc netus, sem purus </p>
                        <h5 class="da-price da-text-accent">500lei</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ABOUT US -->

<div class="da-about da-single-card da-section-padding da-background-light-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="da-card da-card-ful">
                    <div class="da-card-image da-background-dark">
                        
                    </div>
                    <div class="da-card-body">
                        <h1 class="da-card-title">DESPRE NOI</h1>
                        <div class="da-card-description">
                            <p>Scurte paragrafe descriptive despre istoria firmei, , echipamente, targetul companiei.</p>
                            <p>Scurte paragrafe descriptive despre istoria firmei, , echipamente, targetul companiei.</p>
                            <p>Scurte paragrafe descriptive despre istoria firmei, , echipamente, targetul companiei.</p>
                            <p>Scurte paragrafe descriptive despre istoria firmei, , echipamente, targetul companiei.</p>
                            <p>Scurte paragrafe descriptive despre istoria firmei, , echipamente, targetul companiei.</p>
                        </div>
                        <a href="#!" data-ripple class="cta cta-default">Contacteaza-ne</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SERVICES -->

<div class="da-services da-background-accent da-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-1">
                <div class="row">
                    <div class="col">
                        <div class="da-services-cards">
                            <div class="da-service-card da-background-dark ratio-square relative">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="da-services-cards">
                            <div class="da-service-card da-background-dark ratio-half relative">a</div>
                            <div class="da-service-card da-background-dark ratio-half relative">a</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TESTIMONIALS -->

<div class="da-testimonials da-section-padding da-background-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="section-title">Testimoniale</h1>
                <div class="testimonials-slider padding-vertical-50" data-initialize="testimonials">
                    <div class="testimonial-slide">
                        <div class="da-testimonial-author flex-list flex-space-between">
                            <div class="flex-item"><strong>Autor testimonial</strong></div>
                            <div class="flex-item da-text-warning">★★★★★</div>
                        </div>
                        <div class="da-testimonial-message">
                            <p><i>Mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj  testimonial mesaj testimonial</i></p>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="da-testimonial-author flex-list flex-space-between">
                            <div class="flex-item"><strong>Autor testimonial</strong></div>
                            <div class="flex-item da-text-warning">★★★★★</div>
                        </div>
                        <div class="da-testimonial-message">
                            <p><i>Mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj  testimonial mesaj testimonial</i></p>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="da-testimonial-author flex-list flex-space-between">
                            <div class="flex-item"><strong>Autor testimonial</strong></div>
                            <div class="flex-item da-text-warning">★★★★★</div>
                        </div>
                        <div class="da-testimonial-message">
                            <p><i>Mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj  testimonial mesaj testimonial</i></p>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="da-testimonial-author flex-list flex-space-between">
                            <div class="flex-item"><strong>Autor testimonial</strong></div>
                            <div class="flex-item da-text-warning">★★★★★</div>
                        </div>
                        <div class="da-testimonial-message">
                            <p><i>Mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj  testimonial mesaj testimonial</i></p>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="da-testimonial-author flex-list flex-space-between">
                            <div class="flex-item"><strong>Autor testimonial</strong></div>
                            <div class="flex-item da-text-warning">★★★★★</div>
                        </div>
                        <div class="da-testimonial-message">
                            <p><i>Mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj  testimonial mesaj testimonial</i></p>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="da-testimonial-author flex-list flex-space-between">
                            <div class="flex-item"><strong>Autor testimonial</strong></div>
                            <div class="flex-item da-text-warning">★★★★★</div>
                        </div>
                        <div class="da-testimonial-message">
                            <p><i>Mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj testimonial mesaj  testimonial mesaj testimonial</i></p>
                        </div>
                    </div>
                </div>
                <div class="testimonials-nav padding-vertical-15">
                    <div class="flex-list flex-center">
                        <div class="flex-item">
                            <i class="cta cta-default cta-rounded prev"> < </i>
                        </div>
                        <div class="flex-item">
                            <i class="cta cta-default cta-rounded next"> > </i>
                        </div>
                    </div>
                </div>
                <div class="da-testimonials-more flex-list flex-center padding-vertical-15">
                    <div class="flex-item">
                        <a href="" class="cta cta-primary">mai multe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->


@section('scripts')
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript">
        $('[data-initialize="testimonials"]').slick({
        dots: false,
        infinite: true,
        swipeToSlide: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.da-testimonials .prev'),
        nextArrow:  $('.da-testimonials .next'),
        responsive: [
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
        });

    </script>

@stop


@endsection
			