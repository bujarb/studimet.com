<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        // If the logged in user is not from the admin guard redirect him back
        if (!Auth::guard('admin')->check()) {
          Session::flash('error', 'You are not authorized to enter this page.!');
          return redirect()->route('bad.page');
        }

        // If he is from the admin guard return the next request
        return $next($request);
    }
}
