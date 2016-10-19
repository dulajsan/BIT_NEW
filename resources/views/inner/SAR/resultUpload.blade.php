
@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="row">

    	<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
				<div class="panel-body">
					<div class="input-group image-preview">
						<input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
						<!-- don't give a name === doesn't send on POST/GET -->
						<span class="input-group-btn">
						<!-- image-preview-clear button -->
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
						<!-- image-preview-input -->
						<div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
							<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
							<!-- rename it -->
						</div>
						<button type="button" class="btn btn-labeled btn-default"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
						</span> </div>
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

    	<div class="col-md-5">
    		<div class="panel panel-default">
         		<div class="panel-heading"><strong>Download files</strong> <small> </small></div>
   			<div class="panel-body">
				<button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-download"></i> </span>Download catalogue</button>
				<button type="button" class="btn btn-labeled btn-info"> <span class="btn-label"><i class="glyphicon glyphicon-download"></i> </span>Download delta</button>
				<br />
    		</div>
    		</div>
		</div>


	</div>
</div>

<!-- /container -->
@endsection
