<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comparison;
use App\Course;
use Flashy;
use Auth;
use DB;

class ComparisonController extends Controller
{

    public function index(){
        $current_user = Auth::guard('user')->user();
        $courses = [];
        $comparisons = Comparison::where('user_id',$current_user->id)->get();

        foreach ($comparisons as $comparison){
            $course = DB::table('courses')->select('courses.*','disciplines.name as discname','cities.name as cityname','institutions.name as inst_name','institutions.logo_path as instlogo','degrees.display_name as degree')
                ->join('disciplines','disciplines.id','=','courses.discipline_id')
                ->join('institutions','institutions.id','=','courses.inst_id')
                ->join('degrees','degrees.id','=','courses.degree_id')
                ->join('cities','cities.id','=','institutions.city')
                ->where('courses.id',$comparison->course_id)
                ->first();

            array_push($courses,$course);
        }

        //dd($comparisons);
        //dd($allcomparisons);
        //dd($current_user);

        return view('pages.comparisons',['courses'=>$courses]);
    }
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
          Flashy::success('Course exists in comparisons');
            return redirect()->back();
          }
        }
      }
    }

    public static function exits($course_id){
      $current_user = Auth::user();
      $comparison = Comparison::where('user_id',$current_user->id)->where('course_id',$course_id)->first();
      if ($comparison) {
        return true;
      }else{
        return false;
      }
    }

    public function remove($course_id){
        $current_user = Auth::user();
        $comparison = Comparison::where('user_id',$current_user->id)->where('course_id',$course_id)->first();
        $comparison->delete();

        Flashy::success('Course was deleted from comparison');
        return redirect()->back();
    }

    public static function userHasComparisons(){
        $current_user = Auth::guard('user')->user();
        $comparisons = Comparison::where('user_id',$current_user->id)->get();

        if (count($comparisons) > 0){
            return true;
        }else{
            return false;
        }

    }

    public function getUserComparisons(){
        $current_user = Auth::user();
        $comparisons = Comparison::where('user_id',$current_user->id)->get();

        return $comparisons;
    }
}
