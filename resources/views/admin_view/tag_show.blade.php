@extends('admin_view.starter')
@section('title')
Tag Show
@endsection

@section('main_header')
<h1>{{$tag->name}}<small>{{$tag->articles()->count()}} articles</small><a href="{{ route('tag.edit',$tag->id) }}" class="btn btn-primary" style="margin-left:25px">EDIT</a></h1>

@endsection

@section('destination')
Show Tag
@endsection


@section('content')
	<link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
	<div class='container'>
	<table class='table'>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Tags</th>
		</tr>
		<tbody>
			@foreach($tag->articles as $article)
			<tr>
				<td>{{$article->id}}</td>
				<td>{{$article->title}}</td>
				<td>@foreach($article->tags as $tag)
				<span class="label label-success">{{$tag->name}}</span>
				@endforeach</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
@endsection