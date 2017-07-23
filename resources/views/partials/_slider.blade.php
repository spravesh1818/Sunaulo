<ul class="slider">
	@foreach($articles as $article)
	<li class="slide">
<!-- Image of Slider-->
	<img src='{{asset('uploads/'.$article->image)}}' alt='{{$article->title}}'>
		<div class="slider_content_box" style="width:60%;height:60%">
			<ul class="post_details simple">
				<li class="category"><a href= title="{{$article->category}}">
<!-- Category of Slider Post-->{{$article->category}}</a></li>
				<li class="date">
<!-- Date Of Post-->{{date('F d, Y',strtotime($article->updated_at))}}
				</li>
			</ul>
			<h2 style="font-size:40px;"><a href={{ route('view',$article->id)}} title={{$article->title}}>
<!--Tittle Of Slider Or Post-->{{$article->title}}</a></h2>
			<p class="clearfix" style="font-size:25px;">
<!--Short Content Of Post-->{!!substr($article->content,0,400)!!}...</p>
		</div>
	</li>

@endforeach
	<!-- Remove Up To Here-->
</ul>