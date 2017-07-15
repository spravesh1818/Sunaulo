@extends('admin_view.starter')
@section('title')
Edit Content
@endsection

@section('main_header')
Edit Content
@endsection

@section('destination')
Edit content
@endsection

@section('content')
	<script src={{ URL::asset('ckeditor/ckeditor.js') }}></script>
	{!!Form::model($articles,['route'=>['content.update',$articles->id],'method'=>'PUT','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;'])!!}
	{{Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title','style'=>'width:200px;margin-top:20px','required'))}}

	{{Form::label('image','Upload article display picture')}}
	{{Form::file('image',array('class'=>'form-control','style'=>'margin-bottom:20px;'))}}

	{{Form::textarea('content',null,array('class'=>'form-control','placeholder'=>'Text','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
	
	<script>
	CKEDITOR.addCss( "@font-face {" +
		  "font-family: 'Preeti';" +
		  "font-style: normal;" +
		  "font-weight: 400;" +
		  "src: local('Preeti'), url({{ URL::asset('css/myFont.css')}}) format('truetype');" +
				"}" );

			CKEDITOR.replace( 'content', {
   			 on: {
       		 configLoaded: function() {
             this.config.font_names += ';Preeti';
        	}
    	}
		}	);
	</script>
	{{Form::submit('Submit',array('class'=>'btn btn-success','style'=>'width:200px;margin-top:20px;'))}}
	{!!Form::close()!!}
@endsection

