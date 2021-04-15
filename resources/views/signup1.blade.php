@extends('layout.appclient')
@section('content')
<div class="bgmentorsign">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3">
      <form method="post" action = "{{url('/')}}/signin" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($errors->any())

<div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
@endif
          <div class="bgmentorsign2">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-user mentsignicons"></i></span>
                  <input   type="text" class="form-control formpad" name="fname" value="" placeholder="First Name" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-user mentsignicons"></i></span>
                  <input   type="text" class="form-control formpad" name="lname" value="" placeholder="Last Name" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-envelope mentsignicons"></i></span>
                  <input type="text" class="form-control formpad" name="username" value="" placeholder="Email Address" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="submitbutton">
                  <button type="submit" class="btn submitbtn  btn-responsive"  aria-expanded="false">Get Started</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection