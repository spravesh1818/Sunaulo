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
					<label name='option2' class="form-control">Answer</label>
					<input type="text" name='option2' class="form-control">

				</fieldset>
				<br>
				<fieldset>
					<label name='option2' class="form-control">Answer</label>
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