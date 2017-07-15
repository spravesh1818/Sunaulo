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
				<div class="logo"><a href="index.html">Pop Quiz <span>by Sunaulo Bhawisya</span></a></div>
				
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
				<a href="#one" class="more">Start</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Q1: What is a machine?</h2>
						</header>
						<div class="content">
							
  							<input type='radio' name="choice1" value="Motor"/> Motor<br>
  							<input type="radio" name="choice1" value="Car"/> Car<br>
  							<input type="radio" name="choice1" value="Zipper"/> Zipper<br>
  							<input type="radio" name="choice1" value="Lever"/> Lever
							
						</div>
						<footer>
						<a href="#banner" class="button alt">Back</a>
							<a href="#two" class="button alt">Next Question</a>
						</footer>
					</article>
				</div>
				<a href="#two" class="more">Next Question</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="banner5.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Q2: What animal is in 100 NRS bill?</h2>
						</header>
						<div class="content">
							<form>
  							<input type="radio" name="choice2" value="Two-horned Rhino"> Two-horned Rhino<br>
  							<input type="radio" name="choice2" value="One-horned Rhino"> One-horned Rhino<br>
  							<input type="radio" name="choice2" value="Tiger"> Tiger<br>
  							<input type="radio" name="choice2" value="Lever"> Goat<br>
							</form>
						</div>
						<footer>
							<a href="#one" class="button alt">Back</a>
							<a href="#three" class="button alt">Next Question</a>
						</footer>
					</article>
				</div>
				<a href="#three" class="more">Next Question</a>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Q3: Why is Gode fat?</h2>
						</header>
						<div class="content">
							<form>
  							<input type="radio" name="choice3" value="Genetics"> Genetics<br>
  							<input type="radio" name="choice3" value="Lazy"> Lazy<br>
  							<input type="radio" name="choice3" value="Obesity"> Obesity<br>
  							<input type="radio" name="choice3" value="Eats anythinng"> Eats anythinng<br>
							</form>
						</div>
						<footer>
						<a href="#two" class="button alt">Back</a>
							<a href="#four" class="button alt">Next Question</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Next Question</a>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper post bg-img" data-bg="banner3.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Q4: Why is the radio button not loading?</h2>
							
						</header>
						<div class="content">
							<form>
  							<input type="radio" name="choice4" value="Bad code"> Bad code<br>
  							<input type="radio" name="choice4" value="Wrong JavaScript"> Wrong JavaScript<br>
  							<input type="radio" name="choice4" value="Noob coder"> Noob coder<br>
  							<input type="radio" name="choice4" value="Have no clue"> Have no clue<br>
							</form>
						</div>
						<footer>
						<a href="#three" class="button alt">Back</a>
							<a href="#banner" class="button alt">Next Question</a>
						</footer>
					</article>
				</div>
			</section>

			
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