<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResultsUploadController extends Controller
{
  /**
   * Show the results upload pane
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('inner/SAR/resultUpload');
  }
}
