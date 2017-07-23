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
			@if(!($user->name===auth()->user()->name))
			<th>{{$user->id}}</th>
			<td>{{$user->name}}</td>
			
			<td>{{$user->email}}</td>
			
			<td><a href={{ route('user.edit',$user->id) }} class='btn btn-primary btn-sm' style='margin-bottom:2px;width:66px'>Edit</a>
				{!!Form::open(['route'=>['user.destroy',$user->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}</td>
				@endif
		</tr>
		@endforeach





	</table>
</div>
@endsection