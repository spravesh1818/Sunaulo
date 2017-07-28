<h4 class="box_header page_margin_top_section">ताजा खबर </h4>
				<div class="vertical_carousel_container clearfix">
					<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
						@foreach($content as $article)
						<li class="post">
							<a href="{{ route('view',$article->id)}}" title="{{$article->title}}">
							@if(!empty($article->image))
								<img src='{{ asset('uploads/'.$article->image) }}' alt='img' style="width:100px;height:100px">
							@endif
							</a>
							<div class="post_content">
								<h5>
									<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a>
								</h5>
								<ul class="post_details simple">
									<li class="category"><a href="" title="{{$article->category}}">{{$article->category}}</a></li>
									<li class="date">
										{{$article->updated_at}}
									</li>
								</ul>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			<h4 class="box_header page_margin_top_section">Categories</h4>
				<ul class="taxonomies columns clearfix page_margin_top">
					@foreach($categories as $category)
					<li>
						<a href="{{ route('category',$category->id) }}" title="{{$category->title}}">{{$category->title}}</a>
					</li>
					@endforeach
				</ul>
				<!--<h4 class="box_header page_margin_top_section">Tags</h4>
				<ul class="taxonomies clearfix page_margin_top">
					<li>
						<a href="#" title="Business">BUSINESS</a>
					</li>-->
				</ul>
			</div>
		</div>
	</div>
</div>