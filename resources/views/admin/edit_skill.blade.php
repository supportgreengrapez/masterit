@extends('admin.layout.appadmin')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          
            <h3>Admin Dashboard</h3>
          
        </div>
        <div class="clearfix"></div>
        
        
        
         <div class="bgcolor">
         <h2>Edit Skill Set</h2>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
              <form method="post" action="{{url('/')}}/admin/edit/skill/form/{{$result[0]->pk_id}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($errors->any())

<div class="alert alert-danger">
  <strong>Danger!</strong> {{$errors->first()}}
</div>
@endif
                  <div class="wrap">
                    <div class="form-group">
                    <label>Icon</label>
                        <input type='file' name="file" class="form-control blueborder" value="{{url('/')}}/storage/images/{{$result[0]->image}}" onchange="readURL(this);"/>
                        <img id="blah" src="{{url('/')}}/storage/images/{{$result[0]->image}}" alt="your image"style="width:180px; height:180px;" />
                    </div>
                    <div class="form-group">
                      <label>Skill Name</label>
                      <input type="text" class="form-control blueborder" placeholder="" name="sname" value="{{$result[0]->sname}}" required>
                    </div>
                    <button  type="submit" class="btn btnaddcard">Edit Skill</button>
                  </div>
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