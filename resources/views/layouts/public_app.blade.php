<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>SMMQuest</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
	
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- <link rel="shortcut icon" href="{{ asset('images/logos/favicon.png') }}" /> -->
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!--end::Fonts-->
		
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

		<link rel="stylesheet" href="{{ asset('css/app.css') }}" >
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body>
		<!--begin::Root-->
		<div>
			<!--begin::Content-->
			@yield('content')
			<!--end::Content-->             		
		</div>
		<!--end::Root-->
		
        
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>	
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<!--end::Javascript-->
		<script src="{{ asset('js/app.js') }}"></script>
		@stack('scripts')
	</body>
	<!--end::Body-->
</html>