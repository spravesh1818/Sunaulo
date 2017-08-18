@extends('admin_view.starter')
@section('title')
Add Quizzes
@endsection

@section('main_header')
Add Quizzes
@endsection

@section('destination')
Add Quizzes
@endsection

@section('content')
<button type="button" class="btn btn-info btn-md" data-toggle="modal" style="margin-left:20px;" data-target="#myModal">Create A Quiz</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:800px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Quiz Description</h4>
      </div>
      <div class="modal-body">
        <form method="post" action={{ route('quiz.storeq')}}>
        {{csrf_field()}}
        <table class='table'>
		<tr>
			<th>#</th>
			<th>Question</th>
			<th>Answer</th>
			<th>Option 1</th>
			<th>Option 2</th>
			<th>Option 3</th>
			<th>Description</th>
		</tr>
        	<input type="text" name="quizname"class='form-control' placeholder="quizname">

        	@foreach($quiz as $quiz)
        	<tr>
        	<th><input type="checkbox" name="checkbox[]" value="{{$quiz->id}}">{{$quiz->id}}</th>
			<td>{{$quiz->question}}</td>
			<td>{{$quiz->answer}}</td>
			<td>{{$quiz->option1}}</td>
			<td>{{$quiz->option2}}</td>
			<td>{{$quiz->option3}}</td>
			<td>{!!substr($quiz->description,0,10)!!}</td>
		</tr>
		@endforeach
	</table> 
      </div>
      <div class="modal-footer">
      	<input type="submit" name="submit" value="Submit" class="btn btn-success">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
       </form>
    </div>
    <!--Modal-->
  </div>
    </div>
<div class='container'>
  <table class='table'>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Date of Post</th>
      <th>Actions</th>
    </tr>
    @php
      $quizzes=$quizzes->sortByDesc('created_at');
    @endphp

    @foreach ($quizzes as $quiz)
    <tr>
      <th>{{$quiz->id}}</th>
      <td>{{$quiz->quizName}}</td>
      <td>{{date('F d, Y', strtotime($quiz->created_at))}}</td>
      <td>
        {!!Form::open(['route'=>['quiz.destroyq',$quiz->id],'method'=>'delete'])!!}
        {{Form::submit('Delete',array('class'=>'btn btn-primary'))}}
        {!!Form::close()!!}</td>
    </tr>
    @endforeach
  </table>
</div>

</div>



@endsection