@extends('layouts.admin')

@section('content')

<style type="text/css">
    .fc {
    direction: ltr;
    text-align: left;
    }

.fc table {
    border-collapse: collapse;
    border-spacing: 0;
    }

html .fc,
.fc table {
    font-size: 1em;
    }

.fc td,
.fc th {
    padding: 0;
    vertical-align: top;
    }



/* Header
------------------------------------------------------------------------*/

.fc-header td {
    white-space: nowrap;
    }

.fc-header-left {
    width: 25%;
    text-align: left;
    }

.fc-header-center {
    text-align: center;
    }

.fc-header-right {
    width: 25%;
    text-align: right;
    }

.fc-header-title {
    display: inline-block;
    vertical-align: top;
    }

.fc-header-title h2 {
    margin-top: 0;
    white-space: nowrap;
    }

.fc .fc-header-space {
    padding-left: 10px;
    }

.fc-header .fc-button {
    margin-bottom: 1em;
    vertical-align: top;
    }

/* buttons edges butting together */

.fc-header .fc-button {
    margin-right: -1px;
    }

.fc-header .fc-corner-right,  /* non-theme */
.fc-header .ui-corner-right { /* theme */
    margin-right: 0; /* back to normal */
    }

/* button layering (for border precedence) */

.fc-header .fc-state-hover,
.fc-header .ui-state-hover {
    z-index: 2;
    }

.fc-header .fc-state-down {
    z-index: 3;
    }

.fc-header .fc-state-active,
.fc-header .ui-state-active {
    z-index: 4;
    }



/* Content
------------------------------------------------------------------------*/

.fc-content {
    clear: both;
    zoom: 1; /* for IE7, gives accurate coordinates for [un]freezeContentHeight */
    }

.fc-view {
    width: 100%;
    overflow: hidden;
    }



/* Cell Styles
------------------------------------------------------------------------*/

.fc-widget-header,    /* <th>, usually */
.fc-widget-content {  /* <td>, usually */
    border: 1px solid #ddd;
    }

.fc-state-highlight { /* <td> today cell */ /* TODO: add .fc-today to <th> */
    background: #fcfcfc;
    }

.fc-cell-overlay { /* semi-transparent rectangle while dragging */
    background: #bcccbc;
    opacity: .3;
    filter: alpha(opacity=30); /* for IE */
    }



/* Buttons
------------------------------------------------------------------------*/

.fc-button {
    position: relative;
    display: inline-block;
    padding: 0 .6em;
    overflow: hidden;
    height: 1.9em;
    line-height: 1.9em;
    white-space: nowrap;
    cursor: pointer;
}


.fc-text-arrow {
    margin: 0 .1em;
    font-size: 2em;
    font-family: "Courier New", Courier, monospace;
    vertical-align: baseline; /* for IE7 */
    }



/*
  button states
  borrowed from twitter bootstrap (http://twitter.github.com/bootstrap/)
*/

.fc-state-default {
    background-color: #f5f5f5;
    }

.fc-state-hover,
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
    color: #333333;
    background-color: #e6e6e6;
    }

.fc-state-hover {
    color: #333333;
    text-decoration: none;
    background-position: 0 -15px;
    -webkit-transition: background-position 0.1s linear;
       -moz-transition: background-position 0.1s linear;
         -o-transition: background-position 0.1s linear;
            transition: background-position 0.1s linear;
    }

.fc-state-down,
.fc-state-active {
    background-color: #cccccc;
    background-image: none;
    outline: 0;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    }

.fc-state-disabled {
    cursor: default;
    background-image: none;
    opacity: 0.55;
    filter: alpha(opacity=65);
    box-shadow: none;
    }



/* Global Event Styles
------------------------------------------------------------------------*/

.fc-event-container > * {
    z-index: 8;
    }

.fc-event-container > .ui-draggable-dragging,
.fc-event-container > .ui-resizable-resizing {
    z-index: 9;
    }

.fc-event {
    border: 1px solid #3a87ad; /* default BORDER color */
    background-color: #3a87ad; /* default BACKGROUND color */
    color: #fff;               /* default TEXT color */
    font-size: .85em;
    cursor: default;
    }

a.fc-event {
    text-decoration: none;
    }

a.fc-event,
.fc-event-draggable {
    cursor: pointer;
    }

.fc-rtl .fc-event {
    text-align: right;
    }

.fc-event-inner {
    width: 100%;
    height: 100%;
    overflow: hidden;
    }

.fc-event-time,
.fc-event-title {
    padding: 0 1px;
    }

.fc .ui-resizable-handle {
    display: block;
    position: absolute;
    z-index: 99999;
    overflow: hidden; /* hacky spaces (IE6/7) */
    font-size: 300%;  /* */
    line-height: 50%; /* */
    }



/* Horizontal Events
------------------------------------------------------------------------*/

.fc-event-hori {
    border-width: 1px 0;
    margin-bottom: 1px;
    }

.fc-ltr .fc-event-hori.fc-event-start,
.fc-rtl .fc-event-hori.fc-event-end {
    border-left-width: 1px;
    }

.fc-ltr .fc-event-hori.fc-event-end,
.fc-rtl .fc-event-hori.fc-event-start {
    border-right-width: 1px;
    }

/* resizable */

.fc-event-hori .ui-resizable-e {
    top: 0           !important; /* importants override pre jquery ui 1.7 styles */
    right: -3px      !important;
    width: 7px       !important;
    height: 100%     !important;
    cursor: e-resize;
    }

.fc-event-hori .ui-resizable-w {
    top: 0           !important;
    left: -3px       !important;
    width: 7px       !important;
    height: 100%     !important;
    cursor: w-resize;
    }

.fc-event-hori .ui-resizable-handle {
    _padding-bottom: 14px; /* IE6 had 0 height */
    }


table.fc-border-separate {
    border-collapse: separate;
    }

.fc-border-separate th,
.fc-border-separate td {
    border-width: 1px 0 0 1px;
    }

.fc-border-separate th.fc-last,
.fc-border-separate td.fc-last {
    border-right-width: 1px;
    }

.fc-border-separate tr.fc-last th,
.fc-border-separate tr.fc-last td {
    border-bottom-width: 1px;
    }

.fc-border-separate tbody tr.fc-first td,
.fc-border-separate tbody tr.fc-first th {
    border-top-width: 0;
    }



/* Month View, Basic Week View, Basic Day View
------------------------------------------------------------------------*/

.fc-grid th {
    text-align: center;
    }

.fc .fc-week-number {
    width: 22px;
    text-align: center;
    }

.fc .fc-week-number div {
    padding: 0 2px;
    }

.fc-grid .fc-day-number {
    float: right;
    padding: 0 2px;
    }

.fc-grid .fc-other-month .fc-day-number {
    opacity: 0.3;
    filter: alpha(opacity=30); /* for IE */
    /* opacity with small font can sometimes look too faded
       might want to set the 'color' property instead
       making day-numbers bold also fixes the problem */
    }

.fc-grid .fc-day-content {
    clear: both;
    padding: 2px 2px 1px; /* distance between events and day edges */
    }

/* event styles */

.fc-grid .fc-event-time {
    font-weight: bold;
    }

/* right-to-left */

.fc-rtl .fc-grid .fc-day-number {
    float: left;
    }

.fc-rtl .fc-grid .fc-event-time {
    float: right;
    }



/* Agenda Week View, Agenda Day View
------------------------------------------------------------------------*/

.fc-agenda table {
    border-collapse: separate;
    }

.fc-agenda-days th {
    text-align: center;
    }

.fc-agenda .fc-agenda-axis {
    width: 50px;
    padding: 0 4px;
    vertical-align: middle;
    text-align: right;
    white-space: nowrap;
    font-weight: normal;
    }

.fc-agenda .fc-week-number {
    font-weight: bold;
    }

.fc-agenda .fc-day-content {
    padding: 2px 2px 1px;
    }

/* make axis border take precedence */

.fc-agenda-days .fc-agenda-axis {
    border-right-width: 1px;
    }

.fc-agenda-days .fc-col0 {
    border-left-width: 0;
    }

/* all-day area */

.fc-agenda-allday th {
    border-width: 0 1px;
    }

.fc-agenda-allday .fc-day-content {
    min-height: 34px; /* TODO: doesnt work well in quirksmode */
    _height: 34px;
    }

/* divider (between all-day and slots) */

.fc-agenda-divider-inner {
    height: 2px;
    overflow: hidden;
    }

.fc-widget-header .fc-agenda-divider-inner {
    background: #eee;
    }

/* slot rows */

.fc-agenda-slots th {
    border-width: 1px 1px 0;
    }

.fc-agenda-slots td {
    border-width: 1px 0 0;
    background: none;
    }

.fc-agenda-slots td div {
    height: 20px;
    }

.fc-agenda-slots tr.fc-slot0 th,
.fc-agenda-slots tr.fc-slot0 td {
    border-top-width: 0;
    }

.fc-agenda-slots tr.fc-minor th,
.fc-agenda-slots tr.fc-minor td {
    border-top-style: dotted;
    }

.fc-agenda-slots tr.fc-minor th.ui-widget-header {
    *border-top-style: solid; /* doesn't work with background in IE6/7 */
    }



/* Vertical Events
------------------------------------------------------------------------*/

.fc-event-vert {
    border-width: 0 1px;
    }

.fc-event-vert.fc-event-start {
    border-top-width: 1px;
    }

.fc-event-vert.fc-event-end {
    border-bottom-width: 1px;
    }

.fc-event-vert .fc-event-time {
    white-space: nowrap;
    font-size: 10px;
    }

.fc-event-vert .fc-event-inner {
    position: relative;
    z-index: 2;
    }

.fc-event-vert .fc-event-bg { /* makes the event lighter w/ a semi-transparent overlay  */
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff;
    opacity: .25;
    filter: alpha(opacity=25);
    }

.fc .ui-draggable-dragging .fc-event-bg, /* TODO: something nicer like .fc-opacity */
.fc-select-helper .fc-event-bg {
    display: none\9; /* for IE6/7/8. nested opacity filters while dragging don't work */
    }

/* resizable */

.fc-event-vert .ui-resizable-s {
    bottom: 0        !important; /* importants override pre jquery ui 1.7 styles */
    width: 100%      !important;
    height: 8px      !important;
    overflow: hidden !important;
    line-height: 8px !important;
    font-size: 11px  !important;
    font-family: monospace;
    text-align: center;
    cursor: s-resize;
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

    <link href="{{{asset('/css/admin.css') }}}" rel="stylesheet">
       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin <small>-Dashboard</small>
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
<!-- <script>

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


 -->


      <!-- // var datastring="full_name="+full_name+"&initials="+initials+"&last_name="+last_name+"&title="+title+"&sex="+sex+"&citizenship="+citizenship+"&isnic="+isnic+"&nic="+nic+"&dob="+dob;
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


//     }); -->

    <!-- });

  });

  </script> -->


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



<script type="text/javascript">

$(document).ready(function abc(){
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });
  });


$(document).ajaxComplete(function(){

    $('#addbtn').click(function(){
        //alert("okaynnn");
        $('#save').val('save');
        $('#formUser').trigger('reset');
        $('#addUser').modal('show');

    });

    $('#formUser').on('submit',function(e){
        e.preventDefault();
        var form=$('#formUser');
        var formData=form.serialize();
        var url=form.attr('action');
        var state =$('#save').val();
        var type ='post';
        if(state=='update'){
            type='put';
        }
         //jQuery.support.cors = true;

        $.ajax({
            type:type,
            url:url,
            data:formData,
            success:function(data){
                 var gender ="" ;
                if (data.gender==0){
                    gender="Male";
                }else{
                    gender="Female";
                }

                var title ="";
                if(data.title=="Mr."){
                    title = "Mr.";
                }
                else if(data.title=="Mrs."){
                    title="Mrs.";
                }
                else if(data.title=="Miss."){
                    title="Miss";
                }
                else if(data.title=="Rev."){
                    title ="Rev.";
                }else{
                    title="Dr.";
                }

                var isnic ="";
                if(data.is_nic=="nic"){
                    isnic=data.nic;
                }else
                    isnic=data.passport;
                var row='<tr id="user"' + data.id + '">'+
                        '<td>'+data.id + '</td>'+
                        '<td>'+data.full_name +'</td>'+
                        '<td>'+data.initials +'</td>'+
                        '<td>'+data.last_name +'</td>'+
                        '<td>' + title + '</td>'+
                        '<td>'+ gender +'</td>'+
                        '<td>'+data.email + '</td>'+
                        '<td>'+ isnic + '</td>'+
                        '<td>'+data.role + '</td>'+
                        '<td>' + '<button class="btn btn-success btn-edit" data-id="'+data.id+'" >Edit</button>' +
                        '<button class="btn btn-danger btn-delete" data-id="'+data.id+'">Delete</button></td>' +
                        '</tr>';


                if(state=='save'){
                    $('tbody').append(row);
                }else{
                    $('#addUser'+data.id).replaceWith(row);
                }
                $('#formUser').trigger('reset');
                $('#fullname').focus();
            }
        });
    })


});



function addRow(data){
        var gender ="" ;
        if (data.gender==0){
            gender="Male";
        }else{
            gender="Female";
        }

        var title ="";
        if(data.title=="Mr."){
            title = "Mr.";
        }
        else if(data.title=="Mrs."){
            title="Mrs.";
        }
        else if(data.title=="Miss."){
            title="Miss";
        }
        else if(data.title=="Rev."){
            title ="Rev.";
        }else{
            title="Dr.";
        }

        var isnic ="";
        if(data.is_nic=="nic"){
            isnic=data.nic;
        }else
            isnic=data.passport;
        var row='<tr id="user"' + data.id + '">'+
                '<td>'+data.id + '</td>'+
                '<td>'+data.full_name +'</td>'+
                '<td>'+data.initials +'</td>'+
                '<td>'+data.last_name +'</td>'+
                '<td>' + title + '</td>'+
                '<td>'+ gender +'</td>'+
                '<td>'+data.email + '</td>'+
                '<td>'+ isnic + '</td>'+
                '<td>'+data.role + '</td>'+
                '<td>' + '<button class="btn btn-success btn-edit"  >Edit</button>' +
                '<button class="btn btn-danger btn-delete">Delete</button></td>' +
                '</tr>';

               $('tbody').append(row);

    }

    //get update

$(document).ajaxComplete(function(){

    $('tbody').delegate('.btn-edit' , 'click', function(){
        var value=$(this).data('id');
        var url='{{URL::to('getUpdate')}}';
        $.ajax({
            type: 'get',
            url:url,
            data : {'id':value},
            success:function(data){
                $('#id').val(data.id);
                $('#full_name').val(data.full_name);
                $('#initials').val(data.initials);
                $('#last_name').val(data.last_name);
                $('#email').val(data.email);
                $('#title').val(data.title);
                $('#sex').val(data.sex);
                $('#nic').val(data.nic);

                $('#role').val(data.role);
                 $('#save').val('update');

                $('#addUser').modal('show');


            }
        });

    });
});

//delete user
$(document).ajaxComplete(function(){
     $('tbody').delegate('.btn-delete' , 'click', function(){
        var value=$(this).data('id');
        var url='{{URL::to('deleteUser')}}';
        if(confirm('Are you sure to delete?')==true){
        $.ajax({
            type: 'post',
            url:url,
            data : {'id':value},
            success:function(data){
                $('#addUser'+value).remove();

    }

   });
    }

});
});

</script>




<!--./admin account details-->


@endsection
