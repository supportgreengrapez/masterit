<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Green Grapez">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Green Grapez">
<meta name="google-site-verification" content="-3fR2s0fAH-tDmr1Fkt1Zn9Zv3qA3tcabWHX8mpCd28" />
<link rel="shortcut icon" href="images/master it logo.png"/>
<title>Master IT</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- iCheck -->
<link href="css/green.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="css/custom.min.css" rel="stylesheet">
<!-- Datatables -->
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="css/scroller.bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;"> <a href="index.html" class="site_title"><i><img src="images/master it logo.png" alt="logo"></i> <span></span></a> </div>
        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <ul class="nav side-menu">
              <li><a><i class="fa fa-gift"></i> Manage Permissions <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="unapproved.html">Unapproved</a></li>
                  <li><a href="suspended.html">Suspended</a></li>
                  <li><a href="pending.html">Pending</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-edit"></i> Mentor Management <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="students-detail.html">Students Details</a></li>
                   <li><a href="#">Earnings</a></li>
                    <li><a href="payout.html">Payout</a></li>
                </ul>
              </li>
             <li><a href="earnings.html"><i class="fa fa-shopping-cart"></i>Earnings</a>
              
              </li>
              <li><a href="Payout (2).html"><i class="fa fa-table"></i> Payout </a> </li>
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
            <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Admin <span class=" fa fa-angle-down"></span> </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="javascript:;"> Profile</a></li>
                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation --> 
    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          
            <h3>Admin Dashboard</h3>
          
        </div>
        <div class="clearfix"></div>
        
        
        
         <div class="bgcolor">
         <h2>Add a Credit or Debit Card</h2>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
               <div class="row">
               <div class="col-md-9 col-sm-12">
                <div class="form-group">
      <label for="email">First Name</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
     <div class="form-group">
      <label for="email">Last Name</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
     <div class="form-group">
      <label for="email">Card Number</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
    <div class="row">
    <div class="col-md-6 col-sm-12">
     <label class="" for="sel1">Expiration Date</label>
     <select class="form-control  blueborder" id="sel1">
    
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
     <div class="col-md-6 col-sm-12">
      <select class="form-control  blueborder"  style="margin-top:24px;">
    
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    </div>
    
     <div class="form-group">
      <label for="email">Security Code</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
     <div class="form-group">
      <label for="email">Country</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
     <div class="form-group">
      <label for="email">Address</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
     <div class="form-group">
      <label for="email">Address (Optional)</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
    <div class="row">
    <div class="col-md-4 col-sm-12">
      <div class="form-group">
      <label for="email">City</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
    </div>
    
     <div class="col-md-4 col-sm-12">
      <label class="" for="sel1">Country State</label>
     <select class="form-control  blueborder">
    
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
     <div class="col-md-4 col-sm-12">
     <div class="form-group">
      <label for="email">Zip Code</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
    </div>
    </div>
    
     <div class="form-group">
      <label for="email">Phone</label>
      <input type="email" class="form-control blueborder" id="" placeholder="" name="email">
    </div>
    
      <a href="Add-payout-method.html"><button  type="button" class="btn btnaddcard">Add Card</button></a>
        <button type="button" class="btn btncancel">Cancel</button>
    
    
    
    
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
    
    <!-- footer content -->
    <footer>
      <div class="pull-right"> Copyright © 2017-2018 Green Grapez. All rights reserved. </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content --> 
  </div>
</div>

<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="js/bootstrap.min.js"></script> 
<!-- DateJS --> 
<script src="js/build/date.js"></script> 
<!-- bootstrap-progressbar --> 
<script src="js/bootstrap-progressbar.min.js"></script> 
<!-- iCheck --> 
<script src="js/icheck.min.js"></script> 
<!-- bootstrap-daterangepicker --> 
<script src="js/moment.min.js"></script> 
<script src="js/daterangepicker.js"></script> 
<!-- Custom Theme Scripts --> 
<script src="js/custom.min.js"></script> 
<!-- Datatables --> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/dataTables.bootstrap.min.js"></script> 
<script src="js/dataTables.responsive.min.js"></script> 
<script src="js/responsive.bootstrap.js"></script> 
<script src="js/dataTables.scroller.min.js"></script>
</body>
</html>