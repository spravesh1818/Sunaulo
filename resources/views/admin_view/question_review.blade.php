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
			<th>Question</th>
			<th>Posted By</th>
			<th>Posted On</th>
			<th>Actions</th>
		</tr>
		@php
			$question=$question->sortByDesc('created_at');
		@endphp

		@foreach ($question as $question)
		<tr>
			<th>{{$question->id}}</th>
			<td>{{$question->question}}</td>
			<td>{{$question->name}}</td>
			<td>{{date('F d, Y', strtotime($question->created_at))}}</td>
			<td>
				{!!Form::open(['route'=>['question.delete',$question->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection


	


	
