<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ setting('site_title', 'YonderPrime') }}</title>

    <link rel="icon"  href="{{ setting('site_favicon') != null ? Storage::disk('public')->url(setting('site_favicon')) : '' }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/themes/bordered-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/core/menu/menu-types/horizontal-menu.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @stack('css')
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

    @include('layouts.dashboard.partials.header')
    @include('layouts.dashboard.partials.menu')


    @yield('content')



    @include('layouts.dashboard.partials.customizer')


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

    @include('layouts.dashboard.partials.footer')


<!-- BEGIN: Vendor JS-->
<script src="{{asset('dashboard/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('dashboard/vendors/js/ui/jquery.sticky.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('dashboard/js/core/app-menu.js')}}"></script>
<script src="{{asset('dashboard/js/core/app.js')}}"></script>
<script src="{{asset('dashboard/js/scripts/customizer.js')}}"></script>
<script src="{{asset('js/iziToast.js')}}"></script>
<script src="{{asset('js/dashboard.js')}}"></script>

<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

    @stack('js')
    @include('vendor.lara-izitoast.toast')
</body>
<!-- END: Body-->

</html>
