<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;
class CompleteUserAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::guard('user')->user();
        //dd($user);
        if ($user->completed == 0) {
          return redirect()->route('complete-user-account');
        }
        return $next($request);
    }
}
