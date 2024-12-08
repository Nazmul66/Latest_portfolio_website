
    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>

    <!-- toaster Js plugins  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    @stack('add-js')

    {!! Toastr::message() !!}

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{!! $error !!}");
            @endforeach
        @endif
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>