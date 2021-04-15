@extends('Mentor.layout.mentor')
    @section('content')
    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
           <div class="row">
           <div class="col-lg-7 col-md-7 col-sm-12 col-lg-offset-2">
            <h3>Admin Dashboard</h3>
            </div>
             <div class="col-lg-3 col-md-3 col-sm-6">
             <!--<a href="" class="btnaddcard" style="float:right;margin-top:0px !important;">This Month</a>-->
            </div>
          </div>
          
        </div>
        <div class="clearfix"></div>
        
        
        
         <div class="bgcolor">
         <h2>Earnings</h2>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content" style="text-align:center;padding:40px;">
               <img src="{{url('/')}}/images2//money-icon-zodiac.png" alt="image" style="width:35%;">
               @if(count($result4)>0)
               <h2>Total Earning $ {{$payment}}</h2>
               @endif
              </div>
            </div>
          </div>
        </div>
         </div>
      </div>
    </div>
    <!-- /page content --> 
    
        @endsection