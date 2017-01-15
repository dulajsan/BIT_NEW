@extends('layouts.app')

@section('content')
<style>
.panel-heading:hover{
  background-color: #2f5989;
  transform: translateX(5px);
}

.panel-heading:active {
  background-color: #2f5989;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}



</style>

<div class="container">
<script type="text/javascript">
//enable text boxes to edit-->

  $("document").ready(function(){
    //full name
    $("#icn_fullname").click(function(){
      $("#t_fullname").prop('disabled',false);
    });
    //initials
    $("#icn_initials").click(function(){
      $("#t_initials").prop('disabled',false);

    });
    //last_name
     $("#icn_lastname").click(function(){
      $("#t_lastname").prop('disabled',false);
    });

     //title
    $("#icn_title").click(function(){
      $("#t_title").prop('disabled',false);

    });

    //sex
     $("#icn_sex").click(function(){
      $("#t_male").prop('disabled',false);
      $("#t_female").prop('disabled',false);

    });

     //citizenship
    $("#icn_citizen").click(function(){
      $("#t_citizen").prop('disabled',false);

    });



      $("#icn_dob").click(function(){
      $("#t_dob").prop('disabled',false);

    });

     $("#icn_address").click(function(){
      $("#t_add1").prop('disabled',false);
      $("#t_add2").prop('disabled',false);
      $("#t_add3").prop('disabled',false);

    });

  });


</script>


<script type="text/javascript">
  $("document").ready(function(){
    $("#update").click(function(){

      var full_name= $("#t_fullname").val();
      var initials=$("#t_initials").val();
      var last_name= $("#t_lastname").val();
      var title= $("#t_title").val();
      var sex=$("input[name=sex]:checked").val();
      var citizenship=$("#t_citizenship").val();
      var dob=$("#t_dob").val();



      // var datastring="full_name="+full_name+"&initials="+initials+"&last_name="+last_name+"&title="+title+"&sex="+sex+"&citizenship="+citizenship+"&isnic="+isnic+"&nic="+nic+"&dob="+dob;
$.ajax({
                url:"updateprof",
                type:"GET",
                data:"full_name="+full_name+"&initials="+initials+"&last_name="+last_name+"&title="+title+"&sex="+sex+"&citizenship="+citizenship+"&dob="+dob,
                success:function (data, textstatus, jqXHR)
                {
                    alert("updated");
                },

                error:function (jqXHR, textstatus, errorThrown)
                {
                    alert(errorThrown);
                }


    });

    });

  });


</script>


  @foreach ($users as $user)

    <div class="example-box-wrapper">


            <ul class="list-group list-group-separator row list-group-icons list-group-centered" style="list-style:none;">
            <!--user deatils-->
                <li class="col-md-3">
                    <a href="#custom-step-1" data-toggle="tab" class="panel panel-primary" style="border-color:#fff;">
                          <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>User Details</div>
                                </div>
                            </div>
                        </div>

                    </a>
                </li>
                <!-- end of user details-->

                <!--contact details-->
                <li class="col-md-3">
                    <a href="#custom-step-2" data-toggle="tab" class="panel panel-primary" style="border-color:#fff;">
                           <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Contact Details</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!--end of contact details-->

                <!--educational details-->
                <li class="col-md-3 active">
                    <a href="#custom-step-3" data-toggle="tab" class="panel panel-primary" style="border-color:#fff;">
                          <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Educational Details</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!--end of educational details-->

                <!--other details-->
                 <li class="col-md-3">
                    <a href="#custom-step-4" data-toggle="tab" class="panel panel-primary" style="border-color:#fff;">
                          <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Other Details</div>
                                </div>
                            </div>
                        </div>

                    </a>
                </li>
                <!--end of other details-->
            </ul>




        <!--form-->

             <!--tab content goes here-->
            <div class="tab-content">

                <!-- tab 1 conetnt-->

                <div class="tab-pane active" id="custom-step-1">
                    <div class="content-box">

                        <div class="content-box-wrapper">

                            <div class="container" style="padding-top: 60px;">

                              <div class="row">
                                <!-- left column -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="text-center">
                                    <img src="/uploads/avatars/{{$user->profile_pic_url}}" class="avatar img-circle img-thumbnail"  style="width:180px;height:180px;">
                                    <h6>Upload a different photo...</h6>
                                    <!--photo upload-->
                                    <form enctype="multipart/form-data" action="/edits" method="POST">

                                      <input type="file" name="avatar">
                                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                                      <br/>
                                      <input type="submit" class="pull-right btn btn-sm btn-primary" value="upload">
                                    </form>
                                    <!--./photo upload-->
                                   <!-- <input type="file" class="text-center center-block well well-sm" name="image">-->
                                  </div>
                                </div>

                                <form class="form-horizontal">

                                <!-- edit form column -->
                                <div class="col-md-8 col-sm-6 col-xs-12 personal-info"  style="background-color:#fff; padding-top:40px;padding-bottom:40px; border-top: #D6EAF8 14px solid;">

                                  <!--full name-->
                                    <div class="form-group" >
                                      <label class="col-lg-3 control-label">Full name:</label>
                                      <div class="col-lg-7">
                                        <input class="form-control" value="{{$user->full_name}}" type="text" disabled id="t_fullname">
                                      </div>
                                      <span class=" col-lg-1 glyphicon glyphicon-edit" id="icn_fullname"></span>
                                    </div>

                                      <!--initials-->
                                    <div class="form-group">
                                      <label class="col-lg-3 control-label">Initials:</label>
                                      <div class="col-lg-7">
                                        <input class="form-control" value="{{$user->initials}}" type="text" disabled id="t_initials">
                                      </div>
                                       <span class=" col-lg-1 glyphicon glyphicon-edit" id="icn_initials"></span>
                                    </div>

                                    <!--last name-->
                                    <div class="form-group">
                                      <label class="col-lg-3 control-label">Last name:</label>
                                      <div class="col-lg-7">
                                        <input class="form-control" value="{{$user->last_name}}" type="text" disabled id="t_lastname">
                                      </div>
                                       <span class=" col-lg-1 glyphicon glyphicon-edit" id="icn_lastname"></span>
                                    </div>

                                  <!--title-->
                                    <div class="form-group">
                                      <label class="col-lg-3 control-label">Title:</label>
                                      <div class="col-lg-7">
                                        <select class="form-control" id="t_title" name="title" disabled>
                                        <option>--Title--</option>
                                        <option value="Mr." @if($user->title=='Mr.') selected @endif>Mr.</option>
                                        <option value="Miss." @if($user->title=='Miss.') selected @endif>Miss.</option>
                                        <option value="Mrs." @if($user->title=='Mrs.') selected @endif>Mrs.</option>
                                        <option value="Rev." @if($user->title=='Rev.') selected @endif>Rev.</option>
                                        <option value="Dr." @if($user->title=='Dr.') selected @endif>Dr.</option>
                                        </select>
                                     </div>
                                      <span class=" col-lg-1 glyphicon glyphicon-edit" id="icn_title"></span>
                                    </div>

                                    <!--sex-->
                                    <div class="form-group">
                                      <label class="col-lg-3 control-label">Sex:</label>
                                      <div class="col-lg-7">

                                      <label class="radio-inline"><input type="radio" name="sex" id="t_male" value="Male" @if ($user->sex=='Male')checked @endif  disabled>Male</label>

                                      <label class="radio-inline"><input type="radio" name="sex" id="t_female" value="Female" @if ($user->sex=='Female')checked @endif disabled>Female</label>

                                      </div>
                                       <span class=" col-lg-1 glyphicon glyphicon-edit" id="icn_sex"></span>
                                    </div>

                                    @endforeach

                                    @foreach($applicants as $applicant)

                                    <!--citizenship-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label">Citizenship:</label>
                                      <div class="col-md-7">
                                        <select class="form-control" id="t_citizen" name="citizenship" disabled>
                                            <option>--select--</option>
                                            <option value="Sri Lankan" @if ($applicant->citizenship=='Sri Lankan')selected @endif >Sri Lankan</option>
                                            <option value="Foreign" @if ($applicant->citizenship=='Foreign')selected @endif>Foreign</option>
                                         </select>
                                      </div>
                                       <span class=" col-md-1 glyphicon glyphicon-edit" id="icn_citizen"></span>
                                    </div>

                                    @endforeach

                                    @foreach($users as $user)

                                    <!--NIC/passport-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label">NIC/passport:</label>
                                      <div class="col-md-7">
                                        <label class="radio-inline"><input type="radio" id="t_nic" name="is_nic" value="nic" @if ($user->is_nic=='nic')checked @endif  disabled>National identity card
                                        </label>
                                      <label class="radio-inline"><input type="radio" id="t_passport" name="is_nic" value="passport" @if ($user->is_nic=='passport')checked @endif  disabled>Passport No</label>
                                      </div>
                                       <!-- <span class=" col-md-1 glyphicon glyphicon-edit" id="icn_isnic"></span> -->
                                    </div>

                                    <!--nic/passport no-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label">NIC/Pass NO:</label>
                                      <div class="col-md-7">
                                        <input type="text" class="form-control" id="nic" id="t_nic" placeholder="93*******V" name="nic" value="{{$user->nic_passport}}" disabled>

                                      </div>
                                       <!-- <span class=" col-md-1 glyphicon glyphicon-edit" id="icn_nic"></span> -->
                                    </div>

                                    @endforeach


                                    @foreach($applicants as $applicant)

                                    <!--date of birth-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label">DOB:</label>
                                      <div class="col-md-7">
                                        <input type="date" class="form-control" id="t_dob" name="DOB" value="{{$applicant->DOB}}">

                                      </div>
                                       <span class=" col-md-1 glyphicon glyphicon-edit" id="icn_dob"></span>
                                    </div>

                                   @endforeach


                                    <!--save changes and cancel-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label"></label>
                                      <div class="col-md-8">
                                        <input class="btn btn-primary" value="Save Changes" type="button" id="update">
                                        <span></span>
                                        <input class="btn btn-default" value="Cancel" type="reset">
                                      </div>
                                    </div>

                                </div>
                              </form>
                              </div>
                            </div>

                        </div>

                    </div>
                </div>


                  <div class="tab-pane" id="custom-step-2">
                    <form class="form-horizontal">
                    <div class="content-box">
                        <div class="content-box-wrapper" style="background-color:#fff; padding-top:40px;padding-bottom:40px;">

                        @foreach($applicants as $applicant)
                             <!--address1-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pwd">Permanent address:</label>
                                     <div class="col-md-8">
                                    <input type="text" class="form-control" id="t_add1" placeholder="address line one" name="address1"  value="{{$applicant->address1}}" disabled>
                                     </div>
                                      <span class=" col-md-1 glyphicon glyphicon-edit" id="icn_address"></span>
                                     </div>

                                   <!--address2-->
                                  <div class="form-group">
                                    <label class="control-label col-md-3" for="pwd">&nbsp;</label>
                                    <div class="col-md-8">
                                      <input type="text" class="form-control" id="t_add2" placeholder="address line two" name="address2" value="{{$applicant->address2}}" disabled>
                                    </div>

                                  </div>

                                  <!--address3-->
                                   <div class="form-group">
                                    <label class="control-label col-md-3" for="pwd">&nbsp;</label>
                                    <div class="col-md-8">
                                      <input type="text" class="form-control" id="t_add3" placeholder="address line three" name="address3" value="{{$applicant->address3}}" disabled>
                                    </div>

                                  </div>


                                    <!--country-->
                                      <div class="form-group">
                                    <label class="control-label col-md-3" for="pwd">Country</label>
                                    <div class="col-md-8">
                                      <select class="form-control" id="t_country" name="country" disabled>
                                        <option disabled>--select--</option>
                                        <option @if($applicant->country=='Sri lanka') selected @endif>Sri lanka</option>
                                        <option @if($applicant->country=='India') selected @endif>India</option>
                                        <option @if($applicant->title=='Singapore') selected @endif>Singapore</option>
                                      </select>
                                    </div>
                                     <span class=" col-md-1 glyphicon glyphicon-edit"></span>
                                  </div>
                                  @endforeach

                                  @foreach($users as $user)
                                    <!--email-->
                                   <div class="form-group">
                                    <label class="control-label col-md-3" for="email">Email:</label>
                                    <div class="col-md-8">
                                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  value="{{$user->email}}" disabled>
                                    </div>
                                     <span class=" col-md-1 glyphicon glyphicon-edit"></span>
                                  </div>
                                  @endforeach

                        </div>
                    </div>
                  </form>
                </div>



                <!--custom step 3-->

                <div class="tab-pane" id="custom-step-3">
                  <form class="form-horizontal">
                    <div class="content-box">

                        <div class="content-box-wrapper" style="background-color:#fff; padding-top:40px;padding-bottom:40px;">

                        <!--education-->
                        @foreach($applicants as $applicant)
                           <div class="form-group">
                                <label class="control-label col-sm-2" for="education">Education</label>
                                <div class="col-sm-9">
                                  <div class="radio">
                                      <label><input type="radio" name="education" @if($applicant->education=='1') checked @endif disabled>I have three GCE A/L passes.(Common general test and General english paper are not considered as core subjects.)</label>
                                   </div>
                                    <div class="radio">
                                      <label><input type="radio" name="education" @if($applicant->education=='2') checked @endif disabled>I have the foundation in Information technology(which is conducted by UCSC)</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" name="education" @if($applicant->education=='3') checked @endif disabled>I have other academic/ proffesional qualifications(attach all certicates including GCE O/L. There will be a computer base amplitude test only for this category)</label>
                                    </div>
                                </div>
                                 <span class=" col-sm-1 glyphicon glyphicon-edit"></span>
                              </div>

                              <!--a/l results-->




                              <div class="form-group">
                                <label class="control-label col-sm-2" for="al">GCE A Level</label>

                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Year" value="{{$applicant->subject1}}">
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Subject" value="">
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Grade" value="">
                                </div>

                              </div>


                              <div class="form-group">
                                <label class="control-label col-sm-2" for="al">&nbsp;</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Year" value="{{$applicant->subject2}}">
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Subject">
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Grade">
                                </div>
                              </div>


                                <div class="form-group">
                                <label class="control-label col-sm-2" for="al">&nbsp;</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Year" value="{{$applicant->subject3}}">
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Subject">
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Grade">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-sm-2" for="al">&nbsp;</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Year" value="{{$applicant->subject4}}">
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Subject">
                                </div>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control"  placeholder="Grade">
                                </div>
                                 <span class=" col-sm-1 glyphicon glyphicon-edit"></span>
                              </div>
                        </div>
                    </div>
                  </form>
                </div>

                <!--custom step 4-->
                <div class="tab-pane" id="custom-step-4">
                  <form class="form-horizontal">
                    <div class="content-box">

                        <div class="content-box-wrapper" style="background-color:#fff; padding-top:40px;padding-bottom:10px;">

                          <div class="form-group">
                           <label class="col-md-3 control-label">Registration location:</label>
                          <div class="radio col-sm-3">
                            <label><input type="radio" name="registration_loc" @if($applicant->registration_location=="Colombo") checked @endif required>Colombo</label>
                          </div>
                          <div class="radio col-sm-3">
                            <label><input type="radio" name="registration_loc" @if($applicant->registration_location=="Jaffna") checked @endif>Jaffna</label>
                          </div>
                          <div class="radio col-sm-3">
                            <label><input type="radio" name="registration_loc" @if($applicant->registration_location=="Galle") checked @endif>Galle</label>
                          </div>
                          </div>

                          <div class="form-group">
                           <label class="col-md-3 control-label">&nbsp;</label>
                          <div class="radio col-sm-3" >
                            <label><input type="radio" name="registration_loc" @if($applicant->registration_location=="Kandy") checked @endif>Kandy</label>
                          </div>
                          <div class="radio col-sm-5">
                            <label><input type="radio" name="optradio" @if($applicant->registration_location=="other") checked @endif>other<input type="textbox" class="form-control" name=""></label>
                          </div>
                        </div>
                        </div>
                          <!--end of content box wrapper-->

                           <!--employment details-->
                       <div class="content-box">

                             <!--content box wrapper-->
                        <div class="content-box-wrapper" style="background-color:#fff; padding-top:40px;padding-bottom:40px;">
                                  <div class="form-group">
                                   <label class="col-md-3 control-label">Employment details:</label>

                                    <div class="checkbox">
                                      <label><input type="checkbox" value="">Currently employed</label>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                  <label class="col-md-3 control-label">&nbsp;</label>

                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" id="computer">Working in the computer field</label>
                                    </div>
                                  </div>

                                  <div class="form-group">

                                    <label class="control-label col-md-3" for="computer">Designation</label>
                                    <div class="col-sm-8">
                                      <input type="textbox" value="" id="designation" class="form-control">
                                    </div>
                                  </div>
                                  <label class="col-sm-1"></label>

                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <button type="reset" class="btn btn-default">clear</button>
                                           <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> save changes
                                </button>
                                    </div>
                                  </div>

                        </div>
                        <!--end of contentbox wrapper-->

                        </div>
                        <!--end of employment details-->


                    </div>
                  </form>
                </div>
                <!--end of custom step 4-->




                <!--end of form-->
            </div>
           <!--end of tab content-->




    </div>
    @endforeach
</div>
<div class="footer">

</div>

@endsection
