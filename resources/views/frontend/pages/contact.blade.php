@extends('frontend.layouts.master')

@push('add-title')
    Home
@endpush

@push('add-css')
    
@endpush

@section('body-content')

 <!-- ==================== Start Contact ==================== -->

 <section class="contact section-padding">
    <div class="container">
        <div class="sec-head mb-80">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="d-inline-block">
                        <div class="sub-title-icon d-flex align-items-center">
                            <span class="icon pe-7s-map-marker"></span>
                            <h6>Contact Us</h6>
                        </div>
                    </div>
                    <h3>Let's Get in Touch!</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="google-map mb-80">
                    <div id="gmap_canvas">
                        {!! getSetting()->google_map !!}
                    </div>

                </div>
            </div>
            <div class="col-lg-5 valign">
                <div class="info full-width md-mb80">
                    <div class="item mb-30 d-flex align-items-center">
                        <div class="mr-15">
                            <span class="icon fz-40 main-color pe-7s-call"></span>
                        </div>
                        <div class="mr-10">
                            <h6 class="opacity-7">Phone</h6>
                        </div>
                        <div class="ml-auto">
                            <h4>
                                @if ( !empty(getSetting()->phone) )
                                    <a href="tel:{{ getSetting()->phone }}">{{ getSetting()->phone }}</a>
                                @else
                                    <a href="tel:{{ getSetting()->phone_optional }}">{{ getSetting()->phone_optional }}</a>
                                @endif
                            </h4>
                        </div>
                    </div>
                    <div class="item mb-30 d-flex align-items-center">
                        <div class="mr-15">
                            <span class="icon fz-40 main-color pe-7s-mail"></span>
                        </div>
                        <div class="mr-10">
                            <h6 class="opacity-7">Email</h6>
                        </div>
                        <div class="ml-auto">
                            <h4>
                                @if ( !empty(getSetting()->email) )
                                    <a href="mailto:{{ getSetting()->email }}">{{ getSetting()->email }}</a>
                                @else
                                    <a href="mailto:{{ getSetting()->email }}">{{ getSetting()->email_optional }}</a>
                                @endif
                            </h4>
                        </div>
                    </div>
                    <div class="item d-flex align-items-center">
                        <div class="mr-15">
                            <span class="icon fz-40 main-color pe-7s-map-marker"></span>
                        </div>
                        <div class="mr-10">
                            <h6 class="opacity-7">Address</h6>
                        </div>
                        <div class="ml-auto">
                            <h4>{{ getSetting()->address }}</h4>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-7 valign">
                <div class="full-width">
                    <form method="POST" action="{{ route('contact.post') }}">
                        @csrf

                        <div class="messages"></div>
                        <div class="controls row">
                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    <label>Your Name</label>
                                    <input id="form_name" type="text" name="name" required="required">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    <label>Your Email</label>
                                    <input id="form_email" type="email" name="email" required="required">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea id="form_message" name="message" required="required"></textarea>
                                </div>

                                <div class="mt-30">
                                    <button type="submit">
                                        <span class="text">Send A Message</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Contact ==================== -->

@endsection


@push('add-js')
    
@endpush