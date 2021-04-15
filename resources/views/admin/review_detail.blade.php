@extends('admin.layout.appadmin') 
@section('content') 
<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3>Admin Dashboard</h3>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="bgcolor">
    <h2>Text Message Review</h2>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="board">
              <div class="board-inner">
                <ul class="nav nav-tabs" id="myTab">
                  <div class="liner"></div>
                  <li  class="active"> <a href="#home" data-toggle="tab" title="New Text Message Review"> <span class="round-tabs one"> <i>New</i> </span> </a></li>
                  <li><a href="#profile" data-toggle="tab" title="Answered Text Message Review"> <span class="round-tabs two"> <i>Old</i> </span> </a> </li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                  <h3 class="head text-center">New Messages</h3>
                  @if(count($result)>0)
            @foreach($result as $results)
            
            @php
               
               
                $mentor = DB::select("select * from signup where pk_id= '$results->mentor_id'");
             
                @endphp
                  <div class="x_panel">
                      
                      <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Mentor Name</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <p>{{$mentor[0]->fname}} {{$mentor[0]->lname}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Student Name</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <p>{{$results->fname}} {{$results->lname}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Skill</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <p>{{$results->skill_name}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Amount Pay</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <p>$ {{$results->fee}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Question</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <h5>{{$results->question}}</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
            @endif
                </div>
                <div class="tab-pane fade" id="profile">
                  <h3 class="head text-center">Text Message Review</h3>
                  @if(count($result1)>0)
            @foreach($result1 as $resultss)
            @php
$questionss = $resultss->pk_id;
$answer= DB::select("select* from answered_review where question_id='$questionss'");

               
               
                $mentor = DB::select("select * from signup where pk_id= '$results->mentor_id'");
             
                
@endphp
@if(count($answer)>0)

                  <div class="x_panel">
                      <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Mentor Name</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <p>{{$mentor[0]->fname}} {{$mentor[0]->lname}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Student Name</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <p>{{$resultss->fname}} {{$resultss->lname}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Skill</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <p>{{$resultss->skill_name}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="dbicons">
                          <h4>Amount Pay</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="dbparahsss">
                          <p>$ {{$resultss->fee}}</p>
                        </div>
                      </div>
                    </div>

      


            <div class="question">
                      <h3>{{$resultss->question}}</h3>
                    </div>
                    @if(count($answer)>0)
            @foreach($answer as $answers)
                    <div class="answerd">
                      <p>{{$answers->answered}}</p>
                    </div>
                    @endforeach
            @endif
           
                 
                    <div class="clearfix"></div>
                  </div>
                  @endif
                  @endforeach
            @endif
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 
  @endsection