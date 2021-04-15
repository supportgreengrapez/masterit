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
          <h2>Edit Education</h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                <form method="post" action = "{{url('/')}}/edit_mentors_education/{{$result[0]->pk_id}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if(count($result)>0)
                @foreach($result as $results)
                  <div class="wrap">
                    <div class="form-group">
                      <label>School <span class="red">*</span></label>
                      <input type="text" class="form-control blueborder" placeholder="" name="school" value="{{$results->school}}" required>
                    </div>
                    <div class="form-group">
                      <label>Start Date <span class="red">*</span></label>
                      <input type="date" class="form-control blueborder" placeholder="" name="start" value="{{$results->start}}" required>
                    </div>
                    <div class="form-group">
                      <label>End Date <span class="red">*</span></label>
                      <input type="date" class="form-control blueborder" placeholder="" name="end" value="{{$results->end}}" required>
                    </div>
                    <div class="form-group">
                      <label>Degree <span class="red">*</span></label>
                      <input type="text" class="form-control blueborder" placeholder="" name="degree" value="{{$results->degree}}" required>
                    </div>
                    <div class="form-group">
                      <label>Area of Study <span class="red">*</span></label>
                      <input type="text" class="form-control blueborder" placeholder="" name="area_study" value="{{$results->area_study}}">
                    </div>
                    <button  type="submit" class="btn btnaddcard">Save</button>
                  </div>
                  @endforeach
                @endif
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /page content -->
    @endsection