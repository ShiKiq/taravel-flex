@extends('layouts.app')
@section('content')

    <title>履歴</title>
<body>
<ul>
    @foreach($data as $d)

        <li>予約番号:{{$d->id}}</li>
        <li>お名前:{{$d->name}}</li>
        <li>大人人数:{{$d->adult}}</li>
        <li>子ども人数:{{$d->children}}</li>
        <li>ご予約日:{{$d->created_at}}</li>
        -------------------------------------------------------------
    @endforeach
</ul>
</body>

@endsection