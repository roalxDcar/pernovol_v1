<html lang="en" data-textdirection="ltr">
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
{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/material-vendors.min.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/ui/prism.min.css')!!}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/bootstrap-extended.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/colors.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/components.css') !!}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/forms/toggle/switchery.min.css') !!}">

    {{-- Chart --}}
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/vendors.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/weather-icons/climacons.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/fonts/meteocons/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/charts/morris.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/charts/chartist.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/vendors/css/charts/chartist-plugin-tooltip.css') !!}">
    {{-- Estilos para imprimir --}}
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/pages/invoice.css') !!}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/plugins/forms/switch.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/assets/css/style.css')!!}">

    {{-- Chart --}}
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/core/colors/palette-gradient.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/fonts/simple-line-icons/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/core/colors/palette-gradient.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/pages/timeline.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/app-assets/css/pages/dashboard-ecommerce.css') !!}">
    <!-- END: Custom CSS-->

{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

    {{-- Uso de Jquery --}}
    <script src="{!! asset('assets/assets/jquery/jquery.min.js')!!}"></script>

    {{-- Sweet Alerts --}}
    <script type="text/javascript" src="{!! asset('assets/assets/js/sweetAlert.js') !!}"></script>

    {{-- Style DataTable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    {{-- End DataTable --}}
    
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.sidebar')
    <!-- END: Main Menu-->
    
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            {{-- Head navbar --}}
                @yield('header_content')
            </div>
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

    {{-- DataTable --}}
    @yield('js')
    {{-- End DataTable --}}

    <!-- BEGIN: Vendor JS-->
    <script src="{!! asset('assets/app-assets/vendors/js/material-vendors.min.js')!!}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{!! asset('assets/app-assets/vendors/js/ui/prism.min.js')!!}"></script>


    <script src="{!! asset('assets/app-assets/vendors/js/charts/chartist.min.js') !!}"></script>
    <script src="{!! asset('assets/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js') !!}"></script>
    <script src="{!! asset('assets/app-assets/vendors/js/charts/raphael-min.js') !!}"></script>
    <script src="{!! asset('assets/app-assets/vendors/js/charts/morris.min.js') !!}"></script>
    <script src="{!! asset('assets/app-assets/vendors/js/timeline/horizontal-timeline.js') !!}"></script>
    <!-- END: Page Vendor JS-->



    <!-- BEGIN: Theme JS-->
    <script src="{!! asset('assets/app-assets/js/core/app-menu.js')!!}"></script>
    <script src="{!! asset('assets/app-assets/js/core/app.js')!!}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{!! asset('assets/app-assets/js/scripts/pages/material-app.js')!!}"></script>
    <script src="{!! asset('assets/app-assets/js/scripts/forms/select/form-select2.js') !!}"></script>
    <script src="{!! asset('assets/app-assets/js/scripts/modal/components-modal.js') !!}"></script>


    <script src="{!! asset('assets/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js') !!}"></script>
    <script src="{!! asset('assets/app-assets/vendors/js/forms/toggle/switchery.min.js') !!}"></script>
    <script src="{!! asset('assets/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') !!}"></script>

    <script src="{!! asset('assets/app-assets/js/scripts/forms/custom-file-input.js') !!}"></script>

    <script src="{!! asset('assets/app-assets/js/scripts/forms/switch.js') !!}"></script>


    <script src="{!! asset('assets/app-assets/js/scripts/ui/jquery-ui/buttons-selects.js') !!}"></script>

    {{-- dashboar --}}

    <script src="{!! asset('assets/app-assets/js/scripts/pages/dashboard-ecommerce.js') !!}"></script>

    {{-- Js para Imprimir PDF --}}
    <script src="{!! asset('assets/app-assets/js/scripts/pages/invoice-template.js') !!}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>
