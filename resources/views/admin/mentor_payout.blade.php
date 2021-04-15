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
         <h2>Mentor Payout</h2>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                        <th>pk</th>
                      <th>Mentor Name</th>
                      <th>Email</th>
                      <th>Date</th>
                      <th>Mentor Earning</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if(count($result4)>0)
                @foreach($result4 as $results)
                
                @php
                
                $fee = DB::select("select  SUM(fee) from payments where mentor_id='$results->mentor_id'");
                $payment = ( $fee[0]->{'SUM(fee)'} * 80)/100;
             
                @endphp
                    <tr>
                        <td>{{$results->pk_id}}</td>
                      <td>{{$results->fname}} {{$results->lname}}</td>
                      <td>{{$results->username}}</td>
                       <td>{{ Carbon\Carbon::parse($results->created_at)->format('d-m-y')}}</td>
                      <td>$ {{$payment}}</td>
                      <td><a href="https://www.paypal.com/signin" type="button" class="btn btnaddcard">Pay</a></td>
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
      <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Payout</h4>
      </div>
      <div class="modal-body">
        <h3>Total amount to be paid 50$ <br> how much do you want to pay? </h3>
        
        <form action="">
  <div class="form-group">
    <label for="email">Amount</label>
    <input type="number" class="form-control" name="ëmail">
  </div>
  <button type="submit" class="btn btnaddcard">Submit</button>
</form>
      </div>
    </div>

  </div>
</div>
    </div>
    <!-- /page content --> 
    @endsection
  