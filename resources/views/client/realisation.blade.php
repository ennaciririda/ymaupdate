<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>yma brand</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<link href="assets/img/logo.png" rel="icon">
	<link href="assets/img/logo.png" rel="apple-touch-icon">
	<!-- Favicons -->

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/retroica" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/aileron" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/realisationstyle.css" rel="stylesheet">

</head>



<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top ">
		<div class="container d-flex align-items-center">

			<h1 class="logo me-auto"><a href="index.html">YMA </a> <a href="#" style="color: #EF8803 ">brand</a>
			</h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto " href="{{ url('/') }}">Accueil</a></li>
					<li><a class="nav-link scrollto " href="{{ url('yma') }}">YMA</a></li>
					<li><a class="nav-link scrollto" href="#">Studio</a></li>
					<li><a class="nav-link   scrollto" href="{{ url('services') }}">Services</a></li>
					<li><a class="nav-link  active" href="{{ url('realisation') }}">Realisations</a></li>
					<li><a class="nav-link scrollto" href="#">Solutions</a></li>
					<li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<video autoplay muted loop plays-inline class="back-video">
			<source src="assets/video/background.mp4" type="video/mp4">
		</video>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
					data-aos="fade-up" data-aos-delay="200">
					<h1>Your Media Adventure</h1>
					<h2>agence de communication audiovisuelle et marketing d'influence</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-5">
				</div>
				<div class="col-2 d-flex  justify-content-center" data-aos="fade-up" data-aos-delay="200">
					<a class="btn" href="#main"><i class="bi bi-arrow-down-short"></i></a>
				</div>
				<div class="col-5">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Services Section ======= -->
		<section id="services" class="services section-bg">
			<div class="container-fluid" data-aos="fade-up">

				<div class="section-title">
					<h2>Nos Realisations</h2>
				</div>

				<div class="row">
					@foreach($projects as $project)
					@if ($project->type == 'image')
					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-3" data-aos="zoom-in"
						data-aos-delay="200">
						<div class="icon-box">
							<h4 class="text-center">{{$project->title}}</h4>
							<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
								<!-- Slides -->
								<div class="carousel-inner">
									@foreach ($files->where('project_id', $project->id) as $file)
									<div class="carousel-item {{ $loop->first ? 'active' : '' }}"
										data-bs-interval="100">
										<img src="{{asset('images/' . $file->filename .'')}}" alt="{{$project->title}}"
											class="d-block w-100 midea">
									</div>
									@endforeach
								</div>
								<!-- Controls -->

							</div>
							<h4 class="text-center category">{{$project->category}}</h4>
						</div>
					</div>
					@elseif ($project->type == 'video')
					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-3" data-aos="zoom-in"
						data-aos-delay="10000">
						<div class="icon-box">
							<h4 class="text-center">{{$project->title}}</h4>
							@foreach ($files->where('project_id', $project->id) as $file)
							<video autoplay muted loop plays-inline class=" midea">
								<source src="{{asset('images/' . $file->filename .'')}}" type="video/mp4">
							</video>
							@endforeach
							<h4 class="text-center category">{{$project->category}}</h4>
						</div>
					</div>
					@endif
					@endforeach
				</div>

			</div>
		</section><!-- End Services Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="container footer-bottom clearfix">
			<div class="container">
				<div class="row ">

					<div class="col-lg-4 col-md-6 footer-contact">
						<h3><a href="#" style="color : #fff;">YMA</a> brand</h3>
						<p>
							A108 Adam Street <br>
							New York, NY 535022<br>
							United States <br><br>

						</p>
					</div>

					<div class="col-lg-4 col-md-6 footer-links">
						<h4>Nos contacts</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Call : +212 616-360735 | +212
									666-216960</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Email : ymagestion@gmail.com</a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-links">
						<h4>Our Social Networks</h4>
						<p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>