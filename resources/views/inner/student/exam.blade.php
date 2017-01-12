@extends('layouts.admin')


@section('content')


       <div id="page-wrapper">

            <!--containerfluid-->

        <div class="container-fluid">

          <div class="row">
		<section>
        <div class="wizard">

                <ul class="nav nav-wizard">

                    <li class="active" style="width: 33%">
                        <a href="#step1" data-toggle="tab">Select subjects</a>
                    </li>

                    <li class="disabled" style="width: 33%">
                        <a href="#step2" data-toggle="tab">Payment details</a>
                    </li>

                    <li class="disabled" style="width: 33%">
                        <a href="#step3" data-toggle="tab">Voucher</a>
                    </li>

                     <!-- <li class="disabled" style="width: 25%">
                        <a href="#step4" data-toggle="tab">Admission</a>
                    </li> -->
                </ul>


            <form>
                <div class="tab-content">



                    <div class="tab-pane active" id="step1">
                        <div class="row" style="height:100px"></div>


					<div class="row">
						<div class="col-xs-2"></div>
							<div class="col-xs-4">
								<div class = "input-group">
									<span class = "input-group-addon">Year</span>
									<select class = "form-control text-center">
										<option class="text-right">select academic year</option>
										<option class="text-right">1</option>
										<option class="text-right">2</option>
										<option class="text-right">3</option>
									</select>
								</div>
							</div>

							<div class="col-xs-4">
								<div class = "input-group">
									<span class = "input-group-addon">Semester</span>
									<select class = "form-control text-center" id="semesters">
										<option class="text-right">select semester</option>
										<option class="text-right">1</option>
										<option class="text-right">2</option>
										<option class="text-right">3</option>
										<option class="text-right">4</option>
										<option class="text-right">5</option>
										<option class="text-right">6</option>
									</select>
								</div>
							</div>

						<div class="col-xs-2"></div>
					</div>


					<center>
						<div class="row" style="height:50px"></div>
						<!--button to generate the subject list of the year-->
						<span class ="btn btn-default btn-md btn-hover" id="get_subject">Get subjects</span>
             <input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" />
					</center>


				<div class="row" style="height:50px"></div>



						<div class="row">
						<div class="panel panel-primary filterable">
							<div class="panel-heading">
								<h3 class="panel-title">Subjects</h3>
								<div class="pull-right">
									<span class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</span>
								</div>
							</div>

							<table class="table table-center">
								<thead>
									<tr class="filters">
										<th><input type="text" class="form-control" placeholder="subject code" disabled></th>
										<th><input type="text" class="form-control" placeholder="Subject name" disabled></th>
										<th><input type="text" class="form-control" placeholder="Select" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Fee" disabled></th>
										<th><input type="text" class="form-control" placeholder="Apply" disabled></th>
									</tr>
								</thead>

								<tbody id="course_content">

								</tbody>
							</table>
						</div>
					</div>

						<div class="row" style="width:30px"><p> </p></div>
						<center>
                        <ul class="list-inline">
                          <input type="hidden" id="num_of_sub"/>
                            <li><button type="button" class="btn btn-primary cost" style="display:none">Continue</button></li>
                            <li><button type="button" class="btn btn-primary" id="get_cost">Continue</button></li>
                        </ul>
						</center>
                    </div>



                    <div class="tab-pane" id="step2">
                        <div class="container">
					<div class="row" style="height:50px"></div>

					<div class="description">
						<div class="row">
							<div class="col-xs-4">
								<h5>Subjects for the semester</h5>
								<h5>Compulsary</h5>
								<h5>Optional</h5>

							</div>
							<div class="col-xs-8">
								<input type="text-center" class="form-control" style="height: 30px; width: 10%" id="num_of_subj">
								<input type="text-center" class="form-control" style="height: 30px; width: 10%">
								<input type="text-center" class="form-control" style="height: 30px; width: 10%">

							</div>
						</div>
					</div>


					<div class="row" style="height:50px"><p> </p></div>
					<h4>Your payment details are shown below</h4>

					<center>
					<div class="unit-set" style="width:30%">
						<div class="row">
							<div class="col-xs-2">
								<h2>Rs.</h2>
							</div>
							<div class="col-xs-10">
								<input type="text-center" class="form-control" id="total_amount" placeholder="total amount" style="height:80px; font-size:32px">
							</div>
						</div>
					</div>
					</center>

					<!--details of the subjects-->



					<!--when pressed the voucher is generated
					move to #voucher-->
					<div class="row" style="width:30px"><p> </p></div>
						<center>
                        <ul class="list-inline">
                            <li><button type="button" class="btn btn-primary">submit</button></li>
                        </ul>
						</center>
                    </div>
                    </div>

<!--step 3-->

      <div class="tab-pane" id="step3">
        <div class="row" style="height:50px"></div>

				<div class="get-voucher">
					<div class="row">
						<h4>Download the Application and voucher </h4>
					</div>

					<center>
					<div class="row">
            <div class="download">
							<a href = "{{url('/getExamApp')}}" class = "btn btn-default btn-lg" role = "button" style=" font-color: white"><h4>Application</h4></a>
						</div>
						<div class="download">
							<a href = "{{url('/getVouch')}}" class = "btn btn-default btn-lg" role = "button" style=" font-color: white"><h4>Voucher</h4></a>
						</div>
					</div>
					</center>
				</div>

				<div class="row" style="height:30px"><p> </p></div>
				<div class="note">
					<p>*note<br>
					Get the voucher downloaded and pay the relevant amount to the nearest People's bank branch and get the voucher confirmed.<br>
					Next enter the code in the below text area to get your Admission enabled. </p>
				</div>
				<div class="row" style="height:50px"><p> </p></div>



</div>




                    <!-- <div class="tab-pane" id="step4">
                        <div class="row" style="height:50px"></div>

				<div class="get-voucher">
					<div class="row">
						<h4>Download the Admission</h4>
					</div>

					<center>
					<div class="row">
						<div class="download">
							<a href = "#" class = "btn btn-default btn-lg" role = "button" style="font-color: white" disabled><h4>Admission</h4></a>
						</div>
					</div>
					</center>
				</div>

				<div class="row" style="height:30px"><p> </p></div>
				<div class="note">
					<p>*note<br>
					Download the exam application and get a printout of it. <br>
					Do not forget to bring the admission sheet to the exam hall. Submit the admission to the examiner.<br>
					<h4>Best of LUCK for the exam!</h4></p>
				</div>
                    </div> -->
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>

        </div>
        <!--./container fluid-->


          </div>
  <!-- /#page-wrapper -->






@endsection
