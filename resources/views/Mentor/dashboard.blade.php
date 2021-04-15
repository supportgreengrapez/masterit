@extends('Mentor.layout.mentor')
@section('content')   
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="page-title">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Mentor Dashboard</h3>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="bgcolor">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner">
                    <div class="top-row">
                      <div class="img-wraper">
                        <div class="img-container" id="student">
                          <p> <span> 560 </span><br>
                            Total no Students</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner">
                    <div class="top-row">
                      <div class="img-wraper">
                        <div class="img-container" id="earning">
                          <p> <span> 560 </span><br>
                            Total Earnings</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner">
                    <div class="top-row">
                      <div class="img-wraper">
                        <div class="img-container" id="live">
                          <p> <span> 560 </span><br>
                            Total Live Reviews</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner">
                    <div class="top-row">
                      <div class="img-wraper">
                        <div class="img-container" id="onetime">
                          <p> <span> 560 </span><br>
                            Total Onetime Reviews</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
    @endsection