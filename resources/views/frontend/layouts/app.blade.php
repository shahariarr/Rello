<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
		{{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}"> --}}
        <link  href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"  rel="stylesheet"
/>
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/dark-mode.css') }}">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">


		<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.png') }}">
		<!-- Title -->
		<title>Rello - Real Estate HTML Template</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader" id="loader-style">
			<div class="preloader-wrap">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
    @include('frontend.inc.navbar')

    @yield('content')




        <!-- Links of JS File -->
        <script data-cfasync="false" src="{{ asset('frontend//cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/meanmenu.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/mixitup.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/jquery.sticky-sidebar.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
        {{-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script> --}}

        @stack('scripts')

</body>
</html>
