@extends('layouts.admin')

@section('content')

<div id="page-wrapper">



  <div class="container-fluid white_backg">
    <div class="col-md-10 col-md-offset-1">
      <h3 id="greeting">Hello,<span id="usernamechat">{{Auth::user()->last_name}}</span></h3>
      <div class="row">
        <!--name list-->
        <div class="col-md-3" id="name_list" style="height:370px; overflow-y:scroll">
          <li class="li_name" style="margin-top:4px;">
            <input type="text" class="form-control input-sm"/>
            <div class="info">

            </div>
          </li>

            <li class="li_name">
              <img width="50" height="30" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
              <div class="info" style="float:right">
                <div class="user" style="float:left;margin-right:3pcx;">poorna</div>
                <div class="status on" style="float:left">&nbsp; online</div>
              </div>
            </li>

            <li class="li_name">
              <img width="50" height="30" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
              <div class="info" style="float:right">
                <div class="user" style="float:left;margin-right:3pcx;">poorna</div>
                <div class="status on" style="float:left"> online</div>
              </div>
            </li>


            <li class="li_name">
              <img width="50" height="30" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
              <div class="info" style="float:right">
                <div class="user" style="float:left;margin-right:3pcx;">poorna</div>
                <div class="status on" style="float:left"> online</div>
              </div>
            </li>






        </div>
        <!--./name list-->

        <!--chat window-->
        <div id="chat-window" class="col-md-9" style="height:350px; overflow-y:scroll">

        </div>
        <!--./chat window-->
        <div class="col-md-3">

        </div>

        <div class="col-md-9">
          <div id="typingStatus" class="col-md-8" style="padding:15px"></div>
          <input  type="text" id="textchat" class="form-control col-lg-12" autofocus="" onblur="notTyping()">

        </div>
    </div>





    </div>
  </div>

</div>

@endsection
