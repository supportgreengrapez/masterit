@extends('layout.appclient')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12">
      <div class="row">
        <div class="col-md-5 col-sm-12">
          <div class="searchboxtop">
            <select class="form-control">
                
                <option value="">Search Mentor</option>
                <option value="Danish">Danish</option>
                
                <option value="Kiran">Kiran</option>
                
                <option value="Faizan">Faizan</option>
                
            </select>
          </div>
        </div>
        <div class="col-md-2 col-sm-12">
          <div class="searchbtntop">
            <button type="button" class="btn btn-default btnsearch"> <span class="glyphicon glyphicon-search"></span> </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="topheading">
        <h3>Mentors</h3>
      </div>
    </div>
  </div>
@if(count($result)>0)
  <div class="row">
  
@foreach($result as $results)
    <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="{{URL('/')}}/mentor/view/{{$results->pk_id}}"><div class="texbox2">
        <p>{{$results->description}}</p>
        <div class="row">
            @if(!empty($results->image))
            <div class="col-lg-4 col-md-4 col-sm-12"> <img src="{{URL('/')}}/storage/images/{{$results->image}}" class="img-circle" alt="image"> </div>
            @else
            <div class="col-lg-4 col-md-4 col-sm-12"> <img src="{{url('/')}}/images/master_logo_gray.png" class="img-circle" alt="image"> </div>
          @endif
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="namespanset">
              <h4>{{$results->fname}} {{$results->lname}}</h4>
              <span>Hourly rate ${{$results->price}}</span> </div>
            <div class="row">
               <div class="">
        <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
        
      </div>
            </div>
          </div>
        </div>
     </div> </a>
      </div>
          @endforeach
    </div>

    @endif

 
</div>
@endsection