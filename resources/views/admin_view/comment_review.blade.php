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
			<th>On Article</th>
			<th>Comment</th>
			<th>Commented By</th>
			<th>Date of Post</th>
			<th>Actions</th>
		</tr>
		@php
			$comments=$comments->sortByDesc('created_at');
		@endphp

		@foreach ($comments as $comment)
		<tr>
			<th>{{$comment->id}}</th>
			<td>{{$comment->articles->title}}</td>
			<td>{{$comment->comment}}</td>
			<td>{{$comment->name}}</td>
			<td>{{date('F d, Y', strtotime($comment->created_at))}}</td>
			<td>
				{!!Form::open(['route'=>['comment.delete',$comment->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection


	
