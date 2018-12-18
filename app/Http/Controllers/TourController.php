<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\TourList;
class TourController extends Controller
{
    public function tour()
    {
        $tours = TourList::all();
        return view('detail', ['tours' => $tours]);
    }
    public function detail($id)
    {
        $tour = TourList::find($id);
        return view('detail', ['tour' => $tour]);
    }
    public
    function aaa(){
        return view('aaa');
    }
}