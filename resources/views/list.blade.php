<!doctype html>
<html lang="ja">
<meta charset="UTF-8">
<meta http-equiv="content-language" content="ja">

<link rel="stylesheet" href='/css/list.css'>
<html>
<header>
    <title>oic 都道府県</title>
    <h1><center>OIC　都道府県</center></h1>
    <header class="header">
        <h1><img src="/img/OIC.png"></h1>


    </header>
    <body>

    </div>

    <div class="container">
        <div class="contents-box">
            @foreach($tourlist as $tour)
                <a href="/detail/{{$tour->id}}">{{$tour->tours}}</a>
             @endforeach
        </div>
    </div>




    </div>
    </body>
</html>