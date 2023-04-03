<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Login - HRMS admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png' )}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css' )}}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css ')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css ')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/material.css' )}}">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css' )}}">

    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css' )}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css' )}}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css' )}}">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css' )}}">

</head>

<body class="account-page">
    <div class="main-wrapper">
        @yield('welcome')
        @yield('dashboard')
        @yield('project')
        @yield('projectDetail')
        @yield('milestoneDetail')
    </div>

    <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js' )}} "></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js' )}}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('assets/js/chart.js')}}"></script>
    <script src="{{ asset('assets/js/greedynav.js' )}}"></script>
    <script src="{{ asset('assets/js/select2.min.js' )}}"></script>

    <script src="{{ asset('assets/js/moment.min.js' )}}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js' )}}"></script>

    <script src="{{ asset('assets/js/ckeditor.js' )}}"></script>

    <script src="{{ asset('assets/js/layout.js' )}}"></script>
    <script src="{{ asset('assets/js/theme-settings.js' )}}"></script>
    <script src="{{ asset('assets/js/app.js' )}}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css' )}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css' )}}">

    <link rel="stylesheet" href="{{ asset('assets/css/ckeditor.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css' )}}">
</body>

</html>