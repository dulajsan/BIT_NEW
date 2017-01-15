@extends('layouts.admin')

@section('content')


    <link href="{{{asset('/css/admin.css') }}}" rel="stylesheet">
       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Director <small>-Dashboard</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            </div>


            <!--calendar fluid-->

        <div class="container-fluid">

                <div class="row" id="cnt">
                <!--calendar-->
                    <div class="col-md-6">
                        <div id="calendar" style="background-color:#fff"></div>

                    </div>
                <!--end of calendar-->
                <div class="col-md-2">
                </div>

                 <!--online users-->
                <div class="col-md-4">
                     <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> online users</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>gfhgfhgfhg</td>

                                        </tr>

                                        <tr>
                                            <td>gfhgfhgfhg</td>

                                        </tr>

                                        <tr>
                                            <td>gfhgfhgfhg</td>

                                        </tr>
                                        <tr>
                                            <td>gfhgfhgfhg</td>

                                        </tr>
                                        <tr>
                                            <td>gfhgfhgfhg</td>

                                        </tr>
                                    </table>

                                </div>
                                <div class="text-right">
                                    <a href="#">View All  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                </div>
                <!--end of online users-->
        </div>
            <!--end of calendar-->



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <script type="text/javascript" src="{{asset('js/jquery.columns.min.js')}}"></script>
<script>

  $(document).ajaxComplete(function(){
    $.ajax({
                 url:'/userfilter',
                 dataType: 'json',
                 success: function(json) {
                     example4 = $('#example4').columns({
                         data:json,
                         schema: [
                             {"header":"ID", "key":"id"},
                              {"header":"Full name", "key":"full_name"},
                               {"header":"Email", "key":"email"},
                             {"header":"NIC/Passport", "key":"nic_passport"},
                             {"header":"roles", "key":"role"},
                             {"header":"select","template":'<input type="checkbox" name="gfgf" value=""/>'},
                             {"header":"options","template":'<div class="dropdown"><button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu">  <li data-toggle="modal" data-target="#myModal">edit</li>  <li><a href="#">view</a></li><li><a href="#">JavaScript</a></li></ul></div>'}
                         ]

                     });
                 }
             });

    $('#theme').change(function() {
        $('#style').attr('href', '../css/'+$(this).val());
    });

  });
</script>

<script>
$(document).ajaxComplete(function(){
$('input[type="checkbox"]').on('change', function(e){
   if(e.target.checked){
     $('#regModal').modal();
   }

   $('#ok1').unbind().click(function(){
     alert(e.target.value)
   });

   $('#cancel1').unbind().click(function(){
     alert(e.taget.value);
   });
});
});


</script>
<script type="text/javascript">
// $("document").ajaxComplete(function(){

//  $.ajaxSetup({
//           headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           }
//           });
// });


$("document").ajaxComplete(function(){
    $("#submit").click(function(){

      var full_name= $("#full_name").val();
    alert(full_name);

      var last_name= $("#last_name").val();
     alert(last_name);

      var sex=$("input[name=sex]:checked").val();
       var initials=$("#initials").val();
      var role=$("input[name=role]:checked").val();
      var email= $("#email").val();





      // var datastring="full_name="+full_name+"&initials="+initials+"&last_name="+last_name+"&title="+title+"&sex="+sex+"&citizenship="+citizenship+"&isnic="+isnic+"&nic="+nic+"&dob="+dob;
// $.ajax({
//                 url:"editUserData",
//                 type:"GET",
//                 data:"full_name="+full_name +"&last_name="+last_name+"&sex="+sex+"&initials="+initials +"&role="+role+"&email="+email,
//                 success:function (data, textstatus, jqXHR)
//                 {
//                     alert("updated");
//                 },

//                 error:function (jqXHR, textstatus, errorThrown)
//                 {
//                     alert(errorThrown);
//                 }


//     });

    });

  });

  </script>


<!--admin account details update-->
<script>
  $("document").ajaxComplete(function(){
    $("#update_account").unbind().click(function(){
      alert("ok");

      var ad_name= $("#ad_name").val();
      var ad_email=$("#ad_email").val();
      var ad_nic= $("#ad_nic").val();

//
//
//
//       // var datastring="full_name="+full_name+"&initials="+initials+"&last_name="+last_name+"&title="+title+"&sex="+sex+"&citizenship="+citizenship+"&isnic="+isnic+"&nic="+nic+"&dob="+dob;
// $.ajax({
//                 url:"updateprof",
//                 type:"GET",
//                 data:"full_name="+full_name+"&initials="+initials+"&last_name="+last_name+"&title="+title+"&sex="+sex+"&citizenship="+citizenship+"&isnic="+isnic+"&nic="+nic+"&dob="+dob,
//                 success:function (data, textstatus, jqXHR)
//                 {
//                     alert("updated");
//                 },
//
//                 error:function (jqXHR, textstatus, errorThrown)
//                 {
//                     alert(errorThrown);
//                 }
//
//
//     });

    });

  });


</script>



<!--./admin account details-->


@endsection
