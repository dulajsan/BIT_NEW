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


    public function appDetails(Request $request){

        $id = Auth::id();
       // $users = User::find($id);
       $applicants=Applicant::where('user_user_id',$id);
       $applicants->slip_no=$request->slip;
       $applicants->save();
       //$users->applicant()->save($applicants);
       return $applicants;


    }
}
