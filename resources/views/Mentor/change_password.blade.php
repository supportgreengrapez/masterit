@extends('Mentor.layout.mentor')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <h3>Change Password</h3>
        </div>
        <div class="clearfix"></div>
        <div class="bgcolor">
          <h2>Edit Profile</h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                <form method="post" action = "{{url('/')}}/edit/mentor/password/{{ Session()->get('id')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="wrap">
                  @if($errors->any())

<div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
@endif
                    <div class="form-group">
                      <label>New Password</label>
                      <input type="password" class="form-control formpad" name="password" placeholder="Create a Password">
              
                
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" class="form-control formpad" name="cpassword" placeholder="Confirm Password">
              
                    </div>
                    <button  type="submit" class="btn btnaddcard">Edit Password</button>
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