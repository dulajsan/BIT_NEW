<?php

namespace App\Http\Controllers;
use Auth;
use App\Subject;

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

}
