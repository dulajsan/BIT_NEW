@extends('layouts.admin')

@section('content')



<div id="page-wrapper">
<div class="container-fluid">
	  <h2>User Information</h2>
  <div class="panel panel-default">
  	<div class="panel-heading">
  		<button type="button" class="btn btn-info btn-lg " id="addbtn">Add New User</button>
  	</div>

  <div class="panel-body">
  	<table class="table table-hover">
  			 <thead>
		                      <th>Full name</th>
		                      <th>Initials</th>
		                      <th>Last name</th>
		                      <th>Title</th>
		                      <th>Sex</th>
		                      <th>NIC/Passport</th>
		                      <th>Email</th>
		                      <th>Role</th>
		                      <th>Edit/Delete</th>


		     </thead>
		     <tbody>
		     @foreach($users as $user)
		      <tr id="user{{$user->id}}">
		                        <td>{{$user->full_name}}</td>
		                        <td>{{$user->initials}}</td>
		                        <td>{{$user->last_name}}</td>
		                        <td>@if($user->title=='Mr.')
		                        	Mr
		                        	@elseif($user->title=='Mrs.')
		                        	Mrs.
		                        	@elseif($user->title=='Miss.')
		                        	Miss.
		                        	@elseif($user->title=='Rev.')
		                        	Rev.
		                        	@else
		                        	Dr.
		                        	@endif	</td>
		                        <td>@if($user->sex=='Male')
		                        	Male
		                        	@else
		                        	Female
		                        	@endif</td>
		                        <td>{{$user->nic_passport}}</td>
		                        <td>{{$user->email}}</td>
		                        <td>@if($user->role==2)
		                        	Administrator
		                        	@elseif($user->role==3)
		                        	SAR
		                        	@else
		                        	Coordinator
		                        	@endif
		                        	</td>
		                        <td>

		                                   <button class="btn btn-success btn-edit" data-id="{{$user->id}}"  >Edit
		                            </button>
		                                   <button class="btn btn-danger btn-delete" data-id="{{$user->id}}">Delete
		                                    </button>
		                            </td>


		     </tr>
		     @endforeach
		     </tbody>


  	</table>


  	<!-- Modal -->
  <div class="modal fade" id="addUser" role="dialog">
    <div class="modal-dialog modal-lg" >

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">User Information</h4>
        </div>
        <div class="modal-body">

          <form  action="{{ url('/newUser') }}" method="post" id="formUser">

        	<div class="row">
              <div class="col-sm-6 ">


          <div class="row">
                <div class="form-group">
                  <label class="control-label col-sm-4" for="fname">Full name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="full_name" placeholder="Madurasinghege dulaj sanjaya" name="full_name" required>
                  </div>
                </div>
              </div><br>

              <div class="row">
                <div class="form-group">
                  <label class="control-label col-sm-4" for="init">Initials:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="initials" placeholder="M.D." name="initials" required>
                  </div>
                </div>
              </div><br>

              <div class="row">
               <div class="form-group">
                  <label class="control-label col-sm-4" for="lname">Last name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="last_name" placeholder="Sanjaya" name="last_name" required>
                  </div>
                </div>
              </div><br>

                <!--title-->
            <div class="row">
              <div class="form-group">
                  <label class="control-label col-sm-4" for="Title">Title:</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="title" name="title" required>
                      <option>--Title--</option>
                      <option value="Mr.">Mr.</option>
                      <option value="Miss.">Miss.</option>
                      <option value="Mrs.">Mrs.</option>
                      <option value="Rev.">Rev.</option>
                      <option value="Dr.">Dr.</option>
                    </select>
                  </div>
              </div>
            </div><br>
              <!--end of title-->

              <input type="hidden" name="_token" value="{{csrf_token()}}">


              <div class="row">
              <div class="form-group">
                  <label class="control-label col-sm-4" for="gender">Sex</label>
                  <div class="col-sm-8">
                        <label class="radio-inline"><input type="radio" name="sex" value="Male" required/>Male</label>
                        <label class="radio-inline"><input type="radio" name="sex" value="Female"/>Female</label>
                  </div>
              </div>
            </div><br>
        </div>



        <div class="col-sm-6 ">

            <div class="row">
              <div class="form-group">
                  <label class="control-label col-sm-4" for="isnic" >NIC/Passport</label>
                  <div class="col-sm-8">
                        <label class="radio-inline"><input type="radio" name="isnic" value="nic" id="is_nic" required>National identity card</label>
                        <label class="radio-inline"><input type="radio" name="isnic" value="passport" id="is_nic" >Passport No</label>

                  </div>
              </div>
            </div><br>

            <div class="row">
              <div class="form-group" id="nic_span">
                  <label class="control-label col-sm-4" for="nic">NIC No:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nic" placeholder="93*******V" name="nic">

                  </div>
                  <!--<span id="nic_error" class="col-sm-1"><img  src="{{ URL::asset('images/right.png') }}" width="22px" id="nic_er"/></span>-->
                </div><br>

                <div class="form-group" id="passport_span">
                    <label class="control-label col-sm-4" for="pass">passport No:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="passport" placeholder="" name="passport">

                    </div>

                  </div>
              </div><br>

               <div class="row">
                 <div class="form-group">
                  <label class="control-label col-sm-4" for="mail">Email:</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    <br/>
                    <span id="email_span"></span>
                  </div>
                </div>
              </div><br>


               <div class="row">
              <div class="form-group">
                  <label class="control-label col-sm-4" for="role">Role:</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="role" name="role" required>
                      <option >--Role--</option>
                      <option value="4">Coordinator</option>
                      <option value="2">Administrator</option>
                      <option value="3">SAR</option>

                    </select>
                  </div>
              </div>
            </div><br>
        </div>
    </div>



                <br/>
                <input type="hidden" name="id" id="id" value="">
                <div class="modal-footer">
                      <input type="submit" class="btn btn-primary"  value="Save" id="save"></button>

                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>



          </div>
          </form>
        </div>

        </div>

      </div>

    </div>

<!--end of modal-->


  </div>
  </div>


</div>



</div>




@endsection
