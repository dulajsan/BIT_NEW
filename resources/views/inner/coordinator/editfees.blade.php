@extends('layouts.admin')
@section('content')
<div id="page-wrapper">
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
    <section class="white_backg" style="margin-top:10px; padding-top:10px">
    <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-lg-3" for="usr" style="font-size:16px;">Examination Fee</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="exam_fee"></div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Registration Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="reg_fee"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Provisional Registration Fee </label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="prov_reg_fee"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Certificate Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="cert_fee"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Surcharge Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="sur_fee"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Deferment Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="def_fee"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Project Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pro_fee"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Other Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="other_fee"></div>
            </div>

             <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">

                              <button type="submit" class="btn btn-primary btn-lg" id="btn_editfee">save
                                </button>
                </div>
        </div>
      </form>
    </section>

  </div>


</div>
</div>
@endsection
