<?php

namespace App\ItSolution;
use Illuminate\Support\Facades\Facade;
class User extends Facade{
    protected static function getFacadeAccessor() { return 'user'; }
}