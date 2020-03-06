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
        <link rel="stylesheet" href="/frontend/css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="/frontend/css/plugins/font-awesome.css">
		<link rel="stylesheet" href="/frontend/css/plugins/magnific-popup.css">
		<link rel="stylesheet" href="/frontend/css/plugins/simplebar.css">
		<link rel="stylesheet" href="/frontend/css/plugins/owl.carousel.min.css">
		<link rel="stylesheet" href="/frontend/css/plugins/owl.theme.default.min.css">
		<link rel="stylesheet" href="/frontend/css/plugins/jquery.animatedheadline.css">

		<!-- CSS Base -->
        <link rel="stylesheet" href="frontend/css/style.css">

    </head>
    <body>

		<!-- Preloader -->
		<div id="preloader">
			<div class="loading">
				<div class="circle"></div>
				<div class="text-loading">
					<span data-text-preloader="S" class="letters">S</span>
					<span data-text-preloader="T" class="letters">T</span>
					<span data-text-preloader="E" class="letters">E</span>
					<span data-text-preloader="V" class="letters">V</span>
					<span data-text-preloader="E" class="letters">E</span>
                </div>
                <div class="text-loading">
					<span data-text-preloader="N" class="letters">N</span>
					<span data-text-preloader="Y" class="letters">Y</span>
					<span data-text-preloader="A" class="letters">A</span>
					<span data-text-preloader="N" class="letters">N</span>
					<span data-text-preloader="U" class="letters">U</span>
					<span data-text-preloader="M" class="letters">M</span>
					<span data-text-preloader="B" class="letters">B</span>
					<span data-text-preloader="A" class="letters">A</span>
				</div>
			</div>
		</div>

		<!-- Home Section -->
		<section class="home" style="background-image: url('{{ asset('img/background/background.jpg') }}')">

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
            @include('layouts.partial.notify')

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
			{{-- <div class="lang">
                <ul>
                    <li><a href="#" class="active">eng</a></li>
                    <li><a href="#">rus</a></li>
                </ul>
            </div> --}}

			<!-- Social -->
			<div class="social">
            	<ul>
                	<li><a href="https://facebook.com/KingStevenNOS"><i class="fab fa-facebook-f"></i></a></li>
                	<li><a href="https://twitter.com/KingStevenNOS"><i class="fab fa-twitter"></i></a></li>
                	<li><a href="https://www.instagram.com/steven_nyanumba/"><i class="fab fa-instagram"></i></a></li>

            	</ul>
        	</div>

		</section>

        <!-- About Section -->
        @foreach ($abouts as $item)

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
										<img alt="" src="/img/about/{{ ($item->image) }}">
									</div>
								</div>
								<div class="col-lg-8 col-sm-8">
									<h4>{{ $item->name }}</h4>
									<div class="loc">
										<i class="fas fa-map-marked-alt"></i> {{ $item->city }}, {{ $item->country }}
									</div>
									{!! $item->description !!}
								</div>
							</div>
							<div class="btn-about">
								<a href="/docs/about/{{ ($item->cv) }}" class="btn-st">Download CV</a>
							</div>
						</div>
					</div>

					<!-- Video Block -->
					<div class="col-lg-4 col-sm-12">
						<div class="box">
							<h4 class="text-center">Video Presentation</h4>
							<div class="video">
								<a class="video-play video-link" href="{{ $item->video }}"></a>
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
                    @foreach ($skills as $item)
                    <div class="col-lg-4 col-sm-6">
                        <div class="service box mb-40">
                            <i class="fas fa-cogs"></i>
                            <h4>{{ $item->skill }}</h4>
                            <p></p>
                        </div>
                    </div>
                    @endforeach

				</div>
				<!-- Service Row End -->

				{{-- <!-- Testimonial Row Start -->
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
				<!-- Testimonial Row End --> --}}

				{{-- <!-- Price Row Start -->
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
				<!-- Price Row End --> --}}
			</div>
		</section>

        @endforeach
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
                                @foreach ($experiences as $item)
                                <div class="item">
									<div class="main">
										<h4>{{ $item->title }}</h4>
										<p><i class="far fa-calendar-alt"></i>{{ $item->start_year }} - {{ $item->end_year }} | {{ $item->company }} </p>
									</div>
									{!! $item->description !!}
								</div>
                                @endforeach
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
                                @foreach ($educations as $item)
                                <div class="item">
									<div class="main">
										<h4>{{ $item->title }}</h4>
										<p><i class="far fa-calendar-alt"></i>{{ $item->start_year }} - {{ $item->end_year }} | {{ $item->institution }}</p>
                                    </div>
                                    {!! $item->description !!}
								</div>
                                @endforeach

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
                            @foreach ($skills as $item)
                                @if ($item->id % 2 == 0)
                                    <div class="skill-item">
                                        <h4 class="progress-title">{{ $item->skill }}</h4>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:{{ ($item->level) }}%">
                                                <div class="progress-value">{{ $item->level }}%</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
						</div>

						<div class="col-lg-6 col-sm-6">

                            <!-- Skill Item -->
                            @foreach ($skills as $item)
                                @if ($item->id%2==1)
                                    <div class="skill-item">
                                        <h4 class="progress-title">{{ $item->skill }}</h4>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:{{ ($item->level) }}%">
                                                <div class="progress-value">{{ $item->level }}%</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
						</div>
					</div>
				</div>
				<!-- Skills Row End -->

				<!-- Work Process Row Start -->
				{{-- <div class="row mt-100">

					<!-- Header Block -->
					<div class="col-md-12">
						<div class="header-box mb-50">
							<h3>My Working Process</h3>
						</div>
					</div>
				</div> --}}

				{{-- <div class="box work-process mb-100">
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
                </div> --}}

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
                            @foreach ($categories as $item)
                            <li data-filter=".{{ Str::slug($item->category) }}">{{ $item->category }}</li>
                            @endforeach

						</ul>
					</div>
				</div>
				<!-- Portfolio Filter Row End -->

				<!-- Portfolio Item Row Start -->
				<div class="row portfolio-items mt-100 mb-100">

                    <!-- Portfolio Item -->
                    @foreach ($portfolios as $item)
                    <div class="item col-lg-4 col-sm-6 {{ Str::slug($item->category) }}">
						<figure>
							<img alt="" src="/img/portfolio/{{ $item->image }}">
							<figcaption>
								<h3>{{ $item->title }}</h3>
								<p>{{ $item->category }}</p>
								<a href="{{ route('portfolio' , $item->id )}}"></a>
								<a class="image-link" href="/img/portfolio/{{ ($item->image) }}"></a>
							</figcaption>
						</figure>
						<label for="figure"><a class="btn btn-sm btn-info" href="{{ route('portfolio', $item->id) }}">About {{$item->title}}</a></label>
					</div>
                    @endforeach
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
                    @foreach ($posts as $item)
                    <div class="col-lg-4 col-sm-6">
						<div class="blog-item">
							<div class="thumbnail">
								<span class="date">{{ $item->created_at->format('M jS, Y') }}</span>
								<a href="{{ route('blog',$item->id) }}"><img alt="" src="/img/post/{{ ($item->image) }}"></a>
							</div>
							<div class="meta">
								<span class="cat"><i class="fas fa-hashtag"></i>{{ $item->category }}</span>
							</div>
							<h4><a href="single-blog.html">{{ $item->title }}</a></h4>
							{!! Str::limit($item->content, 30) !!}
							<div class="blog-btn">
								<a href="{{ route('blog',$item->id) }}" class="btn-st" >Read More</a>
							</div>
						</div>
					</div>
                    @endforeach
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
                        <form class="form-wrap validate-form" action="{{ Route('contact.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

							<!--Full name-->
							<div class="validate-input">
								<input id="name" class="input" type="text" name="full_name" placeholder="Full name" required>
								<span class="focus-input"></span>
								<label class="label-input" for="name">
									<i class="fas fa-user"></i>
								</label>
							</div>

							<!--Email-->
							<div class="validate-input">
								<input id="email" class="input" type="text" name="email" placeholder="example@example.com" required>
								<span class="focus-input"></span>
								<label class="label-input" for="email">
									<i class="fas fa-envelope"></i>
								</label>
                            </div>

                            <!--Phone Number-->
							<div class="validate-input">
								<input id="email" class="input" type="text" name="phone_number" placeholder="0712 345 678" required>
								<span class="focus-input"></span>
								<label class="label-input" for="email">
									<i class="fas fa-phone-square"></i>
								</label>
                            </div>

                            <!--Country Code-->
							<div class="validate-input">
								<input id="country_code" class="input" type="number" name="country_code" placeholder="254" required>
								<span class="focus-input"></span>
								<label class="label-input" for="email">
									<i class="fas fa-map-marked"></i>
								</label>
							</div>

							<!--Massage-->
							<div class="validate-input">
								<input type="submit" class="btn-st" value="Submit">
								<span class="focus-input"></span>
							</div>
							{{-- <div class="form-btn">
								<a href="#" class="btn-st">Talk to A Human</a>
							</div> --}}
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
										<p><a href="mailto:reach@stevenyanumba.com">reach@stevenyanumba.com</a></p>
                            		</div>
								</div>

                           		 <!--Contact Info Item-->
            					<div class="col-lg-12">
                            		<div class="info-item">
                               		<span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                               			<h4>Addres</h4>
										<p>1st Floor, East African Growers Building,
										Kijabe Street.</p>
										<p>P.O.BOX 79051-00400, NBI</p>
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



				{{-- <!--Google Map Start-->
				<div class="google-map box mt-100 mb-100">
					<div class="row">
						<div class="col-lg-12">
							<div id="map" data-latitude="40.712775" data-longitude="-74.005973" data-zoom="14"></div>
						</div>
					</div>
				</div>
				<!--Google Map End--> --}}

			</div>
        </section>


        <script src="frontend/js/jquery.min.js"></script>
		<script src="frontend/js/isotope.pkgd.min.js"></script>
		<script src="frontend/js/bootstrap.min.js"></script>
		<script src="frontend/js/simplebar.js"></script>
		<script src="frontend/js/owl.carousel.min.js"></script>
		<script src="frontend/js/jquery.magnific-popup.min.js"></script>
		<script src="frontend/js/jquery.animatedheadline.min.js"></script>
        <script src="frontend/js/main.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

		<!-- Page Script -->
		<script src="frontend/js/jquery.ripples-min.js"></script>
		<script>
			$('.home').ripples({
				resolution: 1000,
				dropRadius: 15,
				perturbance: 0.02
			});
		</script>
    </body>
</html>
