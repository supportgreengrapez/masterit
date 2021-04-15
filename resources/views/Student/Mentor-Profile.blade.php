@extends('Student.layout.student')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4">
      <div class="headingsd2">
        <h2>Mentor Profile</h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
    @if(count($result2)>0)
                @foreach($result2 as $results)
      <div class="mentorprofile"> <img src="{{URL('/')}}/storage/images/{{$results->image}}" class="img-circle" alt="image"><br>
        <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
        @endforeach
                @endif
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
    @if(count($result)>0)
                @foreach($result as $results)
      <div class="mentorprofile2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-user fontcol"></i> <span>Name</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->fname}} {{$results->lname}}</span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-wrench fontcol"></i> <span>Email</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->username}}</span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-envelope fontcol"></i> <span>Country</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->country}}</span> </div>
          </div>
        </div>
      </div>

      @endforeach
                @endif
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    @if(count($result2)>0)
                @foreach($result2 as $results)
      <div class="mentorprofile2">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">
            <div class="fontawe texalign"> <i class="fas fa-globe fontcol"></i> <span>Skill Set</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->skill}}</span> </div>
          </div>
        </div>
        <div class="row">
                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-graduation-cap fontcol"></i> <span>Higher Education</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->qualification}}</span> </div>
          </div>
        </div>
        <div class="row">
                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign "> <i class="fas fa-clock fontcol"></i> <span>Time of Availbility</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->time}}</span> </div>
          </div>
        </div>
        <div class="row">
                 <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-dollar-sign fontcol"></i> <span>Price</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span> $ {{$results->price}} per hour</span> </div>
          </div>
        </div>
        <div class="row">
                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-certificate fontcol"></i> <span>Experience</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->experince}}</span> </div>
          </div>
        </div>
        <div class="row">
                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-user-tie fontcol"></i> <span>Expertise</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->experties}}</span> </div>
          </div>
        </div>
        <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1">

            <div class="fontawe texalign"> <i class="fas fa-trophy fontcol"></i> <span>Certification & Awards</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->certificate}}</span> </div>
          </div>
        </div>
      </div>
      @endforeach
                @endif
    </div>
  </div>
  <div class="row">
  <div class="col-lg-12">

  @if(count($result3)>0)
                @foreach($result3 as $results)
      <div class="mentorprofile2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-building fontcol"></i> <span>School</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->school}}</span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-graduation-cap fontcol"></i> <span>Degree</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->degree}}</span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="far fa-clock fontcol"></i> <span>Start Date</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->start}}</span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="far fa-clock fontcol"></i> <span>End Date</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->end}}</span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-graduation-cap fontcol"></i> <span>Area of Study</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->area_study}}</span> </div>
          </div>
        </div>
      </div>
      @endforeach
                @endif
  </div>

  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="hirebutton">
      @if(count($result2)>0)
                @foreach($result2 as $results)
        <form method="post" action = "{{url('/')}}/student/hire/mentor/{{$results->user_id}}/{{$skills}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
        <button type="submit" class="button2">Hire</button>
        </form>
        @endforeach
                @endif
      </div>
    </div>
  </div>
</div>
@endsection