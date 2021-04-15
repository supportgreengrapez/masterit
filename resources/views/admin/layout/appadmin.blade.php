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
<link rel="shortcut icon" href="{{url('/')}}/images2/master it logo.png"/>
<title>Master IT</title>

<!-- Bootstrap -->
<link href="{{url('/')}}/css2/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{url('/')}}/css2/font-awesome.min.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{url('/')}}/css2/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- iCheck -->
<link href="{{url('/')}}/css2/green.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="{{url('/')}}/css2/custom.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<!-- Datatables -->
<link href="{{url('/')}}/css2/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="{{url('/')}}/css2/responsive.bootstrap.min.css" rel="stylesheet">
<link href="{{url('/')}}/css2/scroller.bootstrap.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;"> <a href="{{URL('/')}}/admin" class="site_title"><i><img src="{{url('/')}}/images2/master it logo.png" alt="logo"></i> <span></span></a> </div>
        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">

          <ul class="nav side-menu">
          @if(Session::get('adminmanagement') == 1)
            <li><a href="{{URL('/')}}/admin/list"><i class="fa fa-gift"></i> Admin Management </a></li>@endif
            @if(Session::get('manageapprovels') == 1)
            <li><a><i class="fa fa-gift"></i> Mentor Approvals <span class="fa fa-angle-down"></span></a>
                <ul class="nav child_menu">
                <li><a href="{{URL('/')}}/admin/mentor/approved/list">Approved</a></li>
                  <li><a href="{{URL('/')}}/admin/mentor/unapproved/list">Rejected</a></li>
                  <li><a href="{{URL('/')}}/admin/mentor/suspended/list">Suspended</a></li>
                  <li><a href="{{URL('/')}}/admin/mentor/pending/list">Pending</a></li>
                </ul>
              </li> @endif
              @if(Session::get('mentormanagement') == 1)
              <li><a><i class="fa fa-edit"></i> Mentor Management <span class="fa fa-angle-down"></span></a>
                <ul class="nav child_menu">
                   <li><a href="{{URL('/')}}/admin/mentor/earning/list">Mentor Earning</a></li>
                    <li><a href="{{URL('/')}}/admin/mentor/payout">Mentor Payout</a></li>
                </ul>
              </li>@endif
              @if(Session::get('earnings') == 1)
              <li><a href="{{URL('/')}}/admin/masterit/earning"><i class="fa fa-shopping-cart"></i>MasterIT Earnings</a></li>
              @endif
              
              @if(Session::get('skill') == 1)
              <li><a href="{{URL('/')}}/admin/skill/list"><i class="fa fa-table"></i> Skill Management</span></a>
              </li>
              @endif
              @if(Session::get('student') == 1)
              <li><a href="{{URL('/')}}/admin/student/list"><i class="fa fa-table"></i> Student Management </a> </li>
              @endif

              <!--<li><a href="{{URL('/')}}/admin/chat/view"><i class="fa fa-comment"></i>Chat System</a></li>-->
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
                <li><a href="javascript:;"> Profile</a></li>
                <li><a href="{{URL('/')}}/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
      <div class="pull-right"> Copyright © 2019-2020 MasterIT. All rights reserved. </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content --> 
  </div>
</div>

<!-- jQuery --> 
<script src="{{url('/')}}/js2/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="{{url('/')}}/js2/bootstrap.min.js"></script> 
<!-- DateJS --> 
<script src="{{url('/')}}/js2/build/date.js"></script> 
<!-- bootstrap-progressbar --> 
<script src="{{url('/')}}/js2/bootstrap-progressbar.min.js"></script> 
<!-- iCheck --> 
<script src="{{url('/')}}/js2/icheck.min.js"></script> 
<!-- bootstrap-daterangepicker --> 
<script src="{{url('/')}}/js2/moment.min.js"></script> 
<script src="{{url('/')}}/js2/daterangepicker.js"></script> 
<!-- Custom Theme Scripts --> 
<script src="{{url('/')}}/js2/custom.min.js"></script>
<script src="{{url('/')}}/js2/jquery.dataTables.min.js"></script> 
<script src="{{url('/')}}/js2/dataTables.bootstrap.min.js"></script> 
<script src="{{url('/')}}/js2/dataTables.responsive.min.js"></script> 
<script src="{{url('/')}}/js2/responsive.bootstrap.js"></script> 
<script src="{{url('/')}}/js2/dataTables.scroller.min.js"></script>


<script>
      $("#b1").click(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var status = $('#status').val();
        console.log(status);
        $.ajax({
          /* the route pointing to the post function */
          url: "{{URL('/')}}/admin/mentor/status",
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
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>
