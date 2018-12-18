@extends('layouts.app')
@section('content')
    <html lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="ja">

    <link rel="stylesheet" href='/css/list.css'>
    <html>
    <header>
        <title>oic 都道府県</title>
        <h1><center>OIC　都道府県</center></h1>
        <header class="header">
            {{--<h1><img src="/img/OIC.png"></h1>--}}

            <body>

            @foreach($tourlist as $tour)

                <div class="container">
                    <div class="contents-box">
                        <a href="/detail/{{$tour->id}}">{{$tour->tours}}</a>
                        <img src="/img/{{$tour->img}}" alt="">
                    </div>
                </div>
            @endforeach




            </body>

            </div>
            </body>
        </header>
    </html>
    </html>
@endsection