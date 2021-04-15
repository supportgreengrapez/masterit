@extends('layout.appclient')
@section('content')
<form method="post" action = "{{url('/')}}/signin2" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($errors->any())

<div class="alert alert-danger">
  <strong></strong> {{$errors->first()}}
</div>
@endif
<div class="bgmentorsign">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3">
        <div class="bgmentorsign2">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-globe mentsignicons"></i> </span>
                <select type="text" class="form-control" name="country" required>
                  <option>Select Country</option>

				  <option value="Afghanistan" countryid="AF">Afghanistan</option>
              <option value="Albania" countryid="AL">Albania</option>
              <option value="Algeria" countryid="DZ">Algeria</option>
              <option value="Andorra" countryid="AD">Andorra</option>
              <option value="Angola" countryid="AO">Angola</option>
              <option value="Anguilla" countryid="AI">Anguilla</option>
              <option value="Antigua and Barbuda" countryid="AG">Antigua and Barbuda</option>
              <option value="Argentina" countryid="AR">Argentina</option>
              <option value="Armenia" countryid="AM">Armenia</option>
              <option value="Australia" countryid="AU">Australia</option>
              <option value="Austria" countryid="AT">Austria</option>
              <option value="Azerbaijan" countryid="AZ">Azerbaijan</option>
              <option value="Bahamas" countryid="BS">Bahamas</option>
              <option value="Bahrain" countryid="BH">Bahrain</option>
              <option value="Bangladesh" countryid="BD">Bangladesh</option>
              <option value="Barbados" countryid="BB">Barbados</option>
              <option value="Belarus" countryid="BY">Belarus</option>
              <option value="Belgium" countryid="BE">Belgium</option>
              <option value="Belize" countryid="BZ">Belize</option>
              <option value="Benin" countryid="BJ">Benin</option>
              <option value="Bermuda" countryid="BM">Bermuda</option>
              <option value="Bhutan" countryid="BT">Bhutan</option>
              <option value="Bolivia" countryid="BO">Bolivia</option>
              <option value="Bosnia and Herzegovina" countryid="BA">Bosnia and Herzegovina</option>
              <option value="Botswana" countryid="BW">Botswana</option>
              <option value="Brazil" countryid="BR">Brazil</option>
              <option value="Brunei Darussalam" countryid="BN">Brunei Darussalam</option>
              <option value="Bulgaria" countryid="BG">Bulgaria</option>
              <option value="Burkina Faso" countryid="BF">Burkina Faso</option>
              <option value="Burundi" countryid="BI">Burundi</option>
              <option value="Cambodia" countryid="KH">Cambodia</option>
              <option value="Cameroon" countryid="CM">Cameroon</option>
              <option value="Canada" countryid="CA">Canada</option>
              <option value="Cape Verde" countryid="CV">Cape Verde</option>
              <option value="Cayman Islands" countryid="KY">Cayman Islands</option>
              <option value="Central African Republic" countryid="CF">Central African Republic</option>
              <option value="Chad" countryid="TD">Chad</option>
              <option value="Chile" countryid="CL">Chile</option>
              <option value="China" countryid="CN">China</option>
              <option value="Colombia" countryid="CO">Colombia</option>
              <option value="Comoros" countryid="KM">Comoros</option>
              <option value="Congo" countryid="CG">Congo</option>
              <option value="Costa Rica" countryid="CR">Costa Rica</option>
              <option value="Croatia (Hrvatska)" countryid="HR">Croatia (Hrvatska)</option>
              <option value="Cuba" countryid="CU">Cuba</option>
              <option value="Cyprus" countryid="CY">Cyprus</option>
              <option value="Czech Republic" countryid="CZ">Czech Republic</option>
              <option value="Denmark" countryid="DK">Denmark</option>
              <option value="Djibouti" countryid="DJ">Djibouti</option>
              <option value="Dominica" countryid="DM">Dominica</option>
              <option value="Dominican Republic" countryid="DO">Dominican Republic</option>
              <option value="Ecuador" countryid="EC">Ecuador</option>
              <option value="Egypt" countryid="EG">Egypt</option>
              <option value="El Salvador" countryid="SV">El Salvador</option>
              <option value="Equatorial Guinea" countryid="GQ">Equatorial Guinea</option>
              <option value="Eritrea" countryid="ER">Eritrea</option>
              <option value="Estonia" countryid="EE">Estonia</option>
              <option value="Ethiopia" countryid="ET">Ethiopia</option>
              <option value="Faroe Islands" countryid="FO">Faroe Islands</option>
              <option value="Fiji" countryid="FJ">Fiji</option>
              <option value="Finland" countryid="FI">Finland</option>
              <option value="France" countryid="FR">France</option>
              <option value="French Guiana" countryid="GF">French Guiana</option>
              <option value="French Polynesia" countryid="PF">French Polynesia</option>
              <option value="French Southern Territories" countryid="TF">French Southern Territories</option>
              <option value="Gabon" countryid="GA">Gabon</option>
              <option value="Gambia" countryid="GM">Gambia</option>
              <option value="Georgia" countryid="GE">Georgia</option>
              <option value="Germany" countryid="DE">Germany</option>
              <option value="Ghana" countryid="GH">Ghana</option>
              <option value="Greece" countryid="GR">Greece</option>
              <option value="Greenland" countryid="GL">Greenland</option>
              <option value="Grenada" countryid="GD">Grenada</option>
              <option value="Guadeloupe" countryid="GP">Guadeloupe</option>
              <option value="Guam" countryid="GU">Guam</option>
              <option value="Guatemala" countryid="GT">Guatemala</option>
              <option value="Guinea" countryid="GN">Guinea</option>
              <option value="Guinea-Bissau" countryid="GW">Guinea-Bissau</option>
              <option value="Guyana" countryid="GY">Guyana</option>
              <option value="Haiti" countryid="HT">Haiti</option>
              <option value="Honduras" countryid="HN">Honduras</option>
              <option value="Hong Kong" countryid="HK">Hong Kong</option>
              <option value="Hungary" countryid="HU">Hungary</option>
              <option value="Iceland" countryid="IS">Iceland</option>
              <option value="India" countryid="IN">India</option>
              <option value="Indonesia" countryid="ID">Indonesia</option>
              <option value="Iran" countryid="IR">Iran</option>
              <option value="Iraq" countryid="IQ">Iraq</option>
              <option value="Ireland" countryid="IE">Ireland</option>
              <option value="Isle of Man" countryid="IM">Isle of Man</option>
              <option value="Italy" countryid="IT">Italy</option>
              <option value="Ivory Coast" countryid="CI">Ivory Coast</option>
              <option value="Jamaica" countryid="JM">Jamaica</option>
              <option value="Japan" countryid="JP">Japan</option>
              <option value="Jersey" countryid="JE">Jersey</option>
              <option value="Jordan" countryid="JO">Jordan</option>
              <option value="Kazakhstan" countryid="KZ">Kazakhstan</option>
              <option value="Kenya" countryid="KE">Kenya</option>
              <option value="Kiribati" countryid="KI">Kiribati</option>
              <option value="Kosovo" countryid="XK">Kosovo</option>
              <option value="Kuwait" countryid="KW">Kuwait</option>
              <option value="Kyrgyzstan" countryid="KG">Kyrgyzstan</option>
              <option value="Lao" countryid="LA">Lao</option>
              <option value="Latvia" countryid="LV">Latvia</option>
              <option value="Lebanon" countryid="LB">Lebanon</option>
              <option value="Lesotho" countryid="LS">Lesotho</option>
              <option value="Liberia" countryid="LR">Liberia</option>
              <option value="Libyan Arab Jamahiriya" countryid="LY">Libyan Arab Jamahiriya</option>
              <option value="Liechtenstein" countryid="LI">Liechtenstein</option>
              <option value="Lithuania" countryid="LT">Lithuania</option>
              <option value="Luxembourg" countryid="LU">Luxembourg</option>
              <option value="Macedonia" countryid="MK">Macedonia</option>
              <option value="Madagascar" countryid="MG">Madagascar</option>
              <option value="Malawi" countryid="MW">Malawi</option>
              <option value="Malaysia" countryid="MY">Malaysia</option>
              <option value="Maldives" countryid="MV">Maldives</option>
              <option value="Mali" countryid="ML">Mali</option>
              <option value="Malta" countryid="MT">Malta</option>
              <option value="Marshall Islands" countryid="MH">Marshall Islands</option>
              <option value="Martinique" countryid="MQ">Martinique</option>
              <option value="Mauritania" countryid="MR">Mauritania</option>
              <option value="Mauritius" countryid="MU">Mauritius</option>
              <option value="Mexico" countryid="MX">Mexico</option>
              <option value="Micronesia, Federated States of" countryid="FM">Micronesia, Federated States of</option>
              <option value="Moldova, Republic of" countryid="MD">Moldova, Republic of</option>
              <option value="Monaco" countryid="MC">Monaco</option>
              <option value="Mongolia" countryid="MN">Mongolia</option>
              <option value="Montenegro" countryid="ME">Montenegro</option>
              <option value="Montserrat" countryid="MS">Montserrat</option>
              <option value="Morocco" countryid="MA">Morocco</option>
              <option value="Mozambique" countryid="MZ">Mozambique</option>
              <option value="Myanmar" countryid="MM">Myanmar</option>
              <option value="Namibia" countryid="NA">Namibia</option>
              <option value="Nauru" countryid="NR">Nauru</option>
              <option value="Nepal" countryid="NP">Nepal</option>
              <option value="Netherlands" countryid="NL">Netherlands</option>
              <option value="Netherlands Antilles" countryid="AN">Netherlands Antilles</option>
              <option value="New Caledonia" countryid="NC">New Caledonia</option>
              <option value="New Zealand" countryid="NZ">New Zealand</option>
              <option value="Nicaragua" countryid="NI">Nicaragua</option>
              <option value="Niger" countryid="NE">Niger</option>
              <option value="Nigeria" countryid="NG">Nigeria</option>
              <option value="North Korea" countryid="KP">North Korea</option>
              <option value="Northern Mariana Islands" countryid="MP">Northern Mariana Islands</option>
              <option value="Norway" countryid="NO">Norway</option>
              <option value="Oman" countryid="OM">Oman</option>
              <option value="Pakistan" countryid="PK">Pakistan</option>
              <option value="Palau" countryid="PW">Palau</option>
              <option value="Palestine" countryid="PS">Palestine</option>
              <option value="Panama" countryid="PA">Panama</option>
              <option value="Papua New Guinea" countryid="PG">Papua New Guinea</option>
              <option value="Paraguay" countryid="PY">Paraguay</option>
              <option value="Peru" countryid="PE">Peru</option>
              <option value="Philippines" countryid="PH">Philippines</option>
              <option value="Poland" countryid="PL">Poland</option>
              <option value="Portugal" countryid="PT">Portugal</option>
              <option value="Puerto Rico" countryid="PR">Puerto Rico</option>
              <option value="Qatar" countryid="QA">Qatar</option>
              <option value="Reunion" countryid="RE">Reunion</option>
              <option value="Romania" countryid="RO">Romania</option>
              <option value="Russian Federation" countryid="RU">Russian Federation</option>
              <option value="Rwanda" countryid="RW">Rwanda</option>
              <option value="Saint Kitts and Nevis" countryid="KN">Saint Kitts and Nevis</option>
              <option value="Saint Lucia" countryid="LC">Saint Lucia</option>
              <option value="Saint Vincent and the Grenadines" countryid="VC">Saint Vincent and the Grenadines</option>
              <option value="Samoa" countryid="WS">Samoa</option>
              <option value="San Marino" countryid="SM">San Marino</option>
              <option value="Sao Tome and Principe" countryid="ST">Sao Tome and Principe</option>
              <option value="Saudi Arabia" countryid="SA">Saudi Arabia</option>
              <option value="Senegal" countryid="SN">Senegal</option>
              <option value="Serbia" countryid="RS">Serbia</option>
              <option value="Seychelles" countryid="SC">Seychelles</option>
              <option value="Sierra Leone" countryid="SL">Sierra Leone</option>
              <option value="Singapore" countryid="SG">Singapore</option>
              <option value="Slovakia" countryid="SK">Slovakia</option>
              <option value="Slovenia" countryid="SI">Slovenia</option>
              <option value="Solomon Islands" countryid="SB">Solomon Islands</option>
              <option value="Somalia" countryid="SO">Somalia</option>
              <option value="South Africa" countryid="ZA">South Africa</option>
              <option value="South Korea" countryid="KR">South Korea</option>
              <option value="Spain" countryid="ES">Spain</option>
              <option value="Sri Lanka" countryid="LK">Sri Lanka</option>
              <option value="St. Helena" countryid="SH">St. Helena</option>
              <option value="St. Pierre and Miquelon" countryid="PM">St. Pierre and Miquelon</option>
              <option value="Sudan" countryid="SD">Sudan</option>
              <option value="Suriname" countryid="SR">Suriname</option>
              <option value="Svalbard and Jan Mayen Islands" countryid="SJ">Svalbard and Jan Mayen Islands</option>
              <option value="Swaziland" countryid="SZ">Swaziland</option>
              <option value="Sweden" countryid="SE">Sweden</option>
              <option value="Switzerland" countryid="CH">Switzerland</option>
              <option value="Syrian Arab Republic" countryid="SY">Syrian Arab Republic</option>
              <option value="Taiwan" countryid="TW">Taiwan</option>
              <option value="Tajikistan" countryid="TJ">Tajikistan</option>
              <option value="Tanzania" countryid="TZ">Tanzania</option>
              <option value="Thailand" countryid="TH">Thailand</option>
              <option value="Togo" countryid="TG">Togo</option>
              <option value="Tokelau" countryid="TK">Tokelau</option>
              <option value="Tonga" countryid="TO">Tonga</option>
              <option value="Trinidad and Tobago" countryid="TT">Trinidad and Tobago</option>
              <option value="Tunisia" countryid="TN">Tunisia</option>
              <option value="Turkey" countryid="TR">Turkey</option>
              <option value="Turkmenistan" countryid="TM">Turkmenistan</option>
              <option value="Tuvalu" countryid="TV">Tuvalu</option>
              <option value="Uganda" countryid="UG">Uganda</option>
              <option value="Ukraine" countryid="UA">Ukraine</option>
              <option value="United Arab Emirates" countryid="AE">United Arab Emirates</option>
              <option value="United Kingdom" countryid="GB">United Kingdom</option>
              <option value="United States" countryid="US">United States</option>
              <option value="United States minor outlying islands" countryid="UM">United States minor outlying islands</option>
              <option value="Uruguay" countryid="UY">Uruguay</option>
              <option value="Uzbekistan" countryid="UZ">Uzbekistan</option>
              <option value="Vanuatu" countryid="VU">Vanuatu</option>
              <option value="Venezuela" countryid="VE">Venezuela</option>
              <option value="Vietnam" countryid="VN">Vietnam</option>
              <option value="Virgin Islands (U.S.)" countryid="VI">Virgin Islands (U.S.)</option>
              <option value="Wallis and Futuna Islands" countryid="WF">Wallis and Futuna Islands</option>
              <option value="Yemen" countryid="YE">Yemen</option>
              <option value="Zambia" countryid="ZM">Zambia</option>
              <option value="Zimbabwe" countryid="ZW">Zimbabwe</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-key mentsignicons"></i></span>
                <input   type="password" class="form-control formpad" name="password" value="" placeholder="Create a Password" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-key mentsignicons"></i></span>
                <input  type="password" class="form-control formpad" name="cpassword" value="" placeholder="Confirm Password" required>
              </div>
            </div>
          </div>
          <h4 style="margin-top:20px;">Are you:</h4>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <!--<div class="radio">-->
              <!--  <div class="radiobtn1">-->
              <!--    <label>-->
              <!--      <input type="radio" name="account_type" value="Student">-->
              <!--      <button type="button" class="btn btn-default">Student</button>-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
              <div class="form-check">
					<label>
						<input type="radio" name="account_type" value="Mentor" checked> <span class="label-text">Mentor</span>
					</label>
				</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <!--<div class="radio">-->
              <!--  <div class="radiobtn2">-->
              <!--    <label>-->
              <!--      <input type="radio" name="account_type" value="Mentor">-->
              <!--      <button type="button" class="btn btn-default">Mentor</button>-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <div class="form-check">
					<label>
						<input type="radio" name="account_type" value="Student"> <span class="label-text">Student</span>
					</label>
				</div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="sign2bottom">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  required>
                  </label>
                </div>
                <p>Yes,I understand and agree to the <span>Master IT Terms of Services</span>,including the User <span>Agreement </span>and <span>Privacy policy</span>.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="submitbutton">
                <button type="submit" class="btn submitbtn  btn-responsive"  aria-expanded="false">Next</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
@endsection