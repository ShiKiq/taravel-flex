@extends('layouts.app')
@section('content')


    <body>
        <li>{{ Auth::user()->name }}</li>
        <li>{{ Auth::user()->email }}</li>



    @endsection