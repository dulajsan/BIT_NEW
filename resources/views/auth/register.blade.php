@extends('layouts.app')

<style type="text/css">
body {
    margin-top:40px;
    background-color: #eeeeee!important;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius:35px;
}

.row{
  margin-top:12px;
}


</style>

@section('content')

<div class="container">

  <div class="col-sm-3" style="background-color:#428bca; height:110%; margin-top:18px">
    <div class="row text-center" style="padding-top:15px">
        <img src="{{asset('/images/logo.png')}}"/>
        <br/>
        <p style="margin-top:20px;color:#fff">Registration deadline:</p>
        <p>10/11/2016</p>
        <p style="margin-top:20px;color:#fff">User Manual</p>

    </div>

  </div>

  <div class="col-sm-9">

<div class="stepwizard col-sm-12" style="margin-top:15px;">
  <div class="row stepwizard-row setup-panel">
    <div class="stepwizard-step">
      <a href="#step-1" type="button" class="btn btn-primary btn-circle" style="width:34px; height:34px; border-radius:28px">1</a>
      <p>User details</p>
    </div>
    <div class="stepwizard-step">
      <a href="#step-2" type="button" class="btn btn-default btn-circle" style="width:34px; height:34px; border-radius:28px" disabled="disabled">2</a>
      <p>contact information</p>
    </div>
    <div class="stepwizard-step">
      <a href="#step-3" type="button" class="btn btn-default btn-circle" style="width:34px; height:34px; border-radius:28px" disabled="disabled">3</a>
      <p>Educational details</p>
    </div>
    <div class="stepwizard-step">
      <a href="#step-4" type="button" class="btn btn-default btn-circle" style="width:34px; height:34px; border-radius:28px" disabled="disabled">4</a>
      <p>Other details</p>
    </div>

  </div>
</div>



<div class="col-sm-12">

<form role="form" action="{{ url('/register') }}" method="POST">

  <!--step 1-->
  <div class="row setup-content" id="step-1">
    <div class="col-sm-10 col-sm-offset-1">

      <div class="row" style="background-color:#fff; padding:30px; border-top:3px #428bca solid">
        <div class="row" style="color:#2f5989">
        <h3> <b><i>User Details</i></b></h3>

      </div>
          <!--form groups of step 1-->
          <div class="row">
          <div class="form-group">
            <label class="control-label col-sm-3" for="fullname">Full name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="fullname" placeholder="Madurasinghege dulaj sanjaya" name="full_name" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group">
            <label class="control-label col-sm-3" for="Init">Initials:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="Init" placeholder="M.D." name="initials" required>
            </div>
          </div>
        </div>

        <div class="row">
         <div class="form-group">
            <label class="control-label col-sm-3" for="Lname">Last name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="Lname" placeholder="Sanjaya" name="last_name" required>
            </div>
          </div>
        </div>

          <!--title-->
      <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-3" for="Title">Title:</label>
            <div class="col-sm-9">
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
      </div>
        <!--end of title-->

        <input type="hidden" name="_token" value="{{csrf_token()}}">


        <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-3" for="sex">Sex</label>
            <div class="col-sm-9">
                  <label class="radio-inline"><input type="radio" name="sex" value="Male" required/>Male</label>
                  <label class="radio-inline"><input type="radio" name="sex" value="Female"/>Female</label>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-3" for="Title">Citizenship:</label>
            <div class="col-sm-9">
              <select class="form-control" id="Citizen" name="citizenship" required>
                <option>--Citizenship--</option>
                <option>Sri Lankan</option>
                <option>Foreign</option>
              </select>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-3" for="nic">NIC/Passport</label>
            <div class="col-sm-9">
                  <label class="radio-inline"><input type="radio" name="is_nic" value="nic" id="is_nic_id" required>National identity card</label>
                  <label class="radio-inline"><input type="radio" name="is_nic" value="passport" id="is_nic_passport" >Passport No</label>

            </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group" id="nic_span">
            <label class="control-label col-sm-3" for="nic">NIC No:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nic" placeholder="93*******V" name="nic">

            </div>
            <span id="nic_error" class="col-sm-1"><img  src="{{ URL::asset('images/right.png') }}" width="22px" id="nic_er"/></span>
          </div>

          <div class="form-group" id="passport_span">
              <label class="control-label col-sm-3" for="nic">passport No:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="passport" placeholder="" name="passport">

              </div>

            </div>
        </div>

        <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-3" for="Lname">Date of birth:</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="dob" name="DOB" required>
            </div>
        </div>
      </div>


          <!--./form groups of step 1-->
          <br/>
        <div class="form-group">
        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
      </div>
      </div>
    </div>
  </div>
<!--./step 1-->

<!--step 2-->
  <div class="row setup-content" id="step-2">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="col-sm-12">
        <div class="row" style="background-color:#fff; padding:30px; border-top:3px #428bca solid">
          <div class="row" style="color:#2f5989">

        <h3><b><i> Contact Information</i></b></h3>
          </div>
          <!--step 2 form groups-->
          <div class="row">
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Permanent address:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add1" placeholder="address line one" name="address1" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">&nbsp;</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add2" placeholder="address line two" name="address2" required>
            </div>
          </div>
        </div>

        <div class="row">
           <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">&nbsp;</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add3" placeholder="address line three" name="address3" required>
            </div>
          </div>
        </div>

        <div class="row">

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
        </div>

        <div class="row">
           <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
              <br/>
              <span id="email_span"></span>
            </div>
          </div>
        </div>

        <div class="row">
           <div class="form-group">
            <label class="control-label col-sm-2" for="tel">Contact No:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tel" placeholder="Enter mobile" name="mobile">
              <br/>

            </div>
            <span id="tel_span" class="col-sm-1"><img  src="{{ URL::asset('images/right.png') }}" width="22px" /></span>
          </div>
        </div>

        <div class="row">
           <div class="form-group">
            <label class="control-label col-sm-2" for="tel">Contact No:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="land" placeholder="Enter Landline" name="land">
              <br/>

            </div>
            <span id="tel_span" class="col-sm-1"><img  src="{{ URL::asset('images/right.png') }}" width="22px" /></span>
          </div>
        </div>

          <!--./step 2 form groups-->


        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
      </div>
      </div>
    </div>
  </div>
<!--./step 2-->

<!--step 3-->

  <div class="row setup-content" id="step-3">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="col-sm-12">
        <div class="row" style="background-color:#fff; padding:30px; border-top:3px #428bca solid">
          <div class="row" style="color:#2f5989">
            <h3> Educational Details</h3>
          </div>
          <!--form grouops of step 3-->

          <!--education-->
      <div class="row">
        <div class="form-group">
          <label class="control-label col-sm-2" for="education">Education</label>
          <div class="col-sm-10">
            <div class="radio">
                <label><input type="radio" value="1" name="education" required>I have three GCE A/L passes.(Common general test and General english paper are not considered as core subjects.)</label>
             </div>
              <div class="radio">
                <label><input type="radio" value="2" name="education" required>I have the foundation in Information technology(which is conducted by UCSC)</label>
              </div>
              <div class="radio">
                <label><input type="radio" value="3" name="education" required>I have other academic/ proffesional qualifications(attach all certicates including GCE O/L. There will be a computer base amplitude test only for this category)</label>
              </div>
          </div>
        </div>
      </div>
         <!--end of education-->

       <div class="row">
        <div class="form-group">
          <label class="control-label col-sm-2" for="al">GCE A Level</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  placeholder="Year" name="year1" required id="year1">
            <span id="year_errmsg"></span>
          </div>
          <div class="col-sm-4">
            <!-- <input type="text" class="form-control"  placeholder="Subject" name="subject1" required> -->
            <select name="subject1" class="form-control">
              <option value="">--subject--</option>
              <option value="" >Combined mathematics</option>
              <option value="">Physics</option>
              <option value="">Chemistry</option>
              <option value="">General English</option>
              <option value="">accounting</option>
            </select>
          </div>
          <div class="col-sm-3">
            <!-- <input type="text" class="form-control"  placeholder="Grade" name="grade1" required> -->
            <select name="grade1" class="form-control">
              <option value="">--grade--</option>
              <option value="" >A</option>
              <option value="" >B</option>
              <option value="" >C</option>
              <option value="" >S</option>
              <option value="" >F</option>
            </select>
          </div>
        </div>
      </div>

        <div class="row">
         <div class="form-group">
          <label class="control-label col-sm-2" for="al">&nbsp;</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  placeholder="Year" name="year2" required id="year2">
          </div>
          <div class="col-sm-4">
            <!-- <input type="text" class="form-control"  placeholder="Subject" name="subject2" required> -->
            <select name="subject2" class="form-control">
              <option value="">--subject--</option>
              <option value="">Combined mathematics</option>
              <option value="">Physics</option>
              <option value="">Chemistry</option>
              <option value="">General English</option>
              <option value="">accounting</option>
            </select>
          </div>
          <div class="col-sm-3">
            <!-- <input type="text" class="form-control"  placeholder="Grade" name="grade2" required> -->
            <select name="grade2" class="form-control">
              <option value="">--grade--</option>
              <option value="" >A</option>
              <option value="" >B</option>
              <option value="" >C</option>
              <option value="" >S</option>
              <option value="" >F</option>
            </select>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="form-group">
          <label class="control-label col-sm-2" for="al">&nbsp;</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  placeholder="Year" name="year3" required id="year3">
          </div>
          <div class="col-sm-4">
            <!-- <input type="text" class="form-control"  placeholder="Subject" name="subject3" required> -->
            <select name="subject3" class="form-control">
              <option value="">--subject--</option>
              <option value="">Combined mathematics</option>
              <option value="">Physics</option>
              <option value="">Chemistry</option>
              <option value="">General English</option>
              <option value="">accounting</option>
            </select>
          </div>
          <div class="col-sm-3">
            <!-- <input type="text" class="form-control"  placeholder="Grade" name="grade3" required> -->
            <select name="grade3" class="form-control">
              <option value="">--grade--</option>
              <option value="" >A</option>
              <option value="" >B</option>
              <option value="" >C</option>
              <option value="" >S</option>
              <option value="" >F</option>
            </select>
          </div>
        </div>
      </div>

        <div class="row">
         <div class="form-group">
          <label class="control-label col-sm-2" for="al">&nbsp;</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  placeholder="Year" name="year4" required id="year4">
          </div>
          <div class="col-sm-4">
            <!-- <input type="text" class="form-control"  placeholder="Subject" name="subject4" required> -->
            <select name="subject4" class="form-control">
              <option value="">--subject--</option>
              <option value="">Combined mathematics</option>
              <option value="">Physics</option>
              <option value="">Chemistry</option>
              <option value="">General English</option>
              <option value="">accounting</option>
            </select>
          </div>
          <div class="col-sm-3">
            <!-- <input type="text" class="form-control"  placeholder="Grade" name="grade4" required> -->
            <select name="grade4" class="form-control">
              <option value="">--grade--</option>
              <option value="" >A</option>
              <option value="" >B</option>
              <option value="" >C</option>
              <option value="" >S</option>
              <option value="" >F</option>
            </select>
          </div>
        </div>
      </div>

          <!--./form groups of step 3-->
      <div class="row">
        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!--./step 3-->

  <!--step 4-->

  <div class="row setup-content" id="step-4">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="col-sm-12">
        <div class="row" style="background-color:#fff; padding:30px; border-top:3px #428bca solid">
          <div class="row" style="color:#2f5989">
            <h3> Other Details</h3>
          </div>
          <!--form groups of step 4-->
          <div class="row">
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
        </div>

        <div class="row">
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
        <h3 class="content-box-header">
            Employment details
        </h3>
        <!--content box wrapper-->
        <div class="content-box-wrapper">

                  <!--currently emplyed-->
                <div class="row">
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
                </div>
            </div>
          </div>

          <!--./form groups of step 4-->
          <div class="row">
            <button class="btn btn-default btn-lg pull-right" type="submit"><i class="fa fa-btn fa-user"></i>Register</button>
          </div>
      </div>
    </div>
    </div>
  </div>
  <!--step 4-->
</form>

</div>
</div>
</div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>
<!--nic validator-->
<script>
$(document).ready(function(){

  $('input:radio[name="is_nic"]').change(
    function(){
        if (this.checked && this.value == 'nic') {
            $('#passport').prop('required',false);
            $('#nic').prop('required',true);
        }
        else if (this.checked && this.value == 'passport') {
            $('#nic').prop('required',false);
            $('#passport').prop('required',true);
        }
    });



  $("#nic_er").hide();
  $("#nic").keyup(function(){
    $("#nic_er").show();


    var myRegEx =/^[0-9]{9}[V]$/;
    if (myRegEx.test($("#nic").val())) {
        $("#nic_er").attr("src", "{{ URL::asset('images/right.png') }}");

    }
    else{
      $("#nic_er").attr("src", "{{ URL::asset('images/wrong.png') }}");
    }
});
});

</script>
<!--./nic validator-->
<script>
$(document).ready(function(){
  $("#tel_span").hide();
  var myRegEx =/^\d[0-9]{10}$/;
  $("#tel").keyup(function(){
    $("#tel_span").show();
  if (myRegEx.test($("#tel").val())) {
      $("#tel_span").attr("src", "{{ URL::asset('images/right.png') }}");

  }
  else{
    $("#tel_span").attr("src", "{{ URL::asset('images/wrong.png') }}");
  }
});

});


</script>

<script>
$(document).ready(function(){
$.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
});

</script>

<!--email validator-->
<script>
$(document).ready(function(){
  $("#email").keyup(function(){
    var email=$("#email").val();
    //alert(email);



    $.ajax({
                    url:"/emailval",
                    type:"POST",
                    data:"email="+email,

                    success:function (data, textstatus, jqXHR)
                    {
                        if(data==1){
                          $("#email_span").text("email exist");

                        }
                        else{
                            $("#email_span").text("");

                        }
                    },

                    error:function (jqXHR, textstatus, errorThrown)
                    {
                        //alert(errorThrown);

                    }


        });


  });
});
</script>

<!--./email validator-->


<script>
$(document).ready(function(){
  //designation hide
   $("#designation").hide();
  $("#field").hide();
$("#employ").on("click", function(){

 $("#designation").toggle();
  $("#field").toggle();

});
//designation hide


//NIC passport toggle
$("#nic_span").hide();
$("#passport_span").hide();
$("#is_nic_id").on("click", function(){
  $("#passport_span").hide();
  $("#nic_span").toggle();
});

$("#is_nic_passport").on("click", function(){
  $("#nic_span").hide();
  $("#passport_span").toggle();
});


//NiC passport toggle
});
</script>

<script>
//exam marks year validation
//only numbers and four digits are allowed
$(document).ready(function(){
  $("#year1,#year2,#year3,#year4").keypress(function (e) {
    //if the letter is not digit then display error and don't type anything
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
       //display error message
       $("#year_errmsg").html("Digits Only").show().fadeOut("slow");
              return false;
   }

  });

  $("#year1,#year2,#year3,#year4").keyup(function(event) {
       var value =  $(this).val();
       value = value.replace(/[^0-9]/g,'');
       value = value.substr(0,4);
       $(this).val(value);

   });

});


</script>




@endsection
