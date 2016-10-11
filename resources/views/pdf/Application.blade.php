
<!DOCTYPE html>
<html>
  <head>
    <title>Exam Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
  <body>
<div class="container">

<!--heading-->
	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">

				<div><br></div>
		</div>
	</div>

	<div class="row" >
		<div class="col-sm-8 col-xs-8 col-lg-8 ">

				<div style ="font-size:15px;float:center;"><b>Application Closing Date :30/09/2016</b></div>
		</div>

		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="float:center"><table class="table table-bordered responsive">
										    <thead>
										      <tr>
										        <th>For office use only</th>

										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>Application No.</td>
										        <td>District</td>

										      </tr>

										      <tr>
										        <td></td>
										        <td></td>

										      </tr>


										    </tbody>
										  </table></div>
		</div>

	</div>



	<div class="row" >
			<div class="col-sm-2 col-xs-2 col-lg-2 ">

					<div style="float:right;"><img src="logo.jpg" width="100" height="100" class="img-responsive center-block"></div>
			</div>

			<div class="col-sm-10 col-xs-10 col-lg-10 ">

					<div style="font-size:18px;text-align:center;float:left;"><b>APPLICATION FOR REGISTRATION AS A CANDIDATE FOR THE<br>BACHELOR OF INFORMATION TECHNOLOGY (EXTERNAL) DEGREE<br>UNIVERSITY OF COLOMBO SCHOOL OF COMPUTING <br>INTAKE 11 - Direct Mode ( February 2016)</b></div>
			</div>
	</div>


	<div class="row" >
			<div class="col-sm-12 col-xs-12 col-lg-12 ">

					<div style="text-align:center;">(Please read the instructions given in the attached sheet before you fill the application form.)</div>
			</div>
	</div>

	<br>


	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">

				<div style="float:left;font-size:19px;"><b>PERSONAL INFORMATION</b></div>
		</div>
	</div>
	<br>

	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:17px;text-align:left;"><b>01.Title :</b> (Please tick) </div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">

				<div style="font-size:13px;float:center;"><table class="table table-bordered responsive">
										    <thead>
										      <tr>
										        <th>Mr.</th>
										        <th>  </th>
										        <th>Ms.</th>
										        <th>  </th>
										        <th>Other.(Please Specify)</th>
										         <th>  </th>
										      </tr>
										    </thead>
										    </table>

				</div>
		</div>
	</div>
	<br>

	<div class="row" >
		@foreach($users as $user)
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:17px;text-align:left;"><b>02.Full Name :</b>  </div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">

				<div style="float:left;"><b>{{$user->full_name}}</b></div>
		</div>
		@endforeach
	</div>
	<br>
	<br>


	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:17px;text-align:left;"><b>03.Last Name :</b>  </div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">
				@foreach($users as $user)
				<div style="float:center;"><b>{{$user->last_name}}</b></div>
				@endforeach
		</div>
	</div>
	<br>

	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:17px;text-align:left;"><b>04.Initials :</b>  </div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">
				@foreach($users as $user)
				<div style="float:center;"><b>{{$user->initials}}</b></div>
				@endforeach
		</div>
	</div>
	<br>




	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:17px;text-align:left;"><b>4.Residential Details :</b> </div>
		</div>


	</div>
	<br>


	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:15px;text-align:left;"><b>a.Address :</b><br> <br></div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">
				@foreach($applicants as $applicant)
				<div style="float:center;"> <b>{{$applicant->address1}}<br> {{$applicant->address2}} <br>{{$applicant->address3}}
        </b>
				</div>
				@endforeach
		</div>

	</div>
	<br>

	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:15px;text-align:left;"><b>b.Telephone Number :</b> </div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">

				<div style="float:center;"><table class="table table-bordered responsive">

										    <thead>

										      <tr>
												<th>  </th>
										        <th>  </th>
										        <th></th>
										        <th>  </th>
										        <th> </th>
										        <th>  </th>
										         <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										         </tr>



										    </thead>
										    </table>

				</div>
		</div>


	</div>

	<br>
	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:15px;text-align:left;"><b>c.Mobile Number :</b></div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">

				<div style="float:center;"><table class="table table-bordered responsive">

										    <thead>

										      <tr>
												<th>  </th>
										        <th>  </th>
										        <th></th>
										        <th>  </th>
										        <th> </th>
										        <th>  </th>
										         <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										         </tr>



										    </thead>
										    </table>

				</div>
		</div>

	</div>

	<br>
	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:15px;text-align:left;"><b>d.E-mail :</b></div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">
				@foreach($users as $user)
				<div style="float:center;"><b>{{$user->email}}</b>

				</div>
				@endforeach
		</div>


	</div>
	<br>
	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:15px;text-align:left;"><b>e.Country :</b></div>
		</div>
		<div class="col-sm-8 col-xs-8 col-lg-8 ">
				@foreach($applicants as $applicant)
				<div style="float:center;"><b>{{$applicant->country}}</b>

				</div>
				@endforeach
		</div>

	</div>
	<br>

	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:15px;text-align:left;"><b>f.Citizenship :</b></div>
		</div>
		<div class="col-sm-8 col-xs-8 col-lg-8 ">
				@foreach($applicants as $applicant)
				<div style="float:center;"><b>{{$applicant->citizenship}}</b>

				</div>
				@endforeach
		</div>

	</div>
	<br>

	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:15px;text-align:left;"><b>g.Registration Location :</b></div>
		</div>
		<div class="col-sm-8 col-xs-8 col-lg-8 ">
				@foreach($applicants as $applicant)
				<div style="float:center;"><b>{{$applicant->registration_loc}}</b></div>
				@endforeach
		</div>

	</div>
	<br>

	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:17px;text-align:left;"><b>6.Date of Birth :</b><br> </div>
		</div>
		<div class="col-sm-8 col-xs-8 col-lg-8 ">

				@foreach($applicants as $applicant)
				<div style="float:center;"><b>{{$applicant->DOB}}</b>

				</div>
				@endforeach
		</div>
		</div>


		<br>
	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:17px;text-align:left;"><b>7.Sex : </b></div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">
			@foreach($users as $user)
			<div style="font-size:15px;float:center;"><b>@if($user->sex=='Male')
															Male
													 @else
													 		Female
													 @endif
                         </b>
			</div>
			@endforeach

	</div>
	</div>

	<br>

	<div class="row" >
		<div class="col-sm-4 col-xs-4 col-lg-4 ">

				<div style="font-size:17px;text-align:left;"><b>8.NIC No. :</b></div>
		</div>

		<div class="col-sm-8 col-xs-8 col-lg-8 ">


				<div style="float:center;"><table class="table table-bordered responsive">

										    <thead>

										      <tr>
												<th>  </th>
										        <th>  </th>
										        <th></th>
										        <th>  </th>
										        <th> </th>
										        <th>  </th>
										         <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										          <th>  </th>
										         </tr>

										          <br>

										      </tr>
										    </thead>
										    </table>

				</div>
		</div>



	</div>

	<br><br><br><br><br><br><br><br><br>

	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:19px;text-align:left;"><b>Academic Information</b> </div>
		</div>


	</div>



	<div class="row" >
		<div class="col-sm-6 col-xs-6 col-lg-6 ">

				<div style="font-size:17px;text-align:left;"><b>9.Results of G.C.E.Advanced Level Examination</b> </div>
		</div>
	<br>
	<br>

	</div>

	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:15px;float:center;text-align:left;"><b>Year :</b> </div>
		</div>

		<div class="col-sm-6 col-xs-6 col-lg-6 ">

				<div style="font-size:15px;float:center;text-align:left;"><b>Stream of Study :</b> </div>
		</div>


	</div>
	<br>
	<br>

	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:15px;float:center;text-align:left;"><b>Index No. :</b> </div>
		</div>

		<div class="col-sm-6 col-xs-6 col-lg-6 ">

				<div style="font-size:15px;float:center;text-align:left;"><b>Pending Results/Released Result</b> </div>
		</div>


	</div>
	<br>
	<br>
	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">

				<div style="font-size:15px;float:center;text-align:center;"><b><table class="table table-bordered responsive">
										    <thead>
										      <tr>

										        <th style="text-align:center;">Subject</th>
										        <th style="text-align:center;">Grade</th>

										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td></td>
										        <td></td>

										      </tr>

										      <tr>
										        <td></td>
										        <td> </td>

										      </tr>

										      <tr>
										        <td> </td>
										        <td></td>

										      </tr>

										      <tr>
										        <td> </td>
										        <td></td>

										      </tr>



										    </tbody>
										  </table>
								</b> </div>
		</div>
	</div>
	<br>
	<br>
	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">

				<div style="font-size:15px;"><b>Please note that candidates who do not have 3  passes in GCE (A/L) or equivalent and seek admission  through  alternative  qualifications  should  pass  the Aptitude  Test  conducted  by the University.</b></div>
		</div>
	</div>
	<br>

	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:17px;text-align:left;"><b>10.Other Academic Qualification</b> </div>
		</div>
	</div>
	<br>
	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">

				<div><b><table class="table table-bordered responsive">
										    <thead>
										      <tr>
										        <th style="text-align:center">Qualification(eg :Diploma)</th>
										        <th style="text-align:center">Subjects covered</th>
										        <th style="text-align:center">Institution</th>
										        <th style="text-align:center">Duration</th>

										        <th>Full time or Part time</th>

										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td></td>
										        <td> </td>
										        <td> </td>
										        <td> </td>
										        <td> </td>
										      </tr>

										      <tr>
										        <td></td>
										       	<td> </td>
										        <td> </td>
										        <td> </td>
										        <td> </td>
										      </tr>

										      <tr>
										        <td> </td>
										         <td> </td>
										        <td> </td>
										        <td> </td>
										        <td> </td>
										      </tr>

										      <tr>
										        <td> </td>
										          <td> </td>
										        <td> </td>
										        <td> </td>
										        <td> </td>
										      </tr>

										      <tr>
										        <td></td>
										         <td> </td>
										        <td> </td>
										        <td> </td>
										        <td> </td>
										      </tr>

										      <tr>
										        <td></td>
										          <td> </td>
										        <td> </td>
										        <td> </td>
										        <td> </td>
										      </tr>

										       <tr>
										        <td> </td>
										          <td> </td>
										        <td> </td>
										        <td> </td>
										        <td> </td>
										      </tr>

										    </tbody>
										  </table>

							</b></div>
		</div>
	</div>

	<br>
	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:17px;text-align:left;"><b>11.Present Occupation</b> </div>
		</div>

	</div>
		<br>
	<div class="row">
		<div class="col-sm-12 col-xs-12 col-lg-12 ">

				<div style="font-size:15px;"><b><table class="table table-bordered responsive">
										    <thead>
										      <tr>
										        <th style="text-align:center">Date of Commencement</th>
										        <th style="text-align:center">Name of Firm/Organization</th>
										        <th style="text-align:center">Title/Position</th>


										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td></td>
										        <td></td>
										        <td></td>
										      </tr>

										       <tr>
										        <td></td>
										        <td></td>
										        <td></td>
										      </tr>

										       <tr>
										        <td></td>
										        <td></td>
										        <td></td>
										      </tr>



										    </tbody>
										  </table>

							</b> </div>
		</div>


	</div>

	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:17px;text-align:left;"><b>12.Certification of Employer</b> </div>
		</div>

	</div>
	<br>
	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:15px;text-align:left;"><b>a.Name : </b> </div>
		</div>
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:15px;text-align:left;"><b>....................................................</b> </div>
		</div>

	</div>
	<br>
	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:15px;text-align:left;"><b>b.Designation :</b> </div>
		</div>
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:15px;text-align:left;"><b>....................................................</b> </div>
		</div>

	</div>
	<br>
	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:15px;text-align:left;"><b>c.Signature :</b> </div>
		</div>

		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div style="font-size:15px;text-align:left;"><b>....................................................</b> </div>
		</div>

	</div>

	<br>
	<br>
	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">

				<div><b>DECLARATION BY APPLICANT</b></div>
		</div>
	</div>
	<br>

	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">

				<div><b>I  declare  that  the  particulars  furnished  above  are  true  and  correct  to  the  best  of  my  knowledge.  I understand that provision of incorrect information will disqualify me from the candidacy.</b></div>
		</div>
	</div>
	<br>
	<br>

	<div class="row" >
		<div class="col-sm-5 col-xs-5 col-lg-5  center"><b>

			Date : ...............................
		</b></div>

		<div class="col-sm-5 col-xs-5 col-lg-5 ">

				<div class="row">
					<div class="col-sm-6"><b>
					   ...........................................<br/>
					   Signature of Applicants

					</b></div>

					<div class="col-sm-6">

					</div>

				</div>
		</div>
	</div>
	<br>
	<br>


























</div>













  </body>
  </html>
