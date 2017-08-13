@extends('admin_view.starter')
@section('title')
Add New Tag
@endsection

@section('main_header')
Add New Tag
@endsection

@section('destination')
Add Tag
@endsection


@section('content')

	@if(count($errors)>0)
		<ul class="alert alert-danger alert-dismissable" style="margin-left:100px;fontsize:35px;margin-top:20px;width:700px;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
		</ul>
	@endif

			{!! Form::open(['route' => 'tag.store','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;']) !!}	
			{{Form::text('name',null,array('class'=>'form-control','id'=>'title','placeholder'=>'Tag Name
','style'=>'font-size:25px;'))}}<br>

			{{Form::submit('Submit',array('class'=>'btn btn-success','style'=>'width:200px;margin-top:20px;'))}}
			{!! Form::close() !!}
				
			</table>
		</div>
@endsection