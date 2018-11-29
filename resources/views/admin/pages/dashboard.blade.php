<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 11/26/2018
 * Time: 5:15 PM
 */ ?>
@extends('layouts.admin')
@section('title')
    Dashboard
@stop
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="da-card">
                        <div class="da-card-header">
                            <h2>Typography - explained</h2>
                        </div>
                        <div class="da-card-body">
                        <p>Entire typography is fluid. This means that it automatically changes font-size basesd on device viewport width</p>
                    <br>
                    <br>
                    <blockquote>
                        The beauty of type lies in its utility; <em>Prettiness</em> without readability serves neither author <em>nor</em> reader.
                        <span>James Felici</span>
                    </blockquote>

                    <small>Heading 1</small>
                    <h1>The quick brown fox jumps over the lazy dog</h1>
                    <hr>
                    <small>Heading 2</small>
                    <h2>The quick brown fox jumps over the lazy dog</h2>
                    <hr>
                    <small>Heading 3</small>
                    <h3>The quick brown fox jumps over the lazy dog</h3>
                    <hr>
                    <small>Heading 4</small>
                    <h4>The quick brown fox jumps over the lazy dog</h4>
                    <hr>
                    <small>Heading 5</small>
                    <h5>The quick brown fox jumps over the lazy dog</h5>
                    <hr>
                    <small>Heading 6</small>
                    <h6>The quick brown fox jumps over the lazy dog</h6>
                    <hr>
                    <small>Paragraph</small>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis risus tincidunt, iaculis risus ac, feugiat nulla. Nulla lobortis purus maximus turpis porta, et consequat erat aliquam. Vestibulum imperdiet, sapien at dictum cursus, elit mi volutpat arcu, non ornare orci turpis lobortis libero. In sollicitudin nisi sit amet iaculis egestas. In vehicula cursus mattis. Duis ullamcorper pulvinar urna vel egestas. Duis in dapibus lectus. Phasellus fringilla orci vitae risus lobortis, sed sodales dolor mollis. Donec auctor lobortis velit sed scelerisque. Sed et leo ut mauris imperdiet dignissim nec ac est. Etiam at nisi et eros malesuada mollis eget ut orci. Nunc in eleifend urna.
                    </p>
                    <p>
                        Mauris eget dapibus sem, in aliquam lectus. Duis cursus, magna a lacinia auctor, mauris nibh efficitur sem, eget bibendum enim odio a sapien. Proin vehicula non felis ac ultricies. Donec consequat est ut magna aliquam convallis. Fusce elementum justo quis congue ullamcorper. Nunc sodales mi est, pharetra consequat nisl volutpat eu. Sed fringilla finibus orci quis tincidunt. Nullam ullamcorper congue velit vitae pellentesque. Donec odio diam, semper eget lectus in, vestibulum tincidunt arcu. Suspendisse ullamcorper lorem ut ipsum fermentum aliquam. Ut non dapibus metus, nec sollicitudin ipsum. Donec pharetra sem ligula, at suscipit orci facilisis a. Mauris tortor ligula, condimentum a sodales non, vestibulum a erat.
                    </p>
                    <hr>
                    <blockquote>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis risus tincidunt, iaculis risus ac, feugiat nulla. Nulla lobortis purus maximus turpis porta, et consequat erat aliquam.
                        <span>James Felici</span>
                    </blockquote>
                    <hr>
                    <small>ems</small>
                    <p>
                        <em>This is italic font</em>
                    </p>
                    <hr>
                    <small>Bold</small>
                    <p>
                        <strong>This is bold font</strong>
                    </p>
                    <hr>
                    <small>Anchors</small>
                    <p>
                        <a href="#!">This is a link</a>
                    </p>
                        </div>
                        <div class="da-card-footer">
                            <a href="#!" data-ripple class="cta cta-primary">Button</a>   
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-sm">
                <div class="da-card" id="buttons">
                <div class="da-card-header">
                    <h2>Buttons & Links</h2>
                </div>
                <div class="da-card-body">
                        <div class="flex-list fle-wrap flex-vertical-top">
                            <div class="flex-item width-xs-100 width-sm-60">
                                    <ul class="flex-list flex-1 flex-wrap">
                                            <li class="flex-item">
                                                <p>Buttons</p>
                                                <ul class="flex-list flex-wrap">
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-default">Button</a>
                                                    </li>
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-primary">Button</a>
                                                    </li>
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-accent">Button</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="flex-item">
                                                <p>Buttons small</p>
                                                <ul class="flex-list flex-wrap">
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-small cta-default">Button</a>
                                                    </li>
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-small cta-primary">Button</a>
                                                    </li>
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-small cta-accent">Button</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="flex-item">
                                                <p>Buttons large</p>
                                                <ul class="flex-list flex-wrap">
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-large cta-default">Button</a>
                                                    </li>
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-large cta-primary">Button</a>
                                                    </li>
                                                    <li class="flex-item">
                                                        <a href="javascript:void(0)" data-ripple class="cta cta-large cta-accent">Button</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                            </div>
                        </div>

                    
                </div>
                
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="da-card">
                        <div class="da-card-header">
                            <h1 class="da-text-primary">Forms</h1>
                        </div>
                        <div class="da-card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> 
                            <div>
                            <div class="form-radio">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Default radio
                                </label>
                                </div>
                                <div class="form-radio">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Second default radio
                                </label>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="cta cta-accent">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
