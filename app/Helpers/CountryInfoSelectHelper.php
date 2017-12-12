<?php

namespace App\Helpers;

use App\Country;

class CountryInfoSelectHelper
{
  public static function getName(){
    $country = request()->country;
    return $country;
  }

  public static function getImage(){
    $country = request()->country;
    return "<img src='images/country_flag_icons/'".$country.".png/>";
  }

}
