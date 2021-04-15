@extends('Mentor.layout.mentor')
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
          <h3>Mentor Dashboard</h3>
        </div>
        <div class="clearfix"></div>
        <div class="bgcolor">
          <h2>Approved Students List</h2>

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
                                        <option value="2">Rejected</option>
                                    </select>
                             </div>
                             <button id="b1" type="button" class="btn btndone">Submit</button>
                            </div>
                          </div>
                      
                        </div>
                      </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                      <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Skill Name</th>
                        <th>More Action</th>
                      </tr>
                    </thead>
                    @if(count($rejected)>0)
            @foreach($rejected as $results)
                    <tbody>
                      <tr>
                        <td>{{$results->pk_id}}</td>
                        <td>{{$results->fname}} {{$results->lname}}</td>
                        <td>{{$results->username}}</td>
                        <td>{{$results->skill_name}}</td>
                        <td><a href="{{url('/')}}/mentor/student/approved/detail/{{$results->user_id}}">View Profile</a></td>
                      </tr>
                    </tbody>
                    @endforeach
            @endif
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