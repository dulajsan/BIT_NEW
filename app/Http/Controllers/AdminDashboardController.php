<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class AdminDashboardController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inner/admin/dashboard');
    }


		/**
		 * Show the account edit details.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function editAccount()
		{
				return view('inner/admin/account');
		}

}
