<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;
class SaleController extends Controller
{

    public function sale(){
        return view('sale');

    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'sale' => 'required|integer|email|max:255',

        ]);
    }
    public function test(){

    }

    protected function create(Request $request)
    {


        $post = new Sale;
        $post->name = $request->name;
        $post->sale = $request->sale;
        $post->userid = Auth::id();
        $post->save();

        return redirect('/sale');


//        return Sales::create([
//            'name' => $data['name'],
//            'sale' => $data['sale'],
//        ]);
    }
    //
}
