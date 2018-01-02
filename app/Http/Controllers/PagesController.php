<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discipline;
use App\Country;
use DB;
use Session;
use Auth;
use Illuminate\Support\Facades\Input;
use App\City;

class PagesController extends Controller
{
    public function getIndex(){
      $cities = City::all();
      return view('pages.welcome',['cities'=>$cities]);
    }

    public function getResultsPage(){
      return view('pages.results');
    }
}
