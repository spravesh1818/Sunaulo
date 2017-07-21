<body class="">

<div class="page">
	<div class="page_layout page_margin_top clearfix">
		
		<hr class="divider page_margin_top">
		<div class="row page_margin_top">
			<div class="column column_2_3">
				<div class="row">
					<div class="post single">
						
						<ul class="post_details clearfix">
							<li class="detail category">In <a href="indexdced.html?page=category&amp;cat=health" title="HEALTH">{{$articles->category}}</a></li>
							<li class="detail date">{{date('F d, Y', strtotime($articles->updated_at))}}</li>
							<li class="detail author">{{$articles->author}}</li>
							<li class="detail views"></li>
							<li class="detail comments"><a href="#comments_list" class="scroll_to_comments" title="6 Comments"></a></li>
						</ul>
							<img src='{{asset('uploads/'.$articles->image)}}' alt='img'>
						</a>

						<div class="post_content page_margin_top_section clearfix">
							<div class="content_box">
								<h1 class="post_title">
								{{$articles->title}}
								</h1>
								<div class="text">
									<p></p>
									
									<p>{!!$articles->content!!}</p>
									
									<a title="{{$articles->numberofComments}} Comments" href="indexb878.html?page=post" class="read_more page_margin_top scroll_to_comments"><span class="arrow"></span><span>{{$articles->numberofComments}} COMMENTS</span></a>
								</div>
							</div>
							<div class="author_box animated_element">
								<div class="author">
									<a title="Pravesh Chapagain" href="index27b5.html?page=author" class="thumb">
										<img alt="img" src={{ URL::asset('images/noprofile.png')}} style="width:100px;height:100px">
									</a>
									<div class="details">
										<h5><a title="Anna Shubina" href="index27b5.html?page=author">{{$articles->author}}</a></h5>
										<h6>EDITOR</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
							<a href="indexdced.html?page=category&amp;cat=health" title="HEALTH">{{$articles->category}}</a>
						</li>
					</ul>
				</div>
				<!--<div class="row page_margin_top_section">
					<h4 class="box_header">सम्बन्धित पोस्टहरु </h4>
					<div class="horizontal_carousel_container page_margin_top">
						<ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
							<li class="post">
								<a href="indexb878.html?page=post" title="New Painkiller Rekindles Addiction Concerns">
									<img src='images/samples/330x242/image_08.jpg' alt='img'>
								</a>
								<h5><a href="indexb878.html?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="indexdced.html?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>-->
				<div class="row page_margin_top_section">
					<h4 class="box_header">Leave a Comment</h4>
					<p class="padding_top_30">Your email address will not be published. Required fields are marked with *</p>
					<form class="comment_form margin_top_15" id="comment_form" method="post" action={{ route('comment.post') }}>
					{{csrf_field()}}
						<fieldset class="column column_1_3">
							<input class="text_input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
						</fieldset>
						<fieldset class="column column_1_3">
							<input class="text_input" name="email" type="text" value="Your Email *" placeholder="Your Email *" required>
						</fieldset>
						
						<fieldset>
							<textarea name="comment" placeholder="Comment *" required>Comment *</textarea>
							<select name='article_id' style="display:none;">
									<option>{{$articles->id}}</option>
							</select>
						</fieldset>
						<fieldset>
							<input type="submit" value="POST COMMENT" class="more active">
							<a href="#cancel" id="cancel_comment" title="Cancel reply">Cancel reply</a>
						</fieldset>
					</form>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">
					{{count($comment)}}
					Comments</h4>
					@foreach($comment as $comment)
					<ul id="comments_list">
						<li class="comment clearfix" id="comment-1">
							<div class="comment_details">
								<div class="posted_by clearfix">
									<h5><strong><a class="author" href="#" title={{$comment->name}}>{{$comment->name}}</a></strong></h5>
									<abbr title={{$comment->created_at}} class="timeago">{{$comment->created_at}}</abbr>
								</div>
								<p>
								{{$comment->comment}}
								</p>
								<a class="read_more" href="#comment_form" title="Reply">
									<span class="arrow"></span><span>REPLY</span>
								</a>
							</div>
						</li>
					</ul>
					@endforeach
				</div>
			</div>
			