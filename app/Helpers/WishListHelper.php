<?php

namespace App\Helpers;

use App\Course;
use App\WishList;
use Auth;

class WishListHelper
{

  public static function courseExitInWishList($course_id){
    $user_id = Auth::user()->id;

    $userWishList = WishList::where('course_id',$course_id)->where('user_id',$user_id)->first();

    if ($userWishList) {
      return true;
    }else {
      return false;
    }
  }
}
