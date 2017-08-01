
<div class="col-8" >
  @if(!empty($articles[0]->image))
  <div style="width:60%;">
  <img src={{ asset('uploads/'.$articles[0]->image) }} style="width:100%;text-align: 'center';">
  </div>
  <div style="width:40%;>
  <h2 class="box_header_title">
	<a href="{{ route('view',$articles[0]->id) }}" title="{{$articles[0]->title}}">{{$articles[0]->title}}</a> </h2>  
	</div>
  @endif
  <br>
  <h2 class="box_header_title">
	<a href="{{ route('view',$articles[0]->id) }}" title="{{$articles[0]->title}}">{{$articles[0]->title}}</a> </h2>      

  
  <h2 class="box_header_title">
  <a href="{{ route('view',$articles[0]->id) }}" title="{{$articles[0]->title}}">{{$articles[1]->title}}</a> </h2>  

  
  <h2 class="box_header_title">
  <a href="{{ route('view',$articles[0]->id) }}" title="{{$articles[0]->title}}">{{$articles[3]->title}}</a> </h2>  

</div>

<div class="col-3 right" style="padding-top: 10px;">
 <div>
    <h4 class="box_header"> खुल्दुली </h4>
    <ul id="special">
    	

    </ul>

 </div>
</div>
