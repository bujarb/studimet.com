<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function BadPage(){
      return view('errors.badpage');
    }
}
