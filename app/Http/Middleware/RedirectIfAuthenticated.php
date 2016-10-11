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
        if (Auth::guard($guard)->check() && $user->role== '0') {
            return redirect('/profile');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '1') {
          return redirect('dashboard');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '2') {
            return redirect('/admindash');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '3') {
          return redirect('/sardash');
        }

        elseif (Auth::guard($guard)->check() && $user->role== '4') {
          return redirect('/coorddash');
        }

        return $next($request);
    }
}
