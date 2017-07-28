
<div class="col-8" >
  @if(!empty($articles[0]->image))
  <img src={{ asset('uploads/'.$articles[0]->image) }} style="width:100%;text-align: 'center';">
  @endif
  <br>
  <h1 class="with_number box_header">
	<a href="{{ route('view',$articles[0]->id) }}" title="{{$articles[0]->title}}">{{$articles[0]->title}}</a> </h1>                	
</div>

<div class="col-3 right" style="padding-top: 25px;">
 <div>
    <h4 class="box_header"> खुल्दुली </h4>
    <ul id="special">
    	

    </ul>

 </div>
</div>
