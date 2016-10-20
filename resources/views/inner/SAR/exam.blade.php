@extends('layouts.admin')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
  <h1 class="page-header">Manage Exams</h1>
  <!--tab panel-->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Exam list</a></li>
    <li><a data-toggle="tab" href="#menu1">Add exam</a></li>

  </ul>

  <div class="tab-content">
      <!--exam list tab-->
      <div id="home" class="tab-pane fade in active">

      </div>
      <!--./exam list tab-->

      <!--add exam tab-->
      <div id="menu1" class="tab-pane fade">
        <form class="form-horizontal">
            <fieldset>

            <!-- Form Name -->
            <legend>&nbsp;</legend>

            <!-- exam name-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Exam name">exam name</label>
            <div class="col-md-4">
            <input id="Exam name" name="Exam name" type="text" placeholder="placeholder" class="form-control input-md" required="">
            </div>
            </div>

            <!-- academic year-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">academic year</label>
            <div class="col-md-4">
            <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            </div>
            </div>



            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">date</label>
            <div class="col-md-4">
            <input id="textinput" name="textinput" type="date" placeholder="placeholder" class="form-control input-md">
            </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">time</label>
            <div class="col-md-4">
            <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">

            </div>
            </div>

            <!-- Button -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">&nbsp;</label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-primary">submit</button>
            </div>
            </div>

            </fieldset>
            </form>

      </div>
      <!--./ addd exam tab-->
  </div>

  <!--./tab panel-->
</div>

</div>

@endsection
