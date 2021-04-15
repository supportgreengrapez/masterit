@extends('Student.layout.student')
@section('content')
<div class="bgcolor">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="headingsd1">
          <h2>Edit Password</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">
          <div class="x_content">
          <form method="post" action="{{url('/')}}/edit/student/password/{{Session()->get('id')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                           
              <div class="wrap">
              @if($errors->any())

<div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
@endif
                <div class="form-group">
                  <label>New Password</label>
                  <input   type="password" class="form-control formpad" name="password" placeholder="Create a Password">
              
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input  type="password" class="form-control formpad" name="cpassword" placeholder="Confirm Password">
              </div>
                <button  type="submit" class="button">Edit Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection