<div class='slider_posts_list_container'>
	</div>
	<div class="page_layout page_margin_top clearfix">
		<div class="row">
			<div class="column column_2_3">
				<h4 class="box_header">Latest Posts</h4>
				<div class="row" >
					<ul class="blog column column_1_2">
						@foreach($articles as $article)
						@if($article->id%2!=0)
<!-- First Latest Post--><li class="post">
							<a href={{ route('view',$article->id) }} title="{{$article->title}}">
<!-- Image of latest Post--><img src='{{asset('uploads/'.$article->image)}}'  alt='img'>
							</a>
							<h2 class="with_number">
								<a href={{ route('view',$article->id) }} title="{{$article->title}}">
<!--tittle of latest Post-->{{$article->title}}</a>
								<a class="comments_number" href="indexb878.html?page=post#comments_list" title='{{$article->numberofComments}} Comments'>
<!--Number of Comments-->{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href= title="{{$article->category}}">
<!--Category-->{{$article->category}}</a></li>
								<li class="date">
<!--Posted Date-->				{{date('F d, Y',strtotime($article->updated_at))}}
								</li>
							</ul><br><br><br><br><br><br>
							<p>
<!--Contents-->{!!substr($article->content,0,850)!!}...</p>
							<a class="read_more" href={{ route('view',$article->id)}} title="Read more"><span class="arrow"></span><span>
<!--Full width Page-->READ MORE</span></a>
						</li>
						@endif
						@endforeach

					</ul>
					<ul class="blog column column_1_2">
						@foreach($articles as $article)
						@if($article->id%2==0)
						<li class="post">
							<a href= title="{{$article->title}}">
								<img src='{{asset('uploads/'.$article->image)}}' alt='img'>
							</a>
							<h2 class="with_number">
								<a href={{ route('view',$article->id) }} title='{{$article->title}}'>{{$article->title}}</a>
								<a class="comments_number" href="indexb2ff.html?page=post_video#comments_list" title='{{$article->numberofComments}} Comments'>{{$article->numberofComments}}<span class="arrow_comments"></span></a>
							</h2>
							<ul class="post_details">
								<li class="category"><a href= title="{{$article->category}}">{{$article->category}}</a></li>
								<li class="date">
									{{date('F d, Y',strtotime($article->updated_at))}}
								</li>
							</ul><br><br><br><br><br><br>
							<p>{!!substr($article->content,0,850)!!}...</p>
							<a class="read_more" href={{ route('view',$article->id)}} title="Read more"><span class="arrow"></span><span>
<!-- Full Page-->READ MORE</span></a>
						</li>
						@endif
						@endforeach
<!-- Upto Here-->
					</ul>
				</div>