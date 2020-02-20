<!DOCTYPE html>
<html lang="en">
    <head>

		<!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- Title -->
		<title>Leila - Personal Portfolio Template</title>

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

		<!--Blog Page-->
		<div class="blog-page" data-simplebar>
			<a href="/" class="close-blog" data-tooltip="close blog" data-position="bottom">
				<i class="far fa-times-circle"></i>
			</a>
			<div class="blog-image">
				<img src="/img/post/{{ $post->image }}" alt="">
			</div>
			<div class="row blog-container">
				<div class="col-md-10 offset-md-1">

					<!-- Heading -->
					<div class="blog-heading pt-70 pb-100">
						<h2>{{ $post->title }}</h2>
						<span><i class="fas fa-home"></i><a href="/">Home</a></span>
						{{-- <span><i class="fas fa-comment"></i><a href="#">5 comments</a></span> --}}
						<span><i class="fas fa-calendar-alt"></i>{{ $post->created_at->toDateString() }}</span>
						<div class="m-5">
							{!! $post->content !!}
						</div>
					</div>

					<!-- Content -->
					

					{{-- <!-- Comments -->
					<div class="blog-comments mt-100">
						<h3 class="mb-50">Comments</h3>
						<ul>
							<li>
								<div class="author-img">
									<img src="img/blog/authors/author-1.png" alt="">
								</div>
								<div class="comment-text">
									<a href="#"><i class="fas fa-reply"></i>Reply</a>
									<h4>Alex Doe</h4>
									<span>Aug 15, 2018 at 8:11 am</span>
									<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
								</div>
								<ul>
									<li>
										<div class="author-img">
											<img src="img/blog/authors/author-2.png" alt="">
										</div>
										<div class="comment-text">
											<h4>Kriss Doe</h4>
											<span>Aug 15, 2018 at 8:11 am</span>
											<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus, nec dapibus felis tempus in. Quisque eget elementum sem, cursus tristique orci.</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<div class="author-img">
									<img src="img/blog/authors/author-3.png" alt="">
								</div>
								<div class="comment-text">
									<a href="#"><i class="fas fa-reply"></i>Reply</a>
									<h4>Emma Doe</h4>
									<span>Aug 15, 2018 at 8:11 am</span>
									<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
								</div>
							</li>
						</ul>
					</div>

					<!--Blog Form-->
					<h3 class="mt-100 mb-50">Leave a comment</h3>

					<form class="form-wrap validate-form mb-100">

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
							<textarea id="message" class="input" name="message" placeholder="Your comments..."></textarea>
							<span class="focus-input"></span>
							<label class="label-input comment" for="message">
								<i class="fas fa-comment"></i>
							</label>
						</div>
						<div class="form-btn">
							<a href="#" class="btn-st">Send a comment</a>
						</div>
					</form> --}}
				</div>
			</div>
		</div>

		<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
		<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/js/simplebar.js') }}"></script>
		<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('frontend/js/jquery.animatedheadline.min.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    </body>
</html>
