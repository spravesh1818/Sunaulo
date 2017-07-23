@include('partials._head')
@include('partials._header')

<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title">{{$articles[0]->category}}</h1>
		</div>
		<div class="page_header_right">
			<ul class="bread_crumb">
				<li>
					<a title="Home" href="">
						Home
					</a>
				</li>
				<li class="separator icon_small_arrow right_gray">
					&nbsp;
				</li>
				<li>
					Blog
				</li>
			</ul>
		</div>
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
								<img src='{{ asset('uploads/'.$article->image) }}' style="height:242px;width:330px;" alt='img'>
							</a>
						@else
							<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
								<img src='{{URL::asset('images/samples/330x242/image_13.jpg')}}' alt='img'>
							</a>
						@endif
							<div class="post_content">
								<h2 class="with_number">
									<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a>
									<a class="comments_number" href="" title="{{$article->numberofComments}} comments">{{$article->numberofComments}}<span class="arrow_comments"></span></a>
								</h2>
								<ul class="post_details">
									<li class="category"><a title="{{$article->category}}">{{$article->category}}</a></li>
									<li class="date">
										{{date('F d, Y', strtotime($article->updated_at))}}
									</li>
								</ul>
								

								<br><br><br><br><br>
								<p>{!!substr($article->content,0,400)!!}</p>
								<a class="read_more" href="{{ route('view',$article->id) }}" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
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
