<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comparison;
use App\Course;
use Flashy;
use Auth;

class ComparisonController extends Controller
{
    public function add($course_id){
      $current_user = Auth::user();
      $comparisons = Comparison::where('user_id',$current_user->id)->get();
      $course = Course::where('id',$course_id)->first();

      //dd($comparisons);

      if (count($comparisons) == 0) {
        $comparison = new Comparison();
        $comparison->user_id = $current_user->id;
        $comparison->course_id = $course->id;
        $comparison->save();

        return redirect()->back();
      }else{
        foreach ($comparisons as $comparison) {
          if ($comparison->course_id != $course->id) {
            $comparison = new Comparison();
            $comparison->user_id = $current_user->id;
            $comparison->course_id = $course->id;
            $comparison->save();

            return redirect()->back();
          }else{
          Flashy::warning('Course exists in comparisons');
            return redirect()->back();
          }
        }
      }


      //dd($current_user);
    }
}
