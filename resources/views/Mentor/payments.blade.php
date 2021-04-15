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
          <h2>Payments List</h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                      <th>ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Skill</th>
                        <th>Review Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if(count($result)>0)
            @foreach($result as $results)
            
            @php
                $fee = DB::select("select  fee from payments where mentor_id='session()->get('id')'");
                $payment = ( $fee[0]->fee * 80)/100;
             
                @endphp
                      <tr>
                      <td>{{$results->pk_id}}</td>
                        <td>{{$results->fname}} {{$results->lname}}</td>
                        <td>{{$results->username}}</td>
                        <td>{{$results->skill_name}}</td>
                        <td>{{$results->review_type}}</td>
                        <td>$ {{$payment}}</td>
                        
                        <td>{{ Carbon\Carbon::parse($results->created_at)->format('d-m-y')}}</td>
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
      </div>
    </div>
    <!-- /page content --> 
    @endsection