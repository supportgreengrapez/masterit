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
         <h2>Skill Set</h2>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
              <form method="post" action = "{{url('/')}}/admin/create/skill/form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($errors->any())

<div class="alert alert-danger">
  <strong>Danger!</strong> {{$errors->first()}}
</div>
@endif
                  <div class="wrap">
                    <div class="form-group">
                      <label>Icon</label>
                      <input type="file" class="form-control blueborder" placeholder="" name="file" required> 
                    </div>
                    <div class="form-group">
                      <label>Skill Name</label>
                      <input type="text" class="form-control blueborder" placeholder="" name="sname" required>
                    </div>
                    <button  type="submit" class="btn btnaddcard">Add Skill</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
         </div>
      </div>
    </div>
    <!-- /page content --> 
    @endsection