@extends('Student.layout.student')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4">
      <div class="headingsd2">
        <h2>Student Profile</h2>
      </div>
    </div>
  </div>
  <div class="row">
  @if(count($result2)>0)
                @foreach($result2 as $results)
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="mentorprofile"> <img src="{{URL('/')}}/storage/images/{{$results->image}}" class="img-circle" alt="image"><br>
        <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="hirebutton"> <a href="{{URL('/')}}/student/profile/edit/{{Session()->get('id')}}" class="button">Edit Profile</a> </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="hirebutton"> <a href="{{URL('/')}}/student/add/education" class="button">Add Education</a> </div>
      </div>
    </div>
    @endforeach
                @endif
    <div class="col-lg-8 col-md-8 col-sm-12">
    @if(count($result)>0)
                @foreach($result as $results)
      <div class="mentorprofile2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-user fontcol"></i> <span>First Name</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->fname}} </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-user fontcol"></i> <span>Last Name</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->lname}}</span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-envelope fontcol"></i> <span>Email Address</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->username}}</span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-globe fontcol"></i> <span>Country</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->country}}</span> </div>
          </div>
        </div>
      </div>
      @endforeach
                @endif
                @if(count($result2)>0)
                @foreach($result2 as $results)
      <div class="mentorprofile2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <i class="fas fa-user fontcol"></i> <span>Interest</span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span>{{$results->skill}}</span> </div>
          </div>
        </div>
      </div>
      @endforeach
                @endif

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
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span><a href="{{url('/')}}/edit_student_education/{{$results->pk_id}}" class="button">Edit</a></span> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="fontawe"> <span><a href="{{url('/')}}/delete_student_education/{{$results->pk_id}}" class="button">Delete</a></span> </div>
          </div>
        </div>
      </div>
      @endforeach
                @endif
    </div>
  </div>
</div>
@endsection