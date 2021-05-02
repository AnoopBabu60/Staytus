<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('admin/media/logos/favicon.ico') }}" type="image/ico" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Bootstrap -->


    
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('admin/css/pages/login/login-1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    

    <style type="text/css">

    </style>
  </head>

  <body class="login">
    @yield('content')
  </body>
  
  
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>

  <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
  <script src="{{ asset('admin/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
  <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
  <script src="{{ asset('admin/js/pages/custom/login/login-general.js') }}"></script>
  


  <script type="text/javascript">
  var APP_URL = {!! json_encode(url('/')) !!}
  </script>
 
</html>
