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
			<th>Answer</th>
			<th>Option 1</th>
			<th>Option 2</th>
			<th>Option 3</th>
			<th>Description</th>
			<th>Actions</th>
		</tr>


		@foreach ($quiz as $quiz)
		<tr>
			<th>{{$quiz->id}}</th>
			<td>{{$quiz->question}}</td>
			<td>{{$quiz->answer}}</td>
			<td>{{$quiz->option1}}</td>
			<td>{{$quiz->option2}}</td>
			<td>{{$quiz->option3}}</td>
			<td>{!!substr($quiz->description,0,10)!!}</td>
			<td><a href='{{route('quiz.edit',$quiz->id)}}' class='btn btn-primary btn-sm' style='margin-bottom:2px;width:66px'>Edit</a>
				{!!Form::open(['route'=>['quiz.destroy',$quiz->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection


	
