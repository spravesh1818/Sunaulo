
<html>
<head>
	<link rel="stylesheet" href={{asset('css/venobox.css')}}>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src={{URL::asset('js/venobox.js')}}></script>
</head>
<body>
<a class="venobox" data-gall="new" href="{{asset('uploads/public/gallery_images/350.jpg')}}" ><img src="{{asset('uploads/public/gallery_images/350.jpg')}}" style="width:40%;height:40%" alt="image alt"/></a>

<a class="venobox" data-gall="new"   href="{{asset('uploads/public/gallery_images/q.jpg') }}" ><img style="width:40%;height:40%" src="{{asset('uploads/public/gallery_images/q.jpg') }}" alt="image alt"/></a>

<a class="venobox" data-gall="new"   href="{{asset('uploads/public/gallery_images/water_coins.jpg') }}" ><img style="width:40%;height:40%" src="{{asset('uploads/public/gallery_images/water_coins.jpg') }}" alt="image alt"/></a>

<script type="text/javascript">
	$(document).ready(function(){
    $('.venobox').venobox(); 
});
</script>
</body>
</html>