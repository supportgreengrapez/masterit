@extends('Mentor.layout.mentor')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="page-title">
        <h3>Mentor Dashboard</h3>
      </div>
      <div class="clearfix"></div>
      <div class="bgcolor">
        <div class="x_panel">
          <div class="x_content">
            <h2>Rejected Student View</h2>
            <div class="row">
              <div class="col-lg-4">
              @if(count($result2)>0)
                @foreach($result2 as $results)
                <div class="x_panel">
                  <div class="dbicons"> <img src="{{URL('/')}}/storage/images/{{$results->image}}" class="img-circle" alt="img"><br>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                </div>
                @endforeach
                @endif
              </div>
              <div class="col-lg-8">
              @if(count($result)>0)
                @foreach($result as $results)
                <div class="x_panel">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>First Name</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->fname}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>Last Name</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->lname}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>Email</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->username}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>Country</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->country}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif

                @if(count($result2)>0)
                @foreach($result2 as $results)
                <div class="x_panel">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>Interest</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->skill}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif

                @if(count($result3)>0)
                @foreach($result3 as $results)
                <div class="x_panel">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>Institue</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->school}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>Degree</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->degree}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>Start Date</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->start}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>End Date</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->end}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="dbicons">
                        <h4>Area of Study</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{$results->area_study}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
    @endsection