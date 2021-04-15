@extends('Student.layout.student')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4">
      <div class="headingsd2">
        <h2>Student Dashboard</h2>
      </div>
    </div>
  </div>
   <div id="hacker-list">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="headingsd1">
        <h2>Select Skill</h2>
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
          <p>{{$s->sname}}</p>
        </div>
      </div>
      </li>
      </a> 
    </div>
    @endforeach
      @endif
      </ul>
      <div id="a">
          
          </div>
      <!-- <button type="button" onclick="see_more()" class="btn loginbtn  center-block">show more</button> -->
  </div>
  </div>
</div>

@endsection

<script>
var number = 0;
    function see_more()
    {
        number+=6;
        var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('a').innerHTML+=this.responseText;
    }
  };
  xhttp.open("GET", "/student/dashboard/"+number, true);
  xhttp.send();
    }
</script>