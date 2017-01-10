@extends('layouts.admin')


<style>
.btn{
	background-color:#58acfa;
}
.fbtn{
	background-color:#eee;
}

.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}


/*  ppit tab */
div.mainbox{
  z-index: 10;
  padding-left: 20px;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.ppit-tab-menu{
  z-index: 10;
  padding: 0;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.ppit-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.ppit-tab-menu div.list-group{
  margin-bottom: 0;
}
div.ppit-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.ppit-tab-menu div.list-group>a .glyphicon,
div.ppit-tab-menu div.list-group>a .fa {
  color: #8d6cab;
}
div.ppit-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.ppit-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.ppit-tab-menu div.list-group>a.active,
div.ppit-tab-menu div.list-group>a.active .glyphicon,
div.ppit-tab-menu div.list-group>a.active .fa{
  background-color: #58acfa;
  background-image: #58acfa;
  color: #ffffff;
}
div.ppit-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #58acfa;
}

div.ppit-tab div.ppit-tab-content:not(.active){
  display: none;
}



.modal-content {
    -webkit-border-radius: 0;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 0;
    -moz-background-clip: padding;
    border-radius: 6px;
    background-clip: padding-box;
    -webkit-box-shadow: 0 0 40px rgba(0,0,0,.5);
    -moz-box-shadow: 0 0 40px rgba(0,0,0,.5);
    box-shadow: 0 0 40px rgba(0,0,0,.5);
    color: #000;
    background-color: #fff;
    border: rgba(0,0,0,0);
}
.modal-message .modal-dialog {
    width: 300px;
}
.modal-message .modal-body, .modal-message .modal-header, .modal-message .modal-title {
    background: 0 0;
    border: none;
    margin: 0;
    padding: 0 20px;
    text-align: center!important;
}

.modal-message .modal-title {
    font-size: 17px;
    color: #737373;
    margin-bottom: 3px;
}

.modal-message .modal-body {
    color: #737373;
}

.modal-message .modal-header {
    color: #fff;
    margin-bottom: 10px;
    padding: 15px 0 8px;
}
.modal-message .modal-header .fa,
.modal-message .modal-header
.glyphicon, .modal-message
.modal-header .typcn, .modal-message .modal-header .wi {
    font-size: 30px;
}

.modal-message .modal-footer {
	text-align: center;
    margin: 25px 0 20px;
    padding-bottom: 8px;
}

.modal-backdrop.in {
    zoom: 1;
    filter: alpha(opacity=75);
    -webkit-opacity: .75;
    -moz-opacity: .75;
    opacity: .75;
}
.modal-backdrop {
    background-color: #eee;
}
.modal-message.modal-edit .modal-header {
    color: #53a93f;
    border-bottom: 3px solid #a0d468;
}

.modal-message.modal-remove .modal-header {
    color: #d73d32;
    border-bottom: 3px solid #e46f61;
}

</style>


@section('content')

<div id="page-wrapper">
<div class="container-fluid">
	<h2>Course administration</h2>
	<div class="row" style="height:30px"></div>

	<div class="tab">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#add" data-toggle="tab">Add course</a></li>
			<li><a href="#remove-edit" data-toggle="tab">Remove / Edit course</a></li>
		</ul>


		<div class="tab-content">



			<div id="add" class="tab-pane fade in active">
				<center>
					<div class="row" style="height: 30px"></div>
					<div class="header">

					</div>
					<div class="row" style="height: 50px"></div>
				</center>


				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-2 ppit-tab-menu">
							<div class="list-group">
								<a href="#" class="list-group-item active text-center">Year 1</a>
								<a href="#" class="list-group-item text-center">Year 2</a>
								<a href="#" class="list-group-item text-center">Year 3</a>
							</div>
						</div>

						<div class="col-sm-10 tab-content">



								<div  class="mainbox col-sm-12">
									<div class="panel" >
										<div class="panel-heading" style="border-top:8px solid #2f5989">
											<div class="panel-title"><b>Insert course details below</b></div>
										</div>

										<div class="panel-body" >

											<div id="inser-course" class="form-horizontal" role="form">


												<div class = "input-group col-sm-5" style="padding:10px">
													<span>Semester</span>
													<select class = "form-control text-center">
														<option class="text-right">1</option>
														<option class="text-right">2</option>
													</select>
												</div>

												<div style="padding:10px" class="code col-sm-5">
													<span>Course Code</span>
													<input type="text-center" class="form-control" placeholder="course_code">
												</div>

												<div style="padding:10px" class="name col-sm-7">
													<span>Course name</span>
													<input type="text-center" class="form-control" placeholder="course_name">
												</div>


												<div class = "input-group col-sm-5" style="padding:10px">
													<span>&nbsp;</span>
													<label class="radio-inline">
												      <input type="radio" name="optradio">Optional
												    </label>
												    <label class="radio-inline">
												      <input type="radio" name="optradio">mandatory
												    </label>
												</div>

												<div style="padding:10px" class="code col-sm-5">
													<span>num of credits</span>
													<input type="text-center" class="form-control" placeholder="course_code">
												</div>

												<div style="padding:10px" class="name col-sm-7">
													<span>Fee</span>
													<input type="text-center" class="form-control" placeholder="course_name">
												</div>


												<div class="row" style="height:30px"></div>

												<br/><br/>
												<button type="button" class="btn btn-primary active" style="float:right;margin:5px;">submit</button>


											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>



			<div id="remove-edit" class="tab-pane fade">
				<div class="container-fluid container-border">
				<center>
					<div class="row" style="height: 30px"></div>
					<div class="header">

					</div>
					<div class="row" style="height: 50px"></div>


					<div class="row">
						<div class="panel panel-primary filterable">
							<div class="panel-heading">
								<h3 class="panel-title">List of courses</h3>
								<div class="pull-right">
									<button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
								</div>
							</div>

							<table class="table">
							<center>
								<thead>


									<tr class="filters">
										<th><input type="text" class="form-control" placeholder="Year" disabled></th>
										<th><input type="text" class="form-control" placeholder="Code" disabled></th>
										<th><input type="text" class="form-control" placeholder="Course" disabled></th>
										<th><input type="text" class="form-control" placeholder="Remove/Change" disabled></th>

									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>1102</td>
										<td>Programming</td>
										<td>
											<button class="fbtn-xs" data-toggle="modal" data-target="#modal-edit"><span class="glyphicon glyphicon-edit"></span>Edit</button>
											<button class="fbtn-xs" data-toggle="modal" data-target="#modal-remove"><span class="glyphicon glyphicon-remove"></span>Remove</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>2105</td>
										<td>computer science</td>
										<td>
											<button class="fbtn-xs" data-toggle="modal" data-target="#modal-edit"><span class="glyphicon glyphicon-edit"></span>Edit</button>
											<button class="fbtn-xs" data-toggle="modal" data-target="#modal-remove"><span class="glyphicon glyphicon-remove"></span>Remove</button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>3207</td>
										<td>database</td>
										<td>
											<button class="fbtn-xs" data-toggle="modal" data-target="#modal-edit"><span class="glyphicon glyphicon-edit"></span>Edit</button>
											<button class="fbtn-xs" data-toggle="modal" data-target="#modal-remove"><span class="glyphicon glyphicon-remove"></span>Remove</button>
										</td>
									</tr>
								</tbody>
							</center>
							</table>
						</div>
					</div>

					<div class="row" style="height: 30px"></div>

				</center>
				</div>



				<!--edit-->
				<div id="modal-edit" class="modal modal-message modal-edit fade" style="display: none;" aria-hidden="true">
					<div class="modal-dialog">
					<div class="row" style="height: 150px"></div>
						<div class="modal-content">
							<div class="modal-header">
								<i class="glyphicon glyphicon-edit"></i>
							</div>
							<div class="modal-title">Edit course</div>
							<div class="modal-body">You can edit the course details here!</div>
							<div class="modal-footer">
								<button type="button" class="mbtn mbtn-default mbtn-md" data-dismiss="modal">OK</button>
							</div>
						</div>
					</div>
				</div>


				<!--remove-->
				<div id="modal-remove" class="modal modal-message modal-remove fade" style="display: none;" aria-hidden="true">
					<div class="modal-dialog">
					<div class="row" style="height: 150px"></div>
						<div class="modal-content">
							<div class="modal-header">
								<i class="glyphicon glyphicon-remove"></i>
							</div>
							<div class="modal-title">Remove course</div>
							<div class="modal-body">You are about to delete the course!</div>
							<div class="modal-footer">
								<button type="button" class="mbtn mbtn-default mbtn-md" data-dismiss="modal"><a href="#">OK</button>
							</div>
						</div>
					</div>
				</div>



			</div>


		</div>
	</div>
</div>

</div>
@endsection
