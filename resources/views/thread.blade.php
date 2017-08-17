@include('partials._head')
@include('partials._bootstrap')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
	<li class="list-group-item">Name :  {{$reply->name}}</li>
	<li class="list-group-item">Reply :  {{$reply->reply}}</li>
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
    <input type="text" name="question_id" id="question_id" value="{{$questions->id}}" style="display:none">
    <br><br>
    <input type="submit" value="Submit Reply" class="btn btn-success"/>
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
                            },
                            error:function(){
                                alert('comment could not be posted');
                            }
                        });


                        
                    });
                });

            </script>

@include('partials._footer')