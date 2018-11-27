<?php

namespace App\Http\Controllers;


use App\Models\Tour;
use Illuminate\Http\Request;
use App\prefectures;
use App\tourList;

class ichiranController extends Controller
{
    public function list($prefectures){
        $tourList = TourList::where('prefectures',$prefectures)->get();
        return view('list',['tourlist' => $tourList]);
    }

    public function detail($prefectures){
        return view('detail');
    }

    public function tokyo(){
        return view('tokyo');
    }

    public function top(){
        return view ('top');
    }

    public function ichiran(){
        $prefectures = prefectures::all();
        return view('ichiran',['prefectures'=>$prefectures]);
    }

  
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
