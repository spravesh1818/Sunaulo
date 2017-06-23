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
			<th>Title</th>
			<th>Category</th>
			<th>Keywords</th>
			<th>Content</th>
			<th>Author</th>
			<th>Date of Post</th>
			<th>Actions</th>
		</tr>


		@foreach ($articles as $article)
		<tr>
			<th>{{$article->id}}</th>
			<td>{{$article->title}}</td>
			<td>{{$article->category}}</td>
			<td>{{$article->keywords}}</td>
			<td>{{$article->content}}</td>
			<td>{{$article->author}}</td>
			<td>{{$article->created_at}}</td>
			<td><a href='{{route('content.edit',$article->id)}}' class='btn btn-primary btn-sm' style='margin-bottom:2px;width:66px'>Edit</a>
				{!!Form::open(['route'=>['content.destroy',$article->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}
		</tr>
		@endforeach
	</table>
</div>

@endsection


	
