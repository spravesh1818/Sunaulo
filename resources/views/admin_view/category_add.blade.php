@extends('admin_view.starter')
@section('title')
Add New Category
@endsection

@section('main_header')
Add New Category
@endsection

@section('destination')
Add Category
@endsection


@section('content')
			{!! Form::open(['route' => 'category.store','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;']) !!}	
			{{Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title'))}}<br>

			{{Form::submit('Submit',array('class'=>'btn btn-success','style'=>'width:200px;margin-top:20px;'))}}
			{!! Form::close() !!}
				
			</table>
		</div>
@endsection