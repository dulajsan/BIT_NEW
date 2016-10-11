@extends('layouts.admin')


@section('content')


       <div id="page-wrapper" style="height:550px">
         <h2>Payment Details</h2>
         <hr/>
         <div class="container-fluid">
           <div class="row">
             <div class="col-sm-8 col-sm-offset-2" style="background-color:#fff; height:270px">


           <h2>Enter bank slip Number</h2>
        <center>
         <div class="code" style="width: 45%; margin-top:50px">
 					<input type="text-center" class="form-control" placeholder="Enter the code here" style="height: 80px">
 				</div>
        <center>

 				<!--when pressed the admission is generated
 				move to #admission-->
 				<div class="row" style="width:30px; height:12px"><p> </p></div>
 						<center>
                         <ul class="list-inline">
                             <li><button type="button" class="btn btn-primary" >Continue</button></li>

                         </ul>
 						</center>
          </div>
        </div>
       </div>
     </div>
@endsection
