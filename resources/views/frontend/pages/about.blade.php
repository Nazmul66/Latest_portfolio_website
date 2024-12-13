@extends('frontend.layouts.master')

@push('add-title')
    Home
@endpush

@push('add-css')
    
@endpush

@section('body-content')

 <!-- ==================== Start About ==================== -->

 <section class="about section-padding">
    <div class="container with-pad">
        <div class="row lg-marg">
            <div class="col-lg-5 valign">
                <div class="profile-img">
                    <div class="img">
                        <img src="{{ asset($about_us->image) }}" alt="">
                    </div>

                    {{-- <div class="img">
                        <img src="{{ asset('frontend/assets/imgs/header/profile.jpg') }}" alt="">
                    </div> --}}
                    
                    {{-- <span class="icon">
                        <img src="{{ asset('frontend/assets/imgs/header/icon1.png') }}" alt="">
                    </span>
                    <span class="icon">
                        <img src="{{ asset('frontend/assets/imgs/header/icon2.png') }}" alt="">
                    </span>
                    <span class="icon">
                        <img src="{{ asset('frontend/assets/imgs/header/icon3.png') }}" alt="">
                    </span>
                    <span class="icon">
                        <img src="{{ asset('frontend/assets/imgs/header/icon4.png') }}" alt="">
                    </span> --}}
                </div>
            </div>
            <div class="col-lg-7 valign">
                <div class="cont">
                    <div class="sub-title-icon d-flex align-items-center">
                        <span class="icon pe-7s-gleam"></span>
                        <h6>{{ $about_us->title }}</h6>
                    </div>
                    <div class="text">
                        <h4 class="mb-30">{{ $about_us->sub_title }}</h4>


                        <div class="about_desc feat mt-30">

                            {!! $about_us->description !!}
                            {{-- <p>I enjoy turning complex problems into simple, beautiful and intuitive designs. My aim is to bring across your message and identity in the most creative way. I created web design for many famous brand companies.</p>

                            <ul>
                                <li>Product Design</li>
                                <li>Website Design</li>
                                <li>Website Development</li>
                                <li>Design Retainer</li>
                            </ul> --}}
                            
                            {{-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="item mb-15">
                                        <h6 class="sub-title ls1"><span class="fz-13 mr-10 main-color"><i
                                                    class="fas fa-check"></i></span> Product Design</h6>
                                    </div>
                                    <div class="item sm-mb15">
                                        <h6 class="sub-title ls1"><span class="fz-13 mr-10 main-color"><i
                                                    class="fas fa-check"></i></span> Website Design</h6>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item mb-15">
                                        <h6 class="sub-title ls1"><span class="fz-13 mr-10 main-color"><i
                                                    class="fas fa-check"></i></span> Website Development
                                        </h6>
                                    </div>
                                    <div class="item">
                                        <h6 class="sub-title ls1"><span class="fz-13 mr-10 main-color"><i
                                                    class="fas fa-check"></i></span> Design Retainer
                                        </h6>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="info mt-50">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="item d-flex align-items-center sm-mb30">
                                        <div class="mr-15">
                                            <span class="icon pe-7s-mail"></span>
                                        </div>
                                        <div>
                                            <span class="opacity-7 mb-5">Email Us</span>
                                            <h6>
                                                @if ( !empty(getSetting()->email) )
                                                    <a href="mailto:{{ getSetting()->email }}">{{ getSetting()->email }}</a>
                                                @else
                                                    <a href="mailto:{{ getSetting()->email }}">{{ getSetting()->email_optional }}</a>
                                                @endif
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="mr-15">
                                            <span class="icon pe-7s-call"></span>
                                        </div>
                                        <div>
                                            <span class="opacity-7 mb-5">Call Us</span>
                                            <h6>
                                                @if ( !empty(getSetting()->phone) )
                                                    <a href="tel:{{ getSetting()->phone }}">{{ getSetting()->phone }}</a>
                                                @else
                                                    <a href="tel:{{ getSetting()->phone_optional }}">{{ getSetting()->phone_optional }}</a>
                                                @endif
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End About ==================== -->



<!-- ==================== Start Skills ==================== -->

<section class="skills section-padding pt-0">
    <div class="container with-pad">

        @if ( $skill->is_active == 1 )
            <div class="sec-head mb-80">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sub-title-icon d-flex align-items-center">
                            <span class="icon pe-7s-gym"></span>
                            <h6>{{ $skill->title }}</h6>
                        </div>
                        <h3>{{ $skill->subtitle }}</h3>
                    </div>
                </div>
            </div>
        @endif
        
        <div class="row">

            @foreach ($skills as $row)
                <div class="col-lg-4 col-md-6">
                    <div class="item mb-30">
                        <div class="d-flex align-items-center mb-30">
                            <div class="mr-30">
                                <div class="img icon-img-40">
                                    <img src="{{ asset($row->image) }}" alt="">
                                </div>
                            </div>
                            <div>
                                <h6 class="fz-18">{{ $row->name }}</h6>
                            </div>
                        </div>
                        <div class="skill-progress">
                            <span class="progres" data-value="{{ $row->percentage }}%"></span>
                        </div>
                        <span class="value">{{ $row->percentage }}%</span>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-lg-4 col-md-6">
                <div class="item mb-30">
                    <div class="d-flex align-items-center mb-30">
                        <div class="mr-30">
                            <div class="img icon-img-40">
                                <img src="{{ asset('frontend/assets/imgs/resume/s2.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <h6 class="fz-18">Development</h6>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <span class="progres" data-value="90%"></span>
                    </div>
                    <span class="value">90%</span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="item md-mb30">
                    <div class="d-flex align-items-center mb-30">
                        <div class="mr-30">
                            <div class="img icon-img-40">
                                <img src="{{ asset('frontend/assets/imgs/resume/s3.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <h6 class="fz-18">Graphic Design</h6>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <span class="progres" data-value="85%"></span>
                    </div>
                    <span class="value">85%</span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="item md-mb30">
                    <div class="d-flex align-items-center mb-30">
                        <div class="mr-30">
                            <div class="img icon-img-40">
                                <img src="{{ asset('frontend/assets/imgs/resume/s4.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <h6 class="fz-18">WordPress</h6>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <span class="progres" data-value="78%"></span>
                    </div>
                    <span class="value">78%</span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <div class="d-flex align-items-center mb-30">
                        <div class="mr-30">
                            <div class="img icon-img-40">
                                <img src="{{ asset('frontend/assets/imgs/resume/s5.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <h6 class="fz-18">sketch</h6>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <span class="progres" data-value="80%"></span>
                    </div>
                    <span class="value">80%</span>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!-- ==================== End Skills ==================== -->



<!-- ==================== Start Resume ==================== -->

<section class="resume section-padding pt-0">
    <div class="container with-pad">

        @if ( $experience->is_active == 1 )
            <div class="sec-head mb-80">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-note2"></span>
                                <h6>{{ $experience->title }}</h6>
                            </div>
                        </div>
                        <h3>{{ $experience->subtitle }}</h3>
                    </div>
                </div>
            </div>
        @endif


        <div>
            <div class="resume-swiper" data-carousel="swiper" data-space="50" data-speed="1000">
                <div id="content-carousel-container-unq-resume" class="swiper-container"
                    data-swiper="container">
                    <div class="swiper-wrapper">

                        @foreach ($experiences as $row)
                            <div class="swiper-slide">
                                <div class="item text-center">
                                    <h6 class="main-color date fz-15 mb-60">{{ $row->year }}</h6>
                                    <h5>{{ $row->designation }}</h5>
                                    <span class="opacity-8 fw-500 mt-10">{{ $row->company_name }}</span>
                                    <p class="fz-13 mt-15">{{ $row->short_desc }}</p>
                                </div>
                            </div>
                        @endforeach


                        {{-- <div class="swiper-slide">
                            <div class="item text-center">
                                <h6 class="main-color date fz-15 mb-60">2018 - 2020</h6>
                                <h5>Front-End WordPress Developer</h5>
                                <span class="opacity-8 fw-500 mt-10">[ at Ui-Themez ]</span>
                                <p class="fz-13 mt-15">Crafting captivating digital experiences that put users
                                    at the heart of the design. Elevate your product to increased user
                                    satisfaction and loyalty.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item text-center">
                                <h6 class="main-color date fz-15 mb-60">2015 - 2017</h6>
                                <h5>Web Designer</h5>
                                <span class="opacity-8 fw-500 mt-10">[ at Envato Market ]</span>
                                <p class="fz-13 mt-15">Crafting captivating digital experiences that put users
                                    at the heart of the design. Elevate your product to increased user
                                    satisfaction and loyalty.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item text-center">
                                <h6 class="main-color date fz-15 mb-60">2010 - 2014</h6>
                                <h5>Bachelor's Degree in Design</h5>
                                <span class="opacity-8 fw-500 mt-10">[ US RMIT University ]</span>
                                <p class="fz-13 mt-15">Crafting captivating digital experiences that put users
                                    at the heart of the design. Elevate your product to increased user
                                    satisfaction and loyalty.</p>
                            </div>
                        </div> --}}
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Resume ==================== -->


@endsection


@push('add-js')
    
@endpush