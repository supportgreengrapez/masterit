@extends('Student.layout.student')
@section('content')
<div class="container">
  
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12"> 
    	<div class="tab">
        	<img src="images/audio.png" alt="audio">
            <h4>Audio Message Review</h4>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"> 
    	<div class="tab" id="tab">
        	<img src="images/chat.png" alt="audio">
            <h4>Text Message Review</h4>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"> 
    	<div class="tab">
        	<img src="images/video.png" alt="audio">
            <h4>Video Message Review</h4>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="headingsd2">
        <h2>One Time Message Review</h2>
      </div>
    </div>
  </div>
  
  <div class="row">
  	<div class="col-lg-8 col-md-8 col-sm-12 col-xs12">
    	<div class="">
        <form  method="post" action = "{{url('/')}}/student/message/reviews/{{$id}}/{{$skills}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if(count($result)>0)
                @foreach($result as $results)
        <div class="form-group">
                  <label>Mentor Name</label>
                  <input type="text" class="form-control blueborder" name="mname" value="{{$results->fname}} {{$results->lname}}" readonly>
                </div>
                
                <div class="form-group">
                  <label>Skill</label>
                  <input type="text" class="form-control blueborder" name="skill" value="{{$skills}}" readonly>
                </div>
                <div class="form-group">
                  <label>Question</label>
                  <textarea class="form-control" rows="9" name="question" maxlength="999"></textarea>
                  <span style="float:right;color:red;">*Maximum Character 1000</span>
                </div>
                <div class="form-group">
                <button  type="submit" class="button">Ask your Question</button>
                </div>
                @endforeach
                @endif
        </form>
        </div>
    </div>
    
  	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    	<div class="form-group">
                  <label style="color:red;">*Note</label>
                </div>
                <div class="tip">
                <h4 class="border_bottom">Ask a specific question</h4><h4  class="border_bottom">Be brief and to the point</h4><h4>Stay focus on single topic</h4>
                </div>
    </div>
  </div>
</div>
@endsection