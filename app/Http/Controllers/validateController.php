<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class validateController extends Controller
{

//find whether email exist in databse 

  public function validateEmail(Request $request){

    if (User::where('email', '=', ($request->email))->exists()) {
      return 1;

    }
    else{
      return 0;
    }



  }

}
