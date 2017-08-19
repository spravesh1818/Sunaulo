@extends('admin_view.starter')
@section('title')
Edit Question	
@endsection

@section('main_header')
Edit Question
@endsection

@section('destination')
Edit Question
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
			{!!Form::model($quiz,['route'=>['quiz.update',$quiz->id],'method'=>'PUT','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;'])!!}

			<fieldset>
					<label name='question' class="form-control">Question</label>
					<textarea name='question' class="form-control">{{$quiz->question}}</textarea>

				</fieldset>
				<br>
				<fieldset>
					<label name='answer' class="form-control">Answer</label>
					<input type="text" name='answer' class="form-control" value={{$quiz->answer}}>

				</fieldset>	
				<br>
				<fieldset>
					<label name='option1' class="form-control">Option 1</label>
					<input type="text" name='option1' class="form-control" value={{$quiz->option1}}>

				</fieldset>
				<br>
				<fieldset>
					<label name='option2' class="form-control">Option 2</label>
					<input type="text" name='option2' class="form-control" value={{$quiz->option2}}>

				</fieldset>
				<br>
				<fieldset>
					<label name='option2' class="form-control">Option 3</label>
					<input type="text" name='option3' class="form-control" value={{$quiz->option3}}>

				</fieldset>
				<br>
				<fieldset>
					<label name='description' class="form-control">Description</label>
					<textarea name='description' class="form-control">{{$quiz->description}}</textarea>

				</fieldset>
				<br>
			{{Form::submit('Submit',array('class'=>'btn btn-success','style'=>'width:200px;margin-top:20px;'))}}
			{!!Form::close()!!}
				
			</table>
		</div>
@endsection