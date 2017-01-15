<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Notification;
use App\Http\Requests;

class NotificationController extends Controller
{
  public function notification_add(){
   $id = Auth::id();

   $s= Notification::where('user_user_id',$id)->get();

   return response()->json($s);

 }
}
