@extends('frontend.layouts.master')

@push('add-title')
    Home
@endpush

@push('add-css')
    
@endpush

@section('body-content')

<!-- ==================== Start portfolio ==================== -->

<section class="portfolio section-padding">
    <div class="container">
        <div class="sec-head mb-40">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="d-inline-block">
                        <div class="sub-title-icon d-flex align-items-center">
                            <span class="icon pe-7s-portfolio"></span>
                            <h6>My Portfolio</h6>
                        </div>
                    </div>
                    <h3>Helping digital brands <br> scale with design.</h3>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="row">
                <div class="col-lg-4 items">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/imgs/works/1.jpg') }}" alt="">
                            <a href="project-details.html" class="link"></a>
                        </div>
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6>UI-UX Design</h6>
                                <span class="tag">Figma</span>
                            </div>
                            <div class="ml-auto">
                                <div class="arrow">
                                    <a href="project-details.html">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 items">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/imgs/works/2.jpg') }}" alt="">
                            <a href="project-details.html" class="link"></a>
                        </div>
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6>UI-UX Design</h6>
                                <span class="tag">Figma</span>
                            </div>
                            <div class="ml-auto">
                                <div class="arrow">
                                    <a href="project-details.html">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 items">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/imgs/works/3.jpg') }}" alt="">
                            <a href="project-details.html" class="link"></a>
                        </div>
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6>UI-UX Design</h6>
                                <span class="tag">Figma</span>
                            </div>
                            <div class="ml-auto">
                                <div class="arrow">
                                    <a href="project-details.html">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 items">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/imgs/works/4.jpg') }}" alt="">
                            <a href="project-details.html" class="link"></a>
                        </div>
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6>UI-UX Design</h6>
                                <span class="tag">Figma</span>
                            </div>
                            <div class="ml-auto">
                                <div class="arrow">
                                    <a href="project-details.html">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 items">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/imgs/works/6.jpg') }}" alt="">
                            <a href="project-details.html" class="link"></a>
                        </div>
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6>UI-UX Design</h6>
                                <span class="tag">Figma</span>
                            </div>
                            <div class="ml-auto">
                                <div class="arrow">
                                    <a href="project-details.html">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 items">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/imgs/works/5.jpg') }}" alt="">
                            <a href="project-details.html" class="link"></a>
                        </div>
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6>UI-UX Design</h6>
                                <span class="tag">Figma</span>
                            </div>
                            <div class="ml-auto">
                                <div class="arrow">
                                    <a href="project-details.html">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 items">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/imgs/works/7.jpg') }}" alt="">
                            <a href="project-details.html" class="link"></a>
                        </div>
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6>UI-UX Design</h6>
                                <span class="tag">Figma</span>
                            </div>
                            <div class="ml-auto">
                                <div class="arrow">
                                    <a href="project-details.html">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 items">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/imgs/works/8.jpg') }}" alt="">
                            <a href="project-details.html" class="link"></a>
                        </div>
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6>UI-UX Design</h6>
                                <span class="tag">Figma</span>
                            </div>
                            <div class="ml-auto">
                                <div class="arrow">
                                    <a href="project-details.html">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End portfolio ==================== -->



<!-- ==================== Start Testimonials ==================== -->

<section class="testimonials section-padding pt-0">
    <div class="container with-pad">
        <div class="sec-head mb-80">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="d-inline-block">
                        <div class="sub-title-icon d-flex align-items-center">
                            <span class="icon pe-7s-chat"></span>
                            <h6>Testimonials</h6>
                        </div>
                    </div>
                    <h3>Here’s what my clients say</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="testim-swiper" data-carousel="swiper" data-item="3" data-space="20" data-speed="1000">
            <div id="content-carousel-container-unq-testim" class="swiper-container" data-swiper="container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item">
                            <div>
                                <div class="cont mb-30">
                                    <div class="d-flex align-items-center">
                                        <div class="rate-stars fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="fz-12 opacity-7 ml-10">(71 Reviews)</span>
                                        </div>
                                    </div>
                                    <p class="mt-15">We have purchased well into the
                                        thousands
                                        of items, but this is without doubt one of the best we’ve
                                        have
                                        been
                                        lucky enough to work on, the attention to detail apparent
                                        throughout, and the delivery is impressively intuitive.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/assets/imgs/testim/1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="ml-30">
                                        <div class="info">
                                            <h6 class="main-color">Leonard Heiser</h6>
                                            <span class="fz-13 mt-10 opacity-8">Envato
                                                customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <div>
                                <div class="cont mb-30">
                                    <div class="d-flex align-items-center">
                                        <div class="rate-stars fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="fz-12 opacity-7 ml-10">(71 Reviews)</span>
                                        </div>
                                    </div>
                                    <p class="mt-15">We have purchased well into the
                                        thousands
                                        of items, but this is without doubt one of the best we’ve
                                        have
                                        been
                                        lucky enough to work on, the attention to detail apparent
                                        throughout, and the delivery is impressively intuitive.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/assets/imgs/testim/2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="ml-30">
                                        <div class="info">
                                            <h6 class="main-color">Leonard Heiser</h6>
                                            <span class="fz-13 mt-10 opacity-8">Envato
                                                customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <div>
                                <div class="cont mb-30">
                                    <div class="d-flex align-items-center">
                                        <div class="rate-stars fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="fz-12 opacity-7 ml-10">(71 Reviews)</span>
                                        </div>
                                    </div>
                                    <p class="mt-15">We have purchased well into the
                                        thousands
                                        of items, but this is without doubt one of the best we’ve
                                        have
                                        been
                                        lucky enough to work on, the attention to detail apparent
                                        throughout, and the delivery is impressively intuitive.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/assets/imgs/testim/3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="ml-30">
                                        <div class="info">
                                            <h6 class="main-color">Leonard Heiser</h6>
                                            <span class="fz-13 mt-10 opacity-8">Envato
                                                customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <div>
                                <div class="cont mb-30">
                                    <div class="d-flex align-items-center">
                                        <div class="rate-stars fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="fz-12 opacity-7 ml-10">(71 Reviews)</span>
                                        </div>
                                    </div>
                                    <p class="mt-15">We have purchased well into the
                                        thousands
                                        of items, but this is without doubt one of the best we’ve
                                        have
                                        been
                                        lucky enough to work on, the attention to detail apparent
                                        throughout, and the delivery is impressively intuitive.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/assets/imgs/testim/2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="ml-30">
                                        <div class="info">
                                            <h6 class="main-color">Leonard Heiser</h6>
                                            <span class="fz-13 mt-10 opacity-8">Envato
                                                customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <div>
                                <div class="cont mb-30">
                                    <div class="d-flex align-items-center">
                                        <div class="rate-stars fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="fz-12 opacity-7 ml-10">(71 Reviews)</span>
                                        </div>
                                    </div>
                                    <p class="mt-15">We have purchased well into the
                                        thousands
                                        of items, but this is without doubt one of the best we’ve
                                        have
                                        been
                                        lucky enough to work on, the attention to detail apparent
                                        throughout, and the delivery is impressively intuitive.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="img">
                                            <img src="{{ asset('frontend/assets/imgs/testim/3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="ml-30">
                                        <div class="info">
                                            <h6 class="main-color">Leonard Heiser</h6>
                                            <span class="fz-13 mt-10 opacity-8">Envato
                                                customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- ==================== End Testimonials ==================== -->

@endsection


@push('add-js')
    
@endpush