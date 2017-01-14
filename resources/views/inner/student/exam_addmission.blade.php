@extends('layouts.admin')
@section('content')

 <div id="page-wrapper">
   <h2>Admission</h2>
   <hr/>
   <!--container-->
   <div class="container-fluid">
     <div class="row" style="height:390px">

       <div class="col-sm-4" style="background-color:#fff; height:350px;">
               <h3 style="margin-bottom:40px">Downlaod the admission</h3>

               <center>
                  <a href = "{{url('/getExamApp')}}" class = "btn btn-default btn-md btn-hover"><h4>Addmission</h4></a>
                </center>
        </div >

        <div class="col-sm-2">

        </div>


      <div class="col-sm-6" style="background-color:#fff;height:350px">
        <h3>Instructions</h3>
      <b>  PLEASE READ THESE INSTRUCTIONS CAREFULLY BEFORE YOU GO TO THE EXAM</b>
      <br/><br/>
      <ul>
        <li>
      All the questions and instructions of the test will be in English only. Candidates cannot attempt BIT  Question Paper in any other
       language apart from English.
      </li>
      <li>
        Candidates should bring a pen for the purpose of rough work and signing the attendance sheet. The centre does not provide pen or pencil. Also, borrowing the same is not allowed during the exam;
         any attempt to do so will be treated as copy/illegitimate.
      </li>
      <li>
        BITS will provide blank sheets for rough work, if required. These sheets should be purely used for rough work and
        must be kept with you throughout the examination.
      </li>
    </ul>
      </div>

      </div>
    </div>
    <!--./container-->
</div>

@endsection
