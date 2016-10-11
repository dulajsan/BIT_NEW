@extends('layouts.admin')

@section('content')

<div id="page-wrapper">
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">STUDENT</a></li>
    <li><a href="#tabs-2">STAFF</a></li>
    <li><a href="#tabs-3">OTHER</a></li>
  </ul>


<!-- first student letter-->
<div id="tabs-1">
  <p>
  <h1> Letter format for student</h1>
  <!-- BIT address-->
  <div id="sample" align="right">

      <textarea name="area3" style="width: 300px; height: 100px;" >
      BIT address
      </textarea>
  </div>
<!-- student address-->
  <div id="sample" >

      <textarea name="area3" style="width: 300px; height: 100px;" >
      Student Address
      </textarea>
  </div>
<!-- topic-->
  <div id="sample" align="center" >

      <textarea name="area3" style="width: 600px; height: 50px;" >
      Regardding for..
      </textarea>
  </div>
<!-- letter body-->
  <div id="sample" align="center">

      <textarea name="area3" style="width: 900px; height: 450px;" >
      Letter Body
      </textarea>
  </div>
<!-- date and signature-->
  <div id="sample" >

      <textarea name="area3" style="width: 300px; height: 100px;" >
      Signature
      </textarea>
  </div>

  </p>
</div>

<!--staff letter format-->
  <div id="tabs-2">
    <p>
    <h1> Letter format for staff</h1>
    <!--BIT address-->
  <div id="sample" align="right">

      <textarea name="area3" style="width: 300px; height: 100px;" >
      </textarea>
  </div>
<!--student address-->
  <div id="sample" >

      <textarea name="area3" style="width: 300px; height: 100px;" >
      </textarea>
  </div>
<!--topic-->
  <div id="sample" align="center" >

      <textarea name="area3" style="width: 600px; height: 50px;" >
      </textarea>
  </div>
<!--letter body-->
  <div id="sample" align="center" >

      <textarea name="area3" style="width: 900px; height: 450px;" >
      </textarea>
  </div>
<!--date and signature-->
  <div id="sample" >

      <textarea name="area3" style="width: 300px; height: 100px;" >
      </textarea>
  </div>

    </p>
  </div>




<!--other letter format-->
  <div id="tabs-3">
    <p>
    <h1> Letter format for other</h1>
    <!--BIT address-->
  <div id="sample" align="right">

      <textarea name="area3" style="width: 300px; height: 100px;" >
      </textarea>
  </div>
<!--student address-->
  <div id="sample" >

      <textarea name="area3" style="width: 300px; height: 100px;" >
      </textarea>
  </div>
<!--topic-->
  <div id="sample" align="center" >

      <textarea name="area3" style="width: 600px; height: 50px;" >
      </textarea>
  </div>
<!--letter body-->
  <div id="sample" align="center" >

      <textarea name="area3" style="width: 900px; height: 450px;" >
      </textarea>
  </div>
<!--date and signature-->
  <div id="sample" >

      <textarea name="area3" style="width: 300px; height: 100px;" >
      </textarea>
  </div>

    </p>
  </div>
</div>

</div>
@endsection
