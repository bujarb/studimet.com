<?php

namespace App\MyFacades;
use DB;
use Auth;

class User {

    public static function hasUniAuthorization(){
        $user = Auth::user();
        $has = DB::table('user_university_authorization')->select('approved')->where('user_id','=',$user->id)->first();
        if ($has==true || $user->hasRole('super_admin')){
            return true;
        }else{
            return false;
        }
    }
}
