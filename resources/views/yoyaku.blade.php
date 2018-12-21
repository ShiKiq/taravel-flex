@extends('layouts.app')
@section('style')
    label{
    margin-right:30px;
    }
@endsection
@section('content')

    <link rel="stylesheet"href="/css/yoyakuform.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <div class="form">
        <li>

        </li>
        <li>
            <h3> {{$tour->tours}}</h3>

            <form action="/create" method="POST">
                <?=csrf_field()?>
                    <table>
                        <tr>
                            <th>{{ $tour -> day }}</th>
                        </tr>

                        <tr>
                            <th>{{$tour -> hotel}}</th>
                        </tr>
                    </table>
                <p><label>予約人数:</label>
                    <label>大人:</label>
                    <input type="number" min="1" class="form-control" name="adult" value="{{ old('name') }}" required="required">

                    <label>子ども:</label>
                    <input type="number" min="0" class="form-control" name="children" value="{{ old('name') }}" required="required"></p>


                <p><label>氏名:</label>
                    <input type="text" class="form-control" id="neme" name="name" placeholder="葉山　公平" value="{{ old('name') }}" required="required"></p>

                <p><label>mail:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" value="{{ old('email') }}" required="required"></p>

                <p><label>電話番号:</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="00000000000" value="{{ old('tel') }}" required="required"></p>

                <p><label>住所:</label>
                    <input type="address" class="form-control" id="address" name="address" placeholder="大阪..." value="{{ old('address') }}" required="required"></p>

                <input type="submit"value="ok">
            </form>
        </li>
        <li>
        </li>

    </div>



@endsection