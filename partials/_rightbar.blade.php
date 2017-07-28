<div class="col-3 right">
				<div class="tabs no_scroll page_margin_top_section clearfix">
					<ul class="tabs_navigation clearfix">
						<li>
							<a href="#sidebar-most-read" title="Most Read">
<!-- Popular Post-->अधिक मत्रा्मा पढ़ीएको
							</a>
							<span></span>
						</li>
						<li>
							<a href="#sidebar-most-commented" title="Commented">
<!-- Most Commented-->अधिक प्रतिक्रिया भएको
							</a>
							<span></span>
						</li>
					</ul>
<!-- Post sof popular post-->
					<div id="sidebar-most-read">
						<ul class="blog rating page_margin_top clearfix">
							
						@php
							$sorted=$articles;
							$sorted=$sorted->sortByDesc('mostRead');
						@endphp
						
							
							@foreach($sorted as $article)
							<li class="post">
							@if(!empty($article->image))
								<a href={{route('view',$article->id)}} title={{$article->title}}>
<!--image source-->				<img src={{ asset('uploads/'.$article->image) }} alt='img'>
								</a>
							@endif
								<div class="post_content">
									
									<span class="number animated_element" data-value="{{$article->mostRead}}"></span>
									<h5><a href={{ route('view',$article->id )}} title="{{$article->title}}">
<!--tittle-->						{{$article->title}}</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="" title={{$article->category}}>
<!--category-->							{{$article->category}}</a></li>
									</ul>
								</div>
							</li>
							@endforeach
						</ul>
						<a class="more page_margin_top" href="#">SHOW MORE</a>
					</div>
<!-- Most Commented Post-->
					<div id="sidebar-most-commented">
						<ul class="blog rating page_margin_top clearfix">
						@php
							$sorted=$articles;
							$sorted=$sorted->sortByDesc('numberofComments');
						@endphp
						
							
							@foreach($sorted as $article)
							<li class="post">
							@if(!empty($article->image))
								<a href={{route('view',$article->id)}} title={{$article->title}}>
<!--image source-->				<img src={{ asset('uploads/'.$article->image) }} alt='img'>
								</a>
							@endif
								<div class="post_content">
									
									<span class="number animated_element" data-value="{{$article->numberofComments}}"></span>
									<h5><a href={{ route('view',$article->id )}} title="{{$article->title}}">
<!--tittle-->						{{$article->title}}</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="" title={{$article->category}}>
<!--category-->							{{$article->category}}</a></li>
									</ul>
								</div>
							</li>
							@endforeach
							
						</ul>
						<a class="more page_margin_top" href="#">SHOW MORE</a>
					</div>
					</div>
</div>