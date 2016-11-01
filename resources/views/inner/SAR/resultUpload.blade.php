<style>
/* layout.css Style */
.upload-drop-zone {
  height: 200px;
  border-width: 2px;
  margin-bottom: 20px;
}

/* skin.css Style*/
.upload-drop-zone {
  color: #ccc;
  border-style: dashed;
  border-color: #ccc;
  line-height: 200px;
  text-align: center
}
.upload-drop-zone.drop {
  color: #222;
  border-color: #222;
}



.image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}

</style>

@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">

    	<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
				<div class="panel-body">
					<div class="input-group image-preview">
            <form action="/imports" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token()}}">
						<input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
						<!-- don't give a name === doesn't send on POST/GET -->
						<span class="input-group-btn">
						<!-- image-preview-clear button -->
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
						<!-- image-preview-input -->
						<div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
							<input type="file"  name="input-file-preview"/>
						</div>
            <!--upload button-->
						<input type="submit" class="btn btn-labeled btn-default"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
						</span>
            </form>
          </div>
					<!-- /input-group image-preview [TO HERE]-->

					<br />

					<!-- Drop Zone -->
					<div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
					<br />
					<!-- Progress Bar -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
					</div>
					<br />
					<!-- Upload Finished -->
					<div class="js-upload-finished">
						<h4>Upload history</h4>
						<div class="list-group"> <a href="#" class="list-group-item list-group-item-danger"><span class="badge alert-danger pull-right">23-11-2014</span>amended-catalogue-01.xls</a> <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue-01.xls</a> <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue-01.xls</a> <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue.xls</a> </div>
					</div>
				</div>
			</div>
		</div>




	</div>
</div>
</div>

<!-- /container -->
@endsection
