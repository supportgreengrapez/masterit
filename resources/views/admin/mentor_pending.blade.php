@extends('admin.layout.appadmin') 
<script>
  var OrgID=-1;
    function getId(id)
    {
       OrgID = id;
      return true;
    }
    function getreal()
    {
      alert(OrgID);
    }
  </script> 
@section('content') 

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <h3>Admin Dashboard</h3>
    </div>
    <div class="clearfix"></div>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog"> 
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Status Change</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Update Status</label>
              <select id="status" name="status" class="form-control">
                <option>Select status</option>
                <option value="4">Approved</option>
                <option value="3">Rejected</option>
              </select>
            </div>
            <button id="b1" type="button" class="btn btndone">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="bgcolor">
      <h2>Mentor Pending</h2>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Skill Set</th>
                    <th>Experince</th>
                    <th>Rate</th>
                    <th>Status</th>
                    <th>More Options</th>
                  </tr>
                </thead>
                
                <tbody>
                @if(count($pending)>0)
                @foreach($pending as $results)
                  <tr>
                    <td>{{$results->fname}} {{$results->lname}}</td>
                    <td>{{$results->username}}</td>
                    <td>{{$results->skill}}</td>
                    <td>{{$results->experince}}</td>
                    <td>{{$results->price}}</td>
                    <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-info" data-toggle="modal" data-target="#myModal">Pending</span></td>
                    <td><a href="{{url('/')}}/admin/pending/mentor/{{$results->pk_id}}">View</a></td>
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