@extends('layouts.app')
@section('content')
        <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="ja">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href='/css/ichiran.css'>
    <title>oic　topページ</title>
</head>
<body>
<h1><center>ツアー　一覧</center></h1>
<h3><center>都道府県</center></h3>

<p style="text-align:center;">
    @foreach($prefectures as $prefecture)
        <a href="/list/{{$prefecture->id}}" class="hvr-rectangle-out" >{{$prefecture->name}}</a>
    @endforeach
</p>

</div>



<h2><center>新着＆旬のおすすめ</center></h2>




<div class="contents-wrap">
    <div class="contents-box">
        <a href="index.html"><img src="/img/aa.jpg" alt=border="0"></a>
        <h2>沖縄島</h2>
        <p>沖縄島には、連合国軍による 1945 年の大規模な侵攻を後世に伝えるために建てられた沖縄県平和祈念資料館、ジンベエザメとマンタがいる沖縄美ら海水族館があります。</p>
    </div>

    <div class="contents-box">
        <a href="/yoyaku"><img src="/img/11.jpg" lt=border="0"></a>
        <h2>白川郷</h2>
        <p>白川郷は、岐阜県内の庄川流域の呼称である。 大野郡白川村と高山市荘川町および高山市清見町の一部に相当し、白川村を「下白川郷」、他を「上白川郷」と呼ぶ。今日では白川村のみを指すことが多い。白川郷の荻町地区は合掌造りの集落で知られる。</p>
    </div>

    <div class="contents-box">
        <a href="index.html"><img src="/img/USJ.jpg" alt=border="0"></a>
        <h2>USJ</h2>
        <p>異なる表情を持つさまざまなエリアは、感動がいっぱいの別世界。ハリウッドの超大作映画をテーマにした興奮のライドや人気キャラクターたちのショーなど、子どもから大人まで楽しめる、ワールドクラスのエンターテイメントを集めたテーマパーク。</p>
    </div>

    <div class="contents-box">
        <a href="index.html"><img src="/img/h1z1.jpg" alt=border="0"></a>
        <h2>北海道</h2>
        <p>支笏洞爺国立公園にはカルデラ湖、地熱温泉、富士山に似た羊蹄山があります。人気のスキーリゾートにはルスツ、富良野、ニセコなどがあります。</p>
    </div>
</div>

</body>
</html>
@endsection