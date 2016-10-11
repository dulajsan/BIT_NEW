@extends('layouts.admin')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
  <h3 style="text-align:center;"><b>Edit Fees Details</b></h3>
  <br>
  <div class="panel with-nav-tabs panel-primary">

        <ul class="nav nav-tabs tabs-2" role="tablist">

           <li class="dropdown">
                                <a style="font-size:17px;color:#000;" href="#" data-toggle="dropdown"><b>First Year</b><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab1" data-toggle="tab"><b>First Semester</b></a></li>
                                    <li><a href="#tab2" data-toggle="tab"><b>Second Semester</b></a></li>
                                </ul>
            </li>


           <li class="dropdown">
                                <a style="font-size:17px;color:#000;" href="#" data-toggle="dropdown"><b>Second Year</b><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab3" data-toggle="tab"><b>Third Semester</b></a></li>
                                    <li><a href="#tab4" data-toggle="tab"><b>Fourth Semester</b></a></li>
                                </ul>
          </li>

           <li class="dropdown">
                                <a style="font-size:17px;color:#000;" href="#" data-toggle="dropdown"><b>Third Year</b><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab5" data-toggle="tab"><b>Fifth Semester</b></a></li>
                                    <li><a href="#tab6" data-toggle="tab"><b>Sixth Semester</b></a></li>
                                </ul>
            </li>
        </ul>

      <br>

  <div class="panel-body">
    <div class="tab-content">
      <div id="tab1" class="tab-pane fade in active">
        <h4><b>First Semester</b></h4>
        <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-lg-3" for="usr" style="font-size:16px;">Examination Fee</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="usr"></div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Registration Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd" style="font-size:16px;"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Provisional Registration Fee </label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Certificate Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Surcharge Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd" ></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Deferment Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd" ></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Project Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Other Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>


       <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                        <button type="reset" class="btn btn-default btn-lg">clear</button>
                              <button type="submit" class="btn btn-primary btn-lg">save
                                </button>
                </div>
        </div>
      </form>
      </div>

      <div id="tab2" class="tab-pane fade">
        <h4><b>Second Semester</b></h4>
        <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-lg-3" for="usr" style="font-size:16px;">Examination Fee</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="usr"></div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Registration Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Provisional Registration Fee </label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Certificate Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Surcharge Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd" style="font-size:16px;"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Deferment Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd" style="font-size:16px;"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Project Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd" style="font-size:16px;"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Other Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>


       <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                        <button type="reset" class="btn btn-default btn-lg">clear</button>
                              <button type="submit" class="btn btn-primary btn-lg">save
                                </button>
                </div>
        </div>
        </form>

      </div>

      <div id="tab3" class="tab-pane fade">
        <h4><b>Third Semester</b></h4>
        <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-lg-3" for="usr" style="font-size:16px;">Examination Fee</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="usr"></div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Registration Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Provisional Registration Fee </label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Certificate Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Surcharge Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Deferment Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Project Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Other Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>


             <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                        <button type="reset" class="btn btn-default btn-lg">clear</button>
                              <button type="submit" class="btn btn-primary btn-lg">save
                                </button>
                </div>
        </div>
      </form>

      </div>



      <div id="tab4" class="tab-pane fade">
        <h4><b>Fourth Semester</b></h4>
        <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-lg-3" for="usr" style="font-size:16px;">Examination Fee</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="usr"></div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Registration Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Provisional Registration Fee </label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Certificate Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Surcharge Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Deferment Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Project Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Other Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>


           <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                        <button type="reset" class="btn btn-default btn-lg">clear</button>
                              <button type="submit" class="btn btn-primary btn-lg">save
                                </button>

                </div>
          </div>
        </form>
        </div>




         <div id="tab5" class="tab-pane fade">
        <h4><b>Fifth Semester</b></h4>
        <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-lg-3" for="usr" style="font-size:16px;">Examination Fee</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="usr"></div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Registration Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Provisional Registration Fee </label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Certificate Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Surcharge Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Deferment Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Project Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Other Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

             <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                        <button type="reset" class="btn btn-default btn-lg">clear</button>
                              <button type="submit" class="btn btn-primary btn-lg">save
                                </button>
                </div>
        </div>
      </form>
        </div>

         <div id="tab6" class="tab-pane fade">
        <h4><b>Sixth Semester</b></h4>
        <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-lg-3" for="usr" style="font-size:16px;">Examination Fee</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="usr"></div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Registration Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Provisional Registration Fee </label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Certificate Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Surcharge Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Deferment Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Project Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3" for="pwd" style="font-size:16px;">Other Fee</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="pwd"></div>
            </div>

             <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                        <button type="reset" class="btn btn-default btn-lg">clear</button>
                              <button type="submit" class="btn btn-primary btn-lg">save
                                </button>
                </div>
        </div>
      </form>
        </div>








    </div>
   </div>
</div>
</div>
</div>
@endsection
