@extends('admin_view.starter')
@section('title')
Add Infographic
@endsection

@section('main_header')
Add Infographic
@endsection

@section('destination')
Add Infographic
@endsection


@section('content')

	@if(count($errors)>0)
		<ul class="alert alert-danger alert-dismissable" style="margin-left:100px;fontsize:35px;margin-top:20px;width:700px;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
		</ul>
	@endif

	{!! Form::open(['route' => 'info.store','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;']) !!}	
	{{Form::text('title',null,array('class'=>'form-control','id'=>'title','placeholder'=>'Title','required'))}}<br>
	{{Form::label('file[]','Upload infographics image')}}
	<input type="file" name="file[]" multiple="true" accept="image/x-png,image/gif,image/jpeg">
	{{Form::submit('Submit',array('class'=>'btn btn-success','style'=>'width:200px;margin-top:20px;'))}}
	{!! Form::close() !!}
	

@endsection