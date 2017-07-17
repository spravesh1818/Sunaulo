<div class="column column_1_3">
				<h4 class="box_header">Recommended</h4>
				<ul class="blog small_margin clearfix">
<!-- Remove from Here-->
					<li class="post">
						<a href="indexb878.html?page=post" title="The Public Health Crisis Hiding in Our Food">
							<img src='images/samples/510x187/image_01.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="indexb878.html?page=post" title="The Public Health Crisis Hiding in Our Food">Climate Change Debate While Britain Floods</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="index7855.html?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
<!-- Remove Upto Here-->
				</ul>
				<div class="tabs no_scroll page_margin_top_section clearfix">
					<ul class="tabs_navigation clearfix">
						<li>
							<a href="#sidebar-most-read" title="Most Read">
<!-- Popular Post-->Most Read
							</a>
							<span></span>
						</li>
						<li>
							<a href="#sidebar-most-commented" title="Commented">
<!-- Most Commented-->Commented
							</a>
							<span></span>
						</li>
					</ul>
<!-- Post sof popular post-->
					<div id="sidebar-most-read">
						<ul class="blog rating page_margin_top clearfix">
							@foreach($articles as $article)
							<li class="post">
								<a href={{route('view',$article->id)}} title={{$article->title}}>
<!--image source-->				<img src='images/samples/510x187/image_12.jpg' alt='img'>
								</a>
								<div class="post_content">
									
									<span class="number animated_element" data-value="100"></span>
									<h5><a href={{ route('view',$article->id )}} title="{{$article->title}}">
<!--tittle-->						{{$article->title}}</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="" title={{$article->category}}>
<!--category-->							{{$article->category}}</a></li>
									</ul>
								</div>
							</li>
							@endforeach
							<li class="post">
								<a href={{route('view',$article->id)}} title={{$article->title}}>
<!--image source-->				<img src='images/samples/510x187/image_12.jpg' alt='img'>
								</a>
								<div class="post_content">
									
									<span class="number animated_element" data-value="150"></span>
									<h5><a href={{ route('view',$article->id )}} title="{{$article->title}}">
<!--tittle-->						{{$article->title}}</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href="" title={{$article->category}}>
<!--category-->							{{$article->category}}</a></li>
									</ul>
								</div>
							</li>
						</ul>
						<a class="more page_margin_top" href="#">SHOW MORE</a>
					</div>
<!-- Most Commented Post-->
					<div id="sidebar-most-commented">
						<ul class="blog rating page_margin_top clearfix">
						@foreach($articles as $article)
							<li class="post">
								<a href={{$article->title}} title={{$article->title}}>
<!-- image-->					<img src='images/samples/510x187/image_02.jpg' alt='img'>
								</a>
								<div class="post_content">
									<span class="number animated_element" data-value={{$article->numberofComments}}></span>
									<h5><a href={{ route('view',$article->id) }} title="{{$article->title}}">
<!--tittle-->						{{$article->title}}</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href= title="{{$article->category}}">
<!--category-->						{{$article->category}}</a></li>
									</ul>
								</div>	
							</li>
							@endforeach
							<li class="post">
								<a href={{$article->title}} title={{$article->title}}>
<!-- image-->					<img src='images/samples/510x187/image_02.jpg' alt='img'>
								</a>
								<div class="post_content">
									<span class="number animated_element" data-value="40"></span>
									<h5><a href={{ route('view',$article->id) }} title="{{$article->title}}">
<!--tittle-->						{{$article->title}}</a></h5>
									<ul class="post_details simple">
										<li class="category"><a href= title="{{$article->category}}">
<!--category-->						{{$article->category}}</a></li>
									</ul>
								</div>	
							</li>
						</ul>
						<a class="more page_margin_top" href="#">SHOW MORE</a>
					</div>
					</div>
</div></div></div></div>