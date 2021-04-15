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
      <h2>Admin Create</h2>
      <div class="row">
      <form method="post" action = "{{url('/')}}/create/admin/form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($errors->any())

<div class="alert alert-danger">
  <strong>Danger!</strong> {{$errors->first()}}
</div>
@endif
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">First Name</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input   type="text" class="form-control formpad" name="fname" placeholder="First Name">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Last Name</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input    type="text" class="form-control formpad" name="lname" placeholder="Last Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Email</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fas fa-envelope" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input   type="email" class="form-control formpad" name="username" placeholder="Email">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Telephone#</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fas fa-phone-volume" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input  type="tel" class="form-control formpad" name="phone" placeholder="Phone No">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Password</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fas fa-key" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input    type="password" class="form-control formpad" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Confirm Password</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fas fa-key" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input    type="password" class="form-control formpad" name="cpassword" placeholder="Password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Address</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fas fa-home" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input  type="text" class="form-control formpad" name="address" placeholder="Address">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Image</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fas fa-image" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input  type="file" class="form-control formpad" name="file">
                    <!-- <input class="btn btn-primary"  type="file" name="images[]" multiple> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3>Permissions</h3>
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="adminmanagement" value="1">
                      Admin Management</label>
                  </div>
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="manageapprovels" value="1">
                      Manage Permissions</label>
                  </div>
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="mentormanagement" value="1">
                      Mentor Management</label>
                  </div>
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="earnings" value="1">
                      MasterIT Earnings</label>
                  </div>
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="setting" value="1">
                      Setting</label>
                  </div>
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="skill" value="1">
                      Skill Sets</label>
                  </div>
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="student" value="1">
                      Students</label>
                  </div>
                  
                  <button type="submit" class="btn btndone">Submit</button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 
@endsection 