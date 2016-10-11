@extends('layouts.app')

<link href="{{{ asset('/css/all-demo.css') }}}" rel="stylesheet">

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">subjects</div>
                <div class="panel-body">
                    
                    
                    <!--
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>

                    -->
                    
                    
                    
    <div class="example-box-wrapper">

        <div id="form-wizard-3" class="form-wizard">
            <ul>
                <li class="active">
                    <a href="#step-1" data-toggle="tab">
                      <label class="wizard-step">1</label>
                      <span class="wizard-description">
                         1 st year
                         <small>Select subjects</small>
                      </span>
                    </a>
                </li>
                <li>
                    <a href="#step-2" data-toggle="tab">
                      <label class="wizard-step">2</label>
                      <span class="wizard-description">
                         2 nd year
                         <small>Select subjects</small>
                      </span>
                    </a>
                </li>
                <li>
                    <a href="#step-3" data-toggle="tab">
                      <label class="wizard-step">3</label>
                      <span class="wizard-description">
                         3 rd year
                         <small>Select subjects</small>
                      </span>
                    </a>
                </li>
             
            </ul>
            
            <!--------contents  -------->
            
            <div class="tab-content">
                
                
                <!--------content block one ---------------------->
                
                <div class="tab-pane active" id="step-1">
                    <div class="content-box">
                        <h3 class="content-box-header bg-default">
                            Personal Details
                        </h3>
                        <div class="content-box-wrapper">
                            <div>
                           
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>code</th>
                                    <th>Name</th>
                                    <th>Semester</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>IT1104</td>
                                    <td>Information systems & Technology</td>
                                    <td>1</td>
                                    <td><input type="checkbox" name="value"></td>
                                  </tr>
                                  <tr>
                                    <td>IT1204</td>
                                    <td>Computer Systems I</td>
                                    <td>1</td>
                                    <td><input type="checkbox" name="value"></td>
                                  </tr>
                                  <tr>
                                    <td>IT1304</td>
                                    <td>PC Applications</td>
                                    <td>1</td>
									<td><input type="checkbox" name="value"></td>
                                  </tr>
                                  <tr>
                                    <td>IT1404</td>
                                    <td>Internet & World Wide Web</td>
                                    <td>1</td>
									<td><input type="checkbox" name="value"></td>
                                  </tr>
								  <tr>
                                    <td>IT2104</td>
                                    <td>Mathematics for Computing I</td>
                                    <td>2</td>
									<td><input type="checkbox" name="value"></td>
                                  </tr>
								  <tr>
                                    <td>IT2204</td>
                                    <td>Programming I</td>
                                    <td>2</td>
									<td><input type="checkbox" name="value"></td>
                                  </tr>
								  <tr>
                                    <td>IT2304</td>
                                    <td>Database Systems I</td>
                                    <td>2</td>
									<td><input type="checkbox" name="value"></td>
                                  </tr>
								  
								  <tr>
                                    <td>IT2404</td>
                                    <td>Systems Analysis & DesigN</td>
                                    <td>2</td>
									<td><input type="checkbox" name="value"></td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>

                        </div>
                    </div>
                </div>
                
                
                <!-------content block two-------->
                
                
                <div class="tab-pane" id="step-2">
                    <div class="content-box">
                        <h3 class="content-box-header bg-black">
                            Second
                        </h3>
                        <div class="content-box-wrapper">
						 <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>code</th>
                                    <th>Name</th>
                                    <th>Semester</th>
									<th>select</th>
									<th>&nbsp;</th>
                                    
                                  </tr>
                                </thead>
								
                                <tbody>
									<tr>
										<td>IT3104</td>
										<td>Object Oriented Analysis & Design</td>
										<td>3</td>
										<td>C</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT3204</td>
										<td>Software Engineering I</td>
										<td>3</td>
										<td>C</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT3304</td>
										<td>Mathematics for Computing II</td>
										<td>3</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT3404</td>
										<td>Business Management</td>
										<td>3</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT3504</td>
										<td>Web Development Techniques</td>
										<td>3</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT4104</td>
										<td>Programming II</td>
										<td>4</td>
										<td>C</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT4204</td>
										<td>IT Project Management</td>
										<td>4</td>
										<td>C</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT4304</td>
										<td>Rapid Software Development</td>
										<td>4</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT4404</td>
										<td>fundamentals of Multimedia</td>
										<td>4</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT4504</td>
										<td>Data Communication & Networks</td>
										<td>4</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
								</tbody>
						</table>
                   
                        </div>
                    </div>
                </div>
                
                <!-----content  block three------>
                
                <div class="tab-pane" id="step-3">
                    <div class="content-box">
                        <h3 class="content-box-header bg-green">
                            Education details
                        </h3>
                        <div class="content-box-wrapper">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>code</th>
                                    <th>Name</th>
                                    <th>Semester</th>
									<th>select</th>
									<th>&nbsp;</th>
                                    
                                  </tr>
                                </thead>
								
                                <tbody>
									<tr>
										<td>IT5104</td>
										<td>Professional Issues in IT</td>
										<td>5</td>
										<td>C</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT5204</td>
										<td>Information Systems Security</td>
										<td>5</td>
										<td>C</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT5304</td>
										<td>Computer Systems II</td>
										<td>5</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT5404</td>
										<td>Internet Application Development</td>
										<td>5</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT6104</td>
										<td>Individual Project</td>
										<td>5 & 6</td>
										<td>C</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT6204</td>
										<td>Systems & Network Administration</td>
										<td>6</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>I46304</td>
										<td>e-Business Application</td>
										<td>6</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									<tr>
										<td>IT6404</td>
										<td>Database Systems II</td>
										<td>6</td>
										<td>O</td>
                                        <td><input type="checkbox" name="value"></td>
									</tr>
									
								</tbody>
                        </div>
                    </div>
                </div>
                
                <!------content block four------>
                
                
            </div>
        </div>

    
        
    </div>
                    
                    
       
                    
                </div>
            </div>
        </div>
    </div>
	
</div>

@endsection
