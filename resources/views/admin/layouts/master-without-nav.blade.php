<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') Craftedfate </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Craftedfate" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('adminpanel/build/images/favicon.ico') }}">

        @include('admin.layouts.head-css')
  </head>

    @yield('body')
    
    @yield('content')

    @include('admin.layouts.vendor-scripts')
    </body>
</html>