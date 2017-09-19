@include('partials._head')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@include('partials._header')
<div style="text-align:center;background:#b3ffb3;"  class="container">
	<h2>{{$questions->question}}</h2>
	<div>Posted by:{{$questions->name}}</div>
</div><br><br>


<h2 class="container" id="reply_label" style="padding-left: 2.5%;">प्रतिक्रियाहरु  <small>{{count($replies)}} </small></h2>
<hr>
<div class="container" id="reply_show" style="padding-left: 2.5%;">
@foreach($replies as $reply)
<ul class="list-group" >
	<li class="list-group-item">     नाम :  {{$reply->name}}</li>
	<h3><li class="list-group-item">     प्रतिक्रिया :  {{$reply->reply}}</li></h3>
</ul>
@endforeach
<div class="paginate">{{$replies->links()}}</div>
</div><br><br>



<div id="reply_box"  class="container" style="padding-left: 2.5%;">
<form action="{{ route('reply.post') }}" method="post" id="reply_form">
    {{csrf_field()}}
    <input type="text" id="name" name="name" class="form-control" placeholder="नाम" style="width: 40%;"/><br><br>
    <input type="email" id="email" name="email" class="form-control" placeholder="इमेल" style="width: 40%;"/><br><br>
    <textarea id="reply" name="reply" class="form-control" placeholder="आफ्नो विचार व्यक्त गर्नुहोस... " style="height:100px;width:40%"></textarea>
    <input type="text" name="question_id" id="question_id" value="{{$questions->id}}" style="display:none">
    <br><br>
    <input type="submit" value="पेस गर्नुहोस " class="btn btn-success"/>
</form>
</div>


<script type="text/javascript">
                $(document).ready(function (){
                    var form=$('#reply_form');
                    form.submit(function(event)
                    {
                        var name=$('#name').val();
                        var email=$('#email').val();
                        var reply=$('#reply').val();
                        var question_id=$('#question_id').val();
                        var token=$('input[name=_token]').val();
                        event.preventDefault();
                        $.ajax({
                            type:'POST',
                            url:'/reply',
                            data: {'name':name,'email':email,'reply':reply,'question_id':question_id,'_token':token},
                            success:function(data){
                                //call ajax get request for all the comment
                                console.log(data);
                                $('#reply_form').hide();
                                $('#reply_show').load(location.href+' #reply_show');
                                $('#reply_label').load(location.href+' #reply_label');
                            },
                            error:function(){
                                alert('comment could not be posted');
                            }
                        });


                        
                    });
                });

            </script>

@include('partials._footer')