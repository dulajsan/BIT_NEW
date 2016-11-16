@extends('layouts.admin')
@section('content')
<!--calendar styles-->
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/calendar.css')}}"/>

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

<script type="text/javascript">

    $.getScript('http://arshaw.com/js/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js',function(){

  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: true,
    events: [
      {
        title: 'All Day Event',
        start: new Date(y, m, 1)
      },
      {
        title: 'Long Event',
        start: new Date(y, m, d-5),
        end: new Date(y, m, d-2)
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d+4, 16, 0),
        allDay: false
      },
      {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
      },
      {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
      },
      {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
      },
      {
        title: 'Click for Google',
        start: new Date(y, m, 28),
        end: new Date(y, m, 29),
        url: 'http://google.com/'
      }
    ]
  });
})
</script>

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

    <link href="{{{asset('/css/admin.css') }}}" rel="stylesheet">
       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Student <small>-Dashboard</small>
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
                       <div class="panel panel-primary panel-st2">
                           <div class="panel-heading panel-heading-st2">
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
                           <a href="#">
                               <div class="panel-footer panel-footer-st2">
                                   <span class="pull-left">View Details</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfix"></div>
                               </div>
                           </a>
                       </div>
                   </div>

                   <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary panel-st3">
                                <div class="panel-heading panel-heading-st3">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <img  src="{{ URL::asset('images/dashboard/admission.png') }}" width="80px"/>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">&nbsp;</div>
                                            <div>Admission</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer panel-footer-st3">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                             <div class="panel panel-primary panel-st4">
                                 <div class="panel-heading panel-heading-st4">
                                     <div class="row">
                                         <div class="col-xs-3">
                                             <img  src="{{ URL::asset('images/dashboard/messages.png') }}" width="80px"/>
                                         </div>
                                         <div class="col-xs-9 text-right">
                                             <div class="huge">&nbsp;</div>
                                             <div>Messages</div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="#">
                                     <div class="panel-footer panel-footer-st4">
                                         <span class="pull-left">View Details</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <script>


    $(document).ajaxComplete(function() {


    //Wizard
    $('a[data-toggle="tab"]').unbind().on('show.bs.tab', function (e) {

    var $target = $(e.target);

    if ($target.parent().hasClass('disabled')) {
        return false;
    }
    });

    $(".btn-primary").unbind().click(function (e) {

    var $active = $('.wizard .nav-wizard li.active');
    $active.next().removeClass('disabled');
    nextTab($active);

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

    function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
    }




    </script>

  <!--load subjects in exam.blade.php-->
  <script>
  $(document).ready(function abc(){
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });
  });


//subject selection

  $(document).ajaxComplete(function(){
    $("#get_subject").unbind().click(function(){

        var sem=$("#semesters").val();
        $('#subject_content').empty();
        var sub=document.getElementById('subject_content');

        if(sem!="select semester"){

          $.ajax({
                          url:"/examSubjects",
                          type:"POST",
                          data:"semester="+sem,

                          success:function (data, textstatus, jqXHR)
                          {
                            var data=data;
                            $("#num_of_sub").val(data.length);
                            for(var i=0;i<data.length;i++)
                            {
                              var tr=sub.insertRow();

                              var td1=tr.insertCell(0);
                              td1.innerHTML=data[i].subject_code;

                              var td2=tr.insertCell(1);
                              td2.innerHTML=data[i].subject_name;

                              var td3=tr.insertCell(2);
                              td3.innerHTML=data[i].compulsory_optional;

                              var td4=tr.insertCell(3);
                              td4.innerHTML="R.S. "+data[i].fee+"/=";


                              var td5=tr.insertCell(4);
                              td5.innerHTML="<input type='checkbox' id='sub"+i+"'   value='"+data[i].subject_code+"'/>";

                              var td6=tr.insertCell(5);
                              td6.innerHTML="<input type='hidden' id='fee"+i+"'   value='"+data[i].fee+"'/>";



                            }


                          },

                          error:function (jqXHR, textstatus, errorThrown)
                          {
                              alert(errorThrown);

                          }


              });



        }
        else {
          alert("please select a semester");

        }
    });


  });


  </script>

  <!--./load subjects in exam.blade.php-->

<!--calculate cost of subjects-->
  <script>
$(document).ajaxComplete(function(){
$("#get_cost").unbind().click(function(){
  var num=$("#num_of_sub").val();
  //alert(num);
  var sub_fee=0;
    for(var t=0;t<num;t++){

      if($('#sub'+t).is(":checked")){
        //alert($('#fee'+t).val());
        sub_fee=sub_fee+parseInt($('#fee'+t).val());

      }
      else{
        //alert("errr");
      }
    }

    if(sub_fee==0){
      alert("please select subjects");
    }

    else{
      //alert(sub_fee);
      $(".cost").click();
      $("#total_amount").val(sub_fee);
      $("#num_of_subj").val(num);
    }
});
});

  </script>

  <!--./calculate cost of subjects-->



  <!--new id request-->

  <script>

  $(document).ready(function(){
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });
  });

  $(document).ajaxComplete(function(){
    $("#nic_btn").unbind().click(function(){
      var reason=$("#nic_reason").val();
      //alert(reason);

      $.ajax({
        url:"/idRequest",
        type:"GET",
        data:"reason="+reason,
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

  <!--./new id request-->

  <!--results-->
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>
$(document).ajaxComplete
(function () {
    $('#year1').highcharts({
        title: {
            text: '1st YEAR',
            x: 0 //center
        },
        subtitle: {

            x: 0
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6',
                '7', '8', '9']
        },
        yAxis: {
            title: {
                text: 'results'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{

            data: [2,5,11,12,6,9,6,7,8]
        }]
    });
});
</script>
<script>

$(document).ajaxComplete
(function () {
    $('#year2').highcharts({
        title: {
            text: '2nd YEAR',
            x: 0 //center
        },
        subtitle: {

            x: 0
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6',
                '7', '8', '9']
        },
        yAxis: {
            title: {
                text: 'results'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{

            data: [2,5,11,12,6,9,6,7,8]
        }]
    });
});
</script>

<script>
$(document).ajaxComplete
(function () {
    $('#year3').highcharts({
        title: {
            text: '3rd YEAR',
            x: 0 //center
        },
        subtitle: {

            x: 0
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6',
                '7', '8', '9']
        },
        yAxis: {
            title: {
                text: 'results'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{

            data: [2,5,11,12,6,9,6,7,8]
        }]
    });
});
</script>

<script>
$(document).ajaxComplete
(function () {
    $('#year4').highcharts({
        title: {
            text: '4th YEAR',
            x: 0 //center
        },
        subtitle: {

            x: 0
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6',
                '7', '8', '9']
        },
        yAxis: {
            title: {
                text: 'results'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{

            data: [2,5,11,12,6,9,6,7,8]
        }]
    });
});
</script>
<script>
$(document).ajaxComplete
(function () {
    $('#year11').highcharts({
        title: {
            text: '1st YEAR',
            x: 0 //center
        },
        subtitle: {

            x: 0
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6',
                '7', '8', '9']
        },
        yAxis: {
            title: {
                text: 'results'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{

            data: [2,5,11,12,6,9,6,7,8]
        }]
    });
});
</script>

<script>
$(document).ajaxComplete
(function () {
    $('#year22').highcharts({
        title: {
            text: '2nd YEAR',
            x: 0 //center
        },
        subtitle: {

            x: 0
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6',
                '7', '8', '9']
        },
        yAxis: {
            title: {
                text: 'results'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{

            data: [2,5,11,12,6,9,6,7,8]
        }]
    });
});
</script>


<script>
$(document).ajaxComplete
(function () {
    $('#year33').highcharts({
        title: {
            text: '3rd YEAR',
            x: 0 //center
        },
        subtitle: {

            x: 0
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6',
                '7', '8', '9']
        },
        yAxis: {
            title: {
                text: 'results'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{

            data: [2,5,11,12,6,9,6,7,8]
        }]
    });
});
</script>


<script>
$(document).ajaxComplete
(function () {
    $('#year44').highcharts({
        title: {
            text: '4th YEAR',
            x: 0 //center
        },
        subtitle: {

            x: 0
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6',
                '7', '8', '9']
        },
        yAxis: {
            title: {
                text: 'results'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{

            data: [2,5,11,12,6,9,6,7,8]
        }]
    });
});
</script>



  <!--./results-->


@endsection
