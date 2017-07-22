<div class="col-8">
				<h4 class="box_header">{{$category}} </h4>
				<div class="row">
					<ul class="col-4">
<!-- First Latest Post--><li class="post">
							<a href="" title="{{$category}}">
<!-- Image of latest Post--><img src='images/slider/image_02.jpg' alt='img'>
							</a>
							<h2 class="with_number">
								<a href="indexb878.html?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
<!--tittle of latest Post-->किशोरकिशोरीहरूको यौनिकता</a>
								<a class="comments_number" href="indexb878.html?page=post#comments_list" title="2 comments">
<!--Number of Comments-->2<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="index7855.html?page=category&amp;cat=health" title="HEALTH">
<!--Category-->जिज्ञाशा</a></li>
								<li class="date">
<!--Posted Date-->10:11 PM, Feb 02
								</li>
							</ul>
							<p>
<!--Contents-->किशोरावस्थामा शारीरिक परिवर्तनका साथै मनोसामाजिक र...</p>
							<a class="read_more" href="indexb878.html?page=post" title="Read more"><span class="arrow"></span><span>
<!--Full width Page-->थप</span></a>
						</li>
<!-- End of Post-->
<!--Remove from Here-->
						
<!-- Upto Here-->
					</ul>
					<ul class="col-4">
<!-- First Latest Post-->
<!-- Small Post-->
					<ul class="blog small clearfix">
					@php
						$i=0;
					@endphp
						@foreach($articles as $article)
						@if($article->category===$category )
								<li class="post">
								@if(!empty($article->image))
									<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- Image-->						<img src='{{ asset('uploads/'.$article->image) }}' 										style="width:100px;height:100px;"alt='img'>
									</a>
								@else
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- Image-->						<img src='{{ asset('images/samples/100x100/image_02.jpg') }}' 										style="width:100px;height:100px;"alt='img'>
									</a>
								@endif
									<div class="post_content">
										<h5>
											<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- tittle-->{!!$article->content!!}</a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="" title="{{$article->title}}">
<!--Category-->जिज्ञाशा</a></li>
											<li class="date">
<!-- Posted date-->{{$article->updated_at}}
											</li>
										</ul>
						
<!-- Upto Here-->					</div>
							</li>
							@endif
							@endforeach
					</ul>
				</div>
				</div>
			