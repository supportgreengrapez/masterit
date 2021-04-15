@extends('Student.layout.student')
@section('content')
<div class="bgcolor">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="headingsd1">
          <h2>Add Credit Card</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">
          <div class="x_content">
          <form method="post" action = "{{url('/')}}/student/card/form/{{Session()->get('id')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($errors->any())

<div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
@endif
              <div class="wrap">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control blueborder" placeholder="" name="fname">
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control blueborder" placeholder="" name="lname">
                </div>
                <div class="form-group">
                  <label>Card type</label>
                  <select name="ctype" class="form-control blueborder">
                    <option value="Visa Card">Visa Card</option>
                    <option value="Master Card">Master Card</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Credit Card Number</label>
                  <input type="number" class="form-control blueborder" placeholder="" name="cnumb">
                </div>
                <div class="form-group">
                  <label class="" for="sel1">Expiration Date</label>
                  <input type="date" class="form-control blueborder" placeholder="" name="expiry">
                </div>
                <div class="form-group">
                  <label>Security Code</label>
                  <input type="number" class="form-control blueborder" placeholder="" name="scode">
                </div>
                <div class="form-group">
                  <label>Zip Code</label>
                  <input type="number" class="form-control blueborder" placeholder="" name="zcode">
                </div>
                <div class="form-group">
                  <label>CVV Number</label>
                  <input type="number" class="form-control blueborder" placeholder="" name="cvv">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control blueborder" placeholder="" name="address">
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Country</label>
                      <select name="country" class="form-control blueborder countries order-alpha" id="countryId">
                        <option value="">Select Country</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <label>Country State</label>
                    <select name="state" class="form-control blueborder states order-alpha" id="stateId">
                      <option value="">Select State</option>
                    </select>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Zip Code</label>
                      <select name="city" class="form-control blueborder cities order-alpha" id="cityId">
                        <option value="">Select City</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="tel" class="form-control blueborder" placeholder="" name="phone">
                </div>
                <div class="form-group">
                    @if(count($result)>0)
                    
                         <div class="radio">
                    <label>
                      <input type="radio" name="atype" value="Secondary">
                      Secondary Card</label>
                  </div>
                    
                    @else
                  
                           <div class="radio">
                    <label>
                      <input type="radio" name="atype" value="Primary" checked>
                      Primary Card</label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="atype" value="Secondary">
                      Secondary Card</label>
                  </div>
                    @endif
                </div>
                <button  type="submit" class="button">Add Card</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection