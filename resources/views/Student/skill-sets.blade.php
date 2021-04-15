@extends('Student.layout.student')
@section('content')

<style>
.list li{
    list-style:none;
}
</style>
<div class="bgstudentbanner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="headingsd1">
          <h2>Your Skillsets</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="carousel slide media-carousel" id="media">
          <div class="carousel-inner">
            <div class="item  active">
              <div class="row">
              @if(count($skill)>0)
              @php
              $first = '0';
              @endphp
                @foreach($skill as $results)
                @if($results->skill_name !== $first)
                @php
                $first = $results->skill_name;
                @endphp
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> <a href="{{URL('/')}}/student/time/track/{{Session()->get('id')}}/{{$results->skill_name}}">
                  <div class="cardsout2">
                    <div class="cardsinimg2"> <img src="{{URL('/')}}/storage/images/{{$results->image}}" alt="img"> </div>
                    <div class="cardsintext2">
                      <p>{{$results->skill_name}}</p>
                      <i class="fas fa-trash-alt trash"></i> </div>
                  </div>
                  </a> </div>
                  @endif
                  @endforeach
                @endif
              </div>
            </div>
          </div>
          <a data-slide="prev" href="#media" class="left carousel-control">‹</a> <a data-slide="next" href="#media" class="right carousel-control">›</a> </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="headingsd2">
        <h2>Student Dashboard</h2>
      </div>
    </div>
  </div>
  <div id="hacker-list">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="headingsd1">
        <h2>Add New Skill</h2>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        
    <div class=" headingsd1 form-inline">
      <!-- The search class allows List.js to search through the list -->
      <div class="form-group">
        <input type="text" placeholder="Search" class="search form-control"/>
      </div>
    </div>
    </div>
  </div>
  <div class="row">
      
        <ul class="list">
     @if(count($result)>0)
        @foreach($result as $s)
        
    <div class="col-lg-4 col-md-4 col-sm-12"> 
    
    <a href="{{URL('/')}}/select/mentor/{{$s->sname}}">
        
            <li>
      <div class="cardsout">
          
           @if(!empty($s->image))
        <div class="cardsinimg"> <img src="{{URL('/')}}/storage/images/{{$s->image}}" alt="img"> </div>
        
        @else
            <div class="cardsinimg"> <img src="{{url('/')}}/images/master_logo_gray.png" alt="image"> </div>
          @endif
        
        <div class="cardsintext">
            
          <p class="name">{{$s->sname}}</p>
          
    
        </div>
      </div>
      
      </li>
      </a> 
      
      
    </div>
    
    @endforeach
      @endif
      
    
    </ul>
  </div>
  </div>
</div>

@endsection