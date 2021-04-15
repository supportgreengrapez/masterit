@extends('layout.appclient')
@section('content')
<div class="bgmentorsign">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3">
        <form method="post" action = "{{url('/')}}/mentor_signin" enctype="multipart/form-data">
          {{ csrf_field() }}
          @if($errors->any())
          <div class="alert alert-danger"> <strong></strong> {{$errors->first()}} </div>
          @endif
          <div class="bgmentorsign2">
            <h3>Mentor</h3>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label>Skills (Max 10) <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-wrench mentsignicons"></i> </span>
                  <select  class="js-example-basic-multiple form-control formpad" name="skill[]" multiple="multiple" required>
                   <option value="">None</option>
                    @if(count($result)>0)
              @foreach($result as $results)
                    <option value="{{$results->sname}}">{{$results->sname}}</option>
                    @endforeach
              @endif
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label>Other Skills (Optional)</label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-wrench mentsignicons"></i> </span>
                  <select  class="js-example-tokenizer form-control formpad" name="otherskill[]" multiple="multiple">
                   <option value="">None</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
              <label>Higher Education <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-graduation-cap mentsignicons"></i></span>
                  <input   type="text" class="form-control formpad" name="qualification" value="" placeholder="Qualification" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <label>Awards & Certificates <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"><i class="fas fa-trophy mentsignicons"></i></span>
                  <select  class="js-example-tokenizer form-control formpad" name="certificate[]" multiple="multiple" required>
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
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <label>Time of Availbilty <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="far fa-clock mentsignicons"></i> </span>
                  <input   type="text" class="form-control formpad" name="time" value="" placeholder="9:00Am - 5:00Pm" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <label>Rate (Hourly Rate) <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-dollar-sign mentsignicons"></i> </span>

                  <input type="number" class="form-control formpad" name="price" value="" placeholder="$5" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <label>Experince (2 Year) <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-award mentsignicons"></i> </span>
                  <input type="text" class="form-control formpad" name="experince" value="" placeholder="Experince" required>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label>Experties <span class="red">*</span></label>
                <div class="input-group top"> <span class="input-group-addon"> <i class="fas fa-shield-alt mentsignicons"></i> </span>
                  <select  class="js-example-tokenizer form-control formpad" name="experties[]" multiple="multiple" required>
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
              <label>Short Introduction <span class="red">*</span></label>
                <div class="input-group top"> <textarea class="form-control" rows="5" cols="50" name="description" required ></textarea>
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