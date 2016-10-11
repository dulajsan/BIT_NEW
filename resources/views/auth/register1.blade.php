@extends('layouts.app')

<link href="{{{ asset('/css/all-demo.css') }}}" rel="stylesheet">

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: linear-gradient(#ddd,, #f8f8f8); color:#fff; height:80px"><h3><i class="fa fa-user-plus" aria-hidden="true"></i>   Register</h3></div>
                <div class="panel-body" style="background-color:#ECF0F1">


                    <!--
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>

                    -->



    <div class="example-box-wrapper">

        <div id="form-wizard-3" class="form-wizard">
            <ul>
                <li class="active">
                    <a href="#" data-toggle="tab" id="nav1">
                      <label class="wizard-step">1</label>
                      <span class="wizard-description">
                         User details
                         <small>Gather the user details</small>
                      </span>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tab" id="nav2">
                      <label class="wizard-step">2</label>
                      <span class="wizard-description">
                         Contact information
                         <small>Confirm contact details</small>
                      </span>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tab" id="nav3">
                      <label class="wizard-step">3</label>
                      <span class="wizard-description">
                         Educational qualifications
                         <small>Gather educational</small>
                      </span>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tab" id="nav4">
                      <label class="wizard-step">4</label>
                      <span class="wizard-description">
                         other details
                         <small>Establish business description</small>
                      </span>
                    </a>
                </li>
            </ul>

            <!--------contents  -------->

            <div class="tab-content col-sm-10 col-sm-offset-1">


                <!--------content block one ---------------------->
                <form class="form-horizontal" method="POST" role="form" action="{{ url('/register') }}">

                <div class="tab-pane active" id="step-1">


                    <div class="content-box">
                        <h3 class="content-box-header bg-default" style="background-color:#85C1E9;color:#fff">
                           <i class="fa fa-users" aria-hidden="true"></i>   Personal Details
                        </h3>
                        <div class="content-box-wrapper" style="background-color:#F2F3F4">
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="fullname">Full name:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="fullname" placeholder="Madurasinghege dulaj sanjaya" name="full_name" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="Init">Initials:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="Init" placeholder="M.D." name="initials" required>
                                </div>
                              </div>

                             <div class="form-group">
                                <label class="control-label col-sm-2" for="Lname">Last name:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="Lname" placeholder="Sanjaya" name="last_name" required>
                                </div>
                              </div>

                              <!--title-->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Title">Title:</label>
                                <div class="col-sm-10">
                                  <select class="form-control" id="Title" name="title" required>
                                    <option>--Title--</option>
                                    <option>Mr.</option>
                                    <option>Miss.</option>
                                    <option>Mrs.</option>
                                    <option>Rev.</option>
                                    <option>Dr.</option>
                                  </select>
                                </div>
                            </div>
                            <!--end of title-->

                            <input type="hidden" name="_token" value="{{csrf_token()}}">



                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sex">Sex</label>
                                <div class="col-sm-10">
                                      <label class="radio-inline"><input type="radio" name="sex" value="Male" required/>Male</label>
                                      <label class="radio-inline"><input type="radio" name="sex" value="Female" required />Female</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Title">Citizenship:</label>
                                <div class="col-sm-10">
                                  <select class="form-control" id="Citizen" name="citizenship" required>
                                    <option>--Citizenship--</option>
                                    <option>Sri Lankan</option>
                                    <option>Foreign</option>
                                  </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nic">NIC/Passport</label>
                                <div class="col-sm-10">
                                      <label class="radio-inline"><input type="radio" name="is_nic" value="nic" required>National identity card</label>
                                      <label class="radio-inline"><input type="radio" name="is_nic" value="passport" required>Passport No</label>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nic">NIC NO:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nic" placeholder="93*******V" name="nic_passport" required>
                                </div>
                              </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Lname">Date of birth:</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" id="dob" name="DOB" required>
                                </div>
                            </div>

                            <!--next button-->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="reset" class="btn btn-primary">clear</button>
                                   <a href="#step-2" data-toggle="tab" id="cv"><button  class="btn btn-primary" id="next1">next</button></a>

                            <!--./next button-->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <!--content block two-->


                <div class="tab-pane" id="step-2">
                    <div class="content-box">
                        <h3 class="content-box-header" style="background-color:#85C1E9;color:#fff">
                            <i class="fa fa-volume-control-phone" aria-hidden="false"></i> Contact Information
                        </h3>
                        <div class="content-box-wrapper" style="background-color:#F2F3F4">

                              <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Permanent address:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="add1" placeholder="address line one" name="address1" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">&nbsp;</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="add2" placeholder="address line two" name="address2" required>
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">&nbsp;</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="add3" placeholder="address line three" name="address3" required>
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Country</label>
                                <div class="col-sm-10">
                                  <select class="form-control" id="country" name="country" required>
                                    <option>--select--</option>
                                    <option>Sri lanka</option>
                                    <option>India</option>
                                    <option>Singapore</option>
                                  </select>
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                </div>
                              </div>

                              <!--next back buttons-->
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <a href="#step-1" data-toggle="tab"><button type="button" class="btn btn-primary" id="back2">Back</button></a>
                                    <a href="#step-3" data-toggle="tab"><button type="button" class="btn btn-primary" id="next2">Next</button></a>
                                  </div>
                              </div>
                              <!--./next back buttons-->
                        </div>
                    </div>
                </div>

                <!-----content  block three------>

                <div class="tab-pane" id="step-3">
                    <div class="content-box">
                        <h3 class="content-box-header" style="background-color:#85C1E9;color:#fff">
                            Education details
                        </h3>
                        <div class="content-box-wrapper" style="background-color:#F2F3F4">

                                <!--education-->
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="education">Education</label>
                                <div class="col-sm-10">
                                  <div class="radio">
                                      <label><input type="radio" value="1" name="education" required>I have three GCE A/L passes.(Common general test and General english paper are not considered as core subjects.)</label>
                                   </div>
                                    <div class="radio">
                                      <label><input type="radio" value="2" required>I have the foundation in Information technology(which is conducted by UCSC)</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="3" required>I have other academic/ proffesional qualifications(attach all certicates including GCE O/L. There will be a computer base amplitude test only for this category)</label>
                                    </div>
                                </div>
                              </div>

                               <!--end of education-->


                              <div class="form-group">
                                <label class="control-label col-sm-2" for="al">GCE A Level</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Year" name="year1" required>
                                </div>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control"  placeholder="Subject" name="subject1" required>
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Grade" name="grade1" required>
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-sm-2" for="al">&nbsp;</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Year" name="year2" required>
                                </div>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control"  placeholder="Subject" name="subject2" required>
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Grade" name="grade2" required>
                                </div>
                              </div>


                                <div class="form-group">
                                <label class="control-label col-sm-2" for="al">&nbsp;</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Year" name="year3" required>
                                </div>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control"  placeholder="Subject" name="subject3" required>
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Grade" name="grade3" required>
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-sm-2" for="al">&nbsp;</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Year" name="year4" required>
                                </div>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control"  placeholder="Subject" name="subject4" required>
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Grade" name="grade4" required>
                                </div>
                              </div>

                              <!--next and back buttons-->
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                   <a href="#step-2" data-toggle="tab"><button type="button" class="btn btn-primary" id="back3">Back</button></a>
                                    <a href="#step-4" data-toggle="tab"><button type="button" class="btn btn-primary" id="next3">Next</button></a>
                                </div>
                              </div>
                              <!--./next and back buttons-->
                        </div>
                    </div>
                </div>

                <!--content block four-->

                <div class="tab-pane" id="step-4">
                    <!--location-->
                    <div class="content-box">
                        <h3 class="content-box-header" style="background-color:#85C1E9;color:#fff">
                            Registration location
                        </h3>
                        <!--content box wrapper-->
                        <div class="content-box-wrapper" style="background-color:#F2F3F4">

                          <div class="form-group">
                          <div class="radio col-sm-3 col-sm-offset-1">
                            <label><input type="radio" name="registration_loc" value="Colombo" required>Colombo</label>
                          </div>
                          <div class="radio col-sm-3">
                            <label><input type="radio" name="registration_loc" value="Jaffna" required>Jaffna</label>
                          </div>
                          <div class="radio col-sm-3">
                            <label><input type="radio" name="registration_loc" value="Galle" required>Galle</label>
                          </div>
                          </div>

                          <div class="form-group">
                          <div class="radio col-sm-3 col-sm-offset-1" >
                            <label><input type="radio" name="registration_loc" value="Kandy" required>Kandy</label>
                          </div>
                          <div class="radio col-sm-5">
                            <label><input type="radio" name="registration_loc">other<input type="textbox" class="form-control" name=""></label>
                          </div>
                        </div>
                   </div>
                   <!--end of registration location-->

                    <!--employment details-->
                    <div class="content-box">
                        <h3 class="content-box-header" style="background-color:#85C1E9;color:#fff">
                            Employment details
                        </h3>
                        <!--content box wrapper-->
                        <div class="content-box-wrapper" style="background-color:#F2F3F4">

                                  <!--currently emplyed-->
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="employ">&nbsp;</label>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="1" id="employ" name="employ">Currently employed</label>
                                      </div>
                                  </div>
                                  <!--end of emplyed-->

                                  <!--working in computer field-->
                                  <div class="form-group"  id="field">
                                    <label class="control-label col-sm-2" for="computer">&nbsp;</label>
                                    <div class="checkbox">
                                      <label ><input type="checkbox" value="1" id="computer" name="computerfield">Working in the computer field</label>
                                    </div>
                                  </div>
                                  <!--end of working in computer field-->

                                  <!--designation-->
                                  <div class="form-group"  id="designation">
                                    <label class="control-label col-sm-2" for="computer">Designation</label>
                                    <div class="col-sm-10">
                                      <input type="textbox" value="" id="designation" class="form-control" name="designation">
                                    </div>
                                  </div>
                                  <!--end of designation-->

                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <a href="#step-3" data-toggle="tab"><button type="button" class="btn btn-primary" id="back4">Back</button></a>
                                           <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                                    </div>
                                  </div>

                        </div>
                        <!--end of contentbox wrapper-->
                    </div>
                </div>
                <!--end of content block four-->

            </div>
             </form>

             <!--end of form-->
        </div>



    </div>








                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
  $(document).ready(function(){
     $("#designation").hide();
    $("#field").hide();
$("#employ").on("click", function(){

   $("#designation").toggle();
    $("#field").toggle();

});

  });


//multi step register form navigation

   $(document).ready(function(){

    //next buttons
    $("#next1").click(function(){

      $("#nav2").trigger("click");
    });

     $("#next2").click(function(){

      $("#nav3").trigger("click");
    });

      $("#next3").click(function(){

      $("#nav4").trigger("click");
    });

      //back buttons

      $("#back1").click(function(){

      $("#nav1").trigger("click");
    });

       $("#back2").click(function(){

      $("#nav2").trigger("click");
    });

        $("#back3").click(function(){

      $("#nav3").trigger("click");
    });


   });

   //end of multi step register navigation


</script> -->

<script>
$(document).ready(function(){
  $("#next1").click(function(){
    if($("#fullname").val()==""){
      $("#cv").bind('click', function(e){
        e.preventDefault();
      });
    }
    else{
      $("#cv").unbind('click');
    }



  });

});


</script>

@endsection
