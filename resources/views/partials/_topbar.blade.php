<div class="header_top_bar_container  clearfix style_2 border">
			
				<div class="header_top_bar">
					<form class="search">
						<input type="text" name="s" placeholder="Search..." value="Search..." class="search_input hint">
						<input type="submit" class="search_submit" value="">
						<input type="hidden" name="page" value="search">
					</form>
					
					<ul class="social_icons clearfix dark">

					<li>
						<a href="https://www.facebook.com/Sahi-Umer-Sahi-Kadam-1374142792703076/?ref=all_category_pyml_rhc" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;</a>
					</li>
					<li>&nbsp;</li>
					<li>
							<a href="https://www.youtube.com/channel/UCW9gL5pzC-Zt-KTk4eqr-Pg/featured" title="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i>
								&nbsp;
							</a>
						</li>
						
					</ul>
					<div class="latest_news_scrolling_list_container">
						<ul>
							<li class="category">LATEST</li>
							
							<li class="posts">
								<ul class="latest_news_scrolling_list">
									@foreach($articles as $article)
									<li>
										<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a>
									</li>
									@endforeach
								</ul>
							</li>
							<li class="date">
				
						</li>
						</ul>
					</div>
				</div>
			</div>
