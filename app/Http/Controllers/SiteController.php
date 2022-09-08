<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home(){
         $country = ['Bangladesh','India','Maldip','Canada','England','Australia'];
        return view('home',['country'=>$country]);
    }
    function About($name){
          return view('about',['name'=>$name]);
    }
    function Contact(){
          return view('contact');
    }
}
