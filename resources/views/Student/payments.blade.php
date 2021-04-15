@extends('Student.layout.student')
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="headingsd1">
        <h2>Payments</h2>
      </div>
    </div>
  </div>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Mentor Name</th>
                      <th>Skill</th>
                      <th>Contact Type</th>
                      <th>Fee</th>
                      <th>Date</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      @if(count($result)>0)
                @foreach($result as $results)
                    <tr>
                      <td>{{$results->fname}} {{$results->lname}}</td>
                      <td>{{$results->skill_name}}</td>
                      <td>{{$results->review_type}}</td>
                      <td>${{$results->fee}}</td>
                      <td>{{$results->created_at}}</td>
                    </tr>
                    @endforeach
                @endif
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
          </div>
@endsection