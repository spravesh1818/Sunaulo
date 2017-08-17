@extends('admin_view.starter')
@section('title')
Add Content
@endsection

@section('main_header')
Add Content
@endsection
@section('stylesheets')
<link rel="stylesheet" href={{asset('css/select2.min.css')}}>
@endsection

@section('destination')
Add Content
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

	<script src={{ URL::asset('ckeditor/ckeditor.js') }}></script>
	
	{!! Form::open(['route' => 'content.store','files'=>true,'style'=>'margin-left:100px;fontsize:35px;margin-top:20px;width:700px;']) !!}	
	{{Form::text('title',null,array('class'=>'form-control','id'=>'title','placeholder'=>'Title'))}}<br>


	<select name="category_id" class="form-control" style="width:200px">
		<option value="" disabled selected>Select your option</option>
		@foreach ($categories as $category)
		<option value="{{$category->id}}">{{$category->title}}</option>
		@endforeach
	</select><br>
	<label>Tags</label><br>
	<select name="tags[]" class="form-control select2-multi" multiple="multiple" style="width:200px">
		@foreach ($tags as $tag)
		<option value="{{$tag->id}}">{{$tag->name}}</option>
		@endforeach
	</select><br>

	<input type="text" name="author_id" style="display:none;" value={{auth()->user()->id}}>
	{{Form::label('image','Upload article display picture')}}
	{{Form::file('image',array('class'=>'form-control','accept'=>'image/*','style'=>'margin-bottom:20px;'))}}


	{{Form::textArea('content',null,array('class'=>'form-control ckeditor','id'=>'content','placeholder'=>'Text','id'=>'content','style'=>'width:200px;margin-top:20px;margin-left:100px;','required'))}}
	<script>
		CKEDITOR.on( 'instanceReady', function( ev ) {
     ev.editor.setData('<span style="font-size:18px;">&shy;</span>');});

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
} );
	</script>



	{{Form::label('file[]','Upload additional file(pdf,docx)')}}
	<input type="file" name="file[]" multiple="true">

	{{Form::submit('Submit',array('class'=>'btn btn-success','style'=>'width:200px;margin-top:20px;'))}}
	{!! Form::close() !!}
	

	<script type="text/javascript">
		function val(){
			var content=  CKEDITOR.instances.content.document.getBody().getText();
			var title=document.getElementById('title').value;
			var finalTitle=convert_to_unicode(title);
			var finalContent=convert_to_unicode(content);
			document.getElementById('title').value=finalTitle;
			CKEDITOR.instances['content'].setData(finalContent);
		}
	</script>

	

@endsection

@section('scripts')
<script src={{ URL::asset('js/select2.min.js') }}></script>
<script type="text/javascript">
		$(".select2-multi").select2();
</script>
@endsection