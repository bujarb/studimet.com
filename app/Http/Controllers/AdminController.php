<?php

namespace App\Http\Controllers;

use App\Degree;
use App\Discipline;
use App\Institution;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Permission;
use PHPUnit\Framework\Constraint\Count;
use App\Course;
use Image;
use App\City;
use Illuminate\Support\Facades\Input;
use Charts;
use MercurySeries\Flashy\Flashy;
use Carbon\Carbon;

class AdminController extends Controller
{

    /*
     * Here are the routes for the super_admin
     * I separated those routes in a different controller because of secutiry
     * */

     public function __construct(){
       $this->middleware('auth:admin');
     }

    public function getAdminDashboard(){
      $institution = Charts::database(Institution::all(), 'bar', 'highcharts')
                    ->elementLabel("Total")
                    ->dimensions(1000, 500)
                    ->responsive(true)
                    ->groupByDay();

      $today = Carbon::now();
      //dd($today);


      $data = [
        'institution'=>$institution,
        'todayuniverities'=>null
      ];
      return view('admin.index',$data);
    }
    public function getAdminEditInstitution($name){
      $institution = DB::table('universities')->where('name','=',$name)->first();
      $countries = Country::all();
      $cities = City::all();
      return view('admin.universities.edit',['Institution'=>$institution,'cities'=>$cities,'countries'=>$countries]);
    }

}
