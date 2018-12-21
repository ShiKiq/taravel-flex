@extends('layouts.app')
@section('content')

    <title>詳細</title>
    <link rel="stylesheet" href='/css/detail.css'>

<div class="box1">
    <h1>{{$tour -> tours}}</h1>      <!--データベース-->
</div>


    <table>
        <tr>
            <th>ツアー</th>
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
            <th>料金</th>
            <td>{{$tour -> price}}</td>
        </tr>
        <tr>
            <th></th>
            <td><img src="/img/{{$tour -> img}}" alt=""></td>
        </tr>
    </table>


<div class="box4">

    <p style="text-align:center;">
        <a href="/yoyaku/{{$tour->id}}" class="hvr-rectangle-out">予約する</a>
    </p>

</div>
@endsection