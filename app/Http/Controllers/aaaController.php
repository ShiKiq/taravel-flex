<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class aaaController extends Controller
{
    public function aaa()
    {
//        $sale = Sale::find(1);
        return view('aaa');
    }
}