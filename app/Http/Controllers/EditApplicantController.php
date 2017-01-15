<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Applicant;
use Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Image;

class EditApplicantController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'applicant']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        //$users = User::all();
        $users = User::where('id',$id)->get();
        $applicants=Applicant::where('user_user_id',$id)->get();
        //return View('editDetails',['users'=>$users]);
        $userdetails=View('editDetails',compact('users','applicants'));
        return $userdetails;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //return response()->json(['name' => 'Abigail', 'state' => 'CA']);
         $id = Auth::id();
        $users = User::find($id);
        $applicants=Applicant::where('user_user_id',$id)->first();

        $users->full_name=$request->full_name;
        $users->initials=$request->initials;
        $users->last_name=$request->last_name;
        $users->title=$request->title;
        $users->sex=  $request->sex;
        $users->save();

        $applicants->citizenship=$request->citizenship;
        $applicants->DOB=$request->dob;
        $applicants->save();

      //  $users->applicant()->save($applicants);
        return  index();

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


    public function update_user(Request $request){
       if ($request->hasFile('avatar')){
           $avatar =$request->file('avatar');
           $filename = time().'.'.$avatar->getClientOriginalExtension();
           Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));

            $id = Auth::id();

           $users = User::find($id);
           $users->profile_pic_url = $filename;
           $users->save();




       }
       return Redirect::to('/test');



   }




   public function add_slip(Request $request){

      $id = Auth::id();
      $users = User::find($id);

      $users->live=0;
      $users->save();
      return $users;


      //$applicants->update();
      //  return response()->json(['response' => 'This is post method']);
      //return Redirect::to('/logout');


   }


}
