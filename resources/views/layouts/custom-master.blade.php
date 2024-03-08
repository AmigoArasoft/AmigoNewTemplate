<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

    <head>

        <!-- META DATA -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Laravel Bootstrap Responsive Admin Web Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="dashboard bootstrap, laravel template, admin panel in laravel, php admin panel, admin panel for laravel, admin template bootstrap 5, laravel admin panel, admin dashboard template, hrm dashboard, vite laravel, admin dashboard, ecommerce admin dashboard, dashboard laravel, analytics dashboard, template dashboard, admin panel template, bootstrap admin panel template">
        
        <!-- TITLE -->
		<title> AMIGO - Garzón Romero </title>

        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

        <link href="{{ asset('css/fa_all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">
        
        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])

        <!-- MAIN JS -->
        <script src="{{asset('build/assets/main.js')}}"></script>

        @yield('styles')

	</head>

	<body>

        <!-- PAGE -->
		<div class="page" style="margin-left: 0px !important;">
            <!-- MAIN-CONTENT -->

            <div class="main-content app-content" style="margin-left: 0px !important;">

                @yield('content')

            </div> 
            <!-- END MAIN-CONTENT -->
		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('layouts.components.scripts')

        @yield('scripts')

        <!-- STICKY JS -->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script src="{{ asset('js/bs-custom-file-input.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>

        @include('plantilla.mina.mensaje')
        <livewire:scripts />
        @yield('codigo')
        <!-- END SCRIPTS -->

	</body>
</html>
