@extends('layout.appclient')
@section('content')
<div class="bgmentorsign">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3">
      <form method="post" action = "{{url('/')}}/educations" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
          <div class="bgmentorsign2">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <label>Name of Institute <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-building mentsignicons"></i></span>
                  <input   type="text" class="form-control formpad" name="school[]" value="" placeholder="School Name" required>
                </div>
              </div>
              
            </div>
            <div class="row">
                <div class="col-lg-12">

                <label>Dates Attended <span class="red">*</span></label>
                </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group top"> <span class="input-group-addon"><i class="far fa-clock mentsignicons"></i></span>
                  <input   type="date" class="form-control formpad" name="start[]" value="" placeholder="Start Date" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group top"> <span class="input-group-addon"><i class="far fa-clock mentsignicons"></i></span>
                  <input type="date" class="form-control formpad" name="end[]" value="" placeholder="End Date" required>
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <label>Degree <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-graduation-cap mentsignicons"></i></span>
                  <input  type="text" class="form-control formpad" name="degree[]" value="" placeholder="Degree" required>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <label>Area of Study (Optional)</label>
                <div class="input-group top"><span class="input-group-addon"><i class="fas fa-graduation-cap mentsignicons"></i></span>
                  <input type="text" class="form-control formpad" name="study[]" value="" placeholder="Area of Study">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">

              @if(Session::has('school'))
              <div class="submitbutton">
                  <button type="submit" class="btn submitbtn  btn-responsive"  aria-expanded="false">Save and Add More</button>
                </div>
                <div class="submitbutton">
                  <a href="{{url('/')}}/signup2" type="button" class="btn submitbtn  btn-responsive"  aria-expanded="false">Next Step</a>
                </div>
               @else
               <div class="submitbutton">
                  <button type="submit" class="btn submitbtn  btn-responsive"  aria-expanded="false">Add</button>
                </div>
               @endif

                
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection