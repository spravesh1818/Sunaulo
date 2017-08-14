@extends('admin_view.starter')
@section('title')
View Category
@endsection

@section('main_header')
View Category
@endsection

@section('destination')
View Category
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
		
		@foreach ($categories as $category)
		<tr>
			<th>{{$category->id}}</th>
			<td>{{$category->title}}</td>
			<td>{{date('F d, Y', strtotime($category->created_at))}}</td>
			<td>
				{!!Form::open(['route'=>['category.destroy',$category->id],'method'=>'delete','onsubmit'=>'return val()'])!!}
				{{Form::submit('Delete',array('class'=>'btn btn-primary','id'=>'delete'))}}
				{!!Form::close()!!}</td>
		</tr>
		@endforeach
	</table>

	<script>
	function val(){
		if(confirm("Deleting this post will remove its related articles as well!Are you sure you want to delete?"))
		{
			document.forms['delete'].submit();
		}
		else{
			return false;
		}
	}
	</script>
</div>
@endsection