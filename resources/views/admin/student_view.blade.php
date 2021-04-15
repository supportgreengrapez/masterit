@extends('admin.layout.appadmin')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="page-title">
        <h3>Admin Dashboard</h3>
      </div>
      <div class="clearfix"></div>
      <div class="bgcolor">
        <div class="x_panel">
          <div class="x_content">
            <h2>Student View</h2>
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
                        <h4>Skill Set</h4>
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
                        <h4>School</h4>
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
                        <h4>Start Date</h4>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <div class="dbparahsss">
                        <p>{{ Carbon\Carbon::parse($results->start)->format('d-m-y')}}</p>
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
                        <p>{{ Carbon\Carbon::parse($results->end)->format('d-m-y')}}</p>
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
            <div class="row">
            <div class="col-lg-12">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                    <th>PKG ID</th>
                    <th>Skill Set</th>
                      <th>Mentor Name</th>
                      <th>Review Type</th>
                      <th>Date</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if(count($result4)>0)
                @foreach($result4 as $results)
                
                 
                    <tr>
                    <td>{{$results->pk_id}}</td>
                    <td><label class="label label-success">{{$results->skill_name}}</label></td>
                      <td>{{$results->fname}} {{$results->lname}}</td>
                      <td>{{$results->review_type}}</td>
                      <td>{{ Carbon\Carbon::parse($results->created_at)->format('d-m-y')}}</td>
                      <td>${{$results->fee}}</td>
                    </tr>
                    @endforeach
                @endif
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
    
    @endsection