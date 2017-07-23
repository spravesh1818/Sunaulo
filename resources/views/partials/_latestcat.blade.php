<div class="col-8">
				<h4 class="box_header">{{$category}} </h4>
				<div class="row">
					<ul class="col-4">
					@php
						$selected=[];
					@endphp
					@foreach($articles as $article)
						@if($article->category===$category)
							@php
								array_push($selected,$article);
							@endphp
						@endif
					@endforeach
<!-- First Latest Post--><li class="post">
							<a href="{{ route('view',$selected[0]->id) }}" title="{{$selected[0]->title}}">
<!-- Image of latest Post--><img src='{{asset('uploads/'.$selected[0]->image) }}' alt='img'>
							</a>
							<h2 class="with_number">
								<a href="{{ route('view',$selected[0]->id) }}" title="{{$selected[0]->title}}">
<!--tittle of latest Post-->{{$selected[0]->title}}</a>
								<a class="comments_number" href="" title="{{$selected[0]->numberofComments}} comments">
<!--Number of Comments-->{{$selected[0]->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="" title="{{$selected[0]->category}}">
<!--Category-->{{$selected[0]->category}}</a></li>
								<li class="date">
<!--Posted Date-->{{$selected[0]->updated_at}}
								</li>
							</ul><br><br><br>
							<p>
<!--Contents-->{!!substr($article->content,0,500)!!}...</p>
				<br><br>
							<a class="read_more" href="{{ route('view',$selected[0]->id) }}" title="Read more"><span class="arrow"></span><span>
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
							@if($i<4)
								@if($article->category===$category )
									<li class="post">
									@if(!empty($article->image))
									<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- Image-->						<img src='{{ asset('uploads/'.$article->image) }}' 												style="width:100px;height:100px;"alt='img'>
									</a>
								@else
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- Image-->						<img src='{{ asset('images/samples/100x100/image_02.jpg') }}' 										style="width:100px;height:100px;"alt='img'>
									</a>
								@endif
									<div class="post_content">
										<h5>
											<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- tittle-->							{{$article->title}}</a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="" title="{{$article->title}}">
<!--Category-->							{{$article->category}}</a></li>
											<li class="date">
<!-- Posted date-->							{{$article->updated_at}}
											</li>
										</ul>
						
<!-- Upto Here-->					</div>
							</li>
							@endif
							@php
								$i++;
							@endphp
							@else
								@php
									break;
								@endphp
							@endif
							@endforeach
					</ul>
				</div>
				</div>
			