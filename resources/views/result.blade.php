<!DOCTYPE HTML>
<html>
	<head>
		<title>सहि उमेर सहि कदम</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/reset.css')}}>
		<link rel="stylesheet" href={{ URL::asset('css/main.css')}} />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">हाजिरी जवाफ <span>by सहि उमेर सहि कदम</span></a></div>
				
			</header>

		<!-- Nav -->
			

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="1" class="wrapper post bg-img" data-bg="banner1.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2> उत्तरहरु </h2>
						</header>
						<div class="result_box">तपाईको {{$points}} वटा उत्तरहरु सहि थियो
						</div>
						<footer>
						<a href="{{ route('quiz.solution') }}">उत्तरहरु  हेर्नुहोस</a>
						</footer>
					</article>
				</div>
				
			</section>

		<!-- Two -->
			
		<!-- Footer -->

		<!-- Scripts -->
			<script src={{ URL::asset('js/jquery.min.js')}}></script>
			<script src={{ URL::asset('js/jquery.scrolly.min.js')}}></script>
			<script src={{ URL::asset('js/jquery.scrollex.min.js')}}></script>
			<script src={{ URL::asset('js/skel.min.js')}}></script>
			<script src={{ URL::asset('js/util.js')}}></script>
			<script src={{ URL::asset('js/main1.js')}}></script>

	</body>
</html>