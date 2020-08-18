<!doctype html>
<html lang="en">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:36:49 GMT -->
<head>
    <title>مدیریت</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="keywords" content="admin template, Brego admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.html" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('assets/mainAdmin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/mainAdmin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/mainAdmin/vendor/animate-css/vivify.min.css')}}">

    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/vendor/c3/c3.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/vendor/chartist/css/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/vendor/jvectormap/jquery-jvectormap-2.0.3.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/vendor/summernote/dist/summernote.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/css/sweetalert.css')}}"/>


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('/assets/mainAdmin/css/site.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="theme-green">
<div id="wrapper">
@yield('content')

</div>




<!-- Javascript -->
{{--<script src="{{asset('assets/main/js/jquery-3.3.1.min.js')}}"></script>--}}
<script src="{{asset('/assets/mainAdmin/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/bundles/chartist.bundle.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/bundles/knob.bundle.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/vendor/toastr/toastr.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/js/index.js')}}"></script>
<script src="{{asset('/assets/mainAdmin/vendor/summernote/dist/summernote.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('js')

@include('sweet::alert')
</body>


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:37:15 GMT -->
</html>


