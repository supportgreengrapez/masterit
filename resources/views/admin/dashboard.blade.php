@extends('admin.layout.appadmin')
@section('content') 
<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-12 col-lg-offset-2">
        <h3>Admin Dashboard</h3>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6"> <a href="{{url('/')}}/create/admin" class="btnaddcard" style="float:right;margin-top:0px !important;">Create new Admin</a> </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="bgcolor">
    <h2></h2>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead style="color:#e42829;">
                <tr>
                  <th>Admin Name</th>
                  <th>Permissions</th>
                  <th>More Options</th>
                </tr>
              </thead>
              <tbody>
              @if(count($result)>0)
              @foreach($result as $results)
                <tr>
                  <td>{{$results->fname}} {{$results->lname}}</td>
                  <td><li style="list-style:none;"> @if($results->manageapprovels == 1)
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
                      @endif </li></td>
                  <td><a href="{{URL('/')}}/admin/view/{{$results->pk_id}}" >View Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{URL('/')}}/admin/delete/{{$results->pk_id}}" style="color:#e42829;">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/')}}/edit/admin/{{$results->pk_id}}" style="color:blue;">Edit</a></td>
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