<?php

namespace App\Http\Controllers;

use App\yoyaku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\tourList;
class yoyakuController extends Controller
{

    public function yoyakus($id)
    {
        $tour = TourList::find($id);
        return view('yoyaku', ['tour' => $tour]);
    }

    protected function create(Request $request)
    {




        $post = new yoyaku;
        $post->adult = $request->adult;
        $post->children = $request->children;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->tel = $request->tel;
        $post->address = $request->address;
        $post->userid = Auth::id();
        $post->save();

        return redirect('/kanryo');


    }

    public function rireki(){



        return view('rireki.rireki');

    }
}

