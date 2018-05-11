<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet"> -->
     @if (Auth::guest())
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     @else
     <!-- Bootstrap core CSS-->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Custom fonts for this template-->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="/css/sb-admin.css" rel="stylesheet">
  @endif
</head>
<body>
    <div id="app">      
        <div class="container-fluid">

            <header class="row">
                @include('elements.topbar')
            </header>

            <div id="main" class="row" >
                @if (!Auth::guest())
                <!-- sidebar content -->
                <div id="sidebar" class="col-md-4">
               
                    @include('elements.sidebar')

                </div>
                @endif
                <!-- main content -->
                <div id="content" class="col-md-8 content-wrapper">
                    <div class="container-fluid">
                    @yield('content')
                    </div>
                </div>
            </div>   
        </div>        
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
</body>
</html>
