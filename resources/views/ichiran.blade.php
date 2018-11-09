
@extends('layouts.app')
@section('content')
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="ja">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/ichiran.css') }}">
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
            <h2>ヤマダ電機テックランド</h2>
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