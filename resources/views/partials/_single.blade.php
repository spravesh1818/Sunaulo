<body class="">

<div class="col-12">
		<div class="page_layout page_margin_top clearfix">
		<hr class="divider page_margin_top">
		<div class="row page_margin_top">
			<div class="col-9">
				<div class="row">
					<div class="post single">
					<ul class="post_details clearfix">
							<li class="detail category">In <a href="" title="{{$article->category->title}}">{{$article->category->title}}</a></li>
							<li class="detail date">
							
								
							
							</li>
							
							<li class="detail views"></li>
							<li class="detail comments"><a href="#comments_list" class="scroll_to_comments" title="6 Comments"></a></li>
						</ul>
						@if(!empty($article->image))
						<a>
							<img src='{{asset('uploads/'.$article->image)}}' alt='img'>
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
								      echo '<iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $id . '"frameborder="0" allowfullscreen class="vid1"></iframe>';
  									@endphp

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
									
									<a title="{{$article->numberofComments}} Comments" href="indexb878.html?page=post" class="read_more page_margin_top scroll_to_comments"><span class="arrow"></span><span>{{$article->numberofComments}} प्रतिक्रिया</span></a>
								</div>
								</div>
							
							
							<div class="author_box animated_element" style="padding-top: 35px;">
							
								
								</div>
							</div>
						</div>
						</div>
						</div>
				<div class="row page_margin_top">
					<div class="share_box clearfix">
						<label>Share:</label>
						<ul class="social_icons clearfix">
						@php
							$uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
							@endphp


							<li>
								<a href="javascript:void(0);" onclick="fb_share('{{$uri}}', '{{$article->title}}')" class="fa fa-facebook" title="share on facebook">&nbsp;</a>
							</li>
							<li>
								<a title="share on twitter" href="https://twitter.com/home?status={{$uri}}" class="fa fa-twitter">&nbsp;</a>
							</li>
							
							
							
							<li>
								<a title="share on pinterest" href="https://pinterest.com/pin/create/button/?url=&media={{$uri}}&description=" class="fa fa-pinterest">&nbsp;</a>
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
							<a href="{{ route('category',$article->category->id) }}">
							{{$article->category->title}}
							</a>
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
					<h4 class="box_header">प्रतिक्रिया दिनुहोस</h4>
					<p class="padding_top_30" id="thank_you">प्रतिक्रिया दिनुभएकोमा धन्यवाद |</p>
					<p class="padding_top_30">तपाईको इमेल गोप्य राखिनेछ !!</p>
					<form class="comment_form margin_top_15" id="comment_form"  action='{{ route('comment.post') }}'>
					{{csrf_field()}}
						<div class="column column_1_3" style="float: left;">
							<input class="text_input" id="name" name="name" type="text"  placeholder="नाम (अनिवार्य)">
						</div>
						<div class="column column_1_3">
						<input class="text_input" name="email" id="email" type="text" placeholder="इमेल (अनिवार्य)" required>
						</div>
						
						
							<textarea name="comment" id="comment" placeholder="प्रतिक्रिया दिनुहोस"  required></textarea>


							<select name='article_id' id="article_id" style="display:none;">
									<option>{{$article->id}}</option>
							</select>
						
						<div>
							<input type="submit" class="more active" id="post_comment" style="float: left;" value="पेश गर्नुहोस">
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
			  <div id="fb-root"></div>
    <script>
    (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1280290392116978";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    function fb_share(dynamic_link,dynamic_title) {
        var app_id = '1280290392116978';
        var pageURL="https://www.facebook.com/dialog/feed?app_id=" + app_id + "&link=" + dynamic_link;
        var w = 600;
        var h = 400;
        var left = (screen.width / 2) - (w / 2);
        var top = (screen.height / 2) - (h / 2);
        window.open(pageURL, dynamic_title, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=no, width=' + 800 + ', height=' + 650 + ', top=' + top + ', left=' + left)
        return false;
    }
    </script>

    <script type="text/javascript">
    	<?
   // Change Title Tag Version 1.5
function ch_title($title){
    $output = ob_get_contents();
    if ( ob_get_length() > 0) { ob_end_clean(); }
    $patterns = array("/<title>(.*?)<\/title>/");
    $replacements = array("<title>$title</title>");
    $output = preg_replace($patterns, $replacements,$output);
    echo $output;
}
?>
    </script>>
			@include('partials._rightbar')
