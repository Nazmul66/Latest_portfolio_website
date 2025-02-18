@extends('frontend.layouts.master')

@push('add-title')
    Portfolio Showcase
@endpush

@push('add-css')
    
@endpush

@section('body-content')

<!-- ==================== Start portfolio ==================== -->

<section class="portfolio section-padding">
    <div class="container">

        @if ( $portfolio->is_active == 1 )
            <div class="sec-head mb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-portfolio"></span>
                                <h6>{{ $portfolio->title }}</h6>
                            </div>
                        </div>
                        <h3>{{ $portfolio->subtitle }}</h3>
                    </div>
                </div>
            </div>
        @endif


        <div class="gallery">
            <div class="row">

                @foreach ($portfolios as $row)
                    <div class="col-lg-4 items">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset($row->image) }}" alt="">
                                <a href="{{ $row->url_link }}" class="link" target="_blank"></a>
                            </div>
                            <div class="cont d-flex align-items-center">
                                <div>
                                    <h6>{{ $row->project_name }}</h6>
                                    <span class="tag">{{ $row->project_category }}</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="arrow">
                                        <a href="{{ $row->url_link }}" target="_blank">
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
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ==================== End portfolio ==================== -->



<!-- ==================== Start Testimonials ==================== -->

<section class="testimonials section-padding pt-0">

    @if ( $testimonial->is_active == 1 )
        <div class="container with-pad">
            <div class="sec-head mb-80">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-chat"></span>
                                <h6>{{ $testimonial->title }}</h6>
                            </div>
                        </div>
                        <h3>{{ $testimonial->subtitle }}</h3>
                    </div>
                </div>
            </div>
        </div> 
    @endif

    <div class="container-fluid">
        <div class="testim-swiper" data-carousel="swiper" data-item="3" data-space="20" data-speed="1000">
            <div id="content-carousel-container-unq-testim" class="swiper-container" data-swiper="container">
                <div class="swiper-wrapper">

                    @foreach ($testimonials as $row)
                        <div class="swiper-slide">
                            <div class="item">
                                <div>
                                    <div class="cont mb-30">
                                        <div class="d-flex align-items-center">
                                            <div class="rate-stars fz-12">
                                                <span class="rate main-color">
                                                    @if ( $row->rating == 1 )
                                                       <i class="fas fa-star"></i>

                                                    @elseif ( $row->rating == 2 )
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>

                                                    @elseif ( $row->rating == 3 )
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>

                                                    @elseif ( $row->rating == 4 )
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>

                                                    @elseif ( $row->rating == 5 )
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>
                                                       <i class="fas fa-star"></i>
                                                    @endif
                                                </span>
                                                {{-- <span class="fz-12 opacity-7 ml-10">(71 Reviews)</span> --}}
                                            </div>
                                        </div>
                                        <p class="mt-15">{{ $row->client_desc }}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img">
                                                <img src="{{ asset($row->client_image) }}" alt="" style="width: 70px; height: 70px;">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6 class="main-color">{{ $row->client_name }}</h6>
                                                <span class="fz-13 mt-10 opacity-8">{{ $row->client_designation }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

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