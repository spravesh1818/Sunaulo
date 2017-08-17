<!DOCTYPE HTML>
<html>
	<head>
		<title>Sunaulo Bhawisya</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/reset.css')}}>
		<link rel="stylesheet" href={{ URL::asset('css/main.css')}} />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Pop Quiz <span>by Sahi Umer Sahi Kadam</span></a></div>
				
			</header>

		<!-- Nav -->
			

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="banner.jpg">
				<div class="inner">
					<header>
						<h1>The Answers</h1>
					</header>
				</div>
				<a href="#{{$questions[0]->id}}" class="more">Start</a>
			</section>
		<form method='post' id="question_form" action="{{ route('check') }}">
		{{csrf_field()}}
		@php
			$i=2;
		@endphp
		<!-- One -->
		@foreach($questions as $question)
			<section id="{{$question->id}}" class="wrapper post bg-img" data-bg="banner{{$i}}.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>{{$question->question}}</h2>
						</header>						
						<div class="content">
							<label id="answer">Correct Answer:{{$question->answer}}</label>
  							<label id="description">{{$question->description}}</label>
						</div>
						<footer>
						<a href="#banner" class="button alt">Back</a>
						</footer>
					</article>
				</div>
				<a href="#{{$question->id+1}}" class="more">Start</a>
			</section>
			@php
				$i++;	
			@endphp
			@endforeach
			<section id="{{count($questions)+1}}" class="wrapper post bg-img" data-bg="banner{{$i}}.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Close quiz</h2>
						</header>
						<div class="result_box">
						</div>
						<footer>
						<a href="{{ route('home') }}">Close quiz</a>
						</footer>
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