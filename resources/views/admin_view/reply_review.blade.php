@extends('admin_view.starter')
@section('title')
View Users
@endsection

@section('main_header')
View Content
@endsection

@section('destination')
View Content
@endsection

@section('content')
 <link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
	<div class='container'>
	<table class='table'>
		<tr>
			<th>#</th>
			<th>On Question</th>
			<th>Reply</th>
			<th>Replied By</th>
			<th>Date of Reply</th>
			<th>Actions</th>
		</tr>
		@php
			$reply=$reply->sortByDesc('created_at');
		@endphp

		@foreach ($reply as $reply)
		<tr>
			<th>{{$reply->id}}</th>
			<td>{{$reply->questionrel->question}}</td>
			<td>{{$reply->reply}}</td>
			<td>{{$reply->name}}</td>
			<td>{{date('F d, Y', strtotime($reply->created_at))}}</td>
			<td>
				{!!Form::open(['route'=>['reply.delete',$reply->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection


	


	
