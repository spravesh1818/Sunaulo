@extends('admin_view.starter')
@section('title')
View Jigyasa Questions
@endsection

@section('main_header')
View Jigyasa Questions
@endsection

@section('destination')
View Jigyasa Questions
@endsection

@section('content')
 <link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
	<div class='container'>
	<table class='table'>
		<tr>
			<th>#</th>
			<th>Question</th>
			<th>Posted By</th>
			<th>Email</th>
			<th>Date of Post</th>
			<th>Actions</th>
		</tr>
		@php
			$jigyasa=$jigyasa->sortByDesc('created_at');
		@endphp

		@foreach ($jigyasa as $article)
		<tr>
			<th>{{$article->id}}</th>
			<td>{{$article->question}}</td>
			<td>{{$article->name}}</td>
			<td>{{$article->email}}</td>
			<td>{{date('F d, Y', strtotime($article->created_at))}}</td>
			<td>
				{!!Form::open(['route'=>['jigyasa.destroy',$article->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}
			
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection