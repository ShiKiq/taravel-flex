<?php

namespace App\Http\Controllers;

use App\yoyaku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class yoyakuController extends Controller
{
    public function yoyaku()
    {

        return view('yoyaku');
    }

    protected function create(Request $request)
    {
        $validatedData = $request->validate([
            'email' =>'email'|'max:255',
        ]);


        $post = new yoyaku;
        $post->adult = $request->adult;
        $post->children = $request->children;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->tel = $request->tel;
        $post->address = $request->address;
        $post->userid = Auth::id();
        $post->save();

        return redirect('/yoyaku');


    }

    public function rireki(){



        return view('rireki.rireki');

    }
}

