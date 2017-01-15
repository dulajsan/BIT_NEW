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
      $users = User::where('live',1)->get();
      return view('inner/admin/manage_users',['users'=>$users]);
  }


  public function newUser(Request $request){
    if($request->ajax()){
      $user=User::create($request->all()) ;
      return response()->json($user);
    }
  }

   public function getUpdate(Request $request){
    if($request->ajax()){
      $user=User::find($request->id) ;
      return response()->json($user);
    }
  }

   public function newUpdate(Request $request){
    if($request->ajax()){
      $user=User::find($request->id) ;
      $user->full_name=$request->full_name;
      $user->last_name=$request->last_name;
      $user->initials=$request->initials;
      $user->email=$request->email;

   if($request->role==4){
          $user->role=4;
      }else if($request->role==2){
          $user->role=2;
      }else if($request->role==3){
          $user->role=3;
      }


      $user->save();
      return  Response($user);



    }
  }


  public function deleteUser(Request $request){
    if ($request->ajax()){
      $user=User::find($request->id) ;
      if($user) {
      $user->live =0;
      $user->save();
      }

      return response()->json(['sms'=>'delete successfully']);
    }

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
      $user->full_name=Input::get('fname');
      $user->initials=Input::get('init');
      $user->last_name=Input::get('lname');
      $user->title=Input::get('ttl');
      $user->sex=Input::get('gender');

      $user->is_nic=Input::get('isnic');
    //  $user->nic_passport=$data['nic_passport'];
      $user->email=Input::get('mail');
      if(Input::get('isnic')=="nic"){
        $user->nic_passport=Input::get('nic');
        $user->password=bcrypt(Input::get('nic'));

      }
      else if(Input::get('isnic')=="passport"){
        $user->nic_passport=Input::get('pass');
        $user->password=bcrypt(Input::get('pass'));
      }

      if(Input::get('position')=="Coordinator"){
          $user->role=4;
      }else if(Input::get('position')=="Administrator"){
          $user->role=2;
      }else if(Input::get('position')=="SAR"){
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
