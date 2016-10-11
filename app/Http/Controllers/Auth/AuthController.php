<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Applicant;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';
     /**
     * Where to redirect users after logout.
     *
     * @var string
     */

    protected $redirectAfterLogout = '/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }


  protected function authenticated( )
    {
       $id=Auth::id();

       $user = User::find($id);
        //student
        if($user->role== '1') {
            return redirect('dashboard');
        }
        //applicant
        elseif ($user->role=='0') {
            return redirect('/profile');
        }
        //admin
        elseif ($user->role=='2') {
            return redirect('/admindash');
        }
        //SAR
        elseif ($user->role=='3') {
            return redirect('/sardash');
        }

        //coordinator
        elseif ($user->role=='4') {
            return redirect('/coorddash');
        }



    }




    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'required|max:100',
            /*
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            */

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        // return User::create([
        //     'full_name' => $data['full_name'],
        //     /*
        //     'email' => $data['email'],

        //     'password' => bcrypt($data['password']),
        //     */
        //     'initials' => $data['initials'],
        //     'last_Name'=> $data['last_Name'],
        //     'title'=>$data['title'],
        //     'citizenship'=>$data['citizenship'],
        //     'IS_NIC'=> $data['IS_NIC'],
        //     'nic'=>$data['nic'],
        //     'DOB'=>$data['DOB'],
        //     'sex'=>$data['sex'],
        //     'address1'=>$data['address1'],
        //     'address2'=>$data['address2'],
        //     'address3'=>$data['address3'],
        //     'country'=>$data['country'],
        //     'email'=>$data['email'],
        //     'password'=>bcrypt($data['nic'])

        // ]);


        $user=new User;
        $user->full_name=$data['full_name'];
        $user->initials=$data['initials'];
        $user->last_name=$data['last_name'];
        $user->title=$data['title'];
        $user->sex=$data['sex'];
        $user->is_nic=$data['is_nic'];
      //  $user->nic_passport=$data['nic_passport'];
        $user->email=$data['email'];
        if($data['is_nic']=="nic"){
          $user->nic_passport=$data['nic'];
          $user->password=bcrypt($data['nic']);

        }
        else if($data['is_nic']=="passport"){
          $user->nic_passport=$data['passport'];
          $user->password=bcrypt($data['passport']);
        }

        $user->save();



        $inserted_id=$user->id;

        $user=User::find($inserted_id);

        $applicant =new Applicant;
        $applicant->citizenship=$data['citizenship'];
        $applicant->mobile=$data['mobile'];
        $applicant->land=$data['land'];
        $applicant->user_user_id=$inserted_id;
        $applicant->DOB=$data['DOB'];
        $applicant->address1=$data['address1'];
        $applicant->address2=$data['address2'];
        $applicant->address3=$data['address3'];
        $applicant->country=$data['country'];
        $applicant->education=$data['education'];
        $applicant->subject1=$data['year1']."-".$data['subject1']."-".$data['grade1'];
        $applicant->subject2=$data['year2']."-".$data['subject2']."-".$data['grade2'];
        $applicant->subject3=$data['year3']."-".$data['subject3']."-".$data['grade3'];
        $applicant->subject4=$data['year4']."-".$data['subject4']."-".$data['grade4'];
        $applicant->registration_location=$data['registration_loc'];
        $applicant->is_employed=$data['employ'];
        $applicant->is_computerfield=$data['computerfield'];
        $applicant->designation=$data['designation'];
        $appno = mt_rand(100000, 999999);
        $applicant->applicant_no=$appno;

        $user->applicant()->save($applicant);

        return $user;

    }





}
