@extends('layouts.admin')


@section('content')


 <div id="page-wrapper">

   <!--tab panel-->

   <div class="container-fluid">
 <h2>Payment Details</h2>
 <ul class="nav nav-tabs" style="margin-top:10px;">
   <li class="active"><a data-toggle="tab" href="#home">new</a></li>
   <li><a data-toggle="tab" href="#menu1">History</a></li>

 </ul>
<!--tab content-->
 <div class="tab-content" style="margin-top:30px;">
    <!--new payment-->
   <div id="home" class="tab-pane fade in active">
     <div class="container-fluid">

       <form>
         <div class="form-group">
           <label for="email">Student id:</label>
           <input type="text" class="form-control" id="st_id" placeholder="Student id">
         </div>
         <div class="form-group">
           <label for="pwd">Slip No:</label>
           <input type="text" class="form-control" id="slip_no" placeholder="Slip No">
         </div>

         <button type="submit" class="btn btn-default">Submit</button>
       </form>
      </div>

    </div>

   <!--./new payment-->
   <div id="menu1" class="tab-pane fade">

     <div class="container-fluid">
         

         <table class="table table-striped">
           <thead>
             <tr>
               <th>Firstname</th>
               <th>Lastname</th>
               <th>Email</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>John</td>
               <td>Doe</td>
               <td>john@example.com</td>
             </tr>
             <tr>
               <td>Mary</td>
               <td>Moe</td>
               <td>mary@example.com</td>
             </tr>
             <tr>
               <td>July</td>
               <td>Dooley</td>
               <td>july@example.com</td>
             </tr>
           </tbody>
         </table>
        </div>



   </div>
<!--./tab content-->

 </div>
</div>


   <!--./tab panel-->


@endsection
