
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


<meta charset="UTF-8">
<meta http-equiv="content-language" content="ja">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('top.css') }}">
<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
<div class="top">
    <div class="tt">
        <div style="text-align:center">
            <h1 ><font size="7" face="ＭＳ 明朝,平成明朝" color="yellow">今おすすめの格安ツアー！</font></h1>

        </div>
    </div>
    <div class="contents-wrap">
        <div class="contents-box">
            <img src="img/11.jpg" alt="flexbox">
            <h2></h2>
            <p>株式会社ヤマダ電機は、日本の家電量販店チェーン。日本の家電販売最大手で、テックランド 、LABI、ヤマダモバイル、といった業態の店舗を展開している。なお、屋号としてのヤマダ電機にはヤマダ電機直営の店舗と子会社や提携企業が運営するものが存在する。</p>
        </div>

        <div class="contents-box">
            <img src="img/a.jpg" alt="flexbox">
            <h2>沖縄</h2>
            <p>海すこ</p>
        </div>

        <div class="contents-box">
            <img src="img/aa.jpg" alt="flexbox">
            <h2>flexboxのメリット</h2>
            <p>flexboxは、要素の横並びなど配列する際に使用するCSS3コードです。簡単に実装できますよ。</p>
        </div>












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



<div class="contents-wrap2">
    <div class="contents-img2">
        <img src="img/aa.jpg" alt="">
    </div>
    <div class="contents-text2">
        <h2>flexboxのメリット</h2>
        <p>flexboxは、要素の横並びなど配列する際に使用するCSS3コードです。これまで、inline-block やfloat などを利用してきましたが、他にもたくさんのコードを記述しないと横並びにならなかったのです。手間のかかるものでした。しかし、これからはflexbox があるから大丈夫！簡単に実装できますよ。</p>
    </div>
</div>

<div class="contents-wrap3">

    <div class="contents-img2">
        <img src="img/a.jpg" alt="">
    </div>
    <div class="contents-text2">
        <h2>flexboxのメリット</h2>
        <p>flexboxは、要素の横並びなど配列する際に使用するCSS3コードです。これまで、inline-block やfloat などを利用してきましたが、他にもたくさんのコードを記述しないと横並びにならなかったのです。手間のかかるものでした。しかし、これからはflexbox があるから大丈夫！簡単に実装できますよ。</p>
    </div>
</div>
</div>




<table class="price">
    <thead>
    <tr>
        <th class="c1">Business<br></th>
        <th class="c2">Team<br></th>
        <th class="c3">Free<br></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="c1">
            1,000円
        </td>
        <td class="c2">
            500円
        </td>
        <td class="c3">
            無料
        </td>
    </tr>
    <tr>
        <td class="c1">
            20GB
        </td>
        <td class="c2">
            10GB
        </td>
        <td class="c3">
            2GB
        </td>
    </tr>
    <tr>
        <td class="c1">
            独自SSL（無制限）
        </td>
        <td class="c2">
            独自SSL（3個）
        </td>
        <td class="c3">
            なし
        </td>
    </tr>
    <tr>
        <td class="c1"><button>お申込</button></td>
        <td class="c2"><button>お申込</button></td>
        <td class="c3"><button>お申込</button></td>
    </tr>
    </tbody>
</table>







@endsection