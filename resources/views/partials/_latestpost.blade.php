		<div class="col-8">
				<h4 class="box_header">ताजा खबर </h4>
				<div class="row">
					
					<ul class="col-4">
					@php
						$j=0;
					@endphp
<!-- First Latest Post-->@foreach($articles as $article)
						@if($j<2)
						@if($article->id%2==1)
<!-- First Latest Post--><li class="post">
							@if(!empty($article->image))
							<a href="{{ route('view',$article->id) }}" title={{$article->title}}>
<!-- Image of latest Post--><img src='{{ asset('uploads/'.$article->image) }}' alt='img'>
							</a>
							@else
							<a href="{{ route('view',$article->id) }}" title={{$article->title}}>
<!-- Image of latest Post--><img src='images/slider/image_02.jpg' alt='img'>
							</a>
							@endif
							<h2 class="with_number">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!--tittle of latest Post-->{{$article->title}}</a>
								<a class="comments_number" href="" title="{{$article->numberofCOmments}} comments">
<!--Number of Comments-->{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="" title="{{$article->category}}">
<!--Category-->{{$article->category}}</a></li>
								<li class="date">
<!--Posted Date-->{{date('F d, Y', strtotime($article->updated_at))}}
								</li>
							</ul><br><br><br><br><br><br><br><br><br><br>
							<p>
<!--Contents-->{!!substr($article->content,0,500)!!}</p>
							<a class="read_more" href="{{ route('view',$article->id) }}" title="Read more"><span class="arrow"></span><span>
<!--Full width Page-->थप</span></a>
						</li>
						@php
							$j=$j+1;
						@endphp
						@endif
						@endif
						@endforeach
					</ul>

					<ul class="col-4">
					@php
						$j=0;
					@endphp
<!-- First Latest Post-->@foreach($articles as $article)
						@if($j<2)
						@if($article->id%2!=1)
<!-- First Latest Post--><li class="post">
							@if(!empty($article->image))
							<a href="{{ route('view',$article->id) }}" title={{$article->title}}>
<!-- Image of latest Post--><img src='{{ asset('uploads/'.$article->image) }}' alt='img'>
							</a>
							@else
							<a href="{{ route('view',$article->id) }}" title={{$article->title}}>
<!-- Image of latest Post--><img src='images/slider/image_02.jpg' alt='img'>
							</a>
							@endif
							<h2 class="with_number">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!--tittle of latest Post-->{{$article->title}}</a>
								<a class="comments_number" href="" title="{{$article->numberofCOmments}} comments">
<!--Number of Comments-->{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="" title="{{$article->category}}">
<!--Category-->{{$article->category}}</a></li>
								<li class="date">
<!--Posted Date-->{{date('F d, Y', strtotime($article->updated_at))}}
								</li>
							</ul><br><br><br><br><br><br><br><br><br><br>
							<p>
<!--Contents-->{!!substr($article->content,0,500)!!}</p>
							<a class="read_more" href="{{ route('view',$article->id) }}" title="Read more"><span class="arrow"></span><span>
<!--Full width Page-->थप</span></a>
						</li>
						@php
							$j=$j+1;
						@endphp
						@endif
						@endif
						@endforeach
					</ul>
				</div>
				</div>
			