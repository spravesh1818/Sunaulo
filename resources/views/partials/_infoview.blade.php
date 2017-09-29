@include('partials._head')
@include('partials._header')

<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title"></h1>
		</div>
		<h2>{{$infographic->title}} </h2>
	</div>
	<div class="page_layout clearfix">
		<div class="divider_block clearfix">
			<hr class="divider first">
			<hr class="divider subheader_arrow">
			<hr class="divider last">
		</div>
		<div class="row">
			<div class="column column_2_3">
				<div class="row">
					<ul class="blog big">
					<div>{{$infographic->description}}</div>
						@foreach($infographic->info_file as $file)
						<li class="post">
							<img src="{{ asset('uploads/public/infographics/'.$file->filename) }}"/>
							<div class="post_content">
								<a class="read_more" href="{{ asset('uploads/public/infographics/'.$file->filename) }}" title="पुरा पढ्नुहोस" download><span class="arrow"></span><span>Download</span></a>
							</div>
						</li>
						@endforeach
					</ul>
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
		</div>
	</div>	

@include('partials._footer')		
