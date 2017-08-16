@include('partials._head')
@include('partials._bootstrap')
@include('partials._header')
<div style="text-align:center;background:#b3ffb3;"  class="container">
	<h1>{{$questions->question}}</h1>
	<div>Posted by:{{$questions->name}}</div>
</div><br><br>


<h2 class="container" id="reply_label">Replies  <small>{{count($replies)}} replies</small></h2>
<hr>
<div class="container" id="reply_show">
@foreach($replies as $reply)
<ul class="list-group">
	<li class="list-group-item">Name:{{$reply->name}}</li>
	<li class="list-group-item">Reply:{{$reply->reply}}</li>
</ul>
@endforeach
<div class="paginate">{{$replies->links()}}</div>
</div><br><br>



<div id="reply_box"  class="container">
<form action="{{ route('reply.post') }}" method="post" id="reply_form">
    {{csrf_field()}}
    <input type="text" id="name" name="name" class="form-control" placeholder="name" /><br><br>
    <input type="email" id="email" name="email" class="form-control" placeholder="email" /><br><br>
    <textarea id="reply" name="reply" class="form-control" placeholder="Write something.." style="height:100px"></textarea>
    <select style="display:none;" id="question_id">
        <option value="{{$questions->id}}"></option>
    </select>
    <br><br>
    <input type="submit" value="Submit Reply" class="btn btn-success"/>
</form>
</div>


<script type="text/javascript">
    $(document).ready(function (){
                    console.log('Working');
                    var form=$('#reply_form');
                    form.submit(function(event)
                    {
                        var name=$('#name').val();
                        var reply=$('#reply').val();
                        var email=$('#email').val();
                        var question_id=$('#question_id').val();
                        var token=$('input[name=_token]').val();
                        console.log("Name:"+name);
                        console.log("Reply:"+reply);
                        console.log("Email:"+email);
                        console.log("Question_id:"+question_id);

                        $.ajax({
                            type:'POST',
                            url:'/reply',
                            data: {'name':name,'question_id':question_id,'email':email,'reply':reply,'_token':token},
                            success:function(data){
                                console.log(data);
                                $('#reply_box').hide();
                                $('#reply_show').load(location.href+' #reply_show');
                                $('#reply_label').load(location.href+' #reply_label');
                            },
                            error:function(){
                                alert('comment could not be posted');
                            }
                        });



                        event.preventDefault();
                    });
                });

</script>

@include('partials._footer')