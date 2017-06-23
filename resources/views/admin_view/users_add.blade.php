@extends('admin_view.starter')
@section('title')
Add Users
@endsection

@section('main_header')
Add Users
@endsection

@section('destination')
Add Users
@endsection

@section('content')
	
	{!! Form::open(['route' => 'auser.store']) !!}
		<div class='container' style='width:500px;height:500px;margin-top:100px;'>
    	{{Form::text('firstName',null,array('class'=>'form-control','placeholder'=>'First Name','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
    	{{Form::text('middleName',null,array('class'=>'form-control','placeholder'=>'Middle Name','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
    	{{Form::text('lastName',null,array('class'=>'form-control','placeholder'=>'Last Name','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
    	{{Form::text('username',null,array('class'=>'form-control','placeholder'=>'Username','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
    	{{Form::password('password', ['class' => 'form-control','placeholder'=>'Password','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'])}}
    	{{Form::text('email',null,array('class'=>'form-control','placeholder'=>'E-mail','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
    	{{Form::text('phone',null,array('class'=>'form-control','placeholder'=>'Phone number','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
    	{{Form::submit('Submit',array('class'=>'btn btn-success','placeholder'=>'Phone number','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
	{!! Form::close() !!}
		</div>
@endsection