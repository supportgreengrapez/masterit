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
<link href="{{url('/')}}/css3/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

</head>

<body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="{{url('/')}}/student/skill"><img src="{{url('/')}}/images3/master it logo (1).png" alt="logo" width="31%"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right menu" id="navbarright">
        <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Session()->get('firstname')}} {{ Session()->get('lastname')}} <span class=" fa fa-angle-down"></span> </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="{{URL('/')}}/student/profile/{{ Session()->get('id')}}"> Profile</a></li>
            <li><a href="{{URL('/')}}/student/card/{{ Session()->get('id')}}"> Setting</a></li>
            <li><a href="{{URL('/')}}/student/password/{{ Session()->get('id')}}">Change Password</a></li>
            <li><a href="{{URL('/')}}/student/payment/{{ Session()->get('id')}}"> Payments</a></li>
            <li><a href="{{URL('/')}}/logouts"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-collapse --> 
  
</nav>
<div class="bordertwonav">
  <div class="row"> </div>
</div>
@yield('content')
<div class="scroll-top-wrapper "> <span class="scroll-top-inner"> <i class="fa fa-2x fa-arrow-circle-up"></i> </span> </div>
</body>
<!-- jQuery --> 
<script src="{{url('/')}}/js1/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="{{url('/')}}/js1/bootstrap.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="{{url('/')}}/js3/custom.js"></script>
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
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
    
    $("#stop").css("display", "block");
$("#start").css("display", "none");
    
}



/* Start button */
start.onclick = timer;

/* Stop button */
stop.onclick = function() {
  document.getElementById('counter').value = hours*60*60 + minutes*60 + seconds;
    clearTimeout(t);
    started = 0;

}

/* Clear button */
clear.onclick = function() {
    h1.textContent = "00:00:00";
    seconds = 0; minutes = 0; hours = 0;
}
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
  
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
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



<script>
    var options = {
  valueNames: ['name', 'city']
};
var hackerList = new List('hacker-list', options);

// Assigning references to the filter buttons
var filterCityButton = document.getElementById("filter");
var removeFiltersButton = document.getElementById("removeFilters");

// When the filter button is clicked. The list is filtered by calling the filter function of the list object and passing in a function that accepts the list items.
filterCityButton.addEventListener("click", function() {
  hackerList.filter(function(item) {
    if (item.values().city == "Edmonton") {
      return true;
    } else {
      return false;
    }
  }); // Only items that have Edmonton as the city.
});

// When the remove filter button is clicked, the filters are removed by calling the filter function once again with no parameters.
removeFiltersButton.addEventListener("click", function() {
  hackerList.filter();
});
</script>
</html>
