@extends('Student.layout.student')
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
      <div class="hirebutton pull-right">
        <a href="{{URL('/')}}/student/add/card/{{ Session()->get('id')}}" class="button">Add Card</a>
      </div>
    </div>
  </div>
  @if(count($Primary)>0)
                @foreach($Primary as $results)
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4">
      <div class="headingsd2">
        <h2>Primary Card</h2>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <div class="mentorprofile2">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">
            <div class="fontawe texalign"> <i class="fas fa-globe fontcol"></i> <span>Card Type </span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->ctype}}</span> </div>
          </div>
        </div>
        <div class="row">
                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-graduation-cap fontcol"></i> <span>Card Number</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->cnumb}}</span> </div>
          </div>
        </div>
        <div class="row">
                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign "> <i class="fas fa-clock fontcol"></i> <span>Card Holder Name</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->fname}} {{$results->lname}}</span> </div>
          </div>
        </div>
        <div class="row">
                 <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-dollar-sign fontcol"></i> <span>Expiry Date</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->expiry}}</span> </div>
          </div>
        </div>
        <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"><span>
            <a href="{{URL('/')}}//student/card/delete/{{$results->pk_id}}" class="button">Delete</a>
            </span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span><a href="{{URL('/')}}//student/edit/card/{{$results->pk_id}}" class="button2">Edit</a></span> </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  @endforeach
                @endif
    <div class="clearfix"></div>
  
  <div class="clearfix"></div>
  @if(count($Secondary)>0)
                @foreach($Secondary as $results)
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4">
      <div class="headingsd2">
        <h2>Secondary Card</h2>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <div class="mentorprofile2">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">
            <div class="fontawe texalign"> <i class="fas fa-globe fontcol"></i> <span>Card Type </span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->ctype}}</span> </div>
          </div>
        </div>
        <div class="row">
                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-graduation-cap fontcol"></i> <span>Card Number</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->cnumb}}</span> </div>
          </div>
        </div>
        <div class="row">
                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign "> <i class="fas fa-clock fontcol"></i> <span>Card Holder Name</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->fname}} {{$results->lname}}</span> </div>
          </div>
        </div>
        <div class="row">
                 <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-dollar-sign fontcol"></i> <span>Expiry Date</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->expiry}}</span> </div>
          </div>
        </div>
        <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"><span>
            <a href="{{URL('/')}}//student/card/delete/{{$results->pk_id}}" class="button">Delete</a>
            </span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span><a href="{{URL('/')}}//student/edit/card/{{$results->pk_id}}" class="button2">Edit</a></span> </div>
          </div>
        </div>
      </div>
      
  </div>
  
</div>
@endforeach
                @endif
@endsection