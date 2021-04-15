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
      <h2>Student Detail</h2>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                
                @if(count($result)>0)
                @foreach($result as $results)
                  <tr>
                    <td>{{$results->pk_id}}</td>
                    <td>{{$results->fname}} {{$results->lname}} </td>
                    <td>{{$results->username}}</td>
                    <td>{{$results->country}}</td>
                    <td><a href="{{url('/')}}/admin/student/view/{{$results->pk_id}}">View</a></td>
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