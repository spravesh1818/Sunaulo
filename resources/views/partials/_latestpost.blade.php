		<div class="col-8">
				<h4 class="box_header">ताजा खबर </h4>
				<div class="row">
					<ul class="col-4">
					@foreach($articles as $article)
					@if($article->id%2==0)
<!-- First Latest Post--><li class="post">
							<a href="{{ route('view',$article->id) }}" title={{$article->title}}>
<!-- Image of latest Post--><img src='images/slider/image_02.jpg' alt='img'>
							</a>
							<h2 class="with_number">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!--tittle of latest Post-->{{$article->title}}</a>
								<a class="comments_number" href="" title="{{$article->numberofCOmments}} comments">
<!--Number of Comments-->{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="" title="{{$article->category}}">
<!--Category-->जिज्ञाशा</a></li>
								<li class="date">
<!--Posted Date-->{{$article->updated_at}}
								</li>
							</ul>
							<p>
<!--Contents-->{!!$article->content!!}</p>
							<a class="read_more" href="{{ route('view',$article->id) }}" title="Read more"><span class="arrow"></span><span>
<!--Full width Page-->थप</span></a>
						</li>
						@endif
						@endforeach
<!--Remove from Here-->	
<!-- Upto Here-->
					</ul>
					<ul class="col-4">
<!-- First Latest Post-->@foreach($articles as $article)
					@if($article->id%2==1)
<!-- First Latest Post--><li class="post">
							<a href="{{ route('view',$article->id) }}" title={{$article->title}}>
<!-- Image of latest Post--><img src='images/slider/image_02.jpg' alt='img'>
							</a>
							<h2 class="with_number">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!--tittle of latest Post-->{{$article->title}}</a>
								<a class="comments_number" href="" title="{{$article->numberofCOmments}} comments">
<!--Number of Comments-->{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="" title="{{$article->category}}">
<!--Category-->जिज्ञाशा</a></li>
								<li class="date">
<!--Posted Date-->{{$article->updated_at}}
								</li>
							</ul>
							<p>
<!--Contents-->{!!$article->content!!}</p>
							<a class="read_more" href="{{ route('view',$article->id) }}" title="Read more"><span class="arrow"></span><span>
<!--Full width Page-->थप</span></a>
						</li>
						@endif
						@endforeach
					</ul>
				</div>
				</div>
			