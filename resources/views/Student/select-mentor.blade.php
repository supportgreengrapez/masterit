@extends('Student.layout.student')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="headingsd1">
        <h2>Select Mentor</h2>
      </div>
    </div>
  </div>
  <div class="row">
      
  @if(count($result)>0)
        @foreach($result as $results)
    <div class="col-lg-4 col-md-4 col-sm-12"> <a href="{{URL('/')}}/select/mentor/view/{{$results->pk_id}}/{{$skills}}">
      <div class="texbox2">
        <p>{{$results->description}}</p>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12"> <img src="{{URL('/')}}/storage/images/{{$results->image}}" class="img-circle" alt="image"> </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="namespanset">
              <h4>{{$results->fname}} {{$results->lname}}</h4>
              <span>Hourly rate ${{$results->price}}</span>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      </a> </div>
      @endforeach
      @else
      
      <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="headingsd1">
        <h2>Mentor is not available for this skill</h2>
      </div>
    </div>
  </div>
      
      @endif
      
   </div>
  
</div>
@endsection