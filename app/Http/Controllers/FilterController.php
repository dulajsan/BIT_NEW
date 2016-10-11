<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class FilterController extends Controller
{
    public function filter(){
      $users = User::where('role',0)->get();
      //$applicants=Applicant::where('user_user_id',$id)->get();
      //return View('editDetails',['users'=>$users]);
        return response()->json($users);
    }
}
