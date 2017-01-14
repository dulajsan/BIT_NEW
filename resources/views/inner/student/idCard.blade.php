@extends('layouts.admin')

@section('content')

<div id="page-wrapper">


<div class="container-fluid">
	<h2>Claim for new ID</h2>
</div>
<div class="container-fluid" style="height:20px">
</div>

  <div class="container-fluid white_backg">
        <div class="wizard">
                <ul class="nav nav-wizard">

                    <li class="active" style="width: 50%">
                        <a href="#claim" data-toggle="tab">Claim</a>
                    </li>

                    <li  style="width: 50%">
                        <a href="#voucher" data-toggle="tab">Voucher</a>
                    </li>

                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="claim">
                        <div class="row" style="height:70px"></div>

						<div class="description">
								<div class="row">
									<h4>Claim for a new Identity card</h4>
									<p>You will have to pay an amount of <b>Rs.100</b> to get a new ID.
								</div>
					</div>


				<div class="row">
				<center>
					<div class="form" style="width:50%">
							<div class="row" style="height:20px"></div>
							<div class = "input-group">
								<span class = "input-addon">Reason</span>
								<textarea class = "form-control" rows="8" cols="100" id="nic_reason"></textarea>
							</div>

					</div>

					<!--when pressed activate the voucher of the student id-->
					<div class="row" style="width:30px"><p> </p></div>
						<center>
                        <ul class="list-inline">
                            <li><span class="btn btn-primary" id="nic_btn">Continue</span></li>
                        </ul>
						</center>
                    </div>
                    </div>

                    <div class="tab-pane" id="voucher">
                        <div class="row" style="height:100px"></div>

						<div class="get-voucher">
					<div class="row">
						<h4>Download the voucher here</h4>
					</div>

					<center>
					<div class="row">
						<div class="download">
						<a href="{{ url('/getVouch')}}" class = "btn btn-default btn-lg" role = "button" style="font-color: white" ><h4>Voucher</h4></a>
						</div>
					</div>
					</center>
				</div>

				<div class="row" style="height:30px"><p> </p></div>
				<div class="note">

				</div>
				<div class="row" style="height:50px"><p> </p></div>


                    </div>


                    <div class="clearfix"></div>
                </div>

        </div>


</div>

</div>


@endsection
