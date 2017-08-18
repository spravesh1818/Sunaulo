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
<!-- Image of latest Post--><img style="pointer-events: none; cursor: default;" src='{{ asset('uploads/'.$article->image) }}' alt='img'>
							</a>
							@elseif(!empty($article->video_url))
							<a href="{{ route('view',$article->id) }}">
									@php
								    $url = $article->video_url;
								      preg_match(
								              '/[\\?\\&]v=([^\\?\\&]+)/',
								              $url,
								              $matches
								          );
								      $id = $matches[1];
								       
								      
								      echo '<iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $id . '"frameborder="0" allowfullscreen class="vid2"></iframe>';
  									@endphp

							</a>
							@else
							
							@endif
							<h2 class="with_number">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}" style="font-size:25px">
<!--tittle of latest Post-->{{$article->title}}</a>
								<a class="comments_number" href="{{ route('view',$article->id) }}" title="{{$article->numberofComments}} comments">
<!--Number of Comments-->{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="{{ route('category',$article->category->id) }}" title="{{$article->category->title}}">
<!--Category-->{{$article->category->title}}</a></li>
								<li class="date">
<!--Posted Date-->					{{$article->updated_at}}
								</li>
							
							<li><p>
<!--Contents-->{!!substr($article->content,0,300)!!}...</p>
							</li>
							</ul>
							<a class="read_more" href="{{ route('view',$article->id) }}" title="पुरा पढ्नुहोस"><span class="arrow"></span><span>
<!--Full width Page-->पुरा पढ्नुहोस</span></a>
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
						@if($article->id%2==0)
						
<!-- First Latest Post--><li class="post" style="width: 100%;">
							@if(!empty($article->image))
							<a href="{{ route('view',$article->id) }}" title={{$article->title}}>
<!-- Image of latest Post--><img src='{{ asset('uploads/'.$article->image) }}' alt='img'>
							</a>
							@elseif(!empty($article->video_url))
							<a href="{{ route('view',$article->id) }}">
									@php
								    $url = $article->video_url;
								      preg_match(
								              '/[\\?\\&]v=([^\\?\\&]+)/',
								              $url,
								              $matches
								          );
								      $id = $matches[1];
								       
								      
								      echo '<iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $id . '"frameborder="0" allowfullscreen class="vid2"></iframe>';
  									@endphp

							</a>
							@else
							
							@endif
							<h2 class="with_number">
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}" style="font-size:25px">
<!--tittle of latest Post-->{{$article->title}}</a>
								<a class="comments_number" href="{{ route('view',$article->id) }}" title="{{$article->numberofComments}} comments">
<!--Number of Comments-->{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href="{{ route('category',$article->category->id) }}" title="{{$article->category->title}}">
<!--Category-->{{$article->category->title}}</a></li>
								<li class="date">
<!--Posted Date-->					{{$article->updated_at}}
								</li>
							<li>
							<p>
<!--Contents-->{!!substr($article->content,0,350)!!}...</p>
							</li>
							</ul>	
							<a class="read_more" href="{{ route('view',$article->id) }}" title="पुरा पढ्नुहोस"><span class="arrow"></span><span>
<!--Full width Page-->पुरा पढ्नुहोस</span></a>
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
			
