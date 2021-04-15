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
<!-- iCheck -->
<link href="{{url('/')}}/css1/green.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="{{url('/')}}/css1/custom.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

<style>
#frame {
    min-width: 360px;
    height: 92vh;
    max-height: 720px;
    margin-top: 10px;
    background: white;
}

@media screen and (max-width:360px) {
#frame {
	width: 100%;
	height: 100vh
}
}
#frame #sidepanel {
	float: left;
	min-width: 280px;
	max-width: 340px;
	width: 34%;
	height: 100%;
	    background: #e42829;
	color: #f5f5f5;
	overflow: hidden;
	position: relative
}
#frame #sidepanel #profile {
	width: 80%;
	margin: 0 auto
}

@media screen and (max-width:735px) {
#frame #sidepanel {
	width: 58px;
	min-width: 58px
}
#frame #sidepanel #profile {
	width: 100%;
	margin: 0 auto;
	padding: 5px 0 0;
	background: #e42829
}
}
#frame #sidepanel #profile.expanded .wrap {
	height: 210px;
	line-height: initial
}
#frame #sidepanel #profile.expanded .wrap p {
	margin-top: 20px
}
#frame #sidepanel #profile.expanded .wrap i.expand-button {
	-moz-transform: scaleY(-1);
	-o-transform: scaleY(-1);
	-webkit-transform: scaleY(-1);
	transform: scaleY(-1);
	filter: FlipH;
	-ms-filter: "FlipH"
}
#frame #sidepanel #profile .wrap {
	height: 60px;
	line-height: 60px;
	overflow: hidden;
	text-align: center;
	-moz-transition: .3s height ease;
	-o-transition: .3s height ease;
	-webkit-transition: .3s height ease;
	transition: .3s height ease
}

@media screen and (max-width:735px) {
#frame #sidepanel #profile .wrap {
	height: 55px
}
}
#frame #sidepanel #profile .wrap img {
	width: 60px;
	padding: 3px;
	height: auto;
	float: left;
	cursor: pointer;
	-moz-transition: .3s border ease;
	-o-transition: .3s border ease;
	-webkit-transition: .3s border ease;
	transition: .3s border ease
}

@media screen and (max-width:735px) {
#frame #sidepanel #profile .wrap img {
	width: 40px;
	margin-left: 4px
}
#frame #sidepanel #profile .wrap p {
	display: none
}
}
#frame #sidepanel #profile .wrap img.away {
	border: 2px solid #f1c40f
}
#frame #sidepanel #profile .wrap img.busy {
	border: 2px solid #e74c3c
}
#frame #sidepanel #profile .wrap img.offline {
	border: 2px solid #95a5a6
}
#frame #sidepanel #profile .wrap p {
	float: left;
	margin-left: 15px
}
#frame #sidepanel #profile .wrap i.expand-button {
	float: right;
	margin-top: 23px;
	font-size: .8em;
	cursor: pointer;
	color: #e42829
}
#frame #sidepanel #profile .wrap #status-options {
	position: absolute;
	opacity: 0;
	visibility: hidden;
	width: 150px;
	margin: 70px 0 0;
	border-radius: 6px;
	z-index: 99;
	line-height: initial;
	background: #e42829;
	-moz-transition: .3s all ease;
	-o-transition: .3s all ease;
	-webkit-transition: .3s all ease;
	transition: .3s all ease
}

@media screen and (max-width:735px) {
#frame #sidepanel #profile .wrap i.expand-button {
	display: none
}
#frame #sidepanel #profile .wrap #status-options {
	width: 58px;
	margin-top: 57px
}
}
#frame #sidepanel #profile .wrap #status-options.active {
	opacity: 1;
	visibility: visible;
	margin: 75px 0 0
}

@media screen and (max-width:735px) {
#frame #sidepanel #profile .wrap #status-options.active {
	margin-top: 62px
}
}
#frame #sidepanel #profile .wrap #status-options:before {
	content: '';
	position: absolute;
	width: 0;
	height: 0;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-bottom: 8px solid #e42829;
	margin: -8px 0 0 24px
}
#frame #sidepanel #profile .wrap #status-options ul {
	overflow: hidden;
	border-radius: 6px
}
#frame #sidepanel #profile .wrap #status-options ul li {
	padding: 15px 0 30px 18px;
	display: block;
	cursor: pointer
}

@media screen and (max-width:735px) {
#frame #sidepanel #profile .wrap #status-options:before {
	margin-left: 23px
}
#frame #sidepanel #profile .wrap #status-options ul li {
	padding: 15px 0 35px 22px
}
}
#frame #sidepanel #profile .wrap #status-options ul li:hover {
	background: #496886
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
	position: absolute;
	width: 10px;
	height: 10px;
	border-radius: 50%;
	margin: 5px 0 0
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
	content: '';
	position: absolute;
	width: 14px;
	height: 14px;
	margin: -3px 0 0 -3px;
	background: 0 0;
	border-radius: 50%;
	z-index: 0
}
#frame #sidepanel #profile .wrap #status-options ul li p {
	padding-left: 12px
}

@media screen and (max-width:735px) {
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
	width: 14px;
	height: 14px
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
	height: 18px;
	width: 18px
}
#frame #sidepanel #profile .wrap #status-options ul li p {
	display: none
}
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
	background: #2ecc71
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
	border: 1px solid #2ecc71
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
	background: #f1c40f
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
	border: 1px solid #f1c40f
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
	background: #e74c3c
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
	border: 1px solid #e74c3c
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
	background: #95a5a6
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
	border: 1px solid #95a5a6
}
#frame #sidepanel #profile .wrap #expanded {
	padding: 100px 0 0;
	display: block;
	line-height: initial!important
}
#frame #sidepanel #profile .wrap #expanded label {
	float: left;
	clear: both;
	margin: 0 8px 5px 0;
	padding: 5px 0
}
#frame #sidepanel #profile .wrap #expanded input {
	border: none;
	margin-bottom: 6px;
	background: #e42829;
	border-radius: 3px;
	color: #f5f5f5;
	padding: 7px;
	width: calc(100% - 43px)
}
#frame #sidepanel #profile .wrap #expanded input:focus {
	outline: 0;
	background: #e42829
}
#frame #sidepanel #search {
	border-top: 1px solid #e42829;
	border-bottom: 1px solid white;
	font-weight: 300
}
#frame #sidepanel #search label {
	position: absolute;
	margin: 10px 0 0 20px
}
#frame #sidepanel #search input {
	padding: 10px 0 10px 46px;
	width: 100%;
	border: none;
	background: #e42829;
	color: #f5f5f5
}
#frame #sidepanel #search input:focus {
	outline: 0;
	background: #e42829
}
#frame #sidepanel #search input::-webkit-input-placeholder {
color:#f5f5f5
}
#frame #sidepanel #search input::-moz-placeholder {
color:#f5f5f5
}
#frame #sidepanel #search input:-ms-input-placeholder {
color:#f5f5f5
}
#frame #sidepanel #search input:-moz-placeholder {
color:#f5f5f5
}
#frame #sidepanel #contacts {
	height: calc(100% - 100px);
	overflow-y: scroll;
	overflow-x: hidden
}

@media screen and (max-width:735px) {
#frame #sidepanel #search {
	display: none
}
#frame #sidepanel #contacts {
	height: calc(100% - 149px);
	overflow-y: scroll;
	overflow-x: hidden
}
#frame #sidepanel #contacts::-webkit-scrollbar {
display:none
}
}
#frame #sidepanel #contacts.expanded {
	height: calc(100% - 334px)
}
#frame #sidepanel #contacts::-webkit-scrollbar {
width:8px;
background:#2c3e50
}
#frame #sidepanel #contacts::-webkit-scrollbar-thumb {
background-color:#243140
}
#frame #sidepanel #contacts ul li.contact {
	position: relative;
	padding: 10px 0 15px;
	font-size: .9em;
	cursor: pointer;
	border-bottom: 2px solid white
}
#frame #sidepanel #contacts ul li.contact.active, #frame #sidepanel #contacts ul li.contact:hover {
	background: white;
	color:black;
	border-bottom: 2px solid white;
}
#frame #sidepanel #contacts ul li.contact.active {
	border-right: 5px solid white
}
#frame #sidepanel #contacts ul li.contact.active span.contact-status {
	border: 2px solid  white !important
}
#frame #sidepanel #contacts ul li.contact .wrap {
	width: 88%;
	margin: 0 auto;
	position: relative
}

@media screen and (max-width:735px) {
#frame #sidepanel #contacts ul li.contact {
	padding: 6px 0 46px 8px
}
#frame #sidepanel #contacts ul li.contact .wrap {
	width: 100%
}
}
#frame #sidepanel #contacts ul li.contact .wrap span {
	position: absolute;
	left: 0;
	margin: -2px 0 0 -2px;
	width: 10px;
	height: 10px;
	border-radius: 50%;
	border: 2px solid #2c3e50;
	background: #95a5a6
}
#frame #sidepanel #contacts ul li.contact .wrap span.online {
	background: #2ecc71
}
#frame #sidepanel #contacts ul li.contact .wrap span.away {
	background: #f1c40f
}
#frame #sidepanel #contacts ul li.contact .wrap span.busy {
	background: #e74c3c
}
#frame #sidepanel #contacts ul li.contact .wrap img {
	width: 40px;
	border-radius: 50%;
	float: left;
	margin-right: 10px
}
#frame #sidepanel #contacts ul li.contact .wrap .meta {
	padding: 5px 0 0;
	height: 50px
}

@media screen and (max-width:735px) {
#frame #sidepanel #contacts ul li.contact .wrap img {
	margin-right: 0
}
#frame #sidepanel #contacts ul li.contact .wrap .meta {
	display: none
}
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .name {
	font-weight: 600;
	text-transform: capitalize
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
	margin: 5px 0 0;
	padding: 0 0 1px;
	font-weight: 400;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	-moz-transition: 1s all ease;
	-o-transition: 1s all ease;
	-webkit-transition: 1s all ease;
	transition: 1s all ease
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
	position: initial;
	border-radius: initial;
	background: 0 0;
	border: none;
	padding: 0 2px 0 0;
	margin: 0 0 0 1px;
	opacity: .5
}
#frame #sidepanel #bottom-bar {
	position: absolute;
	width: 100%;
	bottom: 0
}
#frame #sidepanel #bottom-bar button {
	float: left;
	border: none;
	width: 50%;
	padding: 10px 0;
	background: #e42829;
	color: #f5f5f5;
	cursor: pointer;
	font-size: .85em
}
#frame #sidepanel #bottom-bar button:focus {
	outline: 0
}
#frame #sidepanel #bottom-bar button:nth-child(1) {
	border-right: 1px solid #2c3e50
}
#frame #sidepanel #bottom-bar button:hover {
	background: #e42829
}
#frame #sidepanel #bottom-bar button i {
	margin-right: 3px;
	font-size: 1em
}

@media screen and (max-width:735px) {
#frame #sidepanel #bottom-bar button {
	float: none;
	width: 100%;
	padding: 15px 0
}
#frame #sidepanel #bottom-bar button:nth-child(1) {
	border-right: none;
	border-bottom: 1px solid #2c3e50
}
#frame #sidepanel #bottom-bar button i {
	font-size: 1.3em
}
#frame #sidepanel #bottom-bar button span {
	display: none
}
}
#frame .content {
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
  
	float: right;
	width: 66%;
	height: 100%;
	overflow: hidden;
	position: relative
}

@media screen and (max-width:735px) {
#frame .content {
	width: calc(100% - 58px);
	min-width: 300px!important
}
}
#frame .content .contact-profile {
	padding-top: 5px;
	width: 100%;
	height: 60px;
	line-height: 60px;
	background: #e42829
}
#frame .content .contact-profile img {
	width: 40px;
	border-radius: 50%;
	float: left;
	margin: 9px 12px 0 9px
}
#frame .content .contact-profile h3 {
	font-family: 'Julius Sans One', sans-serif;
	margin: 0!important;
	padding-top: 12px;
	text-transform: capitalize;
	color: white
}
#frame .content .contact-profile p {
	float: left
}
#frame .content .contact-profile .social-media {
	float: right
}
#frame .content .contact-profile .social-media i {
	margin-left: 14px;
	cursor: pointer
}
#frame .content .contact-profile .social-media i:nth-last-child(1) {
	margin-right: 20px
}
#frame .content .contact-profile .social-media i:hover {
	color: #e42829
}
#frame .content .messages {
	height: auto;
	min-height: calc(100% - 93px);
	max-height: calc(100% - 93px);
	overflow-y: scroll;
	overflow-x: hidden
}
#frame .content .messages::-webkit-scrollbar {
width:8px;
background:0 0
}
#frame .content .messages::-webkit-scrollbar-thumb {
background-color:rgba(0,0,0,.3)
}
#frame .content .messages ul li {
	display: inline-block;
	clear: both;
	margin: 15px 15px 5px;
	width: calc(100% - 25px);
	font-size: .9em
}
#frame .content .messages ul li:nth-last-child(1) {
	margin-bottom: 20px
}
#frame .content .messages ul li.sent img {
	margin: 6px 8px 0 0
}
#frame .content .messages ul li.sent p {
	background: #e42829;
	color: #f5f5f5
}
#frame .content .messages ul li.replies img {
	float: right;
	margin: 6px 0 0 8px
}
#frame .content .messages ul li.replies p {
	background: #f5f5f5;
	float: right
}
#frame .content .messages ul li img {
	width: 22px;
	border-radius: 50%;
	float: left
}
#frame .content .messages ul li p {
	display: inline-block;
	padding: 10px 15px;
	border-radius: 20px;
	max-width: 205px;
	line-height: 130%
}

@media screen and (min-width:735px) {
#frame .content .messages ul li p {
	max-width: 300px
}
}
#frame .content .message-input {
	position: absolute;
	bottom: 0;
	width: 100%;
	z-index: 99
}
#frame .content .message-input .wrap {
	position: relative
}
#frame .content .message-input .wrap input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  float: left;
  border: none;
  width: 100%;
  padding: 11px 32px 10px 8px;
  font-size: 16px;
     color: black;
    background: #f5f5f5;
    border-radius: 21px;
}
#frame .content .message-input .wrap input:focus {
	outline: 0
}
#frame .content .message-input .wrap .attachment {
	position: absolute;
	right: 30px;
	z-index: 4;
	margin-top: 10px;
	font-size: 1.7em;
	color: #e42829;
	cursor: pointer;
	font-weight: bold
}

@media screen and (max-width:735px) {
#frame .content .messages {
	max-height: calc(100% - 105px)
}
#frame .content .message-input .wrap input {
	padding: 15px 32px 16px 8px
}
#frame .content .message-input .wrap .attachment {
	margin-top: 17px;
	right: 65px
}
}
#frame .content .message-input .wrap .attachment:hover {
	opacity: 1
}
#frame .content .message-input .wrap button {
	float: right;
	border: none;
	width: 50px;
	padding: 12px 0;
	cursor: pointer;
	background: #e42829;
	color: #f5f5f5
}

@media screen and (max-width:735px) {
#frame .content .message-input .wrap button {
	padding: 16px 0
}
}
#frame .content .message-input .wrap button:hover {
	background: #e42829
}
#frame .content .message-input .wrap button:focus {
	outline: 0
}
#userlist {
	list-style: none;
	padding: 0
}
.wrap {
	width: 100% !important;
	margin: 0px !important;
}
#profileImage {
	width: 50px;
	height: 50px;
	border-radius: 50%;
	
    border: 1px solid #e42829;
	background: white;
	font-size: 18px;
	color: #161616;
	text-align: center;
	line-height: 52px;
	text-transform: uppercase;
	float: left;
	margin: 0px 14px 0px 6px;
}


</style>
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">

    
    <!-- top navigation -->
    <div class="top_nav" style="margin:0px">
      <div class="nav_menu">
        <nav>
          <div class="navbar nav_title" style="border: 0px !important;"> <a class="site_title"><i><img src="{{url('/')}}/images1/master it logo.png" alt="logo"></i> <span></span></a> </div>
        
          
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
<!-- page content -->
<input type="text" hidden id="admin_id" value="{{session('id')}}">
<div class="right_col" role="main" style="margin:0px">
      <div class="page-title">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Mentor Dashboard</h3>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="bgcolor">
	  <div id="frame">
           <div id="sidepanel">
               <div id="profile">
                   <div class="wrap">
                       <h1 style="padding-top: 10px;   text-transform: capitalize; margin:0px">Student List</h1>
                   </div>
               </div>
               <div id="search">
                   <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                   <input type="text" placeholder="Search contacts..." />
               </div>
               <div id="contacts">
                   <ul id="userlist">
                            @php
                            $count = 0;
                            @endphp
                        @if(count($user)>0)
                       @foreach($user as $users)
                       
                       @if($count==0)
                       <li onclick="getMessage(this.id)" id="{{$users->user_id}}" class="contact active">
                   
                           @else
                       <li onclick="getMessage(this.id)" id="{{$users->user_id}}" class="contact">
                           @endif
                           @php
                           $count++;
                            $student = DB::select("select * from signup where pk_id = '$users->user_id'");
                           @endphp
                           
                           <div class="wrap">
                                 <div id="profileImage"></div>
                               <div class="meta">
                                   <p id="username" class="name">@if(count($student)>0){{$student[0]->fname}} {{$student[0]->lname}}@endif</p>
                                   <p class="preview">{{$users->lastmessage}}</p>
                               </div>
                           </div>
                       </li>
                        @endforeach
                       @endif
                       
                   </ul>
               </div>
           </div>
           <div class="content">
               <div class="contact-profile">
                    <div id="profileImage" class="asd">{{$user[0]->user_id}}</div>
                   <h3 id="inchatname">Mentor</h3>
               </div>
               <div id="msg" class="messages" >
		
				
		
		</div>
               <div class="message-input">
               
                   <div class="wrap">
                   <input type="text" placeholder="Write your message..." />
                   <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
                 
                   </div>
                   
               </div>
           </div>
       </div>
      </div>
    </div>
    <!-- /page content --> 
<footer>
      <div class="pull-right"> Copyright © 2019-2020 Master IT. All rights reserved. </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content --> 
  </div>
</div>

<!-- jQuery --> 


<script src="{{url('/')}}/js1/jquery.min.js"></script> 
 <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<!-- Bootstrap --> 
<script src="{{url('/')}}/js1/bootstrap.min.js"></script> 
<script src="{{url('/')}}/js1/custom.min.js"></script>
 <script>  
 
 var pusher = new Pusher('081bae5046917cee39dc', {
              cluster: 'ap2',
              authEndpoint: './auth-pusher'
            
            });
            
            var userId = document.getElementById('admin_id').value;
            var selectedUser=$('#userlist li.active').attr('id');
            var socketId = null;
            pusher.connection.bind('connected', function() {
              socketId = pusher.connection.socket_id;
              console.log(socketId);
            });
            
            var channel = pusher.subscribe('private-admin-channel');
            console.log(channel);
            channel.bind('my-event', function(data) {
                  console.log('working');
              if(data.from == $('#userlist li.active').attr('id'))
              {
                  var ul = document.getElementById("receive");

              $('<li class="replies"><p>' + data.message + '</p></li>').appendTo($('.messages ul'));

              $(".messages").animate({ scrollTop: document.getElementById("msg").scrollHeight }, "fast");
              }
              
            });
            
/*  getting very first message of user*/

            

            url = "../admin/get-messages/"+$('#userlist li.active').attr('id');
        
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
               var data = this.responseText;
document.getElementById("msg").innerHTML = data;
$(".messages").animate({ scrollTop: document.getElementById("msg").scrollHeight }, "fast");

          }
      };
      xmlhttp.open("GET", url, true);
      xmlhttp.send();

// End of getting first message of user

            function getMessage($id)
            {
               
                var a =$('#userlist li.active').hasClass('active');
                
                if(a)
                {
                    $('#userlist li.active').removeClass('active');
                }
              
                var a = document.getElementById($id).classList.add("active");

                var username = $('#userlist li.active #username').html();
                
                
                 var name = $('#userlist li.active #profileImage').html();
                 document.getElementsByClassName("asd")[0].innerHTML = name;
                document.getElementById('inchatname').innerHTML = username;
                

                selectedUser = $id;
                
        url = "../admin/get-messages/"+$id;
      
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 var data = this.responseText;
document.getElementById("msg").innerHTML = data;
$(".messages").animate({ scrollTop: document.getElementById("msg").scrollHeight }, "fast");
                 
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();

              
                
            }


$(".messages").animate({ scrollTop: $(document).height() }, "fast");

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	
		var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       console.log( this.responseText);
    }
};
var data = new FormData();
 data.append('message', message);
 data.append('selected_user',selectedUser);


 var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  message = message;
  
    // xmlhttp.open("POST", "/../send-customer-message", true);
      
    //     xmlhttp.send(data,CSRF_TOKEN);

  $.ajax({
        /* the route pointing to the post function */
        url: "/send-customer-message",
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, message:message, selected_user:selectedUser,

     
  
      },
        /* remind that 'data' is the response of the AjaxController */
        success: function (data) { 
          window.location.href = data;
        }
        
    }); 
    
 
    
	$('<li class="sent"><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
	window.stop();
};

$('.submit').click(function() {
     event.preventDefault();
  newMessage();
    window.stop();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
       event.preventDefault();
    newMessage();
   window.stop();
  }
});


  input = document.getElementById('chatsearch');
var list = document.querySelectorAll('.contact');

input.addEventListener('keyup', function(){
  
text = input.value;
//console.log(list[2].getElementsByClassName("name")[0].innerText.toUpperCase());

  for(var i = 0; i < list.length; i++){
    if (!list[i].getElementsByClassName("name")[0].innerText.toUpperCase().includes(text.toUpperCase())) {
        list[i].style.display = 'none';
    } else {
        list[i].style.display = 'block';
    }
  }
});

$(document).ready(function(){
  var firstName = $('#username').text();
  var lastName = $('#lastName').text();
  var intials = $('#username').text().charAt(0) + $('#lastName').text().charAt(0);
  var profileImage = $('#profileImage').text(intials);
})

</script>
</body>
</html>