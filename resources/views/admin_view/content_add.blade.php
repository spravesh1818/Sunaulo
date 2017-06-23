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
	<link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
	{!! Form::open(['route' => 'content.store']) !!}	
	{{Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title','style'=>'width:200px;margin-top:20px;margin-left:100px;fontsize:35px','required'))}}
	{{Form::textArea('content',null,array('class'=>'form-control','placeholder'=>'Text','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}

	{{Form::submit('Submit',array('class'=>'btn btn-success','placeholder'=>'Phone number','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
	{!! Form::close() !!}
@endsection