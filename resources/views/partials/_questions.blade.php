<style>input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.button {
    background-color: #f44336; /* Green */
    border: none;
    color: white;
    width: 200px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.contentbox {
    background-color: lightgrey;
    width: 80%;
    
    padding: 10px;
    margin: 10px;
}
</style>
<input type="button" class="button"  value="Ask Question" onclick="showDiv()" style="margin-left:20px"/>
<div id="welcomeDiv"  style="display:none;" class="answer_list"  style="margin-left:20px">
<input class="button" type="button"  value="Asked Question" onclick="hideDiv()" style="margin-left:20px" />
<div class="container" style="margin-left:20px">
  <form method="post" id="question_form" action="{{ route('postQuestion') }}" >
  {{csrf_field()}}
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="subject">Write Your Question</label>
    <textarea id="question" name="question" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</div>
</div>
<script type="text/javascript">
function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
   $("p").remove();
}
function hideDiv() {
   document.getElementById('welcomeDiv').style.display = "none";
}
</script>
<div id="show_questions" style="margin-left:20px">
<h1><strong>Recently Asked Questions</strong></h1>
@foreach($questions as $question)
<div class="contentbox">
<h2>{{$question->name}}</h2>
<h3>{{$question->question}}</h3>
<a href="{{ route('question.thread',$question->id) }}">Open Discussion</a>
</div>
@endforeach
</div>


<script type="text/javascript">
    $(document).ready(function (){
                    console.log('Working');
                    var form=$('#question_form');
                    form.submit(function(event)
                    {
                        var name=$('#fname').val();
                        
                        var question=$('#question').val();
                        console.log(name);
                        console.log(question);
                        var token=$('input[name=_token]').val()
                        $.ajax({
                            type:'POST',
                            url:'/questionP',
                            data: {'name':name,'question':question,'_token':token},
                            success:function(data){
                                console.log(data);
                                $('#question_form').hide();
                                $('#show_questions').load(location.href+' #show_questions');
                            },
                            error:function(){
                                alert('comment could not be posted');
                            }
                        });


                        event.preventDefault();
                    });
                });

</script>