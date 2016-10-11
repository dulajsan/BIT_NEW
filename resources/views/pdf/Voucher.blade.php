<!DOCTYPE html>
<html>
  <head>
    <title>Voucher New</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>



@for($i=0;$i<4;$i++)

<div class="container">
<!--heading-->
	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">
	
				<div></div>
		</div>
	</div>

	
	<div class="row">
		<div class="col-sm-4 col-xs-4 col-lg-4 ">
	
				<div style="font-size:15px;"><b>CASH-PAYING-IN-SLIP<br></b></div>
				<div style="font-size:15px;"><b>(To be filled in quadruplicate) </b><br></div>
				<div style="font-size:14px;"><b>EDC COPY-2</b></div>
		</div>
		
		<div class="col-sm-1 col-xs-1 col-lg-1 ">
	
				<div >barcode<br>registration number</div>
			
		</div>

		<div class="col-sm-7 col-xs-7 col-lg-7 ">
	
				<div style="font-size:16px;float:center;"><b>DEGREE OF BACHELOR OF INFORMATION TECHNOLOGY-BIT<br>UNIVERSITY OF COLOMBO SHCOOL OF COMPUTING (UCSC)</b></div>
		</div>

	</div>

	<!--h2-->
	<br>
	<div class="row" >
		<div class="col-sm-2 col-xs-2 col-lg-2 ">
	
				<div style="font-size:15px;"><b>Date :</b></div>
		</div>
		<div class="col-sm-3 col-xs-3 col-lg-3 ">
	
				<div style="font-size:15px;"> <table class="table table-bordered responsive">
													<thead>
												      <tr>
												        <th> D</th>
												        <th>D</th>
												        <th>M</th>
												        <th>M</th>
												        <th>Y</th>
												        <th>Y</th>
												        <th>Y</th>
												        <th>Y</th>

												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>   </td>
												        <td>   </td>
												        <td>   </td>
												        <td>   </td>
												        <td>   </td>
												        <td>   </td>
												        <td>   </td>
												        <td>   </td>
												      </tr>
												     </tbody>
												     </table>






			   </div>
		</div>
		<div class="col-sm-4 col-xs-4 col-lg-4 ">
	
				<div style="font-size:15px; width:230px;height:50px;border:1px solid #000;text-align:center;float:right"><b>Paid at Peopls's Bank Branch</b></div>
		</div>
		<div class="col-sm-3 col-xs-3 col-lg-3">
	
				<div style="font-size:15px;width:200px;height:50px;border:1px solid #000;float:right;text-align:center;"><b>Paid Bank Branch Code :</b></div>
		</div>
	</div>


	<!--purpose-->
	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">
	
				<div style="font-size:15px;float:left;"><table class="table table-bordered responsive">
													<thead>
														<tr>
												        <th>Purpose</th>
												        <th>Please tick the appropriate</th>
												         <th>Year/Semester</th>
												          <th>Please write the appropriate</th>
												        
												      </tr>
												      </thead>
												      <tbody>
												      <tr>
												        <td><b>	Examination fee</b></td>
												        <td><b> </b></td>
												        <td><b>Semester(1,2,3,4,5,6)</b></td>
												         <td><b> </b></td>
												        
												      </tr>
												      <tr>
												      	 <td><b> Registration fee</b></td>
												      	 <td><b> </b></td>
												      	 <td><b>Year(Academic Year 1/2/3) </b></td>
												      	 <td><b> </b></td>
												      </tr>
												      <tr>
												      	 <td><b>Provisional Registration fee</b></td>
												      	 <td><b> </b></td>
												      </tr>
												      <tr>
												      	 <td><b>Certificate fee</b></td>
												      	 <td><b> </b></td>
												      </tr>
												      <tr>
												      	 <td><b>Surcharge fee</b></td>
												      	 <td><b> </b></td>
												      </tr>
												      <tr>
												      	 <td><b>Deferment fee</b></td>
												      	 <td><b> </b></td>
												      </tr>
												      <tr>
												      	 <td><b>Project fee</b></td>
												      	 <td><b> </b></td>
												      </tr>
												      <tr>
												      	 <td><b>Other fee</b></td>
												      	 <td><b> </b></td>
												      </tr>
												     </tbody>
												     </table>
				</div>
		</div>
	</div>
	<br>

	<!--account details-->
	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">
	
				<div style="font-size:15px;">PAID IN CREDIT OF</div>
				<div style="font-size:15px;"><b>UCSC EXTERNAL DEGREE PROGRAMME-PEOPLE'S BANK,THIBIRIGASAYAYA-Ac No. 086-1001-111-89667</b><br></div>
		</div>
	</div>
	<br>

	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">
				@foreach($applicants as $key => $applicant)
				<div style="font-size:13px;"><b>AMOUNT PAID : Rs.{{$applicant->applicant_fee_paid}}</b></div>
				@endforeach
		</div>
	</div>

	<div class="row" >
		<div class="col-sm-3 col-xs-3 col-lg-3 ">
	
				<div style="font-size:13px;"><b>AMOUNT IN WORDS :</b></div>
		</div>
		<div class="col-sm-5 col-xs-5 col-lg-5 ">
	
				<div style="font-size:13px;float:left;"><b>SRI LANKAN RUPEES SIX THOUSAND</b></div>
		</div>
		<div class="col-sm-4 col-xs-4 col-lg-4">
	
				<div style="font-size:13px;float:center;"><b>Instruction to Bank</b></div>
		</div>
	</div>


	<div class="row" >
		<div class="col-sm-6 col-xs-6 col-lg-6 ">
				<br>
				<div style="font-size:15px; width:400px;height:130px;border:1px solid #000;text-align:center;float:right;"><br>.........................................................................................<br><b>CASH DEPOSITER'S SIGNATURE</b><br><br>
				......................................................................................... <br><b>CASHIER'S SIGNATURE</b></div>
		</div>

		<div class="col-sm-6 col-xs-6 col-lg-6 ">
				<br>
				@foreach($users as $key => $user)
				<div style="font-size:15px; width:400px;height:150px;border:1px solid #000;text-align:left;float:right;"><b>1.Applicant's Full Name :<br>{{$user->full_name}}</b><br><br><b>2.Aplicant's Registration Number :{{$user->id}} </b><br><br><b>3.Applicant's NIC No. :{{$user->nic_passport}}</b></div>
				@endforeach
		</div> 
	</div>
	<br>
	<hr style="border-color: #000;">

	<div class="row" >
		<div class="col-sm-12 col-xs-12 col-lg-12 ">
	
				<div style="font-size:15px;text-align:center;"><b>DO NOT WRITE ANYTHING BELOW THIS LINE</b></div>
				
		</div>
	</div>
	<br>
	<br>
	<br>
	<hr style="border-color: #000;">

</div>

@endfor

</body>
</html>