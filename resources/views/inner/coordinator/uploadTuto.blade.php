@extends('layouts.admin')



@section('content')

<div id="page-wrapper">
<div class="container-fluid">
  
  <div class="header">
    <h1 class="page-header">Upload subject materials</h1>
  </div>
  <div class="row" style="height:30px"></div>



  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 ppit-tab-menu">
          <div class="list-group">
            <a href="#" class="list-group-item active text-center">scs1101</a>
            <a href="#" class="list-group-item text-center">scs1102</a>
            <a href="#" class="list-group-item text-center">scs1103</a>
            <a href="#" class="list-group-item text-center">scs1104</a>
            <a href="#" class="list-group-item text-center">scs1105</a>
            <a href="#" class="list-group-item text-center">scs1106</a>
          </div>
        </div>


        <div class="col-sm-10 tab-content">



          <div class="panel panel-default">
            <div class="panel-heading">
              <!--enter the subject-->
              <strong>Upload Files</strong> <small>Subject</small>
            </div>


            <div class="panel-body">

              <!-- Standar Form -->
              <h4>Select files from your computer</h4>
              <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                <div class="form-inline">
                  <div class="form-group">
                    <input type="file" name="files[]" id="js-upload-files" multiple>
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
                </div>
              </form>

              <!-- Drop Zone -->
              <h4>Or drag and drop files below</h4>
              <div class="upload-drop-zone" id="drop-zone">
                Just drag and drop files here
              </div>

              <!-- Progress Bar -->
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                  <span class="sr-only">60% Complete</span>
                </div>
              </div>

              <!-- Upload Finished -->
              <div class="js-upload-finished">
                <h3>Processed files</h3>
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
                  <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-02.jpg</a>
                </div>
              </div>
            </div>
          </div>


          <div class="row" style="height:40px"></div>


        </div>


    </div>
  </div>






</div>





</div>
@endsection
