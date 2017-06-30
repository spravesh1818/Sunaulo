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
	{!!Form::model($articles,['route'=>['content.update',$articles->id],'method'=>'PUT'])!!}
	{{Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
	{{Form::textarea('content',null,array('class'=>'form-control','placeholder'=>'Text','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
	<script>
	CKEDITOR.replace('content');
	</script>
	{{Form::submit('Submit',array('class'=>'btn btn-success','placeholder'=>'Phone number','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
	{!!Form::close()!!}
@endsection