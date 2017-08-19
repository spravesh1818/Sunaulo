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
			<th>Title</th>
			<th>Category</th>
			<th>Author</th>
			<th>Date of Post</th>
			<th>Actions</th>
		</tr>
		@php
			$articles=$articles->sortByDesc('created_at');
		@endphp

		@foreach ($articles as $article)
		<tr>
			<th>{{$article->id}}</th>
			<td>{{$article->title}}</td>
			<td>{{$article->category->title}}</td>
			<td>{{$article->author->name}}</td>
			<td>{{date('F d, Y', strtotime($article->created_at))}}</td>
			<td>
			@if($article->author->name===auth()->user()->name)
			<a href='{{route('content.edit',$article->id)}}' class='btn btn-primary btn-sm' style='margin-bottom:2px;width:66px'>Edit</a>
				{!!Form::open(['route'=>['content.destroy',$article->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}
			@else
			Not the author
			@endif
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection


	
