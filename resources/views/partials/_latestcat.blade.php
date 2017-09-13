<div class="ccol-8">
				<h4 class="box_header">{{$featured[0]->category->title}} </h4>
				@php
					$i=0;
				@endphp
				<div class="row">
					<ul class="ccol-4">
					@foreach($featured as $article)
					@if($i==0)
<!-- First Latest Post--><li class="post">
							<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- Image of latest Post--><img src='images/slider/noimage.jpg' alt='img'>
							</a>
							<h2 class="with_number">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!--tittle of latest Post-->{{$article->title}}</a>
								<a class="comments_number" href="{{ route('view',$article->id) }}" title="{{$article->numberofComments}} comments">
<!--Number of Comments-->{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="{{ route('category',$article->category->id) }}" title="{{$article->category->title}}">
<!--Category-->{{$article->category->title}}</a></li>
								<li class="date">
<!--Posted Date-->{{$article->created_at}}
								</li>
							
							<li><p>
<!--Contents-->{!!substr($article->content,0,300)!!}...</p></li>
</ul>
							<a class="read_more" href="{{ route('view',$article->id) }}" title="पुरा पढ्नुहोस"><span class="arrow"></span><span>
<!--Full width Page-->पुरा पढ्नुहोस</span></a>
						</li>
<!-- End of Post-->
<!--Remove from Here-->
						
<!-- Upto Here-->
					</ul>
					@else
					<ul class="ccol-4">
<!-- First Latest Post-->
<!-- Small Post--><ul class="blog small clearfix">
								<li class="post">
									<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- Image--><img src='images/samples/100x100/image_02.jpg' alt='img'>
									</a>
									<div class="post_content">
										
										<ul class="post_details simple">
										<li><h5><a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!-- tittle-->{{$article->title}}</a></h5></li><br>
											<li><ul><li class="category"><a href="{{ route('category',$article->category->id) }}" title="{{$article->category->title}}">
<!--Category-->{{$article->category->title}}</a></li>
											<li class="date">
<!-- Posted date-->{{$article->created_at}}
											</li>
											</li>
											</ul>
										</ul>
						</div>
						</li>
<!-- Upto Here-->
					</ul>
					</ul>
					@endif
					@php
						$i=$i+1;
					@endphp
					@endforeach


				</div>
				</div>
				<div>