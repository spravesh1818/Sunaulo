@include('partials._head')
@include('partials._header')

<style>
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
					<input class="button" type="button"  value="जिज्ञासा पठाउनुहोस " style="margin-left:20px" />
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
@include('partials._footer')		
