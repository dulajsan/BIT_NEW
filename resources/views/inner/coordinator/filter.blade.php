@extends('layouts.admin')

@section('content')

<div id="page-wrapper">
  <div class="container-fluid">

    <div class="header">
      <h1 class="page-header">Filter students</h1>
    </div>
    <div class="row" style="height:30px"></div>
  </div>
        <section>
            <div id="example4"></div>
        </section>


        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog" style="width:700px">

            <!-- Modal content-->
            <div class="modal-content" style="margin-top:80px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit student Details</h4>
              </div>
              <!--modal body-->
              <div class="modal-body">
                <div class="row">
                  <!--tab menu-->
                  <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#user">User Details</a></li>
                      <li><a data-toggle="tab" href="#contact">Contact Details</a></li>
                      <li><a data-toggle="tab" href="#education">Education Details</a></li>
                  </ul>
                  <!--./tab menu-->
                  <!--form -->
                  <form class="form-horizontal">
                  <!--tab content-->
                    <div class="tab-content">
                      <!--user details-->
                      <div id="user" class="tab-pane fade in active">
                        <!--form left-->
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="full name">Full name:</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="full_name" placeholder="Enter email">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Last name:</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="last_name" placeholder="Enter password">
                            </div>
                          </div>

                          <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Sex:</label>
                          <div class="col-sm-10">
                          <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                          <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Citizenship:</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="citizen" placeholder="Enter password">
                          </div>
                        </div>

                      </div>
                      <!--./form left-->

                      <!--form right-->

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="initials">Initials:</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="Initials" placeholder="Enter email">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="sel1">Title:</label>
                              <div class="col-sm-10">
                              <select class="form-control" id="sel1">
                                <option>Mr.</option>
                                <option>Miss.</option>
                                <option>Mrs.</option>
                                <option>Rev.</option>
                                <option>Dr.</option>
                              </select>
                            </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">NIC/Passport</label>
                              <div class="col-sm-10">
                              <label class="radio-inline"><input type="radio" name="optradio1">NIC</label>
                              <label class="radio-inline"><input type="radio" name="optradio1">Passport</label>
                              </div>
                            </div>

                        </div>

                      <!--./form right-->
                      </div>
                      <!--./user details-->
                      <div id="contact" class="tab-pane fade">
                        <!--left form-->
                        <div class="col-sm-6">

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Add 1</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="add1" placeholder="Enter password">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Add 3:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="add3" placeholder="Enter password">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="country">Country</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="country" placeholder="Country">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="contact">Contact No:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="contact1" placeholder="Enter password">
                            </div>
                          </div>


                        </div>
                        <!--./left form-->
                        <!--right form-->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="add2">Add 2:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="add2" placeholder="Enter password">
                            </div>
                          </div>



                        <div class="form-group">
                          <label class="control-label col-sm-2" for="email">Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="Enter Email">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="contact2">Contact No</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="contact No" placeholder="Enter password">
                          </div>
                        </div>

                        </div>

                        <!--./right form-->
                      </div>
                      <div id="education" class="tab-pane fade">
                        <!--left -->
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">&nbsp;</label>
                              <div class="col-sm-10">
                              <label class="radio"><input type="radio" name="optradio1">
                                I have three GCE A/L passes.(Common general test and General english paper are not considered as core subjects.)
                              </label>
                              <label class="radio"><input type="radio" name="optradio1">
                                I have the foundation in Information technology(which is conducted by UCSC)
                              </label>
                              <label class="radio"><input type="radio" name="optradio1">
                                I have other academic/ proffesional qualifications(attach all certicates including GCE O/L. There will be a
                                computer base amplitude test only for this category)
                              </label>
                              </div>
                            </div>
                          </div>
                        <!--./left-->
                        <!--right-->
                        <div class="col-sm-6">

                        </div>
                        <!--./right-->

                      </div>
                    </div>
                    <!--./ tab content-->
                    <!--./form-->

              </div>
            </div>
              <!--modal body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

</div>




@endsection
