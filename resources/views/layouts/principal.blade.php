<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>PERNOVOL</title>
    <link rel="apple-touch-icon" href="{!! asset('assets/app-assets/images/ico/apple-icon-120.png')!!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('assets/app-assets/images/ico/favicon.ico')!!}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/fonts/material-icons/material-icons.css')!!}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/vendors.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/forms/icheck/icheck.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/forms/icheck/custom.css') !!}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/bootstrap-extended.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/colors.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/components.css') !!}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/core/colors/palette-gradient.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/pages/login-register.css') !!}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/assets/css/style.css') !!}">
    <!-- END: Custom CSS-->



    {{-- Uso de Jquery --}}
    <script src="{!! asset('assets/assets/jquery/jquery.min.js')!!}"></script>
    {{-- Validación de formulario --}}
    <script src="{!! asset('assets/assets/jquery/jquery.validate.min.js')!!}"></script>

    {{-- Animacion de Loading (cargando) --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 1-column   blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" background="{!! asset('assets/app-assets/images/logo/motor1.jpg') !!}" style="background-repeat: no-repeat;background-position: center;">
    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{!!asset('assets/app-assets/vendors/js/material-vendors.min.js')!!}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{!!asset('assets/app-assets/vendors/js/forms/icheck/icheck.min.js')!!}"></script>
    <script src="{!!asset('assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')!!}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{!!asset('assets/app-assets/js/core/app-menu.js')!!}"></script>
    <script src="{!!asset('assets/app-assets/js/core/app.js')!!}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{!!asset('assets/app-assets/js/scripts/pages/material-app.js')!!}"></script>
    <script src="{!!asset('assets/app-assets/js/scripts/forms/form-login-register.js')!!}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>