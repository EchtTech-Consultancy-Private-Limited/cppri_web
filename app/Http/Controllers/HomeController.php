<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home');
    }

    //language
    public function SetLang(Request $request){
          //dd($request->data);
        session()->put('Lang',$request->data);
        App::setLocale($request->data);
        return response()->json(['data'=>$request->data,True]);
    }

}
