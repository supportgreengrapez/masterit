@extends('admin.layout.appadmin') 
@section('content') 
    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          
            <h3>Admin Dashboard</h3>
          
        </div>
        <div class="clearfix"></div>
        
        
        
         <div class="bgcolor">
         <h2>Mentor Earning</h2>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Mentor Name</th>
                      <th>Student Name</th>
                      <th>Review Type</th>
                      <th>Skill</th>
                      <th>Date</th>
                      <th>Student Pay</th>
                      <th>Review Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($result4)>0)
                @foreach($result4 as $results)
                
                @php
               
               
                $student = DB::select("select * from signup where pk_id= '$results->student_id'");
             
                @endphp
                    <tr>
                      <td>{{$results->fname}} {{$results->lname}}</td>
                      
                      <td>{{$student[0]->fname}} {{$student[0]->lname}}</td>
                      
                      <td>{{$results->review_type}}</td>
                      
                    <td><label class="label label-success">{{$results->skill_name}}</label></td>
                      <td>{{ Carbon\Carbon::parse($results->created_at)->format('d-m-y')}}</td>
                      <td>${{$results->fee}}</td>
                      
                      @if($results->review_type == 'Chat Review')
                      <td><a href="{{URL('/')}}/admin/review/detail/{{$results->pk_id}}">View Detail</a></td>
                      
                      @else
                      <td>No Detail</td>
                      
                      @endif
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
    </div>
    <!-- /page content --> 
    
  @endsection 