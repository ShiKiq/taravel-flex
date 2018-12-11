<?php

namespace App\Http\Controllers;

use App\mypage;
use Illuminate\Http\Request;

class mypagecontroller extends Controller
{


    public function mypage(){


        return view('user');


    }
}