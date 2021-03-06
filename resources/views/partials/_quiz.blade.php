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
						<h1> हाजिरी जवाफ </h1>
					</header>
					
					
				</div>
				<a href="#1" class="more">Start</a>
			</section>


		<form method='post' id="question_form" action="{{ route('check') }}">
		{{csrf_field()}}
		<input type="text" name="totalItems" style="display:none" value="{{count($questions)}}">
		@php
			$i=1;
		@endphp
		<!-- One -->
		@foreach($questions as $question)
			<section id="<?php echo $i;?>" class="wrapper post bg-img" data-bg="annapurna.jpeg">
				<div class="inner">
					<article class="box">
						<header>
							<h2><?php echo $i;?>. {{$question->question}}</h2>
						</header>

						<input type="text" name="answer{{$i}}" value="{{$question->answer}}" style="display:none"><br>
						@php
							$shuffle=[];
							array_push($shuffle,$question->answer);
							array_push($shuffle,$question->option1);
							array_push($shuffle,$question->option2);
							array_push($shuffle,$question->option3);
							shuffle($shuffle);
						@endphp

						<div class="content">
  							<h3><input type="radio" name="choice{{$i}}" value="{{$shuffle[0]}}">{{$shuffle[0]}}</h3><br>
  							<h3><input type="radio" name="choice{{$i}}" value="{{$shuffle[1]}}">{{$shuffle[1]}}</h3><br>
  							<h3><input type="radio" name="choice{{$i}}" value="{{$shuffle[2]}}"> {{$shuffle[2]}}</h3><br>
  							<h3><input type="radio" name="choice{{$i}}" value="{{$shuffle[3]}}">{{$shuffle[3]}}</h3>
							
						</div>
						<footer>
						<a href="#<?php echo $i+1;?>" class="button alt">अर्को </a>
						<!--<?php echo $i;?>-->
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
							<h2> उत्तर पेश गर्नुहोस </h2>
						</header>
						<div class="content">
						<input type="submit" name="पेश गर्नुहोस" value="Submit">
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

			<script src={{ URL::asset('js/jquery.min.js')}}></script>
		
			<script src={{ URL::asset('js/jquery.scrollex.min.js')}}></script>
			<script src={{ URL::asset('js/skel.min.js')}}></script>
			<script src={{ URL::asset('js/util.js')}}></script>
			<script src={{ URL::asset('js/main1.js')}}></script>

	</body>
</html>