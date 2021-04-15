@extends('layout.appclient')
@section('content')

<div class="container">
    <div class="row">
      <div class="board"> 
        <div class="board-inner">
          <ul class="nav nav-tabs" id="myTab">
            <div class="liner"></div>
            <li  class="active"> <a href="#home" data-toggle="tab" title="Audio Message Review"> <span class="round-tabs one"> Mentor </span> </a></li>
            <li><a href="#messages" data-toggle="tab" title="Video Message Review"> <span class="round-tabs three"> Student </span> </a> </li>
          </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2">
        <div class="tab-content">
          <div class="tab-pane fade in active" id="home">
          <div class="mobile-pull">
            <article role="login"> <img src="{{url('/')}}/images/Untitled-13.png" alt="mentor" style="width:100%;">
              <h3 class="text-center">Login</h3>
              <form class="signup" method="post" action = "{{url('/')}}/mentor_login" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if($errors->any())
                <div class="alert alert-danger"> <strong></strong> {{$errors->first()}} </div>
                @endif
                @if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
                <div class="loginformpadding">
                  <div class="loginforborderbottom">
                    <div class="input-group margin"> <span class="input-group-addon"><i class="fa fa-user" style="font-size: 18px;padding: 1px;color:#e31e24;
"></i></span>
                      <input   type="email" class="form-control formpad" name="username" value="" placeholder="User name">
                    </div>
                    <div class="input-group margin"> <span class="input-group-addon"><i class="fas fa-lock" style="
    font-size: 18px;
    padding: 1px;color:#e31e24;
"></i></span>
                      <input   type="password" class="form-control formpad" name="password" value="" placeholder="Password">
                    </div>
                    <div class="input-group">
                      <div class="checkbox">
                        <label>
                          <input id="login-remember" type="checkbox" name="remember" value="1">
                          Remember me </label>
                        <div style="float:right; position: relative;margin-left:30px; "><a href="{{URL('/')}}/password/reset" style="color:black !important;background:none !important;">Forgot password?</a></div>
                      </div>
                    </div>
                    <div class="input-group bottom">
                      <div class="checkbox">
                        <div><a href="{{url('/')}}/signup" style="color:black !important;background:none !important;">Create Account</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="loginbutton">
                  <button type="submit" class="btn loginbtn  btn-responsive"  aria-expanded="false"> LOGIN </button>
                </div>
              </form>
            </article>
          </div>
          </div>
          <div class="tab-pane fade" id="messages">
            
            <div class="mobile-pull">
              <article role="login"> <img src="{{url('/')}}/images/Untitled-14.png" alt="mentor" style="width:100%;">
                <h3 class="text-center">Login</h3>
                 <form class="signup" method="post" action = "{{url('/')}}/student_login" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if($errors->any())
                <div class="alert alert-danger"> <strong></strong> {{$errors->first()}} </div>
                @endif
                
                  <div class="loginformpadding">
                    <div class="loginforborderbottom">
                      <div class="input-group margin"> <span class="input-group-addon"><i class="fa fa-user" style="
    font-size: 18px;
    padding: 1px;color:#e31e24;
"></i></span>
                        <input   type="text" class="form-control formpad" name="username" value="" placeholder="User name">
                      </div>
                      <div class="input-group margin"> <span class="input-group-addon"><i class="fas fa-lock" style="
    font-size: 18px;
    padding: 1px;color:#e31e24;
"></i></span>
                        <input   type="password" class="form-control formpad" name="password" value="" placeholder="Password">
                      </div>
                      <div class="input-group">
                        <div class="checkbox">
                          <label>
                            <input id="" type="checkbox" name="remember" value="1">
                            Remember me </label>
                          <div style="float:right; ; position: relative;margin-left:30px; "><a href="{{URL('/')}}/password/reset" style="color:black !important;background:none !important;">Forgot password?</a></div>
                        </div>
                      </div>
                      <div class="input-group bottom">
                      <div class="checkbox">
                        <div><a href="{{url('/')}}/signup" style="color:black !important;background:none !important;">Create Account</a></div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="loginbutton">
                    <button type="submit" class="btn loginbtn  btn-responsive"  aria-expanded="false"> LOGIN </button>
                  </div>
                </form>
              </article>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection