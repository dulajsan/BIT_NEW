@extends('layouts.admin')

@section('content')

    <link href="{{{asset('/css/admin.css') }}}" rel="stylesheet">
    <link href="{{{asset('/css/classic.css') }}}" rel="stylesheet">
    <link href="{{{asset('/css/resultUpload.css') }}}" rel="stylesheet">

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

    <script>
    $(document).ready(function(){
        $(".panel-st1").hover(function(){
          //alert("ok");
            $(".panel-footer-st1").animate({height: '80px',opacity:1});
            $(".panel-heading-st1").animate({opacity:1});

        },
        function(){
          //alert("ok");
            $(".panel-footer-st1").animate({height: '50px',opacity:0.6});
            $(".panel-heading-st1").animate({opacity:0.6});
        });

        $(".panel-st2").hover(function(){
          //alert("ok");
            $(".panel-footer-st2").animate({height: '80px',opacity:1});
            $(".panel-heading-st2").animate({opacity:1});

        },
        function(){
          //alert("ok");
            $(".panel-footer-st2").animate({height: '50px',opacity:0.6});
            $(".panel-heading-st2").animate({opacity:0.6});
        });

        $(".panel-st3").hover(function(){
          //alert("ok");
            $(".panel-footer-st3").animate({height: '80px',opacity:1});
            $(".panel-heading-st3").animate({opacity:1});

        },
        function(){
          //alert("ok");
            $(".panel-footer-st3").animate({height: '50px',opacity:0.6});
            $(".panel-heading-st3").animate({opacity:0.6});
        });

        $(".panel-st4").hover(function(){
          //alert("ok");
            $(".panel-footer-st4").animate({height: '80px',opacity:1});
            $(".panel-heading-st4").animate({opacity:1});

        },
        function(){
          //alert("ok");
            $(".panel-footer-st4").animate({height: '50px',opacity:0.6});
            $(".panel-heading-st4").animate({opacity:0.6});
        });
    });
    </script>


       <div id="page-wrapper" style="height:800px;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            SAR <small>-Dashboard</small>
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

          <div class="col-lg-3 col-md-6">
                 <div class="panel panel-primary panel-st1">
                     <div class="panel-heading panel-heading-st1">
                         <div class="row">
                             <div class="col-xs-3">
                              <img  src="{{ URL::asset('images/dashboard/student.png') }}" width="80px"/>
                             </div>
                             <div class="col-xs-9 text-right">
                                 <div class="huge">&nbsp;</div>
                                 <div>Exam halls</div>
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
                   <div class="panel panel-primary panel-st2">
                       <div class="panel-heading panel-heading-st2">
                           <div class="row">
                               <div class="col-xs-3">
                                <img  src="{{ URL::asset('images/dashboard/upload.png') }}" width="80px"/>
                               </div>
                               <div class="col-xs-9 text-right">
                                   <div class="huge">&nbsp;</div>
                                   <div>Upload results</div>
                               </div>
                           </div>
                       </div>
                           <div class="panel-footer panel-footer-st2">
                               <span class="pull-left">View Details</span>
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                               <div class="clearfix"></div>
                           </div>
                   </div>
               </div>

               <div class="col-lg-3 col-md-6">
                      <div class="panel panel-primary panel-st3">
                          <div class="panel-heading panel-heading-st3">
                              <div class="row">
                                  <div class="col-xs-3">
                                   <img  src="{{ URL::asset('images/dashboard/result.png') }}" width="80px"/>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge">&nbsp;</div>
                                      <div>Exams</div>
                                  </div>
                              </div>
                          </div>
                              <div class="panel-footer panel-footer-st3">
                                  <span class="pull-left">View Details</span>
                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                      </div>
                  </div>



                  <div class="col-lg-3 col-md-6">
                         <div class="panel panel-primary panel-st4">
                             <div class="panel-heading panel-heading-st4">
                                 <div class="row">
                                     <div class="col-xs-3">
                                      <img  src="{{ URL::asset('images/dashboard/letters.png') }}" width="80px"/>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge">&nbsp;</div>
                                         <div>letters</div>
                                     </div>
                                 </div>
                             </div>
                                 <div class="panel-footer panel-footer-st4">
                                     <span class="pull-left">View Details</span>
                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                     <div class="clearfix"></div>
                                 </div>
                         </div>
                     </div>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
     <script src="http://js.nicedit.com/nicEdit-latest.js"></script>
       <script>
       $(document).ajaxComplete(function(){
          bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
        });
        </script>

    <script>
    $(document).ajaxComplete(function() {
      $("#tabs").tabs();
    });
    </script>


    <script>



      + function($) {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
        console.log(files)
    }

    uploadForm..addEventListener('submit', function(e) {
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




    <script type="text/javascript" src="{{asset('js/jquery.columns.min.js')}}"></script>
    <script>

      $(document).ajaxComplete(function(){

        $.ajax({
                     url:'/load_exams',
                     dataType: 'json',
                     success: function(json) {
                         exams = $('#exams').columns({
                             data:json,
                             schema: [
                                 {"header":"ID", "key":"id"},
                                  {"header":"Exam name", "key":"exam_name"},
                                   {"header":"Date", "key":"academic_year"},
                                 {"header":"time", "key":"time"},
                                 {"header":"Subject", "key":"Subject_subject_id"},

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


    <!--add exam -->

  <script>
  $(document).ajaxComplete(function abc(){
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });
  });

    $(document).ajaxComplete(function(){
      $("#exam_add").unbind().click(function(){

        var exam_name= $("#exam_name").val();
        var ace_year=$("#ace_year").val();
        var exam_date= $("#exam_date").val();
        var exam_time= $("#exam_time").val();
        //alert(exam_name);




  $.ajax({
                  url:"exam_add",
                  type:"GET",
                  data:"exam_name="+exam_name+"&ace_year="+ace_year+"&exam_date="+exam_date+"&exam_time="+exam_time,
                  success:function (data, textstatus, jqXHR)
                  {
                      alert("added");
                  },

                  error:function (jqXHR, textstatus, errorThrown)
                  {
                      alert(errorThrown);
                  }


      });

      });

    });


  </script>



    <!--./ add exam -->



@endsection
