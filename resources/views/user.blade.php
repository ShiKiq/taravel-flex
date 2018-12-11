@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href='/css/user.css'>

    <h3 style="border-bottom: 1px solid #c85179;border-left: 10px solid #c85179;padding: 7px;">My Page</h3>
    <ul class="col3">
        <li></li>
        <li>
            <p>ユーザー名:{{ Auth::user()->name }}</p>
            <p>メールアドレス:{{ Auth::user()->email }}</p>
        </li>
        <li></li>
        </ul>
    </div>


    @endsection