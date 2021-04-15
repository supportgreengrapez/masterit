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
          <h2>Payment Detail</h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                
          <a href="{{URL('/')}}/mentor/add/card/{{ Session()->get('id')}}" class="btn btnpaymentmethod">Add Payment Method</a>
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                      <th>Payment Method</th>
                        <th>User Name</th>
                        <th>Card Type</th>
                        <th>More Action</th>
                      </tr>
                    </thead>
                    @if(count($result)>0)
            @foreach($result as $results)
                    <tbody>
                      <tr>
                        <td>Cedit Card</td>
                        <td>{{$results->fname}} {{$results->lname}}</td>
                        <td>{{$results->ctype}}</td>
                        <td><a href="{{URL('/')}}/mentor/edit/card/{{$results->pk_id}}">Edit</a>  <a href="{{URL('/')}}/mentor/card/delete/{{$results->pk_id}}" class="red">Remove</a></td>
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
    <!-- /page content --> 
    @endsection  