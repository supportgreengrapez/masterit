<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{url('/')}}/admin/login"  enctype="multipart/form-data">
            {{ csrf_field() }}
                @if($errors->any())
                <div class="alert alert-danger"> <strong>Danger!</strong> {{$errors->first()}} </div>
                @endif
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password"/>
              </div>
              <div>
                <button type="submit" class="btn btn-success submit">Log In</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <h1><i><img src="{{url('/')}}/images2/master it logo.png" alt="logo" style="max-width:250px;"></i></h1>
                  <p>Copyright © 2017-2018 Master IT. All rights reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
