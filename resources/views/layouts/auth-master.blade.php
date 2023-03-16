<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" >
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin</title>

    <!-- Bootstrap core CSS -->

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
    </style>


    <!-- Custom styles for this template -->
</head>

<body  class=" border-top-wide border-primary d-flex flex-column">
<div class="page page-center">
    <div class="container-tight py-4">

    <main class="form-signin">

        @yield('content')

    </main>

    </div>
</div>
<script src="{{ asset('/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('/js/tabler.min.js') }}"></script>
<script src="{{ asset('js/demo.min.js') }}"></script>

</body>
</html>
