@include('partials._head')
@include('partials._header')
<!-- Slider-->
<!--end of header-->
@include('partials.highlights')
<!-- Starting of Latest Post-->
@include('partials._latestpost')

@include('partials._recommended')

@include('partials._rightbar')
@include('partials._latestcat')



<script>(function(t,e,s,o){var n,a,c;t.SMCX=t.SMCX||[],e.getElementById(o)||(n=e.getElementsByTagName(s),a=n[n.length-1],c=e.createElement(s),c.type="text/javascript",c.async=!0,c.id=o,c.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd9GwkiV6ZRtn4o2YIej3Tcgvg9Tynil0xh6Q1R1lgnWE.js"].join(""),a.parentNode.insertBefore(c,a))})(window,document,"script","smcx-sdk");</script>


<!-- Latest Post From One Category-->
<script type="text/javascript">
	$(document).ready(function (){
		console.log('working');
	$.ajax({
		type:'GET',
		url:'/fetchspecial',
		success:function(data){
			var response=JSON.parse(data);
		
			if(Object.keys(response).length==0){
				$('#special').append('<li class="post"><div class="post_content"><h5><a>No khulduli right now</a></h5></div></li>');
  					iterator+=1;
			}
			else{
			var iterator=0;
			$.each(response, function () {
				if(iterator==4)
					return false;
				else{
					$('#special').append('<li class="post"><div class="post_content"><h5><a href="test">'+this.title+'</a></h5></div></li>');}
  					iterator+=1;
			});}

			
		},
		error:function(){
			alert('khulduli ayena');
		}
	});

});

</script>
@include('partials._footer')
