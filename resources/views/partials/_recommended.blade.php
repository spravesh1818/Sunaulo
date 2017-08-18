<div class="col-3 right">
 				@php
 					$articles=$articles->sortByDesc('updated_at');
 					$i=0;
 				@endphp
				<h4 class="box_header">सुझाब </h4>
				<ul class="blog small_margin clearfix">
					@foreach($articles as $article)
					@if($article->editors_choice==1)
					@if($i<3)
					<li class="post">
						<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
							@if(!empty($article->image))
<!--image of recommended--><img src='{{ asset('uploads/'.$article->image) }}' alt='img'>						
						@endif
						</a>
						<div class="post_content">
							<h5>
								<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">
<!--tittle-->{{$article->title}}</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="{{ route('category',$article->category->id) }}" title="{{$article->category->name}}">
<!-- Category-->{{$article->category->title}}</a></li>
								<li class="date">
<!--Posted Date-->
								</li>
							</ul>
						</div>
					</li>
					@php
						$i++;
					@endphp
					@endif
					@endif
					@endforeach
					</ul>
</div>
					