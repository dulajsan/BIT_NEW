<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

use App\Http\Requests;

class CourseController extends Controller
{
    public function addCourse(Request $request){

      $subject =new Subject;
      $subject->subject_code=$request->course_code;
      $subject->subject_name=$request->course_name;
      $subject->semester_id=$request->semester;
      $subject->num_of_credits=$request->credit;
      $subject->compulsory_optional=$request->opt_com;
      $subject->fee=$request->fee;
      $subject->save();
      return $subject;

    }
}
