<?php

namespace App\Http\Controllers;
use Auth;
use App\Subject;
use App\Exam;

use Illuminate\Http\Request;

use App\Http\Requests;

class examController extends Controller
{

  public function getSubjects(Request $request)
  {
    $subject= Subject::where('semester_id',$request->semester)->get();
    return response()->json($subject);
  //  return ['success' => true, 'data' => $subject];
//  return $subject;

  }

  //return view

  public function examCreateView(){
    return View('inner/SAR/exam');
  }



  //add new exam SAR
  public function addExam(Request $request)
  {
    $exam=new Exam;
    $exam->exam_name=$request->exam_name;
    $exam->date=$request->exam_date;
    $exam->academic_year=$request->ace_year;
    $exam->time=$request->exam_time;
    $exam->Subject_subject_id=2;
    $exam->pdf_pdf_id=1;
    $exam->save();
    return $exam;


  }


  //add new exam


  //load exam to table
  // public function loadExams(){
  //
  // }

}
