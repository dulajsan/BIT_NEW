<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\IdRequest;
use Auth;
use App\Chat_message;

class StudentDashboardController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'student']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inner/student/dashboard');
    }


		/**
		 * new id card request.
		 *
		 * @return \Illuminate\Http\Response
		 */

			public function id_Request(Request $request){
				$idRequest=new IdRequest;
				$idRequest->reason=$request->reason;
				 $id=Auth::id();
				 $idRequest->request_by=$id;
				 $idRequest->save();



			}


			/**
			 * send messages.
			 	 *
			 * @return \Illuminate\Http\Response
			 */

				public function sendMessage(Request $request){
					
						$chatMessage=new chat_message();
						$chatMessage->sender_username=$request->username1;
						$chatMessage->message=$request->text1;
						$chatMessage->save();
						return response()->json(['response' => 'success']);


				}



}
