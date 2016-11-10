<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class manageUser extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view("manage_users");
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
       $user=new User;
      $user->full_name=Input::get('full_name');
      $user->initials=Input::get('initials');
      $user->last_name=Input::get('last_name');
      $user->title=Input::get('title');
      $user->sex=Input::get('sex');

      $user->is_nic=Input::get('is_nic');
    //  $user->nic_passport=$data['nic_passport'];
      $user->email=Input::get('email');
      if(Input::get('is_nic')=="nic"){
        $user->nic_passport=Input::get('nic');
        $user->password=bcrypt(Input::get('nic'));

      }
      else if(Input::get('is_nic')=="passport"){
        $user->nic_passport=Input::get('passport');
        $user->password=bcrypt(Input::get('passport'));
      }

      if(Input::get('role')=="Coordinator"){
          $user->role=4;
      }else if(Input::get('role')=="Administrator"){
          $user->role=2;
      }else if(Input::get('role')=="SAR"){
          $user->role=3;
      }


      $user->save();
      return  redirect('/admindash');
  }


  public function filterUser(){

      $roles = [2,3,4];
      $users = User::whereIn('role',$roles)->where('live',1)->get();

      return response()->json($users);


  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function display($id)
  {



  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
     $user=new User;
      $user->full_name=$request->full_name;
      $user->last_name=$request->last_name;
      $user->initials=$request->initials;
      $user->email=$request->email;
      $user->sex=$request->sex;



   if($request->role=="Coordinator"){
          $user->role=4;
      }else if($request->role=="Administrator"){
          $user->role=2;
      }else if($request->role=="SAR"){
          $user->role=3;
      }


      $user->save();
      return  redirect('/admindash');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
