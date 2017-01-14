@extends('layouts.admin')


@section('content')


       <div id="page-wrapper">
         <h2>Payment Details</h2>
         <hr/>
         <div class="container-fluid white_backg">
           <br/>

             <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">payments</a></li>
                     <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>

                  </ul>

                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <h3>exam payments</h3>
                      <div class="col-sm-8 col-sm-offset-2">
                      <div class="form-group">
                       <label for="usr">Voucher Id:</label>
                       <input type="text" class="form-control">
                     </div>

                      <div class="form-group">
                       <label for="usr">Bank slip No:</label>
            					<input type="text-center" class="form-control" placeholder="Enter the code here" style="height: 80px">
                   </div>

                   <button type="button" class="btn btn-primary" style="margin-left:550px;">submit</button>
                   <br/><br/>
                  <p>  <b>Note:</b> **Your admission will be enabled only if  confirm the payment.**</p>
                  </div>
                    </div>

                  </div>

        </div>

     </div>
@endsection
