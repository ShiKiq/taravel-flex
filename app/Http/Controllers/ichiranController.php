<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ichiranController extends Controller
{


public function tokyo(){
    return view('tokyo');
}
public function top(){
    return view ('top');
}
public function ichiran()
{
    return view('ichiran');
}
}
