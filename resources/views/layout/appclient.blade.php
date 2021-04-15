<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Master IT">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Master IT">
<title>Master IT</title>
<link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{url('/')}}/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="shortcut icon" href="{{url('/')}}/images/favicon.png"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="{{url('/')}}/"><img src="{{url('/')}}/images/favicon.png" alt="logo" width="31%"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right menu" id="navbarright">
        <li class=""><a href="{{url('/')}}/">Home</a></li>
        <li><a href="{{url('/')}}/how_its_work">How it works</a></li>
        <li><a href="{{url('/')}}/FAQ">FAQ</a></li>
        <li><a href="{{url('/')}}/mentor">Our Mentors</a></li>
        <li><a href="{{url('/')}}/about_us">About Us</a></li>
        <li><a href="{{url('/')}}/contact_us">Contact Us</a></li>
        <li><a href="{{url('/')}}/login">Login</a></li>
        <li><a href="{{url('/')}}/signup">Signup</a></li>
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
<div class="bordertwonav">
  <div class="row"> </div>
</div>
<footer>
  <div class="bgfooter">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="row">
            <div class="footulmargin">
              <div class="col-lg-3 col-sm-12">
                <div class="footul">
                  <ul>
                    <li><a href="{{url('/')}}/contact_us">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-sm-12">
                <div class="footul">
                  <ul>
                    <li><a href="#">Pricing</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-12">
                <div class="footul">
                  <ul>
                    <li><a href="{{url('/')}}/how_its_work">How it works</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-sm-12">
                <div class="footul">
                  <ul>
                    <li><a href="{{url('/')}}/FAQ">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
          <div class="footimg"> <a href="index.html"><img src="{{url('/')}}/images/logo.png" alt="logo"> </a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="footinput">
            <h3>Contact Us</h3>
            <div class="input-group">
              <input type="text" id="faq_SearchBox" placeholder="Your Email" class="search form-control" style="border-radius:0px;" />
              <div class="input-group-btn input-group-lg input-group-md">
                <button type="button" class="btn btnsignin  btn-responsive"  aria-expanded="false"> <span class="">Sign In</span> </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="scroll-top-wrapper "> <span class="scroll-top-inner"> <i class="fa fa-2x fa-arrow-circle-up"></i> </span> </div>
</body>
<script src="{{url('/')}}/js/jquery.min.js"></script>
<script src="{{url('/')}}/js/custom.js"></script>
<script src="{{url('/')}}/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=Af-jq1maibPefj-jsfDGs518HjFty8-8-JTGxS36UwtYyg8bw6mzkMJRqMz4L6XSCUCEkybzJNOyhw90"></script>
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
        paypal.Buttons({
            createOrder: function() {
                //SetExpressCheckout URL
                var SETEC_URL = 'https://masterit.world/api/paypal/set-express-checkout';
                return fetch(SETEC_URL).then(function(res) {
                    return res.json();
                }).then(function(data) {
                    return data.token;
                });
            },
            onApprove: function(data) {
                //GetExpresCheckout/DoExpressCheckoutPayment URL
                var EXECUTE_URL = 'https://masterit.world/api/paypal/execute-payment';
                return fetch(EXECUTE_URL, {
                    method: 'post',
                    body: JSON.stringify({
                        paymentID: data.paymentID,
                        payerID: data.payerID
                    })
                });
            },
            onCancel: function(data, actions) {
                console.log('user cancelled-', data);
            },
            onError: function(data, actions) {
                console.log('error occured-s', data);
            }
        }).render('#paypal-button-container');
    </script>
</html>
