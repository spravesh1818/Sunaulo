@extends('admin_view.starter')
@section('title')
Edit Content
@endsection

@section('main_header')
Edit Content
@endsection

@section('stylesheets')
<link rel="stylesheet" href={{asset('css/select2.min.css')}}>
@endsection

@section('destination')
Edit content
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
	<script src={{ URL::asset('ckeditor/ckeditor.js') }}></script>
	{!!Form::model($articles,['route'=>['content.update',$articles->id],'method'=>'PUT','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;'])!!}
	{{Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title','style'=>'width:200px;margin-top:20px','required'))}}<br>
	
	{{Form::select('category_id',$categories,null,['class'=>'form-control'])}}<br>

	{{Form::select('tags[]',$tags,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}
	<br>
	<br>
	<input type="checkbox"   name="editors_choice" value=1>Editor's Choice Article<br><br>
	{{Form::label('image','Upload article display picture')}}
	{{Form::file('image',array('class'=>'form-control','style'=>'margin-bottom:20px;'))}}

	<input type="text" name="author_id" style="display:none;" value={{auth()->user()->id}}>

	{{Form::textarea('content',null,array('class'=>'form-control','placeholder'=>'Text','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}



	
	<script>
	CKEDITOR.addCss( "@font-face {" +
		  "font-family: 'Preeti';" +
		  "font-style: normal;" +
		  "font-weight: 400;" +
		  "src: local('Preeti'), url({{ URL::asset('css/myFont.css')}}) format('truetype');" +
				"}" );

			CKEDITOR.replace( 'content', {
   			 on: {
       		 configLoaded: function() {
             this.config.font_names += ';Preeti';
        	}
    	}
		}	);
	</script>
	{{Form::submit('Submit',array('class'=>'btn btn-success','style'=>'width:200px;margin-top:20px;'))}}
	{!!Form::close()!!}
@endsection

@section('scripts')
<script src={{ URL::asset('js/select2.min.js') }}></script>
<script type="text/javascript">
		$(".select2-multi").select2();
</script>

@endsection


