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
	<link href="assets/css/contactstyle.css" rel="stylesheet">

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top ">
		<div class="container d-flex align-items-center">


			<h1 class="logo me-auto"><a href="#">YMA </a> <a href="#" style="color: #EF8803 ">brand</a> </h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link  " href="{{ url('/') }}">Accueil</a></li>
					<li><a class="nav-link " href="{{ url('yma') }}">YMA</a></li>
					<li><a class="nav-link " href="{{ url('studio') }}">Studio</a></li>
					<li><a class="nav-link  " href="{{ url('services') }}">Services</a></li>
					<li><a class="nav-link  " href="{{ url('realisation') }}">Realisations</a></li>
					<li><a class="nav-link " href="#">Solutions</a></li>
					<li><a class="nav-link active" href="{{ url('contact') }}">Contact</a></li>
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
					<h2>agence de communication audiovisuelle et marketing d’influence</h2>
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

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact" style="margin-top:-40px;">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
				</div>

				<div class="row">

					<div class="col-lg-5 d-flex align-items-stretch">
						<div class="info">

							<div class="phone">
								<i class="bi bi-phone"></i>
								<h4>Call:</h4>
								<p>+212 616-360735 | +212 666-216960</p>
							</div>
							<div class="email">
								<i class="bi bi-envelope"></i>
								<h4>Email:</h4>
								<p>ymagestion@gmail.com</p>
							</div>
							<div class="address">
								<i class="bi bi-geo-alt"></i>
								<h4>Location:</h4>
								<p>A108 Adam Street, New York, NY 535022</p>
							</div>
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.1615380475396!2d-9.530726685223026!3d30.40315840849311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b7c1c619bafb%3A0xde4b357715ecb525!2sYMA%20Brand!5e0!3m2!1sen!2sma!4v1677278080739!5m2!1sen!2sma"
								frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen>
							</iframe>
						</div>

					</div>

					<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
						<form action="{{ route('contact.store') }}" id="form" enctype="multipart/form-data" class="php-email-form">
						@csrf
							<div class="row">
								<div class="form-group col-md-6">
									<label for="name">Your Name</label>
									<input type="text" name="name" class="form-control" id="name" >
								</div>
								<div class="form-group col-md-6">
									<label for="name">Your Email</label>
									<input type="email" class="form-control" name="email" id="email" >
								</div>
							</div>
							<div class="form-group">
								<label for="name">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" >
							</div>
							<div class="form-group">
								<label for="name">Message</label>
								<textarea class="form-control" name="message" id ="message" rows="10" ></textarea>
							</div>
							<div class="text-center"><button class="contact-btn" type="submit">Send Message</button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->


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
							<li><i class="bx bx-chevron-right"></i> <a href="#">Call : +212 616-360735 | +212 666-216960</a></li>
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

	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


</body>




<script>
	$(function() {

		$('#form').validate({
			rules: {
			name:{
				required: true,
			},
			email: {
				required: true,
				email: true,
			},
			subject: {
				required: true,
			},
			message: {
				required: true,
			},
			},
			messages: {
			name:{
				required: "enter your name"
			},
			email: {
				required: "enter the type",
				email: "valid email please",
			},
			subject: {
				required: "subject please",
			},
			message: {
				required: "message please",
			},
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
			},
			highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
			},
			unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
			}
		});

		$("#form").submit(function(e) {
			e.preventDefault();
			var formData = new FormData(this);
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: '{{ route('contact.store') }}',
				method: 'post',
				processData: false,
				contentType: false,
				data: formData,
				success: function(response) {

					if (response.status == 200) {
						Swal.fire(
							'Added!',
							'Product Added Successfully!',
							'success'
						)
					}
					$('#form')[0].reset();
				}
			});
		});
	});
	</script>

</html>