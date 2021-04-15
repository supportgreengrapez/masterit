@extends('Student.layout.student')
@section('content')
<section style="background:#efefe9;">
  <div class="container">
    <div class="row">
      <div class="board"> 
        <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
        <div class="board-inner">
          <ul class="nav nav-tabs" id="myTab">
            <div class="liner"></div>
            <li> <a href="#home" data-toggle="tab" title="Audio Message Review"> <span class="round-tabs one"> <i class="glyphicon glyphicon-headphones"></i> </span> </a></li>
            <li   class="active"><a href="#profile" data-toggle="tab" title="Text Message Review"> <span class="round-tabs two"> <i class="glyphicon glyphicon-envelope"></i> </span> </a> </li>
            <li><a href="#messages" data-toggle="tab" title="Video Message Review"> <span class="round-tabs three"> <i class="glyphicon glyphicon-facetime-video"></i> </span> </a> </li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade" id="home">
            <h3 class="head text-center">Audio Message Review</h3>
          </div>
          <div class="tab-pane fade in active" id="profile">
              
            <h3 class="head text-center">Text Message Review</h3>
              
              <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#homes">Questions</a></li>
  <li><a data-toggle="tab" href="#menu1">Answered</a></li>
</ul>

<div class="tab-content">
  <div id="homes" class="tab-pane fade in active">
    
     @if(count($result1)>0)
            @foreach($result1 as $results)
            
            @php
               
               
                $mentor = DB::select("select * from signup where pk_id= '$results->mentor_id'");
             
                @endphp
<div class="question">
                      <h3>{{$results->question}}</h3>
                    </div>
            <div class="detail" style="float:left">
              <h4>Mentor :<span>{{$mentor[0]->fname}} {{$mentor[0]->lname}}</span></h4>
              <h4>Skill :<span>{{$skills}}</span></h4>
            </div>
            <div class="detail" style="float:right">
              <h4><span>{{$results->created_at}}</span></h4>
            </div>
                  @endforeach
            @endif
    
  </div>
  <div id="menu1" class="tab-pane fade">

    
     @if(count($result)>0)
            @foreach($result as $results)
<div class="question">
                      <h3>{{$results->question}}</h3>
                    </div>
                    <div class="answerd">
                      <p>{{$results->answered}}</p>
                    </div>
            <div class="detail" style="float:left">
              <h4>Mentor :<span>{{$results->fname}} {{$results->lname}}</span></h4>
              <h4>Skill :<span>{{$skills}}</span></h4>
            </div>
            <div class="detail" style="float:right">
              <h4><span>{{$results->created_at}}</span></h4>
            </div>
                  @endforeach
            @endif
  </div>
</div>
              
           
          </div>
          <div class="tab-pane fade" id="messages">
            <h3 class="head text-center">Vedio Message Review</h3>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection