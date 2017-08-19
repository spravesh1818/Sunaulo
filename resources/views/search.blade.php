@include('partials._head')
@include('partials._header')
<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title"></h1>
		</div>
	
	<h1>Results for "{{$query}}"</h1>

	
<div class="page_layout clearfix">
		<div class="divider_block clearfix">
			<hr class="divider first">
			<hr class="divider subheader_arrow">
			<hr class="divider last">
		</div>
		<div class="row">
			<div class="column column_2_3">
				<div class="row">
					<ul class="blog big">
						@foreach($tags as $tag)
						@foreach($tag->articles as $article)
						<li class="post">
						@if(!empty($article->image))
							<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
								<img src='{{ asset('uploads/'.$article->image) }}' style="height:242px;width:330px;" alt='img'>
							</a>
						@else
							<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
								<img src='{{URL::asset('images/samples/noimage.jpg')}}' alt='img'>
							</a>
						@endif
							<div class="post_content">
								<h2 class="with_number">
									<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a>
									<a class="comments_number" href="{{ route('view',$article->id) }}" title="{{$article->numberofComments}} comments">{{$article->numberofComments}}<span class="arrow_comments"></span></a>
								</h2>
								<ul class="post_details">
									<li class="category"><a title="{{$article->category->title}}">{{$article->category->title}}</a></li>
									<li class="date">
										{{date('F d, Y', strtotime($article->updated_at))}}
									</li>
								
								
								<li><p>{!!substr($article->content,0,400)!!}</p></li></ul>
								<a class="read_more" href="{{ route('view',$article->id) }}" title="पुरा पढ्नुहोस"><span class="arrow"></span><span>पुरा पढ्नुहोस</span></a>
							</div>
						</li>
						@endforeach
						
					</ul>
				</div>
				
				@endforeach
			</div>
			
		</div>
		</div>

</div>
</div>
@include('partials._footer')