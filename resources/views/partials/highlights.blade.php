<div class="horizontalline">
</div>
<div class="col-8" >
  @if(!empty($articles[0]->image))
  <img src={{ asset('uploads/'.$articles[0]->image) }} style="width:100%;text-align: 'center';">
  @endif
  <br>
  <h2 class="with_number box_header">
	<a href="{{ route('view',$articles[0]->id) }}" title="{{$articles[0]->title}}">{{$articles[0]->title}}</a> </h2>                	
</div>

<div class="col-3 right" style="padding-top: 25px;">
  <div class="box_header">
    <h4 style="font-weight: bolder;">FAQ</h4>
   </div>	
</div>
