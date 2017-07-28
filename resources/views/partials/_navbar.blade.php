<div class="menu_container clearfix style_5 sticky">
<nav>
			<ul class="sf-menu selected">
			<li >
				<a href="{{ route('home') }}" >
					गृह पृष्ठ
				</a>
				
			</li>

			<li id="output">
				
			</li>
			<li class="submenu">
				<a href="#" title="Pages">
					समाचार 
				</a>
				
			</li>
	@include('partials._megamenu')<!--thulo menu sakiyo-->
	
	<li class="submenu">
		<a href="#" title="Categories">
			कोटी / वर्ग 
		</a>
		<ul>
			<li>
				<a href="{{ route('all')}}" title="all">
					All articles
				</a>
			</li>
			@foreach($categories as $category) 
			
			<li>
				<a href="{{ route('category',$category->id) }}" title="{{$category->title}}">
					{{$category->title}}
				</a>
			</li>
		@endforeach
			
					</ul>
	</li>
	<li class="submenu">
		<a  title="Contact">
			हाम्रोबारे 
		</a>
		<ul class="expand_left_contact">
			<li>
				<a href="about.php" title="Contact Style 1">
					हाम्रोबारे 
				</a>
			</li>
			<li>
				<a href="contact.php" title="Contact Style 2">
					सम्पर्क 
				</a>
			</li>
		</ul>
	</li>

	<li class="menu">
		<a href={{ route('quiz') }} title="Pages">
			Quiz
		</a>
		
	</li>
</ul>
</nav>
</div>