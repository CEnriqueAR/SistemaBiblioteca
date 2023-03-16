<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" >
    <meta name="generator" content="Hugo 0.87.0">

        <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/demo.min.css') }}" rel="stylesheet"/>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .float-right {
        float: right;
      }
    </style>

</head>
<body  >

    @include('layouts.partials.navbar')

        @yield('content')

    <script src="{{ asset('/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/js/tabler.min.js') }}"></script>
    <script src="{{ asset('js/demo.min.js') }}"></script>

    @section("scripts")

    @show

  </body>
</html>
