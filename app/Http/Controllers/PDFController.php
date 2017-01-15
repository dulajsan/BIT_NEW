<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



use PDF;
use App\User;
use App\Applicant;

use Auth;

class PDFController extends Controller
{
  public function __construct()
  {
    //  $this->middleware(['auth', 'applicant']);


  }


    public function getApp(){
         $id = Auth::id();

        $users = User::where('id',$id)->get();
        $applicants=Applicant::where('user_user_id',$id)->get();
    	$pdf=PDF::loadView('pdf.Application',compact('users','applicants'));
    	return $pdf->stream('Application.pdf');

    }

    public function getVouch(){

         $id = Auth::id();
        //$users = User::all();
        $users = User::where('id',$id)->get();
        $applicants=Applicant::where('user_user_id',$id)->get();
    	$pdf=PDF::loadView('pdf.Voucher',compact('users','applicants'));
    	//download
    	//return $pdf->download('Voucher.pdf');
    	//view
    	return $pdf->stream('Voucher.pdf');
    }

    public function getExamApp(){


      $pdf=PDF::loadView('pdf.exam_app');
      return $pdf->stream('exam_app.pdf');
    }

    //user manual for registartion
    public function loadusermanual(){
      $pdf=PDF::loadView('pdf.usermanual');
      return $pdf->stream('usermanual.pdf');
    }


}
