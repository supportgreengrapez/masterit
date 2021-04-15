@extends('Student.layout.student')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="headingsd1">
        <h2>Contact With</h2>
      </div>
    </div>
  </div>
  @if(count($result)>0)
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12"> <a href="{{URL('/')}}/client/project/pay/escrow/{{$id}}/{{$skills}}/Live Video Call">
      <div class="cardsout">
        <div class="cardsinimg"> <img src="{{url('/')}}/images2/11.png" alt="img"> </div>
        <div class="cardsintext">
          <p>Live Video Call</p>
          <span>{{$result[0]->price}}$/Per Hour</span> </div>
      </div>
      </a> </div>
    <div class="col-lg-4 col-md-4 col-sm-12"> <a href="{{URL('/')}}/student/chat/{{$id}}">
      <div class="cardsout">
        <div class="cardsinimg"> <img src="{{url('/')}}/images2/22.png" alt="img"> </div>
        <div class="cardsintext">
          <p>Live Chat</p>
          <span>{{$result[0]->price}}$/Per Hour</span> </div>
      </div>
      </a> </div>
    <div class="col-lg-4 col-md-4 col-sm-12"> <a href="{{URL('/')}}/client/project/pay/escrow/{{$id}}/{{$skills}}/Live Audio Call">
      <div class="cardsout" style="margin-bottom:50px;">
        <div class="cardsinimg"> <img src="{{url('/')}}/images2/33.png" alt="img" style="width:17% !important;"> </div>
        <div class="cardsintext">
          <p>Live Audio Call</p>
          <span>{{$result[0]->price}}$/Per Hour</span> </div>
      </div>
      </a> </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="headingsd1">
        <h2>One Time Review</h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12"> <a href="{{URL('/')}}/client/project/pay/escrow/{{$id}}/{{$skills}}/Video Review">
      <div class="cardsout">
        <div class="cardsinimg"> <img src="{{url('/')}}/images2/11.png" alt="img"> </div>
        <div class="cardsintext">
          <p>Video Review</p>
          
          <span>{{$video}}$/Per Message</span> </div>
      </div>
      </a> </div>
    <div class="col-lg-4 col-md-4 col-sm-12"> <a href="{{url('/')}}/client/project/pay/escrow/{{$id}}/{{$skills}}/Chat Review">
      <div class="cardsout">
        <div class="cardsinimg"> <img src="{{url('/')}}/images2/22.png" alt="img"> </div>
        <div class="cardsintext">
          <p>Chat Review</p>
          <span>{{$chat}}$/Per Message</span> </div>
      </div>
      </a> </div>
    <div class="col-lg-4 col-md-4 col-sm-12"> <a href="{{URL('/')}}/client/project/pay/escrow/{{$id}}/{{$skills}}/Audio Review">
      <div class="cardsout" style="margin-bottom:50px;">
        <div class="cardsinimg"> <img src="{{url('/')}}/images2/33.png" alt="img" style="width:17% !important;"> </div>
        <div class="cardsintext">
          <p>Audio Review</p>
          <span>{{$audio}}$/Per Message</span> </div>
      </div>
      </a> </div>
  </div>
  @endif
</div>
@endsection