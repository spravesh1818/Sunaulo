<!DOCTYPE html>
<html>
	
<head>
		<title>सहि उमेर सहि कदम </title>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
		<meta name="keywords" content="sahi umer, sahi kadam,khulduli,sex query, child  marriage,sahi umer sahi kadam ,sahiumersahikadam, sexuality,teenage , सहि उमेर सहि कदम, सहि उमेर,सहि कदम, यौनिकता,जिज्ञासा, खुल्दुली, समाज,  संस्कृति, यौन तथा प्रजनन् स्वास्थ्य , यौन व्यवहार, हिंसा, जीवन उपयोगी सीप" />
		
		

		<meta name="description" content="सहि उमेर सहि कदम" />

		@yield('facebook_meta')
@php
							$uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
							@endphp
		
  <meta property="og:url"           content="{{$uri}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{{$article->title}}" />
  <meta property="og:description"   content='{{$article->content}}' />
  <meta property="og:image"         content="{{asset('uploads/'.$article->image)}}" />
  <meta property="og:video"			content="{{$article->video_url}}"/>

 
 <!--<div height="500px" width="500px">{{$article->title}}</div>
 <div>{{$article->id}}</div>
 <div height="500px" width="500px">{!!substr($article->content,0,300)!!}</div>
 <div><img src='{{asset('uploads/'.$article->image)}}' alt='img'></div>-->


		<!--style-->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/reset.css')}}>
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/superfish.css')}}>
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/prettyPhoto.css')}}>
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/jquery.qtip.css')}}>
		
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/style.css')}}>
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/menu_styles.css')}}>
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/animations.css')}}>
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/responsive.css')}}>
		<link rel="stylesheet" type="text/css" href={{ URL::asset('css/odometer-theme-default.css')}}>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">


		<link rel="stylesheet" href={{ URL::asset('css/venobox.css') }}/>
  <!-- Ionicons -->
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  		<link rel="stylesheet" href={{ URL::asset('css/headerstyle.css')}}>
				<!--<link rel="stylesheet" type="text/css" href="style/dark_skin.css">-->
		<!--<link rel="stylesheet" type="text/css" href="style/high_contrast_skin.css">-->
		<link rel="shortcut icon" href={{ URL::asset('images/footprints.png')}}>
		<link rel="stylesheet" href={{asset('css/preeti.css')}}>
		<link rel="stylesheet" href={{asset('css/new.css')}}>
		<link rel="stylesheet" href={{asset('css/wow.css')}}>
		<link rel="stylesheet" href={{asset('css/footS.css')}}>

		<link rel="stylesheet" href={{asset('css/topbutton.css')}}>
		
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		
		<script src={{URL::asset('js/venobox.min.js')}}></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src={{URL::asset('js/lightbox.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/topbutton.js')}}></script>
		
		<script type="text/javascript" src={{ URL::asset('js/jquery-1.12.4.min.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('jquery-migrate-1.4.1.min.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.ba-bbq.min.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery-ui-1.11.1.custom.min.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.easing.1.3.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.carouFredSel-6.2.1-packed.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.touchSwipe.min.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.transit.min.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.sliderControl.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.timeago.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.hint.js')}}></script>
		
		<script type="text/javascript" src={{ URL::asset('js/jquery.prettyPhoto.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.qtip.min.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/jquery.blockUI.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/main.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/odometer.min.js')}}></script>
		<script type="text/javascript" src={{ URL::asset('js/odometer.min.js')}}></script>
		
		<style type="text/css">
			.vid1 {width:100%; height: 400px;}
			.vid2 {width: 100%; height: 400%;}
			@media only screen and (max-width: 768px) {
			    /* For mobile phones: */
			    [class*="col-"] {
			        width: 100%;
			    }
			    .vid1{
			        width: 100%; height: 200px;

			    }
			}
		</style>
		<!--socialicon style-->
		<style>
.fa {
  padding: 15px;
  font-size: 20px;
  width: 45px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>
	</head>
