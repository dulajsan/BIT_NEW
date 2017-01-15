<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      $id=Auth::id();
      $user = User::find($id);
        if (Auth::guard($guard)->check() && $user->role== '0' && $user->live=='1') {
            return redirect('/profile');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '1' && $user->live=='1') {
          return redirect('dashboard');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '2' && $user->live=='1') {
            return redirect('/admindash');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '3' && $user->live=='1') {
          return redirect('/sardash');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '4' && $user->live=='1') {
          return redirect('/coorddash');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '5' && $user->live=='1') {
          return redirect('/dirddash');
        }

        return $next($request);
    }
}
