
$(document).ready(function (){

	$.ajax({
		type:'GET',
		url:'/fetchcategories',
		success:function(data){
			var response=JSON.parse(data);
			for(i=0;i<response.length;i++)
			 $('#output').append('<li><a href="http://127.0.0.1:8000/categories/'+response[i].id+'">'+response[i].title+'</a></li>')
		},
		error:function(){
			alert('error saving order');
		}
	});


});