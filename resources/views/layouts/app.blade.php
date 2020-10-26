<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Footer Dark - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="{!! asset('assets/app-assets/images/ico/apple-icon-120.png')!!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('assets/app-assets/images/ico/favicon.ico')!!}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/fonts/material-icons/material-icons.css')!!}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/material-vendors.min.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/ui/prism.min.css')!!}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/material.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/components.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/bootstrap-extended.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/material-extended.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/material-colors.css')!!}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css')!!}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/assets/css/style.css')!!}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.sidebar')
    <!-- END: Main Menu-->
    
    <!-- BEGIN: Content-->
    <div class="app-content content">
        {{-- Head navbar --}}
        <div class="content-header row">
            <div class="content-header-dark bg-img col-12">
                <div class="row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <h3 class="content-header-title white">Footer Dark</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Footer</a>
                                    </li>
                                    <li class="breadcrumb-item active">Footer Dark
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right col-md-3 col-12">
                        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                            <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item" href="component-progress.html"> Progress</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Head navbar --}}
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{!! asset('assets/app-assets/vendors/js/material-vendors.min.js')!!}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{!! asset('assets/app-assets/vendors/js/ui/prism.min.js')!!}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{!! asset('assets/app-assets/js/core/app-menu.js')!!}"></script>
    <script src="{!! asset('assets/app-assets/js/core/app.js')!!}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{!! asset('assets/app-assets/js/scripts/pages/material-app.js')!!}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
