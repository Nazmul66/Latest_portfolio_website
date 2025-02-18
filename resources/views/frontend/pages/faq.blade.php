@extends('frontend.layouts.master')

@push('add-title')
    Faq 
@endpush

@push('add-css')
    
@endpush

@section('body-content')

<!-- ==================== Start Resume ==================== -->

<section class="resume section-padding">
    <div class="container with-pad">

        @if ( $faq->is_active == 1 )
            <div class="sec-head mb-80">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="d-inline-block">
                            <div class="sub-title-icon d-flex align-items-center">
                                <span class="icon pe-7s-note2"></span>
                                <h6>{{ $faq->title }}</h6>
                            </div>
                        </div>
                        <h3>{{ $faq->subtitle }}</h3>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
           <div class="col-lg-10 offset-lg-1">
            <div class="accordion" id="accordionExample">
                @foreach ($faqs as $index => $row)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse{{ $index }}" 
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                    aria-controls="collapse{{ $index }}">
                                {{ $row->question }}
                            </button>
                        </h2>
            
                        <div id="collapse{{ $index }}" 
                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                            aria-labelledby="heading{{ $index }}" 
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $row->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
           </div>
        </div>
    </div>
</section>

<!-- ==================== End Resume ==================== -->

@endsection


@push('add-js')
    
@endpush