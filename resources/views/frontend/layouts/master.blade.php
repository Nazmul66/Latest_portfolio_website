<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Metas -->
    @include('frontend.include.css') 
</head>

<body>

    <!-- ==================== Start Loading ==================== -->
        @include('frontend.include.preloader')
    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->
        @include('frontend.include.scroll_to_top')
    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start Navbar ==================== -->
        @include('frontend.include.header')
    <!-- ==================== End Navbar ==================== -->


    <main class="pt-80">
        <!-- ==================== Start Hero ==================== -->
            @yield('body-content')
        <!-- ==================== End Hero ==================== -->
    </main>


    <!-- ==================== Start Footer ==================== -->
       @include('frontend.include.footer')
    <!-- ==================== End Footer ==================== -->


    <!-- jQuery -->
    @include('frontend.include.js')

</body>

</html>