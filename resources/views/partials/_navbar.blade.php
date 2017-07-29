 

<nav id="nav" role="navigation"> <a href="#nav" title="Show navigation">Show navigation</a> <a href="#" title="Hide navigation">Hide navigation</a>
      <ul class="clearfix">
    <li><a href="">गृह पृष्ठ</a></li>
    
    <li> <a href=""><span>समाचार</span></a>
          <ul>
        <li><a href="">स्वास्थ्य</a></li>
        <li><a href="">खुल्दुली</a></li>
        <li><a href="">बेन्ग्य</a></li>
        <li><a href="">संसार</a></li>
      </ul>
        </li>
    <li> <a href=""><span>कोटी / वर्ग</span></a>
      <ul id="output">
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
