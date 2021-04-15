


@extends('layout.appclient')
@section('content')
<div class="bgmentorsign">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3">
      <form method="post" action = "{{url('/')}}/password/change/{{$username}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                           
          <div class="bgmentorsign2">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              @if($errors->any())

<div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
@endif
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
              <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-key mentsignicons"></i></span>
                <input   type="password" class="form-control formpad" name="password" value="" placeholder="Enter Your New Password">
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="submitbutton">
                  <button type="submit" class="btn submitbtn  btn-responsive"  aria-expanded="false">Reset</button>
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