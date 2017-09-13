@include('partials._head')
@include('partials._header')
<link rel="stylesheet" href={{asset('css/venobox.css')}}>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src={{URL::asset('js/venobox.js')}}></script>

<div><h1 style="text-align:center">{{$gallery->title}} Photos</h1>
	<div style="margin-left:10px">
		@foreach($gallery->gallery_file as $file)
		<a class="venobox" data-gall="new" href="{{asset('uploads/public/gallery_images/'.$file->filename)}}" ><img src="{{asset('uploads/public/gallery_images/'.$file->filename)}}" style="width:20%;height:00%" alt="image alt"/></a>
		@endforeach
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
    $('.venobox').venobox(); 
});
</script>
</div>	
<br><br>



@include('partials._footer')