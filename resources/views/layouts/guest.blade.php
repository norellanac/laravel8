<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | {{ substr(request()->getRequestUri(), 1) }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-color: #71D24D" <div class="login-box">
    <div class="justify-content-center">
        <div class="text-light h1 mt-5 mb-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/icons/micromoni.jpeg') }}" width="46" class="rounded-circle mr-n2 mt-n3">
            </a>
            {{ config('app.name', 'Laravel') }}
        </div>
    </div>
    <div class="row">
        <div class="col-10 offset-1 offset-md-0 offset-lg-0 col-xs-10 col-md-12 col-lg-12">
            <!-- /.login-logo -->
            @yield('content')
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script>
        function showInputPassword() {
            let elem = document.getElementById('password');
            if (elem.type == "text") {
                elem.type = "password";
            } else {
                elem.type = "text";
            }
        }
    </script>
</body>

</html>
