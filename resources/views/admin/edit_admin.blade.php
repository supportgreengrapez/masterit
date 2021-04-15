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
      <form method="post" action = "{{url('/')}}/edit/admin/form/{{$result[0]->pk_id}}" enctype="multipart/form-data">
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
                    <input   type="text" class="form-control formpad" name="fname" value="{{$result[0]->fname}}" placeholder="First Name">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Last Name</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input    type="text" class="form-control formpad" name="lname" value="{{$result[0]->lname}}" placeholder="Last Name">
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
                    <input   type="email" class="form-control formpad" name="username" value="{{$result[0]->username}}" placeholder="Email" readonly>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Telephone#</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fas fa-phone-volume" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input  type="tel" class="form-control formpad" name="phone" value="{{$result[0]->phone}}" placeholder="Phone No">
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
                    <input  type="text" class="form-control formpad" name="address" value="{{$result[0]->address}}" placeholder="Address">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="usr">Image</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fas fa-image" style="
    font-size: 18px;
    padding: 1px;
"></i></span>
                    <input  type="file" class="form-control formpad" name="file" value="{{url('/')}}/storage/images/{{$result[0]->image}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3>Permissions</h3>
                  @if($result[0]->adminmanagement == 1)
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="adminmanagement" value="1" checked>
                      Admin Management</label>
                  </div>
                  @else
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="adminmanagement" value="1">
                      Admin Management</label>
                  </div>
                  @endif
                  
                  @if($result[0]->manageapprovels == 1)
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="manageapprovels" value="1" checked>
                      Manage Permissions</label>
                  </div>
                  @else
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="manageapprovels" value="1">
                      Manage Permissions</label>
                  </div>
                  @endif
                  
                   @if($result[0]->mentormanagement == 1)
                   <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="mentormanagement" value="1" checked>
                      Mentor Management</label>
                      </div>
                      @else
                      
                  
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="mentormanagement" value="1">
                      Mentor Management</label>
                  </div>
                  @endif
                  
                  @if($result[0]->earnings == 1)
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="earnings" value="1" checked>
                      Earnings</label>
                      
                      
                      
                  </div>
                  @else
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="earnings" value="1">
                      MasterIT Earnings</label>
                  </div>
                  @endif
                  
                  @if($result[0]->settings == 1)
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="setting" value="1" checked>
                      Setting</label>
                      </div>
                      @else
                      
                  
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="setting" value="1">
                      Setting</label>
                  </div>
                  @endif

                  @if($result[0]->skill == 1)
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="skill" value="1" checked>
                      Skill Sets</label>
                  </div>
                      @else
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="skill" value="1">
                      Skill Sets</label>
                  </div>
                  @endif
                  @if($result[0]->student == 1)
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="student" value="1" checked>
                      Students</label>
                  </div>
                      @else
                  <div class="checkbox">
                    <label style="color:black !important;">
                      <input type="checkbox" name="student" value="1">
                      Students</label>
                  </div>
                  @endif
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