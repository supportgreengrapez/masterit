@extends('Mentor.layout.mentor')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="clearfix"></div>
        <div class="bgcolor">
          <h2>Add Education</h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                <form method="post" action = "{{url('/')}}/mentor/add/educations" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="wrap">
                    <div class="form-group">
                      <label>School <span class="red">*</span></label>
                      <input type="text" class="form-control blueborder" name="school" required>
                    </div>
                    <div class="form-group">
                      <label>Start Date <span class="red">*</span></label>
                      <input type="date" class="form-control blueborder" name="start" required>
                    </div>
                    <div class="form-group">
                      <label>End Date <span class="red">*</span></label>
                      <input type="date" class="form-control blueborder" name="end" required>
                    </div>
                    <div class="form-group">
                      <label>Degree <span class="red">*</span></label>
                      <input type="text" class="form-control blueborder" name="degree" required>
                    </div>
                    <div class="form-group">
                      <label>Area of Study</label>
                      <input type="text" class="form-control blueborder" name="area_study">
                    </div>
                    <button  type="submit" class="btn btnpaymentmethod">Add</button>
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