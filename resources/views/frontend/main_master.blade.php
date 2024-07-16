<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="icon" href="assets/images/logo.png">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  
		<!-- Bootstrap CSS -->
		<link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{asset('assets/frontend/css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">
		<title>Amrita Pest Management Pvt. Ltd.</title>

	</head>

	<body>

                <!-- header start -->
                @include('frontend.body.header')
                <!-- header end -->

                <!-- main content start -->
                @yield('content')
                <!-- main content end -->

		<script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/tiny-slider.js')}}"></script>
		<script src="{{asset('assets/frontend/js/custom.js')}}"></script>

                    <!-- footer start -->
                    @include('frontend.body.footer')
                <!-- footer end -->

	</body>

</html>
