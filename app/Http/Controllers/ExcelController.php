<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Result;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;


class ExcelController extends Controller
{
    public function postImport(){
      try{

      Excel::load(Input::file('input-file-preview'),function($reader){

          foreach ($reader -> toArray() as $row) {
            Result::firstorCreate($row);
          }




      });
      return Redirect::to('/sardash');

    }

  catch(\Exception $e){
    return;

  }
}

}
