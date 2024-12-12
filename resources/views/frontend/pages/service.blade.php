@extends('frontend.layouts.master')

@push('add-title')
    Home
@endpush

@push('add-css')
    
@endpush

@section('body-content')

    <!-- ==================== Start Services ==================== -->

    <section class="services section-padding">
        <div class="container with-pad">

            @if ( $service->is_active == 1 )
                <div class="sec-head mb-80">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="d-inline-block">
                                <div class="sub-title-icon d-flex align-items-center">
                                    <span class="icon pe-7s-bell"></span>
                                    <h6>{{ $service->title }}</h6>
                                </div>
                            </div>
                            <h3>{{ $service->subtitle }}</h3>
                        </div>
                    </div>
                </div>
            @endif


            <div class="row">
                @foreach ($services as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="item mb-30">
                            <div class="cont">
                                <div class="d-flex align-items-center mb-30">
                                    <div>
                                        <span class="icon-img-50 mr-40">
                                            <img src="{{ asset($row->image) }}" alt="">
                                        </span>
                                    </div>
                                    <div>
                                        <span class="opacity-7 fz-13 mb-5">{{ $row->total_project }} Projects</span>
                                        <h5 class="fz-20">{{ $row->title }}</h5>
                                    </div>
                                </div>
                                <p>{{ $row->short_desc }}</p>
                                {{-- <a href="#0" class="mt-30">
                                    <span>Read More</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="col-lg-4 col-md-6">
                    <div class="item mb-30">
                        <div class="cont">
                            <div class="d-flex align-items-center mb-30">
                                <div>
                                    <span class="icon-img-50 mr-40">
                                        <img src="{{ asset('frontend/assets/imgs/serv-img/2.png') }}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <span class="opacity-7 fz-13 mb-5">8 Projects</span>
                                    <h5 class="fz-20">Web Design</h5>
                                </div>
                            </div>
                            <p>There are many variations of passages of available but to the majority have suffered
                                but
                                the into majority.</p>
                            <a href="#0" class="mt-30">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-30">
                        <div class="cont">
                            <div class="d-flex align-items-center mb-30">
                                <div>
                                    <span class="icon-img-50 mr-40">
                                        <img src="{{ asset('frontend/assets/imgs/serv-img/3.png') }}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <span class="opacity-7 fz-13 mb-5">8 Projects</span>
                                    <h5 class="fz-20">Web Design</h5>
                                </div>
                            </div>
                            <p>There are many variations of passages of available but to the majority have suffered
                                but
                                the into majority.</p>
                            <a href="#0" class="mt-30">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item md-mb30">
                        <div class="cont">
                            <div class="d-flex align-items-center mb-30">
                                <div>
                                    <span class="icon-img-50 mr-40">
                                        <img src="{{ asset('frontend/assets/imgs/serv-img/4.png') }}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <span class="opacity-7 fz-13 mb-5">8 Projects</span>
                                    <h5 class="fz-20">Web Design</h5>
                                </div>
                            </div>
                            <p>There are many variations of passages of available but to the majority have suffered
                                but
                                the into majority.</p>
                            <a href="#0" class="mt-30">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item sm-mb30">
                        <div class="cont">
                            <div class="d-flex align-items-center mb-30">
                                <div>
                                    <span class="icon-img-50 mr-40">
                                        <img src="{{ asset('frontend/assets/imgs/serv-img/1.png') }}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <span class="opacity-7 fz-13 mb-5">8 Projects</span>
                                    <h5 class="fz-20">Web Design</h5>
                                </div>
                            </div>
                            <p>There are many variations of passages of available but to the majority have suffered
                                but
                                the into majority.</p>
                            <a href="#0" class="mt-30">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <div class="cont">
                            <div class="d-flex align-items-center mb-30">
                                <div>
                                    <span class="icon-img-50 mr-40">
                                        <img src="{{ asset('frontend/assets/imgs/serv-img/1.png') }}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <span class="opacity-7 fz-13 mb-5">8 Projects</span>
                                    <h5 class="fz-20">Web Design</h5>
                                </div>
                            </div>
                            <p>There are many variations of passages of available but to the majority have suffered
                                but
                                the into majority.</p>
                            <a href="#0" class="mt-30">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start Pricing ==================== -->

    {{-- <section class="price section-padding pt-0">
        <div class="container with-pad">
            <div class="sec-head mb-80">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-rocket"></span>
                                <h6>My Pricing</h6>
                            </div>
                        </div>
                        <h3>Amazing Pricing For Your Projects</h3>
                        <p class="mt-15">We get involved with clients to solve their design problems and provide
                            more-value™️ to them.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="item md-mb50">
                        <h6 class="type">Standard</h6>
                        <div class="content d-flex align-items-center">
                            <div class="amount mr-40">
                                <h2 class="main-color">$19</h2>
                                <a href="#0" class="butn butn-md butn-bord radius-30 text-u text-center mt-30">
                                    <span>Sign Up</span>
                                </a>
                            </div>
                            <div class="feat">
                                <ul class="rest">
                                    <li><i class="fas fa-check"></i> <span>Need your wireframe</span></li>
                                    <li><i class="fas fa-check"></i> <span>Design with Figma, Framer</span>
                                    </li>
                                    <li><i class="fas fa-check"></i> <span>Implement with Webflow, React,
                                            WordPress, Laravel/PHP</span></li>
                                    <li><i class="fas fa-check"></i> <span>Support 6 months</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <h6 class="type">Premium</h6>
                        <div class="content d-flex align-items-center">
                            <div class="amount mr-40">
                                <h2 class="main-color">$59</h2>
                                <a href="#0" class="butn butn-md butn-bord radius-30 text-u text-center mt-30">
                                    <span>Sign Up</span>
                                </a>
                            </div>
                            <div class="feat">
                                <ul class="rest">
                                    <li><i class="fas fa-check"></i> <span>Need your wireframe</span></li>
                                    <li><i class="fas fa-check"></i> <span>Design with Figma, Framer</span>
                                    </li>
                                    <li><i class="fas fa-check"></i> <span>Implement with Webflow, React,
                                            WordPress, Laravel/PHP</span></li>
                                    <li><i class="fas fa-check"></i> <span>Support 6 months</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ==================== End Pricing ==================== -->



    <!-- ==================== Start Brands ==================== -->

    <section class="brands section-padding pt-0">
        <div class="container with-pad">
            <div class="text-center">
                <h6><span class="main-color">Worldwide client satisfaction</span> trusted us </h6>
            </div>

            <div class="row">
                @foreach ($brands as $row)
                    <div class="col-sm-4 col-md-3 col-lg-2 col-6">
                        <div class="item">
                            <div class="img icon-img-100">
                                <a href="{{ asset($row->image) }}">
                                    <img src="{{ asset($row->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="col-sm-4 col-md-3 col-lg-2 col-6">
                    <div class="item">
                        <div class="img icon-img-100">
                            <a href="#0">
                                <img src="{{ asset('frontend/assets/imgs/brands/b2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-2 col-6">
                    <div class="item">
                        <div class="img icon-img-100">
                            <a href="#0">
                                <img src="{{ asset('frontend/assets/imgs/brands/b3.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-2 col-6">
                    <div class="item">
                        <div class="img icon-img-100">
                            <a href="#0">
                                <img src="{{ asset('frontend/assets/imgs/brands/b4.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-2 col-6">
                    <div class="item">
                        <div class="img icon-img-100">
                            <a href="#0">
                                <img src="{{ asset('frontend/assets/imgs/brands/b1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-2 col-6">
                    <div class="item">
                        <div class="img icon-img-100">
                            <a href="#0">
                                <img src="{{ asset('frontend/assets/imgs/brands/b3.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- ==================== End Brands ==================== -->

@endsection


@push('add-js')
    
@endpush