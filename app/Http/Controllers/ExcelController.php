<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ExcelController extends Controller
{
    public function postImport(){

      Excel::load(Input::file('input-file-preview'),function($reader){
        $reader->each(function($sheet){
          foreach ($sheet -> toArray() as $row) {
            # code...
          }

        });


      });
      echo "import";
    }
}
