<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Master IT">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Master IT">
<meta name="google-site-verification" content="-3fR2s0fAH-tDmr1Fkt1Zn9Zv3qA3tcabWHX8mpCd28" />
<link rel="shortcut icon" href="{{url('/')}}/images1/master it logo.png"/>
<title>Master IT</title>

<!-- Bootstrap -->
<link href="{{url('/')}}/css1/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{url('/')}}/css1/font-awesome.min.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{url('/')}}/css1/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- iCheck -->
<link href="{{url('/')}}/css1/green.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="{{url('/')}}/css1/custom.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/{{url('/')}}/css1/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<!-- Datatables -->
<link href="{{url('/')}}/css1/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="{{url('/')}}/css1/responsive.bootstrap.min.css" rel="stylesheet">
<link href="{{url('/')}}/css1/scroller.bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;"> <a href="{{url('/')}}/mentor/dashboard" class="site_title"><i><img src="{{url('/')}}/images1/master it logo.png" alt="logo"></i> <span></span></a> </div>
        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">

          <ul class="nav side-menu">
            <li><a href="{{url('/')}}/mentor/dashboard"><i class="fa fa-edit"></i>Dashboard</a> </li>
              <li><a><i class="fa fa-gift"></i> Students <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <!--<li><a href="{{URL('/')}}/mentor/student/new">New</a></li>-->
                  <li><a href="{{URL('/')}}/mentor/student/approved">Student List</a></li>
                  <!--<li><a href="{{URL('/')}}/mentor/student/rejected">Rejected</a></li>-->
                  <li><a href="{{URL('/')}}/mentor/student/details">Student Detail</a></li>
                </ul>
              </li>
              <!--<li><a href="#"><i class="fa fa-edit"></i>Skill Set</a> </li>-->
              <li><a href="{{URL('/')}}/mentor/setting"><i class="fa fa-shopping-cart"></i>Settings</a></li>
              <li><a href="{{URL('/')}}/mentor/earning"><i class="fa fa-shopping-cart"></i>Earnings</a></li>
              <li><a href="{{URL('/')}}/mentor/student/payemt"><i class="fa fa-table"></i> Payments </a></li>
              <li><a><i class="fa fa-gift"></i> One Time Review <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{URL('/')}}/mentor/student/text/message">Text Message Review</a></li>
                  <li><a href="#">Audio Message Review</a></li>
                  <li><a href="#">Video Message Review</a></li>
                </ul>
              </li>
              
              <li><a href="{{url('/')}}/mentor/chat"><i class="fa fa-comment"></i>Chat Sytem</a> </li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu --> 
      </div>
    </div>
    
    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
          
          <ul class="nav navbar-nav navbar-right">
            <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Session()->get('firstname')}} {{ Session()->get('lastname')}} <span class=" fa fa-angle-down"></span> </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="{{URL('/')}}/mentor_profile/{{ Session()->get('id')}}"> Profile</a></li>
                <li><a href="{{URL('/')}}/mentor/password/{{ Session()->get('id')}}"> Change Password</a></li>
                <li><a href="{{URL('/')}}/logouts"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation --> 
    @yield('content')
    <!-- footer content -->
    <footer>
      <div class="pull-right"> Copyright © 2019-2020 Master IT. All rights reserved. </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content --> 
  </div>
</div>

<!-- jQuery --> 
<script src="{{url('/')}}/js1/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="{{url('/')}}/js1/bootstrap.min.js"></script> 
<!-- DateJS --> 
<script src="{{url('/')}}/js1/build/date.js"></script> 
<!-- bootstrap-progressbar --> 
<script src="{{url('/')}}/js1/bootstrap-progressbar.min.js"></script> 
<!-- iCheck --> 
<script src="{{url('/')}}/js1/icheck.min.js"></script> 
<!-- bootstrap-daterangepicker --> 
<script src="{{url('/')}}/js1/moment.min.js"></script> 
<script src="{{url('/')}}/js1/daterangepicker.js"></script> 
<!-- Custom Theme Scripts --> 
<script src="{{url('/')}}/js1/custom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- Datatables --> 
<script src="{{url('/')}}/js1/jquery.dataTables.min.js"></script> 
<script src="{{url('/')}}/js1/dataTables.bootstrap.min.js"></script> 
<script src="{{url('/')}}/js1/dataTables.responsive.min.js"></script> 
<script src="{{url('/')}}/js1/responsive.bootstrap.js"></script> 
<script src="{{url('/')}}/js1/dataTables.scroller.min.js"></script>
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<script>
      $("#b1").click(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var status = $('#status').val();
        console.log(status);
        $.ajax({
          /* the route pointing to the post function */
          url: "{{URL('/')}}/mentor/student/status",
          type: 'POST',
        
          /* send the csrf-token and the input to the controller */
          data: {_token: CSRF_TOKEN, status:status,
          id: OrgID,
        },
          /* remind that 'data' is the response of the AjaxController */
          success: function (data) { 
            window.location.href = data;
          }
      }); 

    });
  </script>
    <script>
      function preview_img(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah3')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dee23bbd96992700fcb699b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
