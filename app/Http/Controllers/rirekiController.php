<?php

namespace App\Http\Controllers;

use App\Models\rireki;

class rirekiController extends Controller
{
    public function rireki()
    {
        // Frameworksモデルのインスタンス化
        $md = new rireki();
        // データ取得
        $data = $md->getData();

        // ビューを返す
        return view('/rireki', ['data' => $data]);

    }
}