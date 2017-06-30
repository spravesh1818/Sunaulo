@extends('admin_view.starter')
@section('title')
View Users
@endsection

@section('main_header')
View Users
@endsection

@section('destination')
View Users
@endsection

@section('content')
<div class='container'>
	<table class='table'>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>Email</th>
			<th>Actions</th>
		</tr>


		@foreach ($users as $user)
		<tr>
			<th>{{$user->id}}</th>
			<td>{{$user->name}}</td>
			
			<td>{{$user->email}}</td>
			
			<td><a href='#' class='btn btn-primary btn-sm' style='margin-bottom:2px;width:66px'>Edit</a>
				{!!Form::open(['route'=>['user.destroy',$user->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach





	</table>
</div>
@endsection