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
						<a href="indexba02.html?page=post_gallery" title="The Public Health Crisis Hiding in Our Food">
							<span class="icon gallery"></span>
<!--image of recommended--><img src='images/samples/510x187/image_12.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="indexba02.html?page=post_gallery" title="The Public Health Crisis Hiding in Our Food">
<!--tittle-->{{$article->title}}</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="indexdced.html?page=category&amp;cat=health" title="HEALTH">
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
					