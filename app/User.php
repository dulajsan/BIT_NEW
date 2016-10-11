<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = [
       // 'full_name','initials','last_Name','title','citizenship','IS_NIC','nic','DOB','sex','address1','address2','address3',
    //'country','email','education','password'
    //];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];




    /**
    *Relationship with applicant table
    *
    */

    public function applicant(){
        return $this->hasOne('App\Applicant','user_user_id','id');
    }
}
