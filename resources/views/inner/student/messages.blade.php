@extends('layouts.admin')

@section('content')

<div id="page-wrapper">



  <div class="container-fluid">
    <div class="col-md-10 col-md-offset-1">
      <h1 id="greeting">Hello,<span id="usernamechat">{{Auth::user()->last_name}}</span></h1>
      <div class="row">
        <!--name list-->
        <div class="col-md-3" id="name_list">
          <li>
            <input type="text"/>
            <div class="info">

            </div>
          </li>

            <li>
              <img width="50" height="30" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
              <div class="info">
                <div class="user">poorna</div>
                <div class="status on"> online</div>
              </div>
            </li>
            <li>
              <img width="50" height="30" src="http://lorempixel.com/50/50/people/1">
              <div class="info">
                <div class="user">dilumi</div>
                <div class="status on"> online</div>
              </div>
            </li>
            <li>
              <img width="50" height="30" src="http://lorempixel.com/50/50/people/2">
              <div class="info">
                <div class="user">sithara</div>
                <div class="status off">left 3 min age</div>
              </div>
            </li>
            <li>
              <img width="50" height="30" src="http://lorempixel.com/50/50/people/3">
              <div class="info">
                <div class="user">chandima</div>
                <div class="status on"> online</div>
              </div>
            </li>
            <li>
              <img width="50" height="30" src="http://lorempixel.com/50/50/people/4">
              <div class="info">
                <div class="user">lahiru</div>
                <div class="status off">left 4 min age</div>
              </div>
            </li>
            <li>
              <img width="50" height="30" src="http://lorempixel.com/50/50/people/4">
              <div class="info">
                <div class="user"dulaj</div>
                <div class="status off">left 4 min age</div>
              </div>
            </li>



        </div>
        <!--./name list-->

        <!--chat window-->
        <div id="chat-window" class="col-md-9">

        </div>
        <!--./chat window-->
    </div>

    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div id="typingStatus" class="col-md-8" style="padding:15px"></div>
        <input  type="text" id="textchat" class="form-control col-lg-12" autofocus="" onblur="notTyping()">

      </div>
    </div>

    </div>
  </div>

</div>

@endsection
