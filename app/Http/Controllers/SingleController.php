<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// this is single action controller
class SingleController extends Controller
{
   public function __invoke(){

        $country = ['Bangladesh','India','Maldip','Canada','England'];

        return view('single',['country' => $country]);
    }
}
