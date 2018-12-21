@extends('layouts.app')
@section('content')


    <link rel="stylesheet" href='/css/list.css'>


        <h1><center>OIC　都道府県</center></h1>
        <header class="header">
            {{--<h1><img src="/img/OIC.png"></h1>--}}



            @foreach($tourlist as $tour)

                <div class="container">
                    <div class="contents-box">
                        <a href="/detail/{{$tour->id}}">{{$tour->tours}}</a>
                        <img src="/img/{{$tour->img}}" alt="">
                    </div>
                </div>
            @endforeach








        </header>


@endsection