
$(document).ready(function (){

	$.ajax({
		type:'GET',
		url:'/fetchArticles',
		success:function(data){
			var response=JSON.parse(data);
			//$('#output').append(response[0].title);
			//console.log(response[0].title);
		},
		error:function(){
			alert('error saving order');
		}
	});


});