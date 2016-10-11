<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Applicant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware(['auth', 'applicant']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = Auth::id();
        $applicants=Applicant::where('user_user_id',$id)->get();
        $users=User::where('id',$id)->get();
        $userdetails=View('home',compact('applicants','users'));
        return $userdetails;

    }
}
