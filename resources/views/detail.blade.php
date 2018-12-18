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
        <a href="/yoyaku/{{$tour->id}}" class="hvr-rectangle-out">予約する</a>
    </p>

</div>

</body>
</html>
@endsection