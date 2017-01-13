<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Fee;

class FeesController extends Controller
{
    public function editFee(Request $request){
      $semesid=$request->semid;
      $fee=Fee::find($semesid);
      if($request->exam_fee!=null)
        $fee->exam_fee=$request->exam_fee;
      if($request->reg_fee!=null)
        $fee->reg_fee=$request->reg_fee;
      if($request->prov_reg_fee!=null)
        $fee->provi_reg_fee=$request->prov_reg_fee;
      if($request->cert_fee!=null)
        $fee->certificate_fee=$request->cert_fee;
      if($request->sur_fee!=null)
        $fee->surcharge_fee=$request->sur_fee;
      if($request->def_fee!=null)
        $fee->deferment_fee=$request->def_fee;
      if($request->pro_fee!=null)
        $fee->project_fee=$request->pro_fee;
      if($request->other_fee!=null)
        $fee->other_fee=$request->other_fee;
      $fee->save();


    }
}
