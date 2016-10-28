<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Http\Requests;
use App\Result;
use DB;
use Input;


class ExcelController extends Controller
{
    public function postImport(){

      Excel::load(Input::file('input-file-preview'),function($reader){
        $reader->each(function($sheet){
          foreach ($sheet -> toArray() as $row) {
            Result::firstorCreate($sheet->toArray())
          }

        });


      });
      echo "import";
    }
}
