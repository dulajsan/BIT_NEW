<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student_has_exam;

class SubresultsController extends Controller
{

  public function index(){
      $subresults = Student_has_exam::where('student_id',1)->get();
      return View('inner/student/sub_result', ['subresults' => $subresults]);
  }

}
