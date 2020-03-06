<!DOCTYPE html>
<html lang="en">
    <head>

		<!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- Title -->
		<title>Steve Nyanumba - {{ $portfolio->title}} </title>

		<!-- CSS Plugins -->
        <link rel="stylesheet" href="/frontend/css/plugins/font-awesome.css">
		<link rel="stylesheet" href="/frontend/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="/frontend/css/plugins/bootstrap.min.css">
		<link rel="stylesheet" href="/frontend/css/plugins/simplebar.css">
		<link rel="stylesheet" href="/frontend/css/plugins/owl.carousel.min.css">
		<link rel="stylesheet" href="/frontend/css/plugins/owl.theme.default.min.css">
		<link rel="stylesheet" href="/frontend/css/plugins/jquery.animatedheadline.css">

		<!-- CSS Base -->
        <link rel="stylesheet" href="frontend/css/style.css">

    </head>
    <body>

		<!-- Preloader -->
		{{-- <div id="preloader">
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
		</div> --}}

		<!--Blog Page-->
		<div class="blog-page" data-simplebar>
			<a href="/" class="close-blog" data-tooltip="close Portfolio" data-position="bottom">
				<i class="far fa-times-circle"></i>
			</a>
			<div class="blog-image" >
				<img src="/img/portfolio/{{ $portfolio->image }}" alt="">
			</div>
			<div class="row blog-container">
				<div class="col-md-10 offset-md-1">

					<!-- Heading -->
					<div class="blog-heading pt-70 pb-100">
						<h2>{{ $portfolio->title }}</h2>
						<span><i class="fas fa-home"></i><a href="/">Home</a></span>
						{{-- <span><i class="fas fa-comment"></i><a href="#">5 comments</a></span> --}}
						<span><i class="fas fa-calendar-alt"></i>{{ $portfolio->created_at->format('D, jS F, Y' ) }}</span>
					<!-- Content -->
						<div class="m-5">
							{!! $portfolio->description !!}
						</div>
						@if (!empty($portfolio->link) )
							<a href="{{$portfolio->link}}" class="btn btn-lg btn-success" >View Project</a>
						@endif
					</div>
				</div>
			</div>
		</div>

		<script src="/frontend/js/jquery.min.js"></script>
		<script src="/frontend/js/isotope.pkgd.min.js"></script>
		<script src="/frontend/js/bootstrap.min.js"></script>
		<script src="/frontend/js/simplebar.js"></script>
		<script src="/frontend/js/owl.carousel.min.js"></script>
		<script src="/frontend/js/jquery.magnific-popup.min.js"></script>
		<script src="/frontend/js/jquery.animatedheadline.min.js"></script>
        <script src="/frontend/js/main.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    </body>
</html>
