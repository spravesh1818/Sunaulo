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
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Actions</th>
		</tr>


		@foreach ($users as $user)
		<tr>
			<th>{{$user->id}}</th>
			<td>{{$user->firstName}}</td>
			<td>{{$user->middleName}}</td>
			<td>{{$user->lastName}}</td>
			<td>{{$user->username}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->phone}}</td>
			<td><a href='{{route('users.edit',$user->id)}}' class='btn btn-primary btn-sm' style='margin-right:2px;'>Edit</a><a href='{{route('users.destroy',$user->id)}}' class='btn btn-primary btn-sm'>Delete</a></td>
		</tr>
		@endforeach





	</table>
</div>
@endsection