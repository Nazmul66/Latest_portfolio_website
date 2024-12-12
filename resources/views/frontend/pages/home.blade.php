@php
    $text1        = getSetting()->client_name;
    $client_name  = str_replace(' ', ' <br> ', $text1);

    $text2        = getSetting()->project_name;
    $project_name = str_replace(' ', ' <br> ', $text2);

    $text3        =  getSetting()->exp_name  ;
    $exp_name     = str_replace(' ', ' <br> ', $text3);

    $string       = getSetting()->multiple_name;
    $multi_names  = explode(',', $string);
@endphp


@extends('frontend.layouts.master')

@push('add-title')
    Home
@endpush

@push('add-css')
    
@endpush

@section('body-content')

<section class="hero section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="intro">
                    <div class="lg-box">
                        <div class="box1">
                            <div class="tow-items">
                                <div class="item1 box-shadwo">
                                    <div class="circle-item d-flex align-items-center justify-content-center">
                                        <h6><a href="{{ route('about') }}">About Us</a></h6>
                                    </div>
                                    <div class="text-center mt-30">
                                        <a href="{{ getSetting()->pdf }}" target="_blank">
                                            <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 34.2 32.3" xml:space="preserve"
                                                style="stroke-width: 2;">
                                                <line x1="0" y1="16" x2="33" y2="16"></line>
                                                <line x1="17.3" y1="0.7" x2="33.2" y2="16.5"></line>
                                                <line x1="17.3" y1="31.6" x2="33.5" y2="15.4"></line>
                                            </svg>
                                            <p class="fz-13 mt-15">Download CV</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item2">
                                    <div class="sub-item1 box-shadwo d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <h2 class="fw-700">{{ getSetting()->exp_year }}</h2>
                                            <p class="fz-13">Years of </br> Experaince</p>
                                        </div>
                                    </div>
                                    <div class="sub-item2 box-shadwo"></div>
                                </div>
                            </div>
                            <div class="item-down box-shadwo d-flex align-items-center">
                                <div>
                                    <div class="circle-item d-flex align-items-center justify-content-center">
                                        <a href="{{ route('service') }}">
                                            <svg class="arrow-right" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 34.2 32.3" xml:space="preserve"
                                                style="stroke-width: 2;">
                                                <line x1="0" y1="16" x2="33" y2="16"></line>
                                                <line x1="17.3" y1="0.7" x2="33.2" y2="16.5"></line>
                                                <line x1="17.3" y1="31.6" x2="33.5" y2="15.4"></line>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="ml-15"><a href="{{ route('service') }}">Our Services</a></h6>
                            </div>
                        </div>

                        <div class="box2">
                            <div class="item3 box-shadwo" style="background-image: url({{ getSetting()->profile_photo }});"></div>
                            <div class="item4 box-shadwo d-flex align-items-center">
                                <h6><a href="{{ route('portfolio') }}">Our Portfolio</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-boxs">
                        
                        <div class="item5 box-shadwo d-flex align-items-center justify-content-center">
                            <a href="{{ getSetting()->linkedin_url }}" class="icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                        
                        <div class="item6 box-shadwo d-flex align-items-center justify-content-center">
                            <a href="{{ getSetting()->facebook_url }}" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>

                        <div class="item7 box-shadwo d-flex align-items-center justify-content-center">
                            @if ( !empty(getSetting()->github_url) )
                                <a href="{{ getSetting()->github_url }}" class="icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            @else
                                <a href="{{ getSetting()->instagram_url }}" class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="author-profile">
                    <div class="author-img">
                        <div class="img">
                            <img src="{{ asset(getSetting()->profile_photo) }}" alt="">
                        </div>
                    </div>
                    <div class="author-info">
                        <div class="text-center">
                            <span class="main-color sub-title mb-10">{{ getSetting()->first_skill }}</span>
                            <h4 class="fw-500">Hi, I'm {{ $multi_names[0] }}</h4>
                        </div>
                        <div class="social mt-20">
                            <a href="{{ getSetting()->linkedin_url }}" class="icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="{{ getSetting()->facebook_url }}" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            @if ( !empty(getSetting()->github_url) )
                                <a href="{{ getSetting()->github_url }}" class="icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            @else
                                <a href="{{ getSetting()->instagram_url }}" class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="butns mt-30">
                        <a href="{{ route('contact') }}" class="inf-butn" data-scroll-nav="4">
                            <span>Contact Us</span>
                        </a>
                        <a href="{{ asset(getSetting()->pdf) }}" class="inf-butn" target="_blank">
                            <span>Download CV</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 valign">
                <div class="content">
                    <h5 class="cd-headline slide">
                        <span>Hello, I’m</span>
                        <span class="cd-words-wrapper main-color">
                            @foreach ($multi_names as $item)
                                <b class="{{ $loop->first ? 'is-visible' : '' }}">{{ $item }}</b>
                            @endforeach
                        </span>
                    </h5>

                    <h1>I’m a {{ getSetting()->first_skill }} and <span class="bord">{{ getSetting()->second_skill }}</span> Based in {{ getSetting()->location }}.
                    </h1>
                    <p class="text">{{ getSetting()->description }}</p>
                    <div class="stauts mt-50 pt-50 bord-thin-top">
                        <div class="d-flex align-items-center">
                            <div class="mr-40">
                                <div class="d-flex align-items-center">
                                    <h2>{{ getSetting()->project_count ?? 50 }}</h2>
                                    <p>{!! $project_name !!}</p>
                                </div>
                            </div>

                            <div class="mr-40">
                                <div class="d-flex align-items-center">
                                    <h2>{{ getSetting()->client_count ?? 50 }}</h2>
                                    <p>{!! $client_name !!}</p>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="butn-presv">
                                    <a href="{{ route('contact') }}" class="butn butn-md butn-bord radius-5 skew">
                                        <span>Hire Me!</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@push('add-js')
    
@endpush