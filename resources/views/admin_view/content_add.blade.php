@extends('admin_view.starter')
@section('title')
Add Content
@endsection

@section('main_header')
Add Content
@endsection

@section('destination')
Add Content
@endsection

@section('content')
  

	<script src={{ URL::asset('ckeditor/ckeditor.js') }}></script>
	
	{!! Form::open(['route' => 'content.store','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;']) !!}	
	{{Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title'))}}<br>
	<select name="category" class="form-control" style="width:200px">
		<option>Select a category..</option>
		@foreach ($categories as $category)
		<option>{{$category->title}}</option>
		@endforeach
	</select><br>
	{{Form::label('image','Upload article display picture')}}
	{{Form::file('image',array('class'=>'form-control','style'=>'margin-bottom:20px;'))}}


	{{Form::textArea('content',null,array('class'=>'form-control ckeditor','placeholder'=>'Text','id'=>'content','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
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
} );
	</script>



	{{Form::label('file[]','Upload additional file(pdf,docx)')}}
	<input type="file" name="file[]" multiple="true">

	{{Form::submit('Submit',array('class'=>'btn btn-success','style'=>'width:200px;margin-top:20px;'))}}
	{!! Form::close() !!}
@endsection