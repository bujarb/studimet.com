<?php

namespace App\MyFacades;
use DB;
use Auth;
use App\Comparison as ComparisonModel;
use App\Course;

class Comparison {

    public static function hasComparissons(){
      if (Auth::check()) {
        $user_id = Auth::user()->id;

        $comparisons = ComparisonModel::where('user_id','=',$user_id)->first();

        if ($comparisons) {
          return true;
        }else{
          return false;
        }
      }

    }

    public static function getUserComparissions(){
      if (Auth::check()) {
        $user_id = Auth::user()->id;
        $comparisons = DB::table('comparisons')->select('comparisons.*','courses.name as coursename')
                                              ->join('courses','courses.id','=','comparisons.course_id')
                                              ->where('comparisons.user_id','=',$user_id)
                                              ->get();

        if ($comparisons) {
          return $comparisons;
        }
      }
    }

    public static function courseExits($course_id){
      if (Auth::check()) {
        $user_id = Auth::user()->id;
        $course = ComparisonModel::where('user_id','=',$user_id)->where('course_id','=',$course_id)->first();

        if ($course) {
          return true;
        }else {
          return false;
        }
      }
    }
}
