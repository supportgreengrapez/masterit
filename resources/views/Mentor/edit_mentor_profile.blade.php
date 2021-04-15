@extends('Mentor.layout.mentor')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <h3>Mentor Dashboard</h3>
        </div>
        <div class="clearfix"></div>
        <div class="bgcolor">
          <h2>Edit Profile</h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                <form method="post" action = "{{url('/')}}/edit_mentors_profile/{{$result[0]->pk_id}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if(count($result)>0)
                @foreach($result as $results)
                  <div class="wrap">
                    <div class="form-group">
                      <label>First Name <span class="red">*</span></label>
                      <input type="text" class="form-control blueborder" placeholder="" name="fname" value="{{$results->fname}}" required>
                    </div>
                    <div class="form-group">
                      <label>Last Name <span class="red">*</span></label>
                      <input type="text" class="form-control blueborder" placeholder="" name="lname" value="{{$results->lname}}" required>
                    </div>
                    <div class="form-group">
                      <label>Country <span class="red">*</span></label>
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
                    <div class="form-group">
                      <label>Skill (Max 10) <span class="red">*</span></label>
                      <select  class="js-example-tokenizer form-control formpad" name="skill[]" multiple="multiple"  required>
                      <option value="">None</option>
                      @if(count($result1)>0)
                @foreach($result1 as $resultss)
                <option value="{{$resultss->sname}}">{{$resultss->sname}}</option>
                @endforeach
                @endif
                  </select>
                    </div>

                    <div class="form-group">
                      <label>Other Skill (Optional)</label>
                      <select  class="js-example-tokenizer form-control formpad" name="otherskill[]" multiple="multiple"  required>
                      <option value="">None</option>
                      
                  </select>
                    </div>
                    <div class="form-group">
                      <label>Higher Education</label>
                      <input type="text" class="form-control formpad" name="qualification" value="{{$results->qualification}}" placeholder="Qualification" required>
                </div>
                    <div class="form-group">
                      <label>Awards & Certificates <span class="red">*</span></label>
                      <select  class="js-example-tokenizer form-control formpad" name="certificate[]" multiple="multiple" value="{{$results->certificate}}" required>
                   <option value="">None</option>
                    <option value="A+ (CompTIA)">A+ (CompTIA)</option>
                    <option value="Adobe Certified Associate (ACA)">Adobe Certified Associate (ACA)</option>
                    <option value="Adobe Certified Expert (ACE)">Adobe Certified Expert (ACE)</option>
                    <option value="Adobe Digital Marketing Accreditation">Adobe Digital Marketing Accreditation</option>
                    <option value="Adobe Certification Exams (All)">Adobe Certification Exams (All)</option>
                    <option value="Apple Certified Support Professional (ACSP) - macOS">Apple Certified Support Professional (ACSP) - macOS</option>
                    <option value="Apple Certified Support Professional (ACSP) - OS X">Apple Certified Support Professional (ACSP) - OS X</option>
                    <option value="Apple Certified Pro (for Final Cut Pro X and Logic Pro X)">Apple Certified Pro (for Final Cut Pro X and Logic Pro X)</option>
                    <option value="AppleCare Service Certifications – ACMT & ACiT">AppleCare Service Certifications – ACMT & ACiT</option>
                    <option value="Advanced Information Security (AIS)">Advanced Information Security (AIS)</option>
                    <option value="Certified Broadcast Networking Technologist (CBNT)">Certified Broadcast Networking Technologist (CBNT)</option>
                    <option value="Certified Computer Examiner (CCE)">Certified Computer Examiner (CCE)</option>
                    <option value="Certified Electronics Technician by the ETA (CET)">Certified Electronics Technician by the ETA (CET)</option>
                    <option value="Certified Technical Trainer (CTT)">Certified Technical Trainer (CTT)</option>
                    <option value="Certified Hardware Asset Management Professional (CHAMP)">Certified Hardware Asset Management Professional (CHAMP)</option>
                    <option value="Certified Information Systems Auditor (CISA)">Certified Information Systems Auditor (CISA)</option>
                    <option value="Certified Information Security Manager (CISM)">Certified Information Security Manager (CISM)</option>
                    <option value="Certified Information Systems Security Professional (CISSP)">Certified Information Systems Security Professional (CISSP)</option>
                    <option value="Certified Information Technology Asset Manager (CITAM)">Certified Information Technology Asset Manager (CITAM)</option>
                    <option value="Certified Internet Webmaster (CIW)">Certified Internet Webmaster (CIW)</option>
                    <option value="Certified Software Asset Manager (CSAM)">Certified Software Asset Manager (CSAM)</option>
                    <option value="Certified Software Developer Program (CSDP)">Certified Software Developer Program (CSDP)</option>
                    <option value="Certified Software Tester (CSTE)">Certified Software Tester (CSTE)</option>
                    <option value="Cisco Certified Technicians (CCT)">Cisco Certified Technicians (CCT)</option>
                    <option value="Cisco Certified Entry Networking Technician (CCENT)">Cisco Certified Entry Networking Technician (CCENT)</option>
                    <option value="Cisco Certified Design Associate (CCDA)">Cisco Certified Design Associate (CCDA)</option>
                    <option value="Cisco Certified Design Professional (CCDP)">Cisco Certified Design Professional (CCDP)</option>
                    <option value="Cisco Certified Architect (CCAr)">Cisco Certified Architect (CCAr)</option>
                    <option value="Citrix Certified Expert - Virtualization (CCE-V)">Citrix Certified Expert - Virtualization (CCE-V)</option>
                    <option value="Citrix Certified Professional - Virtualization (CCP-V)">Citrix Certified Professional - Virtualization (CCP-V)</option>
                    <option value="Citrix Certified Associate - Virtualization (CCA-V)">Citrix Certified Associate - Virtualization (CCA-V)</option>
                    <option value="Citrix Certified Professional – Networking (CCP-N)">Citrix Certified Professional – Networking (CCP-N)</option>
                    <option value="Citrix Certified Associate – Networking (CCA-N)">Citrix Certified Associate – Networking (CCA-N)</option>
                    <option value="Citrix NetScaler SD-WAN Certified (CC-SDWAN)">Citrix NetScaler SD-WAN Certified (CC-SDWAN)</option>
                    <option value="Citrix Certified Professional – Mobility (CCP-M)">Citrix Certified Professional – Mobility (CCP-M)</option>
                    <option value="Check Point Certified Security Administrator (CCSA) R80">Check Point Certified Security Administrator (CCSA) R80</option>
                    <option value="Check Point Certified Security (Other)">Check Point Certified Security (Other)</option>
                    <option value="CSA+ (CompTIA)">CSA+ (CompTIA)</option>
                    <option value="Dell EMC Certification (All Certifications: EMCISA, EMCDS, VCE-CIA)">Dell EMC Certification (All Certifications: EMCISA, EMCDS, VCE-CIA)</option>
                    <option value="GIAC Security Expert (GSE)">GIAC Security Expert (GSE)</option>
                    <option value="HP ASE - Business Service Management">HP ASE - Business Service Management</option>
                    <option value="HP ASE - Application Lifecycle Management Implementation">HP ASE - Application Lifecycle Management Implementation</option>
                    <option value="HP ATP - Data Protector">HP ATP - Data Protector</option>
                    <option value="HPE ASE - Data Center and Cloud Architect V3">HPE ASE - Data Center and Cloud Architect V3</option>
                    <option value="HPE Certification (All)">HPE Certification (All)</option>
                    <option value="IBM Professional Certifications">IBM Professional Certifications</option>
                    <option value="Internet and Computing Core Certification (IC3)">Internet and Computing Core Certification (IC3)</option>
                    <option value="Linux+ (CompTIA)">Linux+ (CompTIA)</option>
                    <option value="Microsoft Technology Associate (MTA)">Microsoft Technology Associate (MTA)</option>
                    <option value="Microsoft Certified Solutions Associate (MCSA)">Microsoft Certified Solutions Associate (MCSA)</option>
                    <option value="Microsoft Certified Solutions Expert (MCSE)">Microsoft Certified Solutions Expert (MCSE)</option>
                  </select>
                </div>
                    <div class="form-group">
                      <label>Time of Availbilty <span class="red">*</span></label>
                     <input type="text" class="form-control formpad" name="time" value="{{$results->time}}" placeholder="9:00Am - 5:00Pm" required>
                </div>
                    <div class="form-group">
                      <label>Rate <span class="red">*</span></label>
                      <input type="text" class="form-control formpad" name="price" value="{{$results->price}}" placeholder="$5" required></div>
                    <div class="form-group">
                      <label>Experince (2years ) <span class="red">*</span></label>
                      <input type="text" class="form-control formpad" name="experince" value="{{$results->experince}}" placeholder="Experince" required>
                </div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label>Experties <span class="red">*</span></label>
                          <select  class="js-example-tokenizer form-control formpad" name="experties[]" multiple="multiple" required value="{{$results->experties}}">
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

                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label>Description <span class="red">*</span></label>
                          <textarea class="form-control" rows="9" name="description" value="{{$results->description}}" required>{{$results->description}}</textarea>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                <label>Profile Image <span class="red">*</span></label>
<input type='file' name="file" class="form-control" value="{{URL('/')}}/storage/images/{{$results->image}}" onchange="preview_img(this);"/>
<img id="blah3" src="{{URL('/')}}/storage/images/{{$results->image}}" alt="your image" style="width:180px; height:180px;"/>
</div>
                      </div>
                      
                       
                    </div>
                    <button  type="submit" class="btn btnaddcard">Save</button>
                  </div>
                  @endforeach
                @endif
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /page content -->
    @endsection