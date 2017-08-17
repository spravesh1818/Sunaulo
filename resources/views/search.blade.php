@include('partials._head')
@include('partials._bootstrap')
@include('partials._header')
<div class="container" style="width: 50rem;">
	<h1>Results for search query</h1>
	@foreach($tags as $tag)
		@foreach($tag->articles as $article)
			<div class="card">
			@if(!empty($article->image))
			  <img class="card-img-top" src="{{ asset('uploads/'.$article->image) }}" alt="article image">
			@endif
			  <div class="card-block">
			    <h4 class="card-title">{{$article->title}}</h4>
			    <h6 class="card-subtitle mb-2 text-muted">{{$article->category->title}}</h6>
			    <p class="card-text">{!!$article->content!!}</p>
			    <a href="{{route('view',$article->id)}}" class="card-link">Read More</a>
			  </div>
			</div><br><br>
		@endforeach
	@endforeach
</div>
@include('partials._footer')