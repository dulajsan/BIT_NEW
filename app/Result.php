<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    public $timestamps=false;
    protected $fillable = ['id','current_gpa','diploma_availability','higher_diploma_availability','degree_availability','student_st_id'];
}
