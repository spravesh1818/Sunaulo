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
				<div class="logo">हाजिरी जवाफ <span>by सहि उमेर सहि कदम</span></div>
				
			</header>

		<!-- Nav -->
			

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="annapurna.jpeg">
				<div class="inner">
					<header>
						<h1> उत्तरहरु </h1>
					</header>
				</div>
				<a href="#1" class="more">Start</a>
			</section>
		<form method='post' id="question_form" action="{{ route('check') }}">
		{{csrf_field()}}
		@php
			$i=1;
		@endphp
		<!-- One -->
		@foreach($questions as $question)
			<section id="<?php echo $i;?>" class="wrapper post bg-img" data-bg="annapurna.jpeg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>{{$question->question}}</h2>
						</header>						
						<div class="content">
							<h3><label id="answer">सहि उत्तर : {{$question->answer}}</label></h3>
  							<h3><label id="description">{{$question->description}}</label></h3>
						</div>
						<footer>
						<a href="#<?php echo $i+1;?>" class="button alt">अर्को </a>
						</footer>
					</article>
				</div>
				<a href="#<?php echo $i+1;?>" class="more">Start</a>
			</section>
			@php
				$i++;	
			@endphp
			@endforeach
			
			@php
				$final_section=end($questions);
			@endphp

			<section id="<?php echo $i;?>" class="wrapper post bg-img" data-bg="annapurna.jpeg">
				<div class="inner">
					<article class="box">
						<header>
							<h2> बन्द गर्नुहोस </h2>
						</header>
						<div class="content">
						<a href="{{ route('home') }}" class="button alt">बन्द</a>
						</div>
					</article>
				</div>
			</section>

			<section id="<?php echo $i+2;?>" class="wrapper post bg-img" data-bg="annapurna.jpeg">
				<div class="inner">
					<article class="box">
						<header>
							<h2> धन्यवाद </h2>
						</header>
						
					</article>
				</div>
			</section>

		</form>

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