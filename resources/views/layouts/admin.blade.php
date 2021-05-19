<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>@yield('title')</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Multi_store Admin Dashboard" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/admin/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/admin/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>

    @notify_css
    @yield('style')


    <!-- Theme Styles -->
    <link href="{{asset('assets/admin/css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-header-fixed">
<div class="overlay"></div>

{{--Admin navbar--}}
@include('admin.includes.navbar')

{{--Admin profile in sidebar--}}
@include('admin.includes.adminBoard')

{{--Admin Navigation board 'Diamond'--}}
@include('admin.includes.navigation')

{{--Admin search side--}}
@include('admin.includes.searchPanel')

{{--Admin chat menu--}}
@include('admin.includes.navChat')

{{--Admin chat --}}
@include('admin.includes.nav2')

{{--sidebar--}}
<main class="page-content content-wrap">
    @include('admin.includes.sidebar')

{{--    Boadr--}}
    @yield('board')

{{--    Footer--}}
    @include('admin.includes.footer')

</main><!-- Page Content -->

<div class="cd-overlay"></div>


<!-- Javascripts -->
<script src="assets/admin/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/admin/plugins/pace-master/pace.min.js"></script>
<script src="assets/admin/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/admin/plugins/switchery/switchery.min.js"></script>
<script src="assets/admin/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/admin/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="assets/admin/plugins/offcanvasmenueffects/js/main.js"></script>
<script src="assets/admin/plugins/waves/waves.min.js"></script>
<script src="assets/admin/plugins/3d-bold-navigation/js/main.js"></script>
<script src="assets/admin/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/admin/plugins/jquery-counterup/jquery.counterup.min.js"></script>
<script src="assets/admin/plugins/toastr/toastr.min.js"></script>
<script src="assets/admin/plugins/flot/jquery.flot.min.js"></script>
<script src="assets/admin/plugins/flot/jquery.flot.time.min.js"></script>
<script src="assets/admin/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="assets/admin/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="assets/admin/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/admin/plugins/curvedlines/curvedLines.js"></script>
<script src="assets/admin/plugins/metrojs/MetroJs.min.js"></script>
<script src="assets/admin/js/modern.js"></script>
<script src="assets/admin/js/pages/dashboard.js"></script>

</body>
</html>
