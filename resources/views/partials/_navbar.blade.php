 

<nav id="nav" role="navigation"> <a href="#nav" title="Show navigation">Show navigation</a> <a href="#" title="Hide navigation">Hide navigation</a>
      <ul class="clearfix">
    <li><a href="{{ route('home') }}">गृह पृष्ठ</a></li>
    <li><a href="{{ route('askQuestion')}}">प्रश्‍न सोध्नुहोस</a></li>
    
    <li> <a href=""><span>मनोरंजन</span></a>
        <ul>
        <li><a href="{{ route('quiz')}}">हाजिरी जवाफ</a></li>
        </ul>
        </li>
    <li style="z-index:99;"> <a href=""><span>बिषयगत प्रस्तुति</span></a>
      <ul>
        @foreach($categories as $category)
        <li><a href="{{ route('category',$category->id) }}">{{$category->title}}</a></li>
        @endforeach
      </ul>
    </li>
    <li><a href="">हाम्रोबारे</a></li>
  </ul>
</nav>


<script src="{{asset('js/headermain.js')}}"></script>

<script src="{{asset('js/headertap.js')}}"></script> 
  

<script>
  $( function()
  {
    $( '#nav li:has(ul)' ).doubleTapToGo();
  });
</script>
