@extends('admin_view.starter')
@section('title')
View Gallery	
@endsection

@section('main_header')
View Gallery
@endsection

@section('destination')
View Galllery
@endsection

@section('content')
 <link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
	<div class='container'>
	<table class='table'>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Files</th>
			<th>Date of Post</th>
			<th>Actions</th>
		</tr>
		@foreach($gallery as $info)
		<tr>
		<td>{{$info->id}}</td>
		<td>{{$info->title}}</td>
		<td>
			@foreach($info->gallery_file as $file)
			{{$file->filename}}
			<br>
			@endforeach
		</td>
		<td>{{$info->created_at}}</td>
		<td><a href='{{route('gal.edit',$info->id)}}' class='btn btn-primary btn-sm' style='margin-bottom:2px;width:66px'>Edit</a>
				{!!Form::open(['route'=>['gal.destroy',$info->id],'method'=>'delete'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection


	
