
<body class="">

<div class="col-12">
		<div class="page_layout page_margin_top clearfix">
		<hr class="divider page_margin_top">
		<div class="row page_margin_top">
			<div class="col-9">
				<div class="row">
					<div class="post single">
					<ul class="post_details clearfix">
							<li class="detail category">In <a href="" title="{{$article->category}}">{{$article->category}}</a></li>
							<li class="detail date">
							
								
							
							</li>
							<li class="detail author">{{$article->author}}</li>
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
							
							
							<div class="author_box animated_element" style="padding-top: 35px;">
							
								<div class="author">
									<a title="{{$article->author}}" href="index27b5.html?page=author" class="thumb">
									@if(!empty($author->usr_avatar))
										<img alt="img" src={{ asset('uploads/'.$author->usr_avatar) }} style="width:100px;height:100px">
									@else
									<img alt="img" src={{asset('images/noprofile.png')}} style="width:100px;height:100px">
									@endif

									</a>
									<div class="details" style="margin-left: 0px;">
										<h5><span><a title="{{$article->author}}" href="">{{$article->author}}</a></span></h5>
										<h6>EDITOR</h6>
									</div>
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
						@foreach($article->tags as $tag)
						<li>
							{{$tag->name}}
						</li>
						@endforeach
					</ul>
					<ul class="taxonomies categories right clearfix">
						<li>
							<a href="" title="{{$article->category}}">{{$article->category}}</a>
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
					<p class="padding_top_30" id="thank_you">Thank you for commenting on the post</p>
					<p class="padding_top_30">Your email address will not be published. Required fields are marked with *</p>
					<form class="comment_form margin_top_15" id="comment_form"  action='{{ route('comment.post') }}'>
					{{csrf_field()}}
						<div class="column column_1_3" style="float: left;">
							<input class="text_input" id="name" name="name" type="text" value="Your Name *" placeholder="Your Name *">
						</div>
						<div class="column column_1_3">
						<input class="text_input" name="email" id="email" type="text" value="Your Email *" placeholder="Your Email *" required>
						</div>
						
						
							<textarea name="comment" id="comment" placeholder="Comment *"  required></textarea>


							<select name='article_id' id="article_id" style="display:none;">
									<option>{{$article->id}}</option>
							</select>
						
						<div>
							<input type="submit" class="more active" id="post_comment" style="float: left;" value="POST COMMENT">
						</div>
						
					</form>
					<br>
				</div>
				<div class="row page_margin_top_section" id="comment_show">
					<h4 class="box_header">
					{{count($comments)}}
					Comments</h4>
					@foreach($comments as $comment)
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
				<div>{{$comments->links()}}</div>
			</div>
			
			<script type="text/javascript">
				$(document).ready(function (){
					console.log('Ajax not working');
					var thanks=$('#thank_you');
					thanks.hide();
					var form=$('#comment_form');
					form.submit(function(event)
					{
						var name=$('#name').val();
						var email=$('#email').val();
						var comment=$('#comment').val();
						var article_id=$('#article_id').val();
						var token=$('input[name=_token]').val()
						$.ajax({
							type:'POST',
							url:'/comment',
							data: {'name':name,'email':email,'comment':comment,'_token':token,'article_id':article_id},
							success:function(data){
								//call ajax get request for all the comment
								$('#comment_form').hide();
								thanks.show();
								$('#comment_show').load(location.href+' #comment_show');
							},
							error:function(){
								alert('comment could not be posted');
							}
						});


						event.preventDefault();
					});
				});

			</script>
			@include('partials._rightbar')
