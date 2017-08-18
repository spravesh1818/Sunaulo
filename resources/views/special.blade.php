@include('partials._head')
@include('partials._header')

<body class="">

<div class="col-12">
		<div class="page_layout page_margin_top clearfix">
		<hr class="divider page_margin_top">
		<div class="row page_margin_top">
			<div class="col-9">
			@foreach($articles as $article)
				<div class="row">
					<div class="post single">
					<ul class="post_details clearfix">
							<li class="detail category">In <a href="" title="{{$article->category->title}}">{{$article->category->title}}</a></li>
							<li class="detail date">{{date('F d, Y', strtotime($article->updated_at))}}</li>
							<li class="detail author">{{$article->author->name}}</li>
							<li class="detail views"></li>
							<li class="detail comments"><a href="#comments_list" class="scroll_to_comments" title="6 Comments"></a></li>
						</ul>
						@if(!empty($article->image))
						<a>
							<img src='{{asset('uploads/'.$article->image)}}' alt='img'>
						</a>
						@endif
						<div class="post_content page_margin_top_section clearfix">
							
							<div class="col-14">
							<div class="content_box">
								<h1 class="post_title">
								{{$article->title}}
								</h1>
								<div class="text">
									<p></p>
									
									<p>{!!$article->content!!}</p>
									
									<a title="{{$article->numberofComments}} Comments" href="indexb878.html?page=post" class="read_more page_margin_top scroll_to_comments"><span class="arrow"></span><span>{{$article->numberofComments}} COMMENTS</span></a>
								</div>
								</div>
			
							</div>
						</div>
						</div>
						</div>
					@endforeach
					<br>
					<br>
					<div style="margin-left:30%"><span class="arrow"></span><span>{{$articles->links()}}</span></div><br><br>

				<div class="row page_margin_top">
					<div class="share_box clearfix">
						<label>Share:</label>
						<ul class="social_icons clearfix">
							<li>
								<a target="_blank" title="" href="http://facebook.com/sunaulobhabisya" class="social_icon facebook">
									&nbsp;
								</a>
							</li>
							<li>
								<a target="_blank" title="" href="https://twitter.com/sunaulobhabisya" class="social_icon twitter">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="mailto:" class="social_icon mail">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="#" class="social_icon skype">
									&nbsp;
								</a>
							</li>
							
							<li>
								<a title="" href="#" class="social_icon instagram">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="#" class="social_icon pinterest">
									&nbsp;
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top">
					<ul class="taxonomies tags left clearfix">
						<li>
							<a href="#" title="People">PEOPLE</a>
						</li>
					</ul>
					<ul class="taxonomies categories right clearfix">
						<li>
							<a href="" title="HEALTH">{{$article->category}}</a>
						</li>
					</ul>
				</div>
</div>
</div>
</div>
</div>
@include('partials._footer')		
