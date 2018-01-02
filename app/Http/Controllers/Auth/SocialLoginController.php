<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Socialite;
use App\User;
use Session;

class SocialLoginController extends Controller
{

  public function redirectToProvider($service)
  {
      return Socialite::driver($service)->redirect();
  }

  /**
   * Obtain the user information from GitHub.
   *
   * @return Response
   */
  public function handleProviderCallback($service)
  {
      $socialuser = Socialite::driver($service)->user();
      //dd($socialuser);
      switch ($service) {
          case 'facebook':
            $useremail = User::where('email',$socialuser->email)->first();

            if ($useremail) {
              Auth::guard('user')->login($useremail);
              if ($useremail->facebook_login_id == null) {
                $useremail->facebook_login_id = $socialuser->id;
                $useremail->save();
              }
            }else{
              $user = User::where('facebook_login_id',$socialuser->id)->first();

              if (!$user) {
                Auth::guard('user')->login($user);
              }else{
                $user = new User();
                $user->name = $socialuser->name;
                $user->email = $socialuser->email;
                $user->facebook_login_id = $socialuser->id;
                $user->save();

                Auth::guard('user')->login($user);
              }
            }

            return redirect()->route('home');
          break;
          case 'google':
            $useremail = User::where('email',$socialuser->email)->first();

            if ($useremail) {
              Auth::guard('user')->login($useremail);
              if ($useremail->google_login_id == null) {
                $useremail->facebook_login_id = $socialuser->id;
                $useremail->save();
              }
            }else{
              $user = User::where('google_login_id',$socialuser->id)->first();

              if ($user) {
                Auth::guard('user')->login($user);;
              }else{
                $user = new User();
                $user->name = $socialuser->name;
                $user->email = $socialuser->email;
                $user->google_login_id = $socialuser->id;
                $user->save();

                Auth::guard('user')->login($user);
              }
            }


            //dd(Auth::guard('user')->loginUsingId($user->id));

            return redirect()->route('home');
          break;
      }
  }
}
