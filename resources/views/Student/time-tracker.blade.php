@extends('Student.layout.student')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <div class="trackpagehead1">
        <h3>{{$skills}}</h3>
      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <form method="post" action = "{{url('/')}}/student/time/trackers/{{$id}}/{{$skills}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" value="" id="counter" name="counter" />
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group top">
              <input type="text" name="description" placeholder="Description" class="form-control" />
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="Tracktime">
              <div class="text-center">
                <h1>
                  <time>00:00:00</time>
                </h1>
              </div>
            </div>
          </div>
          <div class="col-lg-1 col-sm-12 col-xs-12">
            <div class="playbutton"> 
            <a  class="btn btn-light resetbutton" id="start"><i class="fa fa-play" aria-hidden="true"></i></a> 
            <button type="submit" class="btn btn-light resetbutton" id="stop" style="display:none;"><i class="fa fa-pause" aria-hidden="true"></i></button>
            </div>
          </div>
          
          
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="trackpagesidepad">
        <div class="member-left-side">
          <div class="member-agent-content"> @if(count($result)>0)
            
            
            @php
            $first = '0';
            @endphp
            @if($result[0]->fname !== $first)
            @php
            $first = $result[0]->fname;
            @endphp
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="text-center"><img src="{{URL('/')}}/storage/images/{{$result[0]->image}}" class="img-circle" alt="image" class="img-cust-responsive" style="width:85px;"></div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="member-agent-text">
                  <a href="{{URL('/')}}/select/mentor/view/{{$result[0]->pk_id}}/{{$skills}}"><h1>{{$result[0]->fname}} {{$result[0]->lname}}</h1></a>
                  <button type="button" class="button2" data-toggle="modal" data-target="#myModal">Rate Me</button>
                </div>
              </div>
            </div>
            @endif
            @endif </div>
          <div class="member-agent-text">
            <h1><a href="{{URL('/')}}/select/mentor/{{$skills}}">Switch Mentor</a></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="monthlynoteshead">
              <button type="button" class="button" data-toggle="modal" data-target="#myModal{{ Session()->get('id')}}">Add Notes</button>
              <br>
            </div>
            <div id="myModal{{ Session()->get('id')}}" class="modal fade" role="dialog">
        <div class="modal-dialog"> 
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Notes</h4>
            </div>
            <div class="modal-body">
              <form  method="post" action = "{{url('/')}}/student/notes/{{ Session()->get('id')}}/{{$skills}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
              <div class="">
              <div class="form-group">
                  <label>Heading</label>
                  <input type="date" class="form-control formpad" name="heading" placeholder="Heading">
                </div>
                <div class="form-group">
                  <label>Notes</label>
                  <textarea class="form-control formpad" name="description" placeholder="Notes" rows="9"></textarea>
                </div>
                <div class="rating">
                  <button type="submit" class="button">Submit</button>
                </div>
              </div>
</form>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
        
        @if(count($note)>0)
          @foreach($note as $results)
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="monthlynotes">
              <h4>{{ Carbon\Carbon::parse($results->header)->format('M-d-Y')}}</h4>
              <p>{{$results->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
          @endif

          <div class="row">

        <div class="col-lg-12">
        <div class="trackpagebottombtn">
        @if(count($result)>0)
        <a type="button" href="{{url('/')}}/student/chat/review/{{$result[0]->pk_id}}/{{$skills}}" class="button2">Messages</a>
        @endif  
      </div>
        </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="trackpagebtn2"> <a href="{{url('/')}}/student/skill" class="button">Add a new Skillset / Remove Skillset</a> </div>
        </div>
      </div>
      <div class="trackpagesidepad2">
        <div class="row"> @if(count($time)>0)
          @foreach($time as $results)
          <div class="colorpad">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="coursename"> <span>{{ Carbon\Carbon::parse($results->created_at)->format('M-d-Y')}}</span>
                <h4>{{$results->skill}} <span style="color:black;">( {{$results->description}} )</span></h4>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="timedate"> <span>{{$results->time}}</span> 
                <!--<h6>12:30 PM-01:30 PM</h6> </div>--> 
              </div>
            </div>
          </div>
          @endforeach
          @endif </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="trackpagebottombtn">
            @if(count($result)>0)
              <a type="button" href="{{url('/')}}/student/contact/{{$result[0]->pk_id}}/{{$skills}}" class="button2">Contact with Mentor</a>
              
              @endif
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog"> 
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Rate Mentor</h4>
            </div>
            <div class="modal-body">
              <div class="wrap">
                <fieldset class="rating" >
                  <input type="radio" id="star5" name="rating" value="5" />
                  <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" />
                  <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" />
                  <label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" />
                  <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" required/>
                  <label class = "full" for="star1" title="Sucks big time - 1 star" ></label>
                </fieldset>
                <br>
                <div class="rating">
                  <button type="submit"  class="button">Rate</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection