@extends('layouts.admin')




@section('content')
<div id="page-wrapper">
<div class="container-fluid">
<h2>User administration</h2>

<div class="tab">


		<ul class="nav nav-tabs">
			<li class="active"><a href="#add" data-toggle="tab"><b>Add User</b></a></li>
			<li><a href="#remove-edit" data-toggle="tab"><b>Remove / Edit User</b></a></li>
		</ul>


		<div class="tab-content">

		<!--add user tab-->
			<div id="add" class="tab-pane fade in active">
				<center>
					<div class="row" style="height: 30px"></div>
					<div class="header">

					</div>
					<div class="row" style="height: 30px"></div>
				</center>

				<div class="col-sm-9">

				<form role="form" action="{{ url('/addUser') }}" method="POST">
				<div class="row setup-content" >
					    <div class="col-sm-12 col-sm-offset-1">

					      <div class="row" style="background-color:#fff; padding:30px; border-top:3px #428bca solid">
					        <div class="row" style="color:#2f5989">
					        <h3> <b>System User Details</b></h3>

					      </div>

					<div class="row">
			          <div class="form-group">
			            <label class="control-label col-sm-3" for="full_name">Full name:</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="fullname" placeholder="Madurasinghege dulaj sanjaya" name="full_name" required>
			            </div>
			          </div>
			        </div><br>

			        <div class="row">
			          <div class="form-group">
			            <label class="control-label col-sm-3" for="initials">Initials:</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="Init" placeholder="M.D." name="initials" required>
			            </div>
			          </div>
			        </div><br>

			        <div class="row">
			         <div class="form-group">
			            <label class="control-label col-sm-3" for="last_name">Last name:</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="Lname" placeholder="Sanjaya" name="last_name" required>
			            </div>
			          </div>
			        </div><br>

			          <!--title-->
			      <div class="row">
			        <div class="form-group">
			            <label class="control-label col-sm-3" for="title">Title:</label>
			            <div class="col-sm-9">
			              <select class="form-control" id="Title" name="title" required>
			                <option>--Title--</option>
			                <option>Mr.</option>
			                <option>Miss.</option>
			                <option>Mrs.</option>
			                <option>Rev.</option>
			                <option>Dr.</option>
			              </select>
			            </div>
			        </div>
			      </div><br>
			        <!--end of title-->

			        <input type="hidden" name="_token" value="{{csrf_token()}}">


			        <div class="row">
			        <div class="form-group">
			            <label class="control-label col-sm-3" for="sex">Sex</label>
			            <div class="col-sm-9">
			                  <label class="radio-inline"><input type="radio" name="sex" value="Male" required/>Male</label>
			                  <label class="radio-inline"><input type="radio" name="sex" value="Female"/>Female</label>
			            </div>
			        </div>
			      </div><br>



			      <div class="row">
			        <div class="form-group">
			            <label class="control-label col-sm-3" for="is_nic">NIC/Passport</label>
			            <div class="col-sm-9">
			                  <label class="radio-inline"><input type="radio" name="is_nic" value="nic" id="is_nic_id" required>National identity card</label>
			                  <label class="radio-inline"><input type="radio" name="is_nic" value="passport" id="is_nic_passport" >Passport No</label>

			            </div>
			        </div>
			      </div><br>

			      <div class="row">
			        <div class="form-group" id="nic_span">
			            <label class="control-label col-sm-3" for="nic">NIC No:</label>
			            <div class="col-sm-8">
			              <input type="text" class="form-control" id="nic" placeholder="93*******V" name="nic">

			            </div>
			            <!--<span id="nic_error" class="col-sm-1"><img  src="{{ URL::asset('images/right.png') }}" width="22px" id="nic_er"/></span>-->
			          </div><br>

			          <div class="form-group" id="passport_span">
			              <label class="control-label col-sm-3" for="passport">passport No:</label>
			              <div class="col-sm-8">
			                <input type="text" class="form-control" id="passport" placeholder="" name="passport">

			              </div>

			            </div>
			        </div><br>

			         <div class="row">
			           <div class="form-group">
			            <label class="control-label col-sm-3" for="email">Email:</label>
			            <div class="col-sm-8">
			              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
			              <br/>
			              <span id="email_span"></span>
			            </div>
			          </div>
			        </div><br>


			         <div class="row">
			        <div class="form-group">
			            <label class="control-label col-sm-3" for="role">Role:</label>
			            <div class="col-sm-9">
			              <select class="form-control" id="role" name="role" required>
			                <option>--Role--</option>
			                <option>Coordinator</option>
			                <option>Administrator</option>
			                <option>SAR</option>

			              </select>
			            </div>
			        </div>
			      </div><br>



			          <br/>
			        <div class="form-group">
			        <button class="btn btn-primary btn-lg pull-right" type="submit"> <i class="fa fa-btn fa-user"></i> >Submit</button>
			        </div>

			      </div>
			    </div>
			    </div>
			    </form>
			  </div>

		</div>


		<!--start of tab 2-->
		<div id="remove-edit" class="tab-pane fade in active">


		    <div class="header">
		      <h1 class="page-header">System user filter</h1>
		    </div>
		    <div class="row" style="height:30px"></div>
		  </div>

		      <!--user table-->
		        <section>
		            <div id="example4"></div>
		        </section>


		        <div id="myModal" class="modal fade" role="dialog">
		          <div class="modal-dialog" style="width:800px">

		            <!-- Modal content-->
		            <div class="modal-content" style="margin-top:80px;">
		              <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		                <h4 class="modal-title">Edit User Details</h4>
		              </div>
		              <!--modal body-->
		              <div class="modal-body">
		                <div class="row">

		                  <!--form -->
		                  <form class="form-horizontal" role="form1" action="{{ url('/editUserData') }}" method="POST">
		                  <!--tab content-->

		                        <!--form left-->
		                      <div class="col-sm-6">
		                          <div class="form-group">
		                            <label class="control-label col-sm-2" for="full_name">Full name:</label>
		                            <div class="col-sm-10">
		                              <input type="email" class="form-control" id="full_name" placeholder="Enter Name">
		                            </div>
		                          </div>

		                          <div class="form-group">
		                            <label class="control-label col-sm-2" for="last_name">Last name:</label>
		                            <div class="col-sm-10">
		                              <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name">
		                            </div>
		                          </div>

		                          <div class="form-group">
		                          <label class="control-label col-sm-2" for="sex">Sex:</label>
		                          <div class="col-sm-10">
		                          <label class="radio-inline"><input type="radio" name="sex">Male</label>
		                          <label class="radio-inline"><input type="radio" name="sex">Female</label>
		                          </div>
		                        </div>



		                      </div>
		                      <!--./form left-->

		                      <!--form right-->

		                        <div class="col-sm-6">
		                            <div class="form-group">
		                              <label class="control-label col-sm-2" for="initials">Initials:</label>
		                              <div class="col-sm-10">
		                                <input type="email" class="form-control" id="initials" placeholder="Enter email">
		                              </div>
		                            </div>

		                            <div class="form-group">
		                              <label class="control-label col-sm-2" for="role">Role:</label>
		                              <div class="col-sm-10">
		                              <select class="form-control" id="role" >
		                                <option>Coordinator</option>
		                                <option>Administrator</option>
		                                <option>SAR</option>

		                              </select>
		                            </div>
		                            </div>



		                          <div class="form-group">
			                          <label class="control-label col-sm-2" for="email">Email</label>
			                          <div class="col-sm-10">
			                            <input type="text" class="form-control" id="email" placeholder="Enter Email">
			                          </div>
			                        </div>



		                        </div>

		                      <!--./form right-->


		                   </form>
		                        </div>
		                      <!--./registartion details-->

		                    </div>

		              </div>

		              <!--modal body-->
		              <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                 <button class="btn btn-default pull-right" id="submit" data-dismiss="modal" type="submit"> <i class="fa fa-btn fa-user"></i> >Submit</button>
		              </div>


		              </div>
		              </div>



		        <!--modal end--->

		        <!--register or cancel modal-->
		        <div id="regModal" class="modal fade" role="dialog" style="margin-top:80px;">
		            <div class="modal-dialog">

		              <!-- Modal content-->
		              <div class="modal-content">
		                <div class="modal-header">
		                  <button type="button" class="close" data-dismiss="modal">&times;</button>
		                  <h4 class="modal-title">Modal Header</h4>
		                </div>
		                <div class="modal-body">
		                  <p>Are you sure ?</p>
		                  <br/>
		                  <div class="row">
		                    <div class="col-sm-8">
		                    </div>
		                    <div class="col-sm-2">
		                      <button type="button" id="ok1" class="btn btn-default" data-dismiss="modal">YES</button>
		                    </div>
		                    <div class="col-sm-2">
		                      <button type="button"  id="cancel1" class="btn btn-default" data-dismiss="modal">NO</button>
		                    </div>
		                  </div>
		                </div>
		                <div class="modal-footer">
		                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                </div>

		              </div>
		            </div>
		          </div>
		          <!--./register or cancel modal-->



		</div>
		            <!--end of tab 2-->




		    <!--end of all tabs-->

			</div>

</div>
</div>
</div>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>




@endsection
