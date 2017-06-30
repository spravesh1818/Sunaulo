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
	
	{!! Form::open(['route' => 'content.store']) !!}	
	{{Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title','style'=>'width:200px;margin-top:20px;margin-left:100px;fontsize:35px','required'))}}<br>
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
	{{Form::submit('Submit',array('class'=>'btn btn-success','placeholder'=>'Phone number','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
	{!! Form::close() !!}
@endsection