@extends('layouts.admin')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
  <h2>Manage profile</h2>
<!--tab menus-->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Manage profile</a></li>
    <li><a data-toggle="tab" href="#menu1">change password</a></li>
  </ul>
  <!--./tab menus-->

<!--tab content-->
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">

    <p>&nbsp;.</p>
    <!--form-->
    <form class="form-horizontal">

      <div class="form-group">
          <label class="col-sm-2 control-label">name</label>
          <div class="col-sm-6">
            <input class="form-control" id="focusedInput" type="text" value="">
          </div>
          <div class="col-sm-4"></div>
      </div>
      <hr/>
      <div class="form-group">
          <label class="col-sm-2 control-label">email</label>
          <div class="col-sm-6">
            <input class="form-control" id="focusedInput" type="text" value="">
          </div>
          <div class="col-sm-4"></div>
      </div>
      <hr/>
      <div class="form-group">
          <label class="col-sm-2 control-label">nic</label>
          <div class="col-sm-6">
            <input class="form-control" id="focusedInput" type="text" value="">
          </div>
          <div class="col-sm-4"></div>
      </div>
      <hr/>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-4" style="text-align:right">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
    </form>
    <!--./form-->
  </div>
  <div id="menu1" class="tab-pane fade">
    <p>&nbsp;</p>
    <form class="form-horizontal">

          <div class="form-group">
              <label class="col-sm-2 control-label">current password</label>
              <div class="col-sm-6">
                <input class="form-control" id="focusedInput" type="text" value="Click to focus...">
              </div>
              <div class="col-sm-4"></div>
          </div>
          <hr/>
          <div class="form-group">
              <label class="col-sm-2 control-label">new password</label>
              <div class="col-sm-6">
                <input class="form-control" id="focusedInput" type="text" value="Click to focus...">
              </div>
              <div class="col-sm-4"></div>
          </div>
          <hr/>
          <div class="form-group">
              <label class="col-sm-2 control-label">confirm password</label>
              <div class="col-sm-6">
                <input class="form-control" id="focusedInput" type="text" value="Click to focus...">
              </div>
              <div class="col-sm-4"></div>
          </div>
          <hr/>
          <div class="form-group">
              <div class="col-sm-4 col-sm-offset-4" style="text-align:right">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
          </div>
      </form>

  </div>
</div>
<!--./tab content-->
</div>


</div>
