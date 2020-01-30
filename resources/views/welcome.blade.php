<!DOCTYPE html>
<html lang="en">
    <head>

		<!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- Title -->
        <title>Steve Nyanumba</title>
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

		<!-- CSS Plugins -->
        <link rel="stylesheet" href="{{ asset('frontend/css/plugins/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/plugins/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/plugins/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/plugins/simplebar.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/plugins/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/plugins/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/plugins/jquery.animatedheadline.css') }}">

		<!-- CSS Base -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    </head>
    <body>

		<!-- Preloader -->
		<div id="preloader">
			<div class="loading">
				<div class="circle"></div>
				<div class="text-loading">
					<span data-text-preloader="L" class="letters">L</span>
					<span data-text-preloader="E" class="letters">E</span>
					<span data-text-preloader="I" class="letters">I</span>
					<span data-text-preloader="L" class="letters">L</span>
					<span data-text-preloader="A" class="letters">A</span>
				</div>
			</div>
		</div>

		<!-- Home Section -->
		<section class="home" style="background-image: url('{{ asset('frontend/img/home-bg.jpg') }}')">

			<!-- Banner -->
			<div class="banner">
  				<h1>Steve Nyanumba</h1>

				<p class="cd-headline zoom">
					<span>I am a</span>
					<span class="cd-words-wrapper">
						<b class="is-visible">Developer</b>
						<b> Designer</b>
						<b>Illustrator</b>
						<b>Freelancer</b>
					</span>
				</p>
			</div>

			<!-- Menu -->
			<div class="menu">
				<div class="but-menu">
    				<div class="line line-top"></div>
    				<div class="line line-middle"></div>
    				<div class="line line-bottom"></div>
  				</div>
				<div class="but-about menu-item">
					<i class="fas fa-user-tie about-show" data-tooltip="about me" data-position="top"></i>
  				</div>
				<div class="but-resume menu-item">
    				<i class="fas fa-address-book resume-show" data-tooltip="resume" data-position="right"></i>
  				</div>
  				<div class="but-portfolio menu-item">
    				<i class="fas fa-briefcase portfolio-show" data-tooltip="portfolio" data-position="right"></i>
  				</div>
  				<div class="but-blog menu-item">
    				<i class="fas fa-receipt blog-show" data-tooltip="blog" data-position="left"></i>
  				</div>
				<div class="but-contact menu-item">
    				<i class="fas fa-envelope contact-show" data-tooltip="contact" data-position="left"></i>
  				</div>
			</div>

			<div class="page-wrap">
  				<div class="page-background"></div>
			</div>

			<!-- Language -->
			<div class="lang">
                <ul>
                    <li><a href="#" class="active">eng</a></li>
                    <li><a href="#">rus</a></li>
                </ul>
            </div>

			<!-- Social -->
			<div class="social">
            	<ul>
                	<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                	<li><a href="#"><i class="fab fa-twitter"></i></a></li>
                	<li><a href="#"><i class="fab fa-instagram"></i></a></li>

            	</ul>
        	</div>

		</section>

		<!-- About Section -->
		<section class="about section" data-simplebar>
			<div class="container">
				<div class="header-page mt-70">
					<i class="fas fa-user-tie icon-page"></i>
  					<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
					<h2>About Me</h2>
				</div>

				<!-- Personal Info Start -->
				<div class="row mt-100 mob-mt">

					<!-- Information Block -->
					<div class="col-lg-8 col-sm-12">
    					<div class="info box">
							<div class="row">
								<div class="col-lg-4 col-sm-4">
									<div class="photo pt-10">
										<img alt="" src="{{ asset('frontend/img/user-photo.jpg') }}">
									</div>
								</div>
								<div class="col-lg-8 col-sm-8">
									<h4>Alex Smith</h4>
									<div class="loc">
										<i class="fas fa-map-marked-alt"></i> New York, USA
									</div>
									<p>I'm 23 years old creative web designer, specializing in User Interface Design and Development. I build clean, appealing, and functional interfaces which comply with the latest web standards. Through my years of experience as a professional web/graphic designer I have acquired the skills and knowledge necessary to make your project a success!</p>
								</div>
							</div>
							<div class="btn-about">
								<a href="#" class="btn-st">Download CV</a>
							</div>
						</div>
					</div>

					<!-- Video Block -->
					<div class="col-lg-4 col-sm-12">
						<div class="box">
							<h4 class="text-center">Video Presentation</h4>
							<div class="video">
								<a class="video-play video-link" href="https://www.youtube.com/watch?v=QBEnXQqbKUI"></a>
								<div class="video-bg">
									<img alt="#" src="{{ asset('frontend/img/video-bg.jpg') }}">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Personal Info End -->

				<!-- Service Row Start -->
				<div class="row mt-100">

					<!-- Header Block -->
					<div class="col-md-12">
						<div class="header-box mb-50">
							<h3>Services</h3>
						</div>
					</div>

					<!-- Service Item -->
					<div class="col-lg-6 col-sm-6">
						<div class="service box mb-40">
							<i class="fas fa-desktop"></i>
							<h4>Web Design</h4>
							<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
						</div>
					</div>

					<!-- Service Item -->
					<div class="col-lg-6 col-sm-6">
						<div class="service box mb-40">
							<i class="fas fa-cogs"></i>
							<h4>Web Development</h4>
							<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
						</div>
					</div>

					<!-- Service Item -->
					<div class="col-lg-6 col-sm-6">
						<div class="service box mb-40">
							<i class="fas fa-mobile-alt"></i>
							<h4>Responsive Design</h4>
							<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
						</div>
					</div>

					<!-- Service Item -->
					<div class="col-lg-6 col-sm-6">
						<div class="service box mb-40">
							<i class="fas fa-medkit"></i>
							<h4>quick Support</h4>
							<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
						</div>
					</div>
				</div>
				<!-- Service Row End -->

				<!-- Testimonial Row Start -->
				<div class="row testimonial mt-60">

					<!-- Header Block -->
					<div class="col-md-12">
						<div class="header-box mb-50">
							<h3>Testimonials</h3>
						</div>
					</div>

					<div class="owl-carousel owl-theme">

						<!-- Testimonail Item -->
						<div class="testimonial-item">
							<div class="media">
								<img src="{{ asset('frontend/img/testimonials/testimonial-1.jpg') }}" alt="">
								<div class="content">
									<h4>John Doe</h4>
									<p>Web Development</p>
								</div>
							</div>
							<div class="comment pt-30">
								<p>
									Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
									sem just metup consequat gestas facilisis eleifend posure tempor
									metus sem just metup consequat gestas facilisis eleifend posures
									temporureture.
								</p>
							</div>
						</div>

						<!-- Testimonail Item -->
						<div class="testimonial-item">
							<div class="media">
								<img src="{{ asset('frontend/img/testimonials/testimonial-2.jpg') }}" alt="">
								<div class="content">
									<h4>Alex Doe</h4>
									<p>UI/UX Designer</p>
								</div>
							</div>
							<div class="comment pt-30">
								<p>
									Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
									sem just metup consequat gestas facilisis eleifend posure tempor
									metus sem just metup consequat gestas facilisis eleifend posures
									temporureture.
								</p>
							</div>
						</div>

						<!-- Testimonail Item -->
						<div class="testimonial-item">
							<div class="media">
								<img src="{{ asset('frontend/img/testimonials/testimonial-3.jpg') }}" alt="">
								<div class="content">
									<h4>David Doe</h4>
									<p>UI/UX Designer</p>
								</div>
							</div>
							<div class="comment pt-30">
								<p>
									Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
									sem just metup consequat gestas facilisis eleifend posure tempor
									metus sem just metup consequat gestas facilisis eleifend posures
									temporureture.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Testimonial Row End -->

				<!-- Price Row Start -->
				<div class="row mt-100 mb-60">

					<!-- Header Block -->
					<div class="col-md-12">
						<div class="header-box mb-50">
							<h3>Price</h3>
						</div>
					</div>

					<!-- Price Item -->
					<div class="col-lg-4 col-sm-12">
						<div class="price box">
							<div class="head-price">
								<i class="fa fa-user"></i>
								<h4>Basic</h4>
							</div>
							<div class="body-price">
								<div class="price-plan">
									<span class="currency">$</span>
									<span class="number">25</span>
									<span class="period">month</span>
								</div>
								<div class="list-price">
									<ul>
										<li>Web Design</li>
										<li>Web Development</li>
										<li class="disable">Responsive Design</li>
										<li class="disable">Game Development</li>
									</ul>
								</div>
							</div>
							<div class="footer-price">
								<a href="#" class="btn-st">Buy Now</a>
							</div>
						</div>
					</div>

					<!-- Price Item -->
					<div class="col-lg-4 col-sm-12">
						<div class="price box">
							<div class="head-price">
								<i class="fa fa-briefcase"></i>
								<h4>Standard</h4>
							</div>
							<div class="body-price">
								<div class="price-plan">
									<span class="currency">$</span>
									<span class="number">40</span>
									<span class="period">month</span>
								</div>
								<div class="list-price">
									<ul>
										<li>Web Design</li>
										<li>Web Development</li>
										<li>Responsive Design</li>
										<li class="disable">Game Development</li>
									</ul>
								</div>
							</div>
							<div class="footer-price">
								<a href="#" class="btn-st">Buy Now</a>
							</div>
						</div>
					</div>

					<!-- Price Item -->
					<div class="col-lg-4 col-sm-12">
						<div class="price box">
							<div class="head-price">
								<i class="fa fa-globe"></i>
								<h4>Premium</h4>
							</div>
							<div class="body-price">
								<div class="price-plan">
									<span class="currency">$</span>
									<span class="number">55</span>
									<span class="period">month</span>
								</div>
								<div class="list-price">
									<ul>
										<li>Web Design</li>
										<li>Web Development</li>
										<li>Responsive Design</li>
										<li>Game Development</li>
									</ul>
								</div>
							</div>
							<div class="footer-price">
								<a href="#" class="btn-st">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Price Row End -->
			</div>
		</section>

		<!-- Resume Section -->
		<section class="resume section" data-simplebar>
			<div class="container">
				<div class="header-page mt-70">
					<i class="fas fa-address-book icon-page"></i>
  					<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
					<h2>Resume</h2>
				</div>







				<!-- Experience & Education Row Start -->
				<div class="row mt-100 mob-mt">

					<!-- Experience Column Start -->
					<div class="col-lg-6 col-sm-12">

						<!-- Header Block -->
						<div class="header-box mb-50">
							<h3>Experience</h3>
						</div>

						<div class="experience box">
							<div class="bord-l">

								<!-- Experience Item -->
								<div class="item">
									<div class="main">
										<h4>Web Design</h4>
										<p><i class="far fa-calendar-alt"></i>2012 - 2014 | Сompany Inc</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>

								<!-- Experience Item -->
								<div class="item">
									<div class="main">
										<h4>Fornt-End Developer</h4>
										<p><i class="far fa-calendar-alt"></i>2014 - 2015 | Сompany Inc</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>

								<!-- Experience Item -->
								<div class="item">
									<div class="main">
										<h4>Web Development</h4>
										<p><i class="far fa-calendar-alt"></i>2015 - 2019 | Сompany Inc</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Experience Column End -->

					<!-- Education Column Start -->
					<div class="col-lg-6 col-sm-12">

						<!-- Header Block -->
						<div class="header-box mb-50 mob-box-mt">
							<h3>Education</h3>
						</div>

						<div class="experience box">
							<div class="bord-l">

								<!-- Education Item -->
								<div class="item">
									<div class="main">
										<h4>Phd</h4>
										<p><i class="far fa-calendar-alt"></i>2011 - 2013 | Computer Science</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>

								<!-- Education Item -->
								<div class="item">
									<div class="main">
										<h4>Post Graduation</h4>
										<p><i class="far fa-calendar-alt"></i>2013 - 2016 | Computer Science</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>

								<!-- Education Item -->
								<div class="item">
									<div class="main">
										<h4>Gradution</h4>
										<p><i class="far fa-calendar-alt"></i>2016 - 2018 | Computer Science</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Education Column End -->
				</div>
				<!-- Experience & Education Row End -->







				<!-- Skills Row Start -->
				<div class="row mt-100">

					<!-- Header Block -->
					<div class="col-md-12">
						<div class="header-box mb-50">
							<h3>Skills</h3>
						</div>
					</div>
				</div>

				<div class="box skills">
					<div class="row">
						<div class="col-lg-6 col-sm-6">

							<!-- Skill Item -->
							<div class="skill-item">
								<h4 class="progress-title">HTML5</h4>
								<div class="progress">
									<div class="progress-bar" style="width:98%">
										<div class="progress-value">98%</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<h4 class="progress-title">CSS3</h4>
								<div class="progress">
									<div class="progress-bar" style="width:85%">
										<div class="progress-value">85%</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<h4 class="progress-title">JavaScript</h4>
								<div class="progress">
									<div class="progress-bar" style="width:90%">
										<div class="progress-value">90%</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">

							<!-- Skill Item -->
							<div class="skill-item">
								<h4 class="progress-title">UI/UX designer</h4>
								<div class="progress">
									<div class="progress-bar" style="width:77%">
										<div class="progress-value">77%</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<h4 class="progress-title">Photoshop</h4>
								<div class="progress">
									<div class="progress-bar" style="width:85%">
										<div class="progress-value">85%</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<h4 class="progress-title">WordPress</h4>
								<div class="progress">
									<div class="progress-bar" style="width:88%">
										<div class="progress-value">88%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Skills Row End -->

				<!-- Work Process Row Start -->
				<div class="row mt-100">

					<!-- Header Block -->
					<div class="col-md-12">
						<div class="header-box mb-50">
							<h3>My Working Process</h3>
						</div>
					</div>
				</div>

				<div class="box work-process mb-100">
					<div class="row">
						<div class="col-lg-4 col-sm-12 ltr">

                    		<!-- Working Process Item-->
                           	<div class="single-wp width-sm process-1">
								<p class="wp-step">01</p>
								<h4 class="wp-title">Discuss idea</h4>
								<p>I could describe these conceptions, also impress upon paper all that is living.</p>
							</div>

							<!-- Working Process Item-->
							<div class="single-wp width-sm process-2">
								<p class="wp-step">02</p>
								<h4 class="wp-title">Creative concept</h4>
								<p>I could describe these conceptions, also impress upon paper all that is living.</p>
							</div>
						</div>

						<div class="col-lg-4 hidden-sm">

							<!-- Working Process Circle-->
							<div class="wp-circle">
								<h4>Working Process</h4>
								<span class="dots top-l"></span>
								<span class="dots bottom-l"></span>
								<span class="dots top-r"></span>
								<span class="dots bottom-r"></span>
							</div>
						</div>

						<div class="col-lg-4 col-sm-12 rtl">

							<!-- Working Process Item-->
							<div class="single-wp width-sm process-3">
								<p class="wp-step">03</p>
								<h4 class="wp-title">Web concept</h4>
								<p>I could describe these conceptions, also impress upon paper all that is living.</p>
							</div>

							<!-- Working Process Item-->
							<div class="single-wp width-sm process-4">
								<p class="wp-step">04</p>
								<h4 class="wp-title">Final concept</h4>
								<p>I could describe these conceptions, also impress upon paper all that is living.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Work Process Row End -->
			</div>
		</section>


		<!-- Portfolio Section -->
		<section class="portfolio section" data-simplebar>
			<div class="container">
				<div class="header-page mt-70">
					<i class="fas fa-briefcase icon-page"></i>
  					<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
					<h2>Portfolio</h2>
				</div>

				<!-- Portfolio Filter Row Start -->
				<div class="row mt-100 mob-mt">
					<div class="col-lg-12 col-sm-12 portfolio-filter">
						<ul>
							<li class="active" data-filter="*">All</li>
							<li data-filter=".brand">Brand</li>
							<li data-filter=".design">Design</li>
							<li data-filter=".graphic">Graphic</li>
						</ul>
					</div>
				</div>
				<!-- Portfolio Filter Row End -->

				<!-- Portfolio Item Row Start -->
				<div class="row portfolio-items mt-100 mb-100">

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 graphic">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-1.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Graphic</p><i class="fas fa-image"></i>
								<a class="image-link" href="{{ asset('frontend/img/portfolio/img-1.jpg') }}"></a>
							</figcaption>
						</figure>
					</div>

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 design">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-2.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Design</p><i class="fas fa-image"></i>
								<a class="image-link" href="{{ asset('frontend/img/portfolio/img-2.jpg') }}"></a>
							</figcaption>
						</figure>
					</div>

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 brand">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-3.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Graphic</p><i class="fas fa-video"></i>
								<a class="video-link" href="https://www.youtube.com/watch?v=k_okcNVZqqI"></a>
							</figcaption>
						</figure>
					</div>

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 graphic">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-4.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Design</p><i class="fas fa-image"></i>
								<a class="image-link" href="{{ asset('frontend/img/portfolio/img-4.jpg') }}"></a>
							</figcaption>
						</figure>
					</div>

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 design">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-5.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Design</p><i class="fas fa-video"></i>
								<a class="video-link" href="https://www.youtube.com/watch?v=k_okcNVZqqI"></a>
							</figcaption>
						</figure>
					</div>

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 brand">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-6.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Brand</p><i class="fas fa-image"></i>
								<a class="image-link" href="{{ asset('frontend/img/portfolio/img-6.jpg') }}"></a>
							</figcaption>
						</figure>
					</div>

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 graphic">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-7.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Brand</p><i class="fas fa-image"></i>
								<a class="image-link" href="{{ asset('frontend/img/portfolio/img-7.jpg') }}"></a>
							</figcaption>
						</figure>
					</div>

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 design">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-8.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Brand</p><i class="fas fa-image"></i>
								<a class="image-link" href="{{ asset('frontend/img/portfolio/img-8.jpg') }}"></a>
							</figcaption>
						</figure>
					</div>

					<!-- Portfolio Item -->
					<div class="item col-lg-4 col-sm-6 brand">
						<figure>
							<img alt="" src="{{ asset('frontend/img/portfolio/img-9.jpg') }}">
							<figcaption>
								<h3>Project Name</h3>
								<p>Graphic</p><i class="fas fa-image"></i>
								<a class="image-link" href="{{ asset('frontend/img/portfolio/img-9.jpg') }}"></a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- Portfolio Item Row End -->
			</div>
		</section>

		<!-- Blog Section -->
		<section class="blog section" data-simplebar>
			<div class="container">
				<div class="header-page mt-70">
					<i class="fas fa-receipt icon-page"></i>
  					<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
					<h2>Blog</h2>
				</div>

				<!-- Blog Row Start -->
				<div class="row mt-100 mb-50 mob-mt">

					<!-- Blog Item -->
					<div class="col-lg-4 col-sm-6">
						<div class="blog-item">
							<div class="thumbnail">
								<span class="date">Feb 09, 2019</span>
								<a href="single-blog.html"><img alt="" src="{{ asset('frontend/img/blog/img-1.jpg') }}"></a>
							</div>
							<div class="meta">
								<span class="aut">Posted By <b>Alex Smith</b></span>
								<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
							</div>
							<h4><a href="single-blog.html">Road to success</a></h4>
							<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
							<div class="blog-btn">
								<a href="single-blog.html" class="btn-st">Read More</a>
							</div>
						</div>
					</div>

					<!-- Blog Item -->
					<div class="col-lg-4 col-sm-6">
						<div class="blog-item">
							<div class="thumbnail">
								<span class="date">Feb 09, 2019</span>
								<a href="single-blog.html"><img alt="" src="{{ asset('frontend/img/blog/img-2.jpg') }}"></a>
							</div>
							<div class="meta">
								<span class="aut">Posted By <b>Alex Smith</b></span>
								<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
							</div>
							<h4><a href="single-blog.html">Road to success</a></h4>
							<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
							<div class="blog-btn">
								<a href="single-blog.html" class="btn-st">Read More</a>
							</div>
						</div>
					</div>

					<!-- Blog Item -->
					<div class="col-lg-4 col-sm-6">
						<div class="blog-item">
							<div class="thumbnail">
								<span class="date">Feb 09, 2019</span>
								<a href="single-blog.html"><img alt="" src="{{ asset('frontend/img/blog/img-3.jpg') }}"></a>
							</div>
							<div class="meta">
								<span class="aut">Posted By <b>Alex Smith</b></span>
								<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
							</div>
							<h4><a href="single-blog.html">Road to success</a></h4>
							<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
							<div class="blog-btn">
								<a href="single-blog.html" class="btn-st">Read More</a>
							</div>
						</div>
					</div>

					<!-- Blog Item -->
					<div class="col-lg-4 col-sm-6">
						<div class="blog-item">
							<div class="thumbnail">
								<span class="date">Feb 09, 2019</span>
								<a href="single-blog.html"><img alt="" src="{{ asset('frontend/img/blog/img-4.jpg') }}"></a>
							</div>
							<div class="meta">
								<span class="aut">Posted By <b>Alex Smith</b></span>
								<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
							</div>
							<h4><a href="single-blog.html">Road to success</a></h4>
							<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
							<div class="blog-btn">
								<a href="single-blog.html" class="btn-st">Read More</a>
							</div>
						</div>
					</div>

					<!-- Blog Item -->
					<div class="col-lg-4 col-sm-6">
						<div class="blog-item">
							<div class="thumbnail">
								<span class="date">Feb 09, 2019</span>
								<a href="single-blog.html"><img alt="" src="{{ asset('frontend/img/blog/img-5.jpg') }}"></a>
							</div>
							<div class="meta">
								<span class="aut">Posted By <b>Alex Smith</b></span>
								<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
							</div>
							<h4><a href="single-blog.html">Road to success</a></h4>
							<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
							<div class="blog-btn">
								<a href="single-blog.html" class="btn-st">Read More</a>
							</div>
						</div>
					</div>

					<!-- Blog Item -->
					<div class="col-lg-4 col-sm-6">
						<div class="blog-item">
							<div class="thumbnail">
								<span class="date">Feb 09, 2019</span>
								<a href="single-blog.html"><img alt="" src="{{ asset('frontend/img/blog/img-6.jpg') }}"></a>
							</div>
							<div class="meta">
								<span class="aut">Posted By <b>Alex Smith</b></span>
								<span class="cat"><i class="fas fa-hashtag"></i>Design</span>
							</div>
							<h4><a href="single-blog.html">Road to success</a></h4>
							<p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
							<div class="blog-btn">
								<a href="single-blog.html" class="btn-st">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<!--Blog Row End-->
			</div>
		</section>

		<!-- Contact Section -->
		<section class="contact section" data-simplebar>
			<div class="container">
				<div class="header-page mt-70">
					<i class="fas fa-envelope icon-page"></i>
  					<i class="far fa-times-circle close-page" data-tooltip="close page" data-position="left"></i>
					<h2>Contact</h2>
				</div>
				<div class="row mt-100 mob-mt">

					<div class="col-lg-8 col-sm-12">

						<!--Form Start-->
						<form class="form-wrap validate-form">

							<!--Full name-->
							<div class="validate-input">
								<input id="name" class="input" type="text" name="name" placeholder="Full name">
								<span class="focus-input"></span>
								<label class="label-input" for="name">
									<i class="fas fa-user"></i>
								</label>
							</div>

							<!--Email-->
							<div class="validate-input">
								<input id="email" class="input" type="text" name="email" placeholder="example@example.com">
								<span class="focus-input"></span>
								<label class="label-input" for="email">
									<i class="fas fa-envelope"></i>
								</label>
							</div>

							<!--Massage-->
							<div class="validate-input">
								<textarea id="message" class="input" name="message"  placeholder="Your comments..."></textarea>
								<span class="focus-input"></span>
								<label class="label-input comment" for="message">
									<i class="fas fa-comment"></i>
								</label>
							</div>
							<div class="form-btn">
								<a href="#" class="btn-st">Talk to A Human</a>
							</div>
						</form>
						<!--Form End-->
					</div>

					<div class="col-lg-4 col-sm-12">

						<!--Contact Info Row Start-->
						<div class="box">
    						<div class="row">

     							<!--Contact Info Item-->
        						<div class="col-lg-12">
                            		<div class="info-item">
                               			<span class="icon"><i class="fas fa-paper-plane"></i></span>
                               			<h4>Email:</h4>
										<p><a href="mailto:example@example.com">example@example.com</a></p>
                            		</div>
								</div>

                           		 <!--Contact Info Item-->
            					<div class="col-lg-12">
                            		<div class="info-item">
                               		<span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                               			<h4>Addres</h4>
										<p>123 Lorem Ipsum, USA</p>
                            		</div>
								</div>

                           		 <!--Contact Info Item-->
                				<div class="col-lg-12">
                           			<div class="info-item">
                               			<span class="icon"><i class="fas fa-phone"></i></span>
                               			<h4>Phone</h4>
										<p>(+1) 123 456 7890</p>
                           			</div>
								</div>
							</div>
						</div>
						<!--Contact Info Row End-->
					</div>
				</div>

				<!--Google Map Start-->
				<div class="google-map box mt-100 mb-100">
					<div class="row">
						<div class="col-lg-12">
							<div id="map" data-latitude="40.712775" data-longitude="-74.005973" data-zoom="14"></div>
						</div>
					</div>
				</div>
				<!--Google Map End-->

			</div>
		</section>

        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
		<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/js/simplebar.js') }}"></script>
		<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('frontend/js/jquery.animatedheadline.min.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

		<!-- Page Script -->
		<script src="{{ asset('frontend/js/jquery.ripples-min.js') }}"></script>
		<script>
			$('.home').ripples({
				resolution: 1000,
				dropRadius: 15,
				perturbance: 0.02
			});
		</script>
    </body>
</html>
