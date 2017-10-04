@include('partials._head')
@include('partials._header')

<style>input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.button {
    background-color: #f44336; /* Green */
    border: none;
    color: white;
    width: 200px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.contentbox {
    background-color: lightgrey;
    width: 80%;
    
    padding: 10px;
    margin: 10px;
}
</style>

<div>

<body class="">
@php
	$category_sel=array();
@endphp
<div class="col-12">
		<div class="page_layout page_margin_top clearfix">
		<hr class="divider page_margin_top">
		<div class="row page_margin_top">
			<div class="col-9">
			@foreach($articles as $article)
				<div class="row">
					<div class="post single">
					
						@php
							$category_sel[0]=$article->category->name;
						@endphp
					<ul class="post_details clearfix">
							<li class="detail category">In <a href="" title="{{$article->category->title}}">{{$article->category->title}}</a></li>
							<li class="detail date">{{date('F d, Y', strtotime($article->updated_at))}}</li>
							<li class="detail author">{{$article->author->name}}</li>
							@php
								$check=$article->id;	
							@endphp
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

					<br>
					<div><h4>तपाईको पनि जिज्ञासाहरु भए सोध्नुहोस | हामी जवाफ दिन्छौ | जिज्ञासा पठाउन तल क्लिक गर्नुहोस | </h4>
					<input type="button" class="button"  value="जिज्ञासा माथि छलफल गरौ" onclick="showDiv()" style="margin-left:20px"/>

					<div id="welcomeDiv"  style="display:none;" class="answer_list"  style="margin-left:20px">
<input class="button" type="button"  value="cancel" onclick="hideDiv()" style="margin-left:20px" />
<div class="container" style="margin-left:20px">
  <form method="post" id="question_form" action="{{ route('postQuestion') }}" >
  {{csrf_field()}}
    <label for="fname">पुरा नाम</label>
    <input type="text" id="fname" name="firstname" placeholder="नाम..">

    <label for="email">ईमेल </label>
    <input type="text" id="email" name="email" placeholder="इमेल (गोप्य राखिनेछ !!)">

    <label for="subject">तपाईको जिज्ञासा सोध्नुहोस</label>
    <textarea id="question" name="question" placeholder="तपाईको जिज्ञासा लेख्नुहोस.." style="height:200px"></textarea>

    <input type="submit" value="पेश गर्नुहोस">

  </form>
</div>
</div>

<script type="text/javascript">
function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
   $("p").remove();
}
function hideDiv() {
   document.getElementById('welcomeDiv').style.display = "none";
}
</script>


					</div>
					<br>

					

				<div class="row page_margin_top">
					<div class="share_box clearfix">
						<label>Share:</label>
						<ul class="social_icons clearfix">
						@php
							$uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
							@endphp
							<li>
								<a target="_blank" title="share on facebook" href="https://www.facebook.com/sharer/sharer.php?u={{$uri}}" class="social_icon facebook">
									&nbsp;
								</a>
							</li>
							<li>
								<a target="_blank" title="share on twitter" href="https://twitter.com/home?status={{$uri}}" class="social_icon twitter">
									&nbsp;
								</a>
							</li>
							
							
							
							<li>
								<a title="share on pinterest" href="https://pinterest.com/pin/create/button/?url=&media={{$uri}}&description=" class="social_icon pinterest">
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
							<a href="{{ route('category',$article->category->id) }}">
							{{$article->category->title}}
							</a>
						</li>
					</ul>
				</div>

</div>
</div>
</div>
</div>

</div>

<div class="clearfix">
</div>
<!--comment div-->
<div class="row page_margin_top_section" style="padding-left: 15px;">
					<h4 class="box_header">प्रतिक्रिया दिनुहोस</h4>
					<p class="padding_top_30" id="thank_you">प्रतिक्रिया दिनुभएकोमा धन्यवाद |</p>
					<p class="padding_top_30">तपाईको इमेल गोप्य राखिनेछ !!</p>
					<form class="comment_form margin_top_15" id="comment_form"  action='{{ route('comment.post') }}'>
					{{csrf_field()}}
						<div class="column column_1_3" style="float: left;">
							<input class="text_input" id="name" name="name" type="text"  placeholder="नाम (अनिवार्य)">
						</div>
						<div class="column column_1_3">
						<input class="text_input" name="email" id="email" type="text" placeholder="इमेल (गोप्य राखिनेछ !!)" required>
						</div>
						
						
							<textarea name="comment" id="comment" placeholder="प्रतिक्रिया दिनुहोस"  required></textarea>
							<select name='article_id' id="article_id" style="display:none">
									<option>{{$article->id}}</option>
							</select>
						
						<div>
							<input type="submit" class="more active" id="post_comment" style="float: left;" value="पेश गर्नुहोस">
						</div>
						
					</form>
					<br>
				</div>


				<div class="row page_margin_top_section" id="comment_show" style="padding-left: 15px;">
					<h4 class="box_header">
					@php
						$noc=0;
					@endphp
					@foreach($comments as $comment)
					@if($comment->article_id==$check)
						@php
							$noc=$noc+1;								
						@endphp
					@endif
					@endforeach
					{{$noc}}
					Comments</h4>
					@foreach($comments as $comment)
					@if($comment->article_id==$check)
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
					@endif
					@endforeach
				</div>

<!--comment div finish-->
<br>
<br>
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
@include('partials._footer')		
