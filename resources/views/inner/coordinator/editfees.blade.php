@extends('layouts.admin')
@section('content')
<div id="page-wrapper" style="height:800px">
<div class="container-fluid">

  <!-- select semeter-->
  <div class="header">
    <h1 class="page-header">Edit fees</h1>
  </div>
  <div class="row" style="height:30px"></div>


  <div class="row">
    <div class="col-md-6 col-md-offset-3">
  <div class="form-group">
    <label for="sel1">Select semester:</label>
    <select class="form-control" id="semid">
      <option value="select">select</option>
      <option value="1">semester 1</option>
      <option value="2">semester 2</option>
      <option value="3">semester 3</option>
      <option value="4">semester 4</option>
      <option value="5">semester 5</option>
      <option value="6">semester 6</option>
    </select>
  </div>
</div>
</div>
  <!--./select semester-->

  <div class="container-fluid">

    <form class="form-horizontal">
      <div class="col-md-5 col-md-offset-1">
            <div class="form-group">
              <label>Examination Fee</label>
                  <input type="text" class="form-control" id="exam_fee">
            </div>
            <div class="form-group">
              <label>Registration Fee</label>
                <input type="text" class="form-control" id="reg_fee">
            </div>

            <div class="form-group">
              <label>Provisional Registration Fee </label>
                <input type="text" class="form-control" id="prov_reg_fee">
            </div>

            <div class="form-group">
              <label>Certificate Fee</label>
                <input type="text" class="form-control" id="cert_fee">
            </div>
          </div>
          <!--./end of left column-->

          <div class="col-md-5 col-md-offset-1">

            <div class="form-group">
              <label>Surcharge Fee</label>
                <input type="text" class="form-control" id="sur_fee">
            </div>

            <div class="form-group">
              <label>Deferment Fee</label>
                <input type="text" class="form-control" id="def_fee">
            </div>

            <div class="form-group">
              <label>Project Fee</label>
                <input type="text" class="form-control" id="pro_fee">
            </div>

            <div class="form-group">
              <label>Other Fee</label>
                <input type="text" class="form-control" id="other_fee">
            </div>

            <div class="form-group">
             <button type="button" class="btn btn-primary btn-lg" id="btn_editfee">save</button>
           </div>
          </div>


      </form>


  </div>


</div>
</div>
@endsection
