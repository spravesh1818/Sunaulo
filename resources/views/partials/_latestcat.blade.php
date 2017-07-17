<div class="row page_margin_top_section">
					<h4 class="box_header">Latest From {{$category}}</h4>
					<div class="row">
						<ul class="blog column column_1_2">
<!-- Large Post-->				@foreach($articles as $article)
								@if($article->category===$category)
								<li class="post">
								<a href='{{ route('view',$article->id)}}' title='{{$article->title}}'>
								@if($article->image!="")
<!-- Image -->					<img src='{{ asset('uploads/'.$article->image)}}' alt='img'>
								@endif
								</a>
								<h2 class="with_number">
									<a href={{ route('view',$article->id) }} title={{$article->title}}>
<!--Tittle-->{{$article->title}}</a>
									<a class="comments_number" href="indexba02.html?page=post_gallery#comments_list" title="2 comments">
<!-- Number of COmments-->2<span class="arrow_comments"></span></a>
								</h2>
								<ul class="post_details">
									<li class="category"><a href="index7855.html?page=category&amp;cat=world" title={{$article->category}}>
<!--Category-->{{$article->category}}</a></li>
									<li class="date">
<!-- Posted Date-->10:11 PM, Feb 02
									</li>
								</ul><br><br><br><br><br><br><br><br><br><br>
								<p>
<!-- Contents-->{!!substr($article->content,0,850)!!}...</p>
								<a class="read_more" href={{ route('view',$article->id) }} title="Read more"><span class="arrow"></span><span>
<!-- Full Post-->READ MORE</span></a>
							</li>
							@endif
							@endforeach
						</ul>
						
					</div>
				</div>