@extends('Mentor.layout.mentor')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <h3>Mentor Dashboard</h3>
        </div>
        <div class="clearfix"></div>
        <div class="bgcolor">
          <h2>Students Detail</h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Student Name</th>
                        <th>Number of Hour Tracking</th>
                        <th>Skill Set</th>
                        <th>Decription</th>
                        <th>More Action</th>
                      </tr>
                    </thead>
                    @if(count($result)>0)
            @foreach($result as $results)
                    <tbody>
                      <tr>
                        <td>{{$results->fname}} {{$results->lname}}</td>
                        <td>{{$results->time}}</td>
                        <td>{{$results->skill}}</td>
                        <td>{{$results->description}}</td>
                        <td><button type="button" class="btn btnpaymentmethod" data-toggle="modal" data-target="#myModal">Rate Here</button></td>
                      </tr>
                    </tbody>
                    @endforeach
            @endif
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal -->
    <form>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Rate Student</h4>
      </div>
      <div class="modal-body">
        <div class="dbicons">
        <div class="row">
        	<div class="col-lg-4">
            <img src="images/2.png" alt="img">
            </div>
            <div class="col-lg-8">
            <div class="profile">
            	<h3>Kiran Riaz</h3>
                <span>Graphic Designer<br></span>
                

            </div>
            <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
</fieldset>
            </div>
        </div>
            
            
           </div>
           <div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btnpaymentmethod" data-dismiss="modal">Done</button>
      </div>
    </div>

  </div>
</div>
</form>

    <!-- /page content --> 
    @endsection 