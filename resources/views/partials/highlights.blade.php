<div class="col-8" >
  @php
    $i=0;
  @endphp
  @foreach($articles as $article)
   @if($article->category->title==="जिज्ञासा र खुल्दुली")
  @else
  @if($i<=2) 
  <h2 class="box_header_title">
 
  @if(!empty($article->image))
            <a href="{{ route('view',$article->id) }}" title={{$article->title}}>
<!-- Image of latest Post--><img width="1280" height="720" class="vid1" src='{{ asset('uploads/'.$article->image) }}' />
              </a>
              <br>

  @elseif(!empty($article->video_url))
  @php
    $url = $article->video_url;
      preg_match(
              '/[\\?\\&]v=([^\\?\\&]+)/',
              $url,
              $matches
          );
      $id = $matches[1];
       
      
      echo '<iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $id . '"frameborder="0" allowfullscreen class="vid1"></iframe>';
  @endphp
  @endif
  <br>
  <a href="{{ route('view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a> </h2>
  @endif  
  @php
    $i=$i+1;
  @endphp
  @endif
  @endforeach
</div>
<div class="col-3 right" style="padding-top: 10px;">
 <div>
    <h4 class="box_header"> खुल्दुली </h4>
    <ul>
    @php
      $numofkhulduli=0;
    @endphp
    @foreach($articles as $article)
      @if($article->category->title==='जिज्ञासा र खुल्दुली')    
        @php
          $numofkhulduli++;
        @endphp
      @endif
    @endforeach
    
    @php
    $n=0;
    @endphp
    @foreach($articles as $article)
      @if($article->category->title==='जिज्ञासा र खुल्दुली')    
      @if($n<=4)
       <li class="post"><div class="post_content"><h5><a href="/test?page={{$numofkhulduli}}"> {{$article->title}}</a></h5></div></li>
       <br>
        @php
          $n=$n+1;  
          $numofkhulduli--;
        @endphp
      @endif   
      @endif
       
    @endforeach
    
 </div>
</div>
