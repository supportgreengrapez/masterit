@extends('Student.layout.student')
@section('content')
<div class="bgcolor">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="headingsd1">
          <h2>Edit Credit Card</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">
          <div class="x_content">
          <form method="post" action = "{{url('/')}}/student/edit/card/form/{{$result[0]->pk_id}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($errors->any())

<div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
@endif
              <div class="wrap">
              <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control blueborder" placeholder="" name="fname" value="{{$result[0]->fname}}">
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control blueborder" placeholder="" name="lname" value="{{$result[0]->lname}}">
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
                  <input type="number" class="form-control blueborder" placeholder="" name="cnumb" value="{{$result[0]->cnumb}}">
                </div>
                <div class="form-group">
                  <label class="" for="sel1">Expiration Date</label>
                  <input type="date" class="form-control blueborder" placeholder="" name="expiry" value="{{$result[0]->expiry}}">
                </div>
                <div class="form-group">
                  <label>Security Code</label>
                  <input type="number" class="form-control blueborder" placeholder="" name="scode" value="{{$result[0]->scode}}">
                </div>
                <div class="form-group">
                  <label>Zip Code</label>
                  <input type="number" class="form-control blueborder" placeholder="" name="zcode" value="{{$result[0]->zcode}}">
                </div>
                <div class="form-group">
                  <label>CVV Number</label>
                  <input type="number" class="form-control blueborder" placeholder="" name="cvv" value="{{$result[0]->cvv}}">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control blueborder" placeholder="" name="address" value="{{$result[0]->address}}">
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
                      <label>City</label>
                      <select name="city" class="form-control blueborder cities order-alpha" id="cityId">
                        <option value="">Select City</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="tel" class="form-control blueborder" placeholder="" name="phone" value="{{$result[0]->phone}}">
                </div>
                <div class="form-group">
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
                </div>
                <button  type="submit" class="button">Edit Card</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection