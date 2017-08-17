<div class="column column_1_3">
				<div class="tabs no_scroll clearfix">
					<ul class="tabs_navigation clearfix">
						<li>
							<a href="#sidebar-most-read" title="">
								धेरै पढ़ीएको
							</a>
							<span></span>
						</li>
						<li>
							<a href="#sidebar-most-commented" title="">
								प्रतिक्रिया
							</a>
							<span></span>
						</li>
					</ul>
					<div id="sidebar-most-read">
						<ul class="blog rating page_margin_top clearfix">
							@foreach($mostread as $article)
							<li class="post">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
									<!--<img src='images/samples/510x187/image_12.jpg' alt='img'>-->
								</a>
								<div class="post_content">
									<span class="number animated_element" data-value="{{$article->mostRead}}"></span>
									<h5><a href="{{route('view',$article->id)}}" title="{{$article->title}}">{{$article->title}}</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="indexdced.html?page=category&amp;cat=health" title="{{$article->category}}">{{$article->category}}</a></li>
									</ul>
								</div>
							</li>
							@endforeach
						</ul>
						<a class="more page_margin_top" href="">थप</a>
					</div>
					<div id="sidebar-most-commented">
						<ul class="blog rating page_margin_top clearfix">
							@foreach($commented as $article)
							<li class="post">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
									<!--<img src='images/samples/510x187/image_02.jpg' alt='img'>-->
								</a>
								<div class="post_content">
									<span class="number animated_element" data-value="{{$article->numberofComments}}"></span>
									<h5><a href="{{ route('view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="" title="{{$article->category}}">{{$article->category}}</a></li>
									</ul>
								</div>
							</li>
							@endforeach
						</ul>
						<a class="more page_margin_top" href="#">थप </a>
					</div>
				</div>