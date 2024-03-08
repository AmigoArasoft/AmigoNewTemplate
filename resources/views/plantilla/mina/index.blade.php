<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

    <head>

        <!-- META DATA -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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


        @include('layouts.components.styles')

        <!-- MAIN JS -->
        <script src="{{asset('build/assets/main.js')}}"></script>

        @yield('styles')

	</head>

	<body>
        @include('plantilla.mina.vinculo')

        <!-- LOADER -->
		<div id="loader">
			<img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
		</div>
		<!-- END LOADER -->

        <!-- PAGE -->
		<div class="page">

            <!-- HEADER -->

            @include('layouts.components.header')

            <!-- END HEADER -->

            <!-- SIDEBAR -->

            @include('layouts.components.sidebar')

            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->

            <div class="main-content app-content">

                @yield('content')

            </div> 
            <!-- END MAIN-CONTENT -->

            <!-- FOOTER -->
            
            @include('layouts.components.footer')

            <!-- END FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('layouts.components.scripts')

        @yield('scripts')

        <!-- STICKY JS -->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- APP JS -->
		@vite('resources/js/app.js')


        <!-- CUSTOM-SWITCHER JS -->
        @vite('resources/assets/js/custom-switcher.js')

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
