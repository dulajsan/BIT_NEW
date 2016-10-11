@extends('layouts.admin')

@section('content')


<div id="page-wrapper">
<div class="container-fluid">

	<div class="container-fluid">
  <div class="page-header">
    <h1>Exam Hall Details</h1>
  </div>

</div>


	<div class="container-fluid">
	<div >
	 <form class="form-horizontal" role="form">
<div class="row row-centered">
<div class="col-xs-3 col-centered"></div>
 <div class="form-group" >
     <label class="control-label col-sm-2" for="district">District:</label>
    <div class="col-sm-3">
      <select name="district" class="form-control" id="dropdown" >
		<option>Colombo</option>
		<option>Kandy</option>
		<option>Jaffna</option>
		<option>Galle</option>
	  </select>

    </div>
  </div>
  </div>

<div class="row row-centered">
<div class="col-xs-3 col-centered"></div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="branch">Branch:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="branch" placeholder="Enter branch" >
    </div>
  </div>
  </div>


  <div class="row row-centered">
<div class="col-xs-3 col-centered"></div>
  <div class="form-group" >
    <label class="control-label col-sm-2" for="pwd">Quantity:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="quantity" placeholder="Enter quantity">
    </div>
  </div>
  </div>



  <div class="col-xs-5 col-centered"></div>
  <div>
  <button type="button" class="btn btn-primary btn-md">Edit</button>
<button type="button" class="btn btn-primary btn-md">Save</button>
<button type="button" class="btn btn-primary btn-md">Delete</button>
</div>
</div>



  <br><br><br><br>
 <div class="container-fluid">

  <table class="table" border=2 >
    <thead>
      <tr style="background-color: #04799e; color:#fff">
	  <center>
        <th>District</th>
        <th>Branch No</th>
        <th>Branch</th>
		<th>Quantity</th>
	  </center>
      </tr>
    </thead>
    <tbody>
	<tr >
        <td></td>
        <td></td>
		<td></td>
		<td></td>
      </tr>
      <tr >
        <td class="danger" style="background-color: #f2f2f2" >Colombo</td>
        <td class="info " style="background-color: #f2f2f2" >B001</td>
		<td class="info" style="background-color: #f2f2f2">Thurstan</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
      <tr >
        <td ></td>
        <td class="info" style="background-color: #f2f2f2">B002</td>
		<td class="info" style="background-color: #f2f2f2">Nugegoda</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
	   <tr >
        <td></td>
        <td class="info" style="background-color: #f2f2f2">B003</td>
		<td class="info" style="background-color: #f2f2f2">Dehiwala</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
	   <tr >
        <td></td>
        <td></td>
		<td></td>
		<td></td>
      </tr>
	   <tr>
        <td class="danger" style="background-color:#f2f2f2">Galle</td>
        <td class="info" style="background-color: #f2f2f2">B004</td>
		<td class="info" style="background-color: #f2f2f2">Harispattuwa</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
	   <tr >
        <td></td>
        <td class="info" style="background-color: #f2f2f2">B005</td>
		<td class="info" style="background-color: #f2f2f2">Ahangama</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
	  <tr >
        <td></td>
        <td class="info" style="background-color: #f2f2f2">B006</td>
		<td class="info" style="background-color: #f2f2f2">Bataduwa</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
	  <tr >
		<td></td>
        <td></td>
		<td></td>
		<td></td>
      </tr>
	   <tr >
        <td class="danger" style="background-color:#f2f2f2">Kandy</td>
        <td class="info" style="background-color: #f2f2f2">B007</td>
		<td class="info" style="background-color: #f2f2f2">Matale</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
	   <tr >
        <td></td>
        <td class="info" style="background-color: #f2f2f2">B008</td>
		<td class="info" style="background-color: #f2f2f2">Katugasthota</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
	  <tr >
        <td></td>
        <td class="info" style="background-color: #f2f2f2">B009</td>
		<td class="info" style="background-color: #f2f2f2">Akurana</td>
		<td class="info" style="background-color: #f2f2f2"></td>
      </tr>
    </tbody>
  </table>
</div>
</form>
</div>
</div>
</div>

@endsection
