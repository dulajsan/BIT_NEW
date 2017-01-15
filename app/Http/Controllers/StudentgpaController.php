<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student_has_exam;

class StudentgpaController extends Controller
{

  public function index(){
     $subgpa = Student_has_exam::where('student_id',1)->get();
     return View('inner/student/gpasummery', ['subgpa' => $subgpa]);
 }
}
