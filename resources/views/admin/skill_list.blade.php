@extends('admin.layout.appadmin')
@section('content') 
<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-12 col-lg-offset-2">
        <h3>Admin Dashboard</h3>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6"> <a href="{{url('/')}}/admin/create/skill" class="btnaddcard" style="float:right;margin-top:0px !important;">Create new Skill</a> </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="bgcolor">
    <h2>Skills</h2>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead style="color:#e42829;">
                <tr>
                  <th>Skill</th>
                  <th>Icon</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @if(count($result)>0)
              @foreach($result as $results)
                <tr>
                  <td>{{$results->sname}}</td>
                  <td><img src="{{URL('/')}}/storage/images/{{$results->image}}" style="width:100px;height:70px;" alt="image"></td>
                  <td><a href="{{URL('/')}}/admin/delete/skill/{{$results->pk_id}}" style="color:#e42829;">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/')}}/admin/edit/skill/{{$results->pk_id}}" style="color:blue;">Edit</a></td>
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