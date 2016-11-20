@extends('layouts.admin')

@section('content')

<div id="page-wrapper">

  <div class="container-fluid">
    <div class="col-lg-4 col-lg-offset-4">
      <h1 id="greeting">Hello,<span id="usernamechat">{{Auth::user()->last_name}}</span></h1>

      <div id="chat-window" class="col-lg-12">

      </div>

      <div class="col-lg-12">
        <div id="typingStatus" class="col-lg-12" style="padding:15px"></div>
        <input  type="text" id="textchat" class="form-control col-lg-12" autofocus="" onblur="notTyping()">

      </div>

    </div>
  </div>

</div>

@endsection
