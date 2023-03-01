<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function admin(){
    if (Auth::user()->admin == 1){
        return view('admin');
    }else{
        return view('index');
        }

    }
}