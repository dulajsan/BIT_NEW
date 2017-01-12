@extends('layouts.admin')

@section('content')

<style>
.panel-footer{
 background-color:#0d2840;
 color:#fff;
}

.panel-heading{
  background-color:#3a4454!important;
  font-size: 20px;

}

</style>


    <link href="{{{asset('/css/admin.css') }}}" rel="stylesheet">
       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Coordinator <small>-Dashboard</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            </div>


            <!--menu tiles-->

        <div class="container-fluid">

          <div class="col-lg-3 col-md-6">
                 <div class="panel panel-primary panel-st1">
                     <div class="panel-heading panel-heading-st1">
                         <div class="row">
                             <div class="col-xs-3">
                              <img  src="{{ URL::asset('images/dashboard/exams.png') }}" width="80px"/>
                             </div>
                             <div class="col-xs-9 text-right">
                                 <div class="huge">&nbsp;</div>
                                 <div>Exams</div>
                             </div>
                         </div>
                     </div>
                         <div class="panel-footer panel-footer-st1">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary panel-st1">
                        <div class="panel-heading panel-heading-st1">
                            <div class="row">
                                <div class="col-xs-3">
                                 <img  src="{{ URL::asset('images/dashboard/student.png') }}" width="80px"/>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">&nbsp;</div>
                                    <div>Registration</div>
                                </div>
                            </div>
                        </div>
                            <div class="panel-footer panel-footer-st1">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                       <div class="panel panel-primary panel-st1">
                           <div class="panel-heading panel-heading-st1">
                               <div class="row">
                                   <div class="col-xs-3">
                                    <img  src="{{ URL::asset('images/dashboard/courses.png') }}" width="70px"/>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div class="huge">&nbsp;</div>
                                       <div>courses</div>
                                   </div>
                               </div>
                           </div>
                               <div class="panel-footer panel-footer-st1">
                                   <span class="pull-left">View Details</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfix"></div>
                               </div>
                       </div>
                   </div>

                   <div class="col-lg-3 col-md-6">
                          <div class="panel panel-primary panel-st1">
                              <div class="panel-heading panel-heading-st1">
                                  <div class="row">
                                      <div class="col-xs-3">
                                       <img  src="{{ URL::asset('images/dashboard/tutes.png') }}" width="80px"/>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                          <div class="huge">&nbsp;</div>
                                          <div>Tutes</div>
                                      </div>
                                  </div>
                              </div>
                                  <div class="panel-footer panel-footer-st1">
                                      <span class="pull-left">View Details</span>
                                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                          </div>
                      </div>


                      <div class="col-lg-3 col-md-6">
                             <div class="panel panel-primary panel-st1">
                                 <div class="panel-heading panel-heading-st1">
                                     <div class="row">
                                         <div class="col-xs-3">
                                          <img  src="{{ URL::asset('images/dashboard/result.png') }}" width="80px"/>
                                         </div>
                                         <div class="col-xs-9 text-right">
                                             <div class="huge">&nbsp;</div>
                                             <div>Results</div>
                                         </div>
                                     </div>
                                 </div>
                                     <div class="panel-footer panel-footer-st1">
                                         <span class="pull-left">View Details</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                             </div>
                         </div>


                         <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary panel-st1">
                                    <div class="panel-heading panel-heading-st1">
                                        <div class="row">
                                            <div class="col-xs-3">
                                             <img  src="{{ URL::asset('images/dashboard/accounting.png') }}" width="80px"/>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div>Accounting</div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="panel-footer panel-footer-st1">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                </div>
                            </div>
                      <!--./end of menu tiles-->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!--upload tuto-->
    <script>
    $(document).ajaxComplete(function() {
        $("div.ppit-tab-menu>div.list-group>a").unbind().click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.ppit-tab>div.ppit-tab-content").removeClass("active");
            $("div.ppit-tab>div.ppit-tab-content").eq(index).addClass("active");
        });
    });
    + function($) {
        'use strict';


        var dropZone = document.getElementById('drop-zone');
        var uploadForm = document.getElementById('js-upload-form');

        var startUpload = function(files) {
            console.log(files)
        }

        uploadForm.addEventListener('submit', function(e) {
            var uploadFiles = document.getElementById('js-upload-files').files;
            e.preventDefault()

            startUpload(uploadFiles)
        })

        dropZone.ondrop = function(e) {
            e.preventDefault();
            this.className = 'upload-drop-zone';

            startUpload(e.dataTransfer.files)
        }

        dropZone.ondragover = function() {
            this.className = 'upload-drop-zone drop';
            return false;
        }

        dropZone.ondragleave = function() {
            this.className = 'upload-drop-zone';
            return false;
        }

    }(jQuery);
    </script>

    <!--./upload tuto-->


    <!--add new courses-->


    <script>
    $(document).ajaxComplete(function(){
        $(".nav-tabs a").unbind().click(function(){
            $(this).tab('show');
        });

        $('.filterable .btn-filter').unbind().click(function(){
            var $panel = $(this).parents('.filterable'),
            $filters = $panel.find('.filters input'),
            $tbody = $panel.find('.table tbody');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
                $filters.first().focus();
            } else {
                $filters.val('').prop('disabled', true);
                $tbody.find('.no-result').remove();
                $tbody.find('tr').show();
            }
        });

        $('.filterable .filters input').unbind().keyup(function(e){
            /* Ignore tab key */
            var code = e.keyCode || e.which;
            if (code == '9') return;
            /* Useful DOM data and selectors */
            var $input = $(this),
            inputContent = $input.val().toLowerCase(),
            $panel = $input.parents('.filterable'),
            column = $panel.find('.filters th').index($input.parents('th')),
            $table = $panel.find('.table'),
            $rows = $table.find('tbody tr');
            /* Dirtiest filter function ever ;) */
            var $filteredRows = $rows.filter(function(){
                var value = $(this).find('td').eq(column).text().toLowerCase();
                return value.indexOf(inputContent) === -1;
            });
            /* Clean previous no-result if exist */
            $table.find('tbody .no-result').remove();
            /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
            $rows.show();
            $filteredRows.hide();
            /* Prepend no-result row if all rows are filtered */
            if ($filteredRows.length === $rows.length) {
                $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
            }
        });
    });

    $(document).ajaxComplete(function() {
        $("div.ppit-tab-menu>div.list-group>a").unbind().click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.ppit-tab>div.ppit-tab-content").removeClass("active");
            $("div.ppit-tab>div.ppit-tab-content").eq(index).addClass("active");
        });
    });

    </script>

    <!--./addd new courses-->

<!--filter students-->
<script type="text/javascript" src="{{asset('js/jquery.columns.min.js')}}"></script>
<script>

  $(document).ajaxComplete(function(){
    $.ajax({
                 url:'/ApplicantFilter',
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


<!--./filter students-->


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


<!--add course-->
<script>

$(document).ready(function(){
$.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
});

$(document).ajaxComplete(function(){
  $("#addcourse_btn").unbind().click(function(){
    var semester=$('#semester').val();;
    var course_code=$("#crse_code").val();
    var course_name=$("#crse_name").val();
    var opt_com=$('input[name=optman]:checked').val();
    var credits=$("#crse_credit").val();
    var fee=$("#crse_fee").val();

  //  alert(course_code);

    $.ajax({
      url:"/addcourse",
      type:"POST",
      data:"semester="+semester+"&course_code="+course_code+"&course_name="+course_name+"&opt_com="+opt_com+"&credits="+credits+"&fee="+fee,
      success:function(data, textstatus, jqXHR){
        alert(data);


      },
      error:function(jqXHR, textstatus, errorThrown){
        alert(errorThrown);

      }


    });

  });

});

</script>
<!--./add course-->


<script>
(document).ready(function(){
$.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
});


//subject load

$(document).ajaxComplete(function(){

      $('#subject_content').empty();
      var subs=document.getElementById("subject_content");

      $.ajax({
                      url:"/loadCourses",
                      type:"POST",
                      dataType: 'json',
                      success:function (data, textstatus, jqXHR)
                      {
                        var data=data;
                        alert(data[0].subject_code);

                        for(var t=0;t<data.length;t++)
                        {
                          var tr=subs.insertRow(subs.rows.length);

                          var td1=tr.insertCell(0);
                          td1.innerHTML=data[t].subject_code;

                          var td2=tr.insertCell(1);
                          td2.innerHTML=data[t].subject_name;

                          var td3=tr.insertCell(2);
                          td3.innerHTML=data[t].compulsory_optional;

                          var td4=tr.insertCell(3);
                          td4.innerHTML="R.S. "+data[t].fee+"/=";


                        }


                      },

                      error:function (jqXHR, textstatus, errorThrown)
                      {
                          alert(errorThrown);

                      }


          });



  });





</script>

<!--./load subjects in exam.blade.php-->


@endsection
