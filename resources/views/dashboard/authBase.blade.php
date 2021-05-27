<!DOCTYPE html>
<!--
* CoreUI Free Laravel Bootstrap Admin Template
* @version v2.0.1
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title>Schools Debates</title>
      <!--===============================================================================================-->
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
      <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <link rel="manifest" href="assets/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
      <!--===============================================================================================-->
      <!-- Icons-->
      <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
      <link href="{{ asset('css/flag.min.css') }}" rel="stylesheet"> <!-- icons -->
      <!-- Main styles for this application-->
      <link href="{{ asset('css/main.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/util.css') }}" rel="stylesheet">
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

      @yield('css')
      <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

  </head>

  <body class="">
  @include('includes.headerAuth')
<div class="c-app flex-row align-items-center bg-images-13">
    @yield('content')
</div>
  @include('includes.footer')


    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/c729ebc618.js" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{asset('/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/dist/src/bootoast.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>


    @yield('javascript')

  </body>


</html>
