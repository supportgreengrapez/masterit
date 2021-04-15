<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<link rel="shortcut icon" href="{{url('/')}}/images3/master it logo.png">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Master IT">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Master IT">
<title>Master IT</title>
<link rel="shortcut icon" href="{{url('/')}}/images/favicon.png"/>
<link href="{{url('/')}}/css3/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
<link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" />
<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<link href="{{url('/')}}/css3/chat.css" type="text/css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#"><img src="{{url('/')}}/images3/master it logo (1).png" alt="logo" width="31%"></a> </div>
  </div>
  <!-- /.container-collapse --> 
  
</nav>
<div class="bordertwonav">
  <div class="row"> </div>
</div>
<div class="bg">
<div class="container">
  <div class="row">
  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <form method="post" action = "" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="Tracktime">
              <div class="text-center">
                <h1>
                  <time>00:00:00</time>
                </h1>
              </div>
            </div>
          </div>
          <div class="col-lg-1 col-sm-12 col-xs-12">
            <div class="playbutton"> <a  class="btn btn-light resetbutton" id="start">start</a> </div>
          </div>
          <div class="col-lg-1 col-sm-12 col-xs-12">
            <div class="playbutton">
              <button type="button" class="btn btn-light resetbutton" id="stop">stop</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    @php
    
        $mentor = DB::select("select* from signup,mentor where signup.pk_id= '$id' and mentor.user_id=signup.pk_id  ");
    @endphp
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">
              <input type="text" hidden id="user_id" value="{{session('id')}}">
          <div id="frame">
            <div id="sidepanel">
              <div id="profile">
                <div class="wrap">
                <img id="profile-img" src="{{URL('/')}}/storage/images/{{$mentor[0]->image}}" class="img-circle" alt="image" class="img-cust-responsive">
                  <p>{{$mentor[0]->fname}} {{$mentor[0]->lname}}</p>
                </div>
              </div>
              <div id="contacts">
                <ul id="userlist">
                  <!--<li class="contact">-->
                  <!--  <div class="wrap"> <span class="contact-status online"></span> <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />-->
                  <!--    <div class="meta">-->
                  <!--      <p class="name">Louis Litt</p>-->
                  <!--      <p class="preview">You just got LITT up, Mike.</p>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</li>-->
                  <li onclick="getMessage(this.id)" id="{{$id}}" class="contact active">
                    <div class="wrap"><img src="{{URL('/')}}/storage/images/{{$mentor[0]->image}}" class="img-circle" alt="image" class="img-cust-responsive">
                      <div class="meta">
                        <p id="username" class="name">{{$mentor[0]->fname}} {{$mentor[0]->lname}}</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="content">
              <div class="contact-profile"> <img src="{{URL('/')}}/storage/images/{{$mentor[0]->image}}" class="img-circle" alt="image" class="img-cust-responsive">
                <p>{{$mentor[0]->fname}} {{$mentor[0]->lname}}</p>
                <div class="social-media">
				<i><img src="{{URL('/')}}/images/audio.png" alt="audio" style="cursor: not-allowed;"></i>
				<i><img src="{{URL('/')}}/images/chat.png" alt="audio"></i>
				 <i><img src="{{URL('/')}}/images/video.png" alt="audio" style="cursor: not-allowed;"></i>
			</div>
              </div>
              <div id="msg" class="messages">
                  
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
    </div>
  </div>
</div>
</div>

<!-- jQuery --> 

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script >

            var pusher = new Pusher('081bae5046917cee39dc', {
                         cluster: 'ap2',
                         authEndpoint: '../auth-pusher'
                       });
                       var userId = document.getElementById('user_id').value;
            console.log(userId);
                       var socketId = null;
                       pusher.connection.bind('connected', function() {
                         socketId = pusher.connection.socket_id;
                         console.log(socketId);
                          
                       });
                       
                
                       var channel = pusher.subscribe('private-user-channel'+userId);
                       channel.bind('my-event', function(data) {

console.log('working');
                         var ul = document.getElementById("receive");
      
                         $('<li class="replies"><p>' + data.message + '</p></li>').appendTo($('.messages ul'));
                         $(".messages").animate({ scrollTop: document.getElementById("msg").scrollHeight }, "fast");
                         
                       });


   url = "../get-messages/"+$('#userlist li.active').attr('id');
          
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



                       function getMessage($id)
                {
                    selectedUser = $id;
                    
            url = "../get-messages/"+$id;
          
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
    
     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  message = $(".message-input input").val();
  selectedUser = $('#userlist li.active').attr('id');

  $.ajax({
        /* the route pointing to the post function */
        url: "{{URL('/')}}/send-admin-message",
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, message:message, selected_user:selectedUser,

     
  
      },
        /* remind that 'data' is the response of the AjaxController */
        /*success: function (data) { 
         console.log('javascript error tha');

        }*/
    });
    

	$('<li class="sent"><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
		return false;
};

$('.submit').click(function(event) {
     event.preventDefault();
  newMessage();
  return false;
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
  }
});
</script>

<script>


    var h1 = document.getElementsByTagName('h1')[0],
    start = document.getElementById('start'),
    stop = document.getElementById('stop'),
    clear = document.getElementById('clear'),
    seconds = 0, minutes = 0, hours = 0,
    t;
    var started = 0;



function add() {
    seconds++;
    if (seconds >= 60) {
        seconds = 0;
        minutes++;
        if (minutes >= 60) {
            minutes = 0;
            hours++;
        }
    }
    
    h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

    timer();
}
function timer(e) {
  
    if ( !started ||  typeof e == "undefined" ) {
      t = setTimeout(add, 1000);
      started = 1;
    } 
    
}



/* Start button */
start.onclick = timer;

/* Stop button */
stop.onclick = function() {
  document.getElementById('counter').value = (t);
    clearTimeout(t);
    started = 0;

}

/* Clear button */
clear.onclick = function() {
    h1.textContent = "00:00:00";
    seconds = 0; minutes = 0; hours = 0;
}
  </script>
</body>
</html>