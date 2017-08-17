<html>
<head></head>

<table class='table'>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Created At</th>
			
		</tr>

		@foreach ($tags as $tag)
		@foreach($tag->articles as $article)
		<tr>
			<th>{{$article->id}}</th>
			<td>{{$article->title}}</td>
			<td>{{date('F d, Y', strtotime($article->created_at))}}</td>
		</tr>
		@endforeach
		@endforeach
	</table>

</p>

</body>
</html>
