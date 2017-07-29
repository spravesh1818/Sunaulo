
$(document).ready(function (){

	$.ajax({
		type:'GET',
		url:'/fetchcategories',
		success:function(data){
			var response=JSON.parse(data);
			for(i=0;i<response.length;i++)
			 $('#output').append('<li>'+response[i].title+'</li>')
		},
		error:function(){
			alert('error saving order');
		}
	});


	$.ajax({
		type:'GET',
		url:'/fetchspecial',
		success:function(data){
			var response=JSON.parse(data);
			if(Object.keys(response).length==0){
				$('#special').append('<li class="post"><div class="post_content"><h5><a href="">No khulduli right now</a></h5></div></li>');
  					iterator+=1;
			}
			else{
			var iterator=0;
			$.each(response, function () {
				if(iterator==4)
					return false;
				else
					$('#special').append('<li class="post"><div class="post_content"><h5><a href="">'+this.title+'</a></h5></div></li>');
  					iterator+=1;
			});}

			
		},
		error:function(){
			alert('khulduli ayena');
		}
	});





});