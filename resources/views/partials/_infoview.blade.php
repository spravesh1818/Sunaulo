@include('partials._head')
@include('partials._header')

<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title"></h1>
		</div>
		@foreach($articles as $article)
		<h2>{{$article->category->title}}का प्रस्तुतीहरु </h2>
		@break;
		@endforeach
	</div>
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
						@foreach($articles as $article)
						<li class="post">
						@if(!empty($article->image))
							<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
								<img src='{{ asset('uploads/'.$article->image) }}'  alt='img'>
							</a>
						@else
							<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
								<img src='{{URL::asset('images/samples/noimage.jpg')}}' style="height:342px;width:630px;" alt='img'>
							</a>
						@endif
							<div class="post_content">
								<a class="read_more" href="{{ route('view',$article->id) }}" title="पुरा पढ्नुहोस"><span class="arrow"></span><span>Download</span></a>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
				<ul class="pagination clearfix page_margin_top_section">
					<li class="selected">
						{{$articles->links()}}
					</li>
					
				</ul>
			</div>
			
		</div>
		</div>
	</div>	

@include('partials._footer')		
