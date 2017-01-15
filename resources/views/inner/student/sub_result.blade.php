@extends('layouts.admin')

@section('content')
<?php
$f1_s1_sub=array("Data Structure and Algorithm","Mathematical methods","Programming","Information Systems","Automata");
$GPA = array("A+"=>"4.00", "A"=>"4.00","A-"=>"3.75", "B+"=>"3.50","B"=>"3.25", "B-"=>"3.00",);
$i=0;
?>

<div id="page-wrapper">


<div class="container-fluid">
	<h2>Exam Results</h2>
</div>
<div class="container-fluid" style="height:20px">
</div>

    <div class="row">
		<section>
        <div class="wizard">
                <ul class="nav nav-wizard">

                    <li class="active" style="width: 33%">
                        <a href="#1year" data-toggle="tab">1st Year</a>
                    </li>
                    <li  style="width: 33%">
                        <a href="#2year" data-toggle="tab">2rd Year</a>
                    </li>

                    <li  style="width: 33%">
                        <a href="#3year" data-toggle="tab">3rd Year</a>
                    </li>

                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="1year">
                        <div class="row" style="height:70px">
                        </div>


						<div class="description">
					        <div class="row" align="center">
                            <!--1st year semester 1-->
                            <h4><b>1st semester</b></h4>
						       <table>
                                    <tr>
                                        <th>Subject ID</th>
                                        <th>Subject</th>
                                        <th>Result</th>
                                        <th>GPA</th>
                                    </tr>

                                    @foreach ($subresults as $sub)
                                    <tr>
                                        <td>{{ $sub->id }}</td>
                                        <td><?php echo $f1_s1_sub[$i]; $i++;?></td>
                                        <td>{{ $sub->result }}</td>
                                        <td><?php echo $GPA[$sub->result];?></td>
                                    </tr>

                                    @endforeach

                                </table>
                                <br></br>
                                <!--1st year semester 2-->
                                <h4><b>2nd semester</b></h4>
						       <table>
                                    <tr>
                                        <th>Subject ID</th>
                                        <th>Subject</th>
                                        <th>Result</th>
                                        <th>GPA</th>
                                    </tr>
                                    <tr>
                                        <td>scs2011</td>
                                        <td>Data structure</td>
                                        <td>A</td>
                                        <td>4.00</td>
                                    </tr>
                                </table>


					        </div>
				        </div>
                    </div>

                    <div class="tab-pane" id="2year">
                        <div class="row" style="height:70px"></div>

						<div class="description">
					        <div class="row" align="center">
                            <!--1st year semester 1-->
                            <h4><b>1st semester</b></h4>
						       <table>
                                    <tr>
                                        <th>Subject ID</th>
                                        <th>Subject</th>
                                        <th>Result</th>
                                        <th>GPA</th>
                                    </tr>
                                    <tr>
                                        <td>scs2011</td>
                                        <td>Data structure</td>
                                        <td>A</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2012</td>
                                        <td>Foundation of CS</td>
                                        <td>C</td>
                                        <td>2.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2013</td>
                                        <td>Networking</td>
                                        <td>A</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2014</td>
                                        <td>Programming(iv)</td>
                                        <td>B</td>
                                        <td>3.00</td>
                                    </tr>
                                </table>
                                <br></br>
                                <!--1st year semester 2-->
                                <h4><b>2nd semester</b></h4>
						       <table>
                                    <tr>
                                        <th>Subject ID</th>
                                        <th>Subject</th>
                                        <th>Result</th>
                                        <th>GPA</th>
                                    </tr>
                                    <tr>
                                        <td>scs2011</td>
                                        <td>Data structure</td>
                                        <td>A</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2012</td>
                                        <td>Foundation of CS</td>
                                        <td>C</td>
                                        <td>2.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2013</td>
                                        <td>Networking</td>
                                        <td>A</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2014</td>
                                        <td>Programming(iv)</td>
                                        <td>B</td>
                                        <td>3.00</td>
                                    </tr>
                                </table>


					        </div>
				        </div>
                </div>

                    <div class="tab-pane" id="3year">
                        <div class="row" style="height:70px"></div>

                        <div class="description">
                            <div class="row" align="center">
                            <!--1st year semester 1-->
                            <h4><b>1st semester</b></h4>
                               <table>
                                    <tr>
                                        <th>Subject ID</th>
                                        <th>Subject</th>
                                        <th>Result</th>
                                        <th>GPA</th>
                                    </tr>
                                    <tr>
                                        <td>scs2011</td>
                                        <td>Data structure</td>
                                        <td>A</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2012</td>
                                        <td>Foundation of CS</td>
                                        <td>C</td>
                                        <td>2.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2013</td>
                                        <td>Networking</td>
                                        <td>A</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2014</td>
                                        <td>Programming(iv)</td>
                                        <td>B</td>
                                        <td>3.00</td>
                                    </tr>
                                </table>
                                <br></br>
                                <!--1st year semester 2-->
                                <h4><b>2nd semester</b></h4>
                               <table>
                                    <tr>
                                        <th>Subject ID</th>
                                        <th>Subject</th>
                                        <th>Result</th>
                                        <th>GPA</th>
                                    </tr>
                                    <tr>
                                        <td>scs2011</td>
                                        <td>AI</td>
                                        <td>A</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr>
                                        <td>scs2012</td>
                                        <td>Foundation of CS</td>
                                        <td>C</td>
                                        <td>2.00</td>
                                    </tr>
                                </table>


                            </div>
                        </div>

        </div>
    </section>
   </div>
</div>
</div>

@endsection
