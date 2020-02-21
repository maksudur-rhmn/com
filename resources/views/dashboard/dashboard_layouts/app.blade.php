<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Aero Bootstrap4 Admin :: Home</title>

<!-- CSS Files -->
@include('dashboard.includes.css.css')
</head>

<body class="theme-blush">

<!-- Page Loader -->
@include('dashboard.includes.pre_loader.pre_loader')

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
@include('dashboard.includes.main_search.main_search')

<!-- Right Icon menu Sidebar -->
@include('dashboard.includes.right_icon_menu_sidebar.right_icon_menu_sidebar')

<!-- Left Sidebar -->
@include('dashboard.includes.lts.lts')

<!-- Right Sidebar -->
@include('dashboard.includes.rts.rts')

<!-- Main Content -->
<section class="content">
   @yield('content')

 </section>

 <!-- Jquery Core Js -->
 <script src="{{ asset('dashboard_asset/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
 <script src="{{ asset('dashboard_asset/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

 <script src="{{ asset('dashboard_asset/assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
 <script src="{{ asset('dashboard_asset/assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
 <script src="{{ asset('dashboard_asset/assets/bundles/c3.bundle.js') }}"></script>

 <script src="{{ asset('dashboard_asset/assets/plugins/jquery-validation/jquery.validate.js') }}"></script> <!-- Jquery Validation Plugin Css -->

 <script src="{{ asset('dashboard_asset/assets/plugins/jquery-steps/jquery.steps.js') }}"></script> <!-- JQuery Steps Plugin Js -->
 <script src="{{ asset('dashboard_asset/assets/plugins/dropify/js/dropify.min.js') }}"></script>
 <script src="{{ asset('dashboard_asset/assets/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
 <script src="{{ asset('dashboard_asset/assets/js/pages/forms/dropify.js') }}"></script>
 <script src="{{ asset('dashboard_asset/assets/js/pages/forms/form-validation.js') }}"></script>
 <script src="{{ asset('dashboard_asset/assets/js/pages/forms/advanced-form-elements.js') }}"></script>

 <script src="{{ asset('dashboard_asset/assets/bundles/mainscripts.bundle.js') }}"></script>
 <script src="{{ asset('dashboard_asset/assets/js/pages/index.js') }}"></script>



@yield('custom_js')




 </body>
 </html>
