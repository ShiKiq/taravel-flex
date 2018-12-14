@extends('layouts.app')
@section('content')
<!doctype html>

<html lang="ja">
<body>

    <head>
        <meta charset="utf-8">
            <title>詳細</title>
            <link href="css/detail.css" rel="stylesheet" type="text/css">
        <link href="css/aaa.css" rel="stylesheet">
    </head>


    <div class="box1">
        <h1>{{$tour -> tours}}</h1>      <!--データベース-->
    </div>

<div class="box2">
    {{--<div class="slideshow">--}}
        {{--<input type="radio" name="slideshow" id="switch1" checked>--}}
        {{--<input type="radio" name="slideshow" id="switch2">--}}
        {{--<input type="radio" name="slideshow" id="switch3">--}}
        {{--<div class="slideContents">--}}
            {{--<section id="slide1">--}}
                {{--<div class="contents">--}}
                    {{--<h2>海！</h2>--}}
                    {{--<p>白良浜</p>--}}
                {{--</div>--}}
                {{--<img src="/img/shirahama1.jpg">--}}
            {{--</section>--}}
            {{--<section id="slide2">--}}
                {{--<div class="contents">--}}
                    {{--<h2>岩！</h2>--}}
                    {{--<p>これが岩</p>--}}
                {{--</div>--}}
                {{--<img src="/img/shirahama2.jpg">--}}
            {{--</section>--}}
            {{--<section id="slide3">--}}
                {{--<div class="contents">--}}
                    {{--<h2>岩！</h2>--}}
                    {{--<p>これもいわ！</p>--}}
                {{--</div>--}}
                {{--<img src="/img/shirahama3.jpg">--}}
            {{--</section>--}}
        {{--</div>--}}
        {{--<p class="arrow prev">--}}
            {{--<button class="button1" type="submit"></button>--}}
            {{--<i class="ico"></i>--}}
            {{--<label for="switch1"></label>--}}
            {{--<label for="switch2"></label>--}}
            {{--<label for="switch3"></label>--}}
        {{--</p>--}}
        {{--<p class="arrow next">--}}
            {{--<button class="button1" type="submit">  </button>--}}
            {{--<i class="ico"></i>--}}
            {{--<label for="switch1"></label>--}}
            {{--<label for="switch2"></label>--}}
            {{--<label for="switch3"></label>--}}
        {{--</p>--}}
    {{--</div>--}}

</div>
    <div>
        <table>
            <tr>
                <th>
                    ツアー
                </th>
                <td>{{$tour -> tours}}</td>
            </tr>

            <tr>
                <th>ツアー日程</th>
                <td>{{ $tour -> day }}</td>
            </tr>

            <tr>
                <th>利用ホテル</th>
                <td>{{$tour -> hotel}}</td>
            </tr>

            <tr>
                <th>食事</th>
                <td>テキストが入ります</td>
            </tr>
            <tr>
                <th></th>
                <td><img src="/img/{{$tour -> img}}" alt=""></td>
            </tr>
        </table>
    </div>

    <div class="box4">

            <p style="text-align:center;">
                <a href="/{id}/yoyaku" class="hvr-rectangle-out">予約する</a>
            </p>

    </div>

</body>
</html>
@endsection
