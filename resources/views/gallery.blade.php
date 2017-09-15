@include('partials._head')
@include('partials._header')

<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title"></h1>
		</div>
		<h2>ग्यालेरी  का प्रस्तुतीहरु </h2>
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
					@if(count($articles)==0)
					<div>No Image galleries present</div>
					@else
						@foreach($articles as $article)
						<li class="post">
							<a href="" title="">
								@php
									foreach ($article->gallery_file as $file) {
											$first=$file->filename;
									}
								@endphp
								<img src='{{ asset('uploads/public/gallery_images/'.$first) }}' style="height:242px;width:330px;" alt='img'>
							</a>
							<div class="post_content">
								<h2 class="with_number">
									<a href="{{ route('gal_view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a>
								</h2>
								<ul class="post_details">
									<li class="category"><a title="Gallery">ग्यालेरी </a></li>
									<li class="date">
										{{date('F d, Y', strtotime($article->updated_at))}}
									</li>
								
								<br><br>
								<li><p>{!!substr($article->description,0,400)!!}</p></li></ul>
								<a class="read_more" href="{{ route('view',$article->id) }}" title="पुरा हेर्नुहोस्"><span class="arrow"></span><span>पुरा हेर्नुहोस्</span></a>
							</div>
						</li>
						@endforeach
						@endif
					</ul>
				</div>
				<ul class="pagination clearfix page_margin_top_section">
					<li class="selected">
						{{$articles->links()}}
					</li>
					
				</ul>
			</div>
			
		</div>
		</div>
	</div>	

@include('partials._footer')		
