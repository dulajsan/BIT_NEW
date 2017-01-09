@extends('layouts.admin')


@section('content')

<div id="page-wrapper">
  <section class="white_backg">
<input type="radio" id="profile" value="1" name="tractor" checked='checked' />
<input type="radio" id="settings" value="2" name="tractor" />
<input type="radio" id="posts" value="3" name="tractor" />
<input type="radio" id="books" value="4" name="tractor" />

  <nav>
  <label for="profile" class='fontawesome-camera-retro'></label>
  <label for="settings" class='fontawesome-film'></label>
  <label for="posts" class='fontawesome-calendar'></label>
  <label for="books" class='fontawesome-list-alt'></label>

  </nav>

  <article class='uno'>
    <!--year 1-->
  <div class="col-sm-6"  id="year1">
  </div>
  <div class="col-sm-4 col-sm-offset-1">
    <h2>Year 1- results</h2>
    <ul>
    <li>IT1104	Information Systems & Technology</li>
    <li>IT1204	Computer Systems I</li>
    <li>IT1304	PC Applications</li>
    <li>IT1404	Internet & World Wide Web</li>
    <li>IT2104	Mathematics for Computing I</li>
    <li>IT2204	Programming I</li>
    <li>IT2304	Database Systems I	</li>
    <li>IT2404	Systems Analysis & Design</li>
  </ul>
  </div>
  <!--./ year 1-->
  </article>


  <article class='dos fontawesome-wrench'>
    <!-- year 2-->
    <div class="col-sm-6" id="year2" >
    </div>

    <div class="col-sm-4 col-sm-offset-1">
      <h2>Year 2- results</h2>
      <ul>
      <li>IT1104	Information Systems & Technology</li>
      <li>IT1204	Computer Systems I</li>
      <li>IT1304	PC Applications</li>
      <li>IT1404	Internet & World Wide Web</li>
      <li>IT2104	Mathematics for Computing I</li>
      <li>IT2204	Programming I</li>
      <li>IT2304	Database Systems I	</li>
      <li>IT2404	Systems Analysis & Design</li>
    </ul>
    </div>

    <!--./year 2-->
  </article>


  <article class='tres fontawesome-file-alt'>
    <!--year 3-->
    <div class="col-sm-6" id="year3" >
    </div>

    <div class="col-sm-4 col-sm-offset-1">
      <h2>Year 3- results</h2>
      <ul>
      <li>IT1104	Information Systems & Technology</li>
      <li>IT1204	Computer Systems I</li>
      <li>IT1304	PC Applications</li>
      <li>IT1404	Internet & World Wide Web</li>
      <li>IT2104	Mathematics for Computing I</li>
      <li>IT2204	Programming I</li>
      <li>IT2304	Database Systems I	</li>
      <li>IT2404	Systems Analysis & Design</li>
    </ul>
    </div>
    <!--yaer 3-->
  </article>


  <article class='cuatro fontawesome-copy'>
    <!--yaer 4-->
    <div class="col-sm-6" id="year4" >
    </div>

    <div class="col-sm-4 col-sm-offset-1">
      <h2>Year 4- results</h2>
      <ul>
      <li>IT1104	Information Systems & Technology</li>
      <li>IT1204	Computer Systems I</li>
      <li>IT1304	PC Applications</li>
      <li>IT1404	Internet & World Wide Web</li>
      <li>IT2104	Mathematics for Computing I</li>
      <li>IT2204	Programming I</li>
      <li>IT2304	Database Systems I	</li>
      <li>IT2404	Systems Analysis & Design</li>
    </ul>
    </div>
    <!--./year 4-->
  </article>

</section>




<div class="container-fluid">
<div class="row" >
    <div class="col-sm-3" id="year11" >

    </div>

    <div class="col-sm-3" id="year22">

    </div>

    <div class="col-sm-3" id="year33">

    </div>

    <div class="col-sm-3" id="year44">

    </div>

</div>


</div>

</div>

@endsection
