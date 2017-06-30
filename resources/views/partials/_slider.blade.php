<ul class="slider">
	@foreach($articles as $article)
	<li class="slide">
<!-- Image of Slider-->
	<img src='images/slider/image_01.jpg' alt='img'>
		<div class="slider_content_box">
			<ul class="post_details simple">
				<li class="category"><a href="indexdced.html?page=category&amp;cat=health" title="HEALTH">
<!-- Category of Slider Post-->{{$article->category}}</a></li>
				<li class="date">
<!-- Date Of Post-->{{$article->updated_at}}
				</li>
			</ul>
			<h2><a href="indexb878.html?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
<!--Tittle Of Slider Or Post-->{{$article->title}}</a></h2>
			<p class="clearfix">
<!--Short Content Of Post-->{!!$article->content!!}</p>
		</div>
	</li>

@endforeach
	<!-- Remove Up To Here-->
</ul>