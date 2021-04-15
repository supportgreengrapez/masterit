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
      @if(count($result)>0)
    @foreach($result as $results)
      <div class="x_content">
      <h2>Admin View</h2>
      <div class="row">
      	<div class="col-lg-4">
        <div class="x_panel">
          <div class="dbicons">
            <img src="{{URL('/')}}/storage/images/{{$results->image}}"  class="img-circle" alt="img">
           </div>
           </div>
        </div>
      	<div class="col-lg-8">
        <div class="x_panel">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
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
        <div class="col-lg-3 col-md-3 col-sm-12">
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
        <div class="col-lg-3 col-md-3 col-sm-12">
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
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="dbicons">
            <h4>Address</h4>
           </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="dbparahsss">
            <p>{{$results->address}}</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="dbicons">
            <h4>Permissions</h4>
           </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="dbparahsss">
            <p><li style="list-style:none;">
                       @if($results->manageapprovels == 1)
                        
                       <label class="label label-info"> Manage Approvels </label> 
                        @endif
                        
                        @if($results->mentormanagement == 1)
                        
                        
                        <label class="label label-info"> Mentor Management </label> 
                        @endif
                        
                        @if($results->earnings == 1)
                        
                        <label class="label label-info">MasterIT Earnings </label>  
                        @endif
                        

                        @if($results->settings == 1)
                        
                        <label class="label label-info">Setting</label>  
                        @endif

                        @if($results->skill == 1)
                        
                        <label class="label label-info">Skill Set </label>  
                        @endif

                        @if($results->student == 1)
                        
                        <label class="label label-info">Student Management </label>  
                        @endif
                      </li></p>
          </div>
        </div>
      </div>
      </div>
      
      </div>
      </div>
      </div>
      @endforeach
    @endif
      </div>
      </div>
    </div>
    <!-- /page content --> 
    @endsection