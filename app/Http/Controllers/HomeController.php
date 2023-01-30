<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function business($x){
        $arr = ['Cargo','Web Hosting','Domain'];
        return view('business',['businesses'=>$arr, 'type'=>$x]);
    }
    public function service($val){
        $arr2 = ['wash','repairing','change parts'];
        return view('service',['services'=>$arr2, 'type'=>$val]);
    }
}
