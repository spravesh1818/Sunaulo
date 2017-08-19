@extends('admin_view.starter')
@section('title')
Edit Category	
@endsection

@section('main_header')
Edit Category
@endsection

@section('destination')
Edit Category
@endsection

@section('content')

	@if(count($errors)>0)
		<ul class="alert alert-danger alert-dismissable" style="margin-left:50px;width:400px">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
		</ul>
	@endif
			<br>
			{!!Form::model($category,['route'=>['category.update',$category->id],'method'=>'PUT','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;'])!!}

			<fieldset>
					<label name='title' class="form-control">Category title</label>
					<textArea name='title' id='title' style="font-family: Preeti" class="form-control">{{$category->title}}</textArea>

				</fieldset>
				<br>

			{{Form::submit('Submit',array('class'=>'btn btn-success','onclick'=>'val()','style'=>'width:200px;margin-top:20px;'))}}
			{!!Form::close()!!}
			</table>

			<script type="text/javascript">
		function val(){
			var title=document.getElementById('title').value;
			var finalTitle=convert_to_unicode(title);
			document.getElementById('title').value=finalTitle;
		}
	</script>
		</div>
@endsection
