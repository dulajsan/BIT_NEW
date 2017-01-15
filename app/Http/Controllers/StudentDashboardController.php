<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\IdRequest;
use Auth;
use App\Chat_message;
use App\Chat;
use App\Student;
use App\Notification;


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
	     	$id = Auth::id();
	     	$s= Student::where('user_user_id',$id)->first();
	     	$msg = $s->enable_exam;

	     	if($msg==1){
	 	 	$students = Notification::where('user_user_id',$id)->get();
	         return view('inner/student/dashboard')->with('students',$students);
	     }else{
	     	return view('inner/student/dashboard')->with('students',$students);
	     }
	     }





		/**
		 * new id card request.
		 *
		 *
		 */

			public function id_Request(Request $request){
				$id=Auth::id();
				$idRequest=new IdRequest;
				$idRequest->reason=$request->reason;
				 $idRequest->request_by=$id;
				 $idRequest->save();
				 return $idRequest;

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


				/**
				 * is Typing
				 	 *
				 * @return \Illuminate\Http\Response
				 */

					public function isTyping(Request $request){
							$username=$request->username;
							$chat=Chat::find(1);
							if($chat->user1==$username)
									$chat->user1_is_typing=true;
							else
									$chat->user2_is_typing=true;
							$chat->save();


					}


					/**
					 * not Typing
					 	 *
					 * @return \Illuminate\Http\Response
					 */

						public function notTyping(Request $request){
								$username=$request->username;
								$chat=Chat::find(1);
								if($chat->user1==$username)
										$chat->user1_is_typing=false;
								else
										$chat->user2_is_typing=false;
								$chat->save();


						}


						/**
						 * retrieve chat messages
							 *
						 * @return \Illuminate\Http\Response
						 */

							public function retrieveChatMessages(Request $request){
									$username=$request->username;
									$message=chatMessage::where('sender_username','!=',$username)->where('read','=',false)->first();

									if(count($message)>0){
										$message->read=true;
										$message->save();
										return $message->message;
									}



							}

							/**
							 * rretrive typing status
								 *
							 * @return \Illuminate\Http\Response
							 */

								public function retrieveTypingStatus(Request $request){
										$username=$request->username;

										$chat=Chat::find(1);
										if($chat->user1==$username){
											if($chat->user2_is_typing)
												return $chat->user2;

										}

										else{
											if($chat->user1_is_typing)
												return $chat->user1;
										}






								}





}
