@extends('layouts.admin')

@section('content')

    <link href="{{{asset('/css/admin.css') }}}" rel="stylesheet">
    <link href="{{{asset('/css/classic.css') }}}" rel="stylesheet">
    <link href="{{{asset('/css/resultUpload.css') }}}" rel="stylesheet">
       <div id="page-wrapper">

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
