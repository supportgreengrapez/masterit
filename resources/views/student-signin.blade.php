@extends('layout.appclient')
@section('content')
<div class="bgmentorsign">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3">
      <form method="post" action = "{{url('/')}}/student_signin" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($errors->any())

<div class="alert alert-danger">
  <strong>Danger!</strong> {{$errors->first()}}
</div>
@endif
        <div class="bgmentorsign2">
          <h3>Student</h3>
          <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
                <label>Interest <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-wrench mentsignicons"></i> </span>
                  <select  class="js-example-tokenizer form-control formpad" name="skill[]" multiple="multiple" required>
                    <option value="">None</option>
                  <option value="Industry">Industry</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Technology">Technology</option>
                    <option value="Finance">Finance</option>
                    <option value="Information">Information</option>
                    <option value="Advertising">Advertising</option>
                    <option value="Email">Email</option>
                    <option value="Research">Research</option>
                    <option value="Publishing">Publishing</option>
                    <option value="Retail">Retail</option>
                    <option value="Transport">Transport</option>
                    <option value="Trade">Trade</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Investment">Investment</option>
                    <option value="Computers">Computers</option>
                    <option value="Telecommunication">Telecommunication</option>
                    <option value="Education">Education</option>
                    <option value="Construction">Construction</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Health">Health</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Pharmacuetical">Pharmacuetical</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Food">Food</option>
                    <option value="Regulation">Regulation</option>
                    <option value="Computer software">Computer software</option>
                    <option value="Goods">Goods</option>
                    <option value="Mining">Mining</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Media">Media</option>
                    <option value="Website">Website</option>
                    <option value="Production">Production</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="Communication">Communication</option>
                    <option value="Bank">Bank</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Steel">Steel</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Training">Training</option>
                    <option value="Internet">Internet</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Design">Design</option>
                    <option value="Credit">Credit</option>
                    <option value="Drink">Drink</option>
                    <option value="Training">Training</option>
                    <option value="Medicine">Medicine</option>
                    <option value="Petroleum">Petroleum</option>
                    <option value="Vehicles">Vehicles</option>
                    <option value="Food Industry">Food Industry</option>
                    <option value="Chemical Industry">Chemical Industry</option>
                    <option value="Newspaper">Newspaper</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <label>Profile Image <span class="red">*</span></label>
                
                
                <div class="input-group top">
<input type='file' name="file" class="form-control" onchange="readURL(this);"/>
<img id="blah" src="{{url('/')}}/images/180.png" alt="your image" class="img-circle" style="width:100px; height:100px;"/>
</div>
              </div>
            </div>

            
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <label>What is your nick name? (Optional)</label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-key mentsignicons"></i> </span>
                  <input   type="text" class="form-control formpad" name="question1" value="" placeholder="Security Question">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <label>What is your school name? (Optional)</label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-key mentsignicons"></i> </span>
                  <input   type="text" class="form-control formpad" name="question2" value="" placeholder="Security Question">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <label>What is your place of birth? (Optional)</label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-key mentsignicons"></i> </span>
                  <input   type="text" class="form-control formpad" name="question3" value="" placeholder="Security Question">
                </div>
              </div>
            </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="submitbutton">
                <button type="submit" class="btn submitbtn  btn-responsive"  aria-expanded="false">Submit</button>
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