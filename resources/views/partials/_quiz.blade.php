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
				<div class="logo"><a href="index.html">Pop Quiz <span>by सहि उमेर सहि कदम</span></a></div>
				
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
						<h1>This is a Quiz</h1>
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

						<input type="text" name="answer{{$i}}" value={{$question->answer}} style="display:none"><br>
						@php
							$shuffle=[];
							array_push($shuffle,$question->answer);
							array_push($shuffle,$question->option1);
							array_push($shuffle,$question->option2);
							array_push($shuffle,$question->option3);
							shuffle($shuffle)
						@endphp

						<div class="content">
  							<input type="radio" name="choice{{$i}}" value={{$shuffle[0]}}>{{$shuffle[0]}}<br>
  							<input type="radio" name="choice{{$i}}" value={{$shuffle[1]}}>{{$shuffle[1]}}<br>
  							<input type="radio" name="choice{{$i}}" value="{{$shuffle[2]}}"> {{$shuffle[2]}}<br>
  							<input type="radio" name="choice{{$i}}" value="{{$shuffle[3]}}">{{$shuffle[3]}}
							
						</div>
						<footer>
						<a href="#{{$question->id+1}}" class="button alt">Next</a>
						</footer>
					</article>
				</div>
				<a href="#{{$question->id+1}}" class="more">Start</a>
			</section>
			@php
				$i++;	
			@endphp
			@endforeach

			@php
				$final_section=end($questions);
			@endphp

			<section id="{{$final_section->id+1}}" class="wrapper post bg-img" data-bg="banner{{$i}}.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Submit your Answers</h2>
						</header>
						<div class="result_box">
						</div>
						<footer>
						<input type="text"  style="display:none" name="totalItems" value={{$i-2}}>
						<input type="submit" class="button alt" name="submit" value="Submit">
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