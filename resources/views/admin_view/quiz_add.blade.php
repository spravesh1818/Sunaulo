@extends('admin_view.starter')
@section('title')
Add New Question	
@endsection

@section('main_header')
Add New Question
@endsection

@section('destination')
Add Question
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
			<form action={{ route('quiz.store') }} method="post" style="margin-left: 20px;width:500px;">
				{{csrf_field()}}

				<fieldset>
					<label name='question' class="form-control">Question</label>
					<textarea name='question' class="form-control"></textarea>

				</fieldset>
				<br>
				<fieldset>
					<label name='answer' class="form-control">Answer</label>
					<input type="text" name='answer' class="form-control">

				</fieldset>	
				<br>
				<fieldset>
					<label name='option1' class="form-control">Option 1</label>
					<input type="text" name='option1' class="form-control">

				</fieldset>
				<br>
				<fieldset>
					<label name='option2' class="form-control">Option 2</label>
					<input type="text" name='option2' class="form-control">

				</fieldset>
				<br>
				<fieldset>
					<label name='option2' class="form-control">Option 3</label>
					<input type="text" name='option3' class="form-control">

				</fieldset>
				<br>
				<fieldset>
					<label name='description' class="form-control">Description</label>
					<textarea name='description' class="form-control"></textarea>

				</fieldset>
				<br>
				<input type="submit" class="btn btn-primary" Value="submit">
			</form>
				
			</table>
		</div>
@endsection