@extends('admin_view.starter')
@section('title')
View Tags
@endsection

@section('main_header')
View Tags
@endsection

@section('destination')
View Tags
@endsection


@section('content')
	<link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
	<div class='container'>
	<table class='table'>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Created At</th>
			<th>Actions</th>
		</tr>

		@foreach ($tags as $tag)
		<tr>
			<th>{{$tag->id}}</th>
			<td>{{$tag->name}}</td>
			<td>{{date('F d, Y', strtotime($tag->created_at))}}</td>
			<td><a href='{{route('tag.edit',$tag->id)}}' class='btn btn-primary btn-sm' style='margin-bottom:2px;width:66px'>Edit</a>
				{!!Form::open(['route'=>['tag.destroy',$tag->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary','id'=>'delete'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection