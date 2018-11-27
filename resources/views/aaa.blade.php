
<html lang="ja">
<head>
    <link rel="stylesheet" href="/css/aaa.css">
    <meta charset="utf-8">
    <title>動くCSSのためのメモ。 - 演出を加えたスライドショー（要素を立体的に）</title>
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex,nofollow">
    <link rel="canonical" href="https://lopan.jp/css-animation">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="slideshow">
    <input type="radio" name="slideshow" id="switch1" checked>
    <input type="radio" name="slideshow" id="switch2">
    <input type="radio" name="slideshow" id="switch3">
    <div class="slideContents">
        <section id="slide1">
            <div class="contents">
                <h1>海！</h1>
                <p>白良浜</p>
            </div>
            <img src="/img/shirahama1.jpg">
        </section>
        <section id="slide2">
            <div class="contents">
                <h1>岩！</h1>
                <p>これが岩</p>
            </div>
            <img src="/img/shirahama2.jpg">
        </section>
        <section id="slide3">
            <div class="contents">
                <h1>岩！</h1>
                <p>これもいわ！</p>
            </div>
            <img src="/img/shirahama3.jpg">
        </section>
    </div>
    <p class="arrow prev">
        <i class="ico"></i>
        <label for="switch1"></label>
        <label for="switch2"></label>
        <label for="switch3"></label>
    </p>
    <p class="arrow next">
        <i class="ico"></i>
        <label for="switch1"></label>
        <label for="switch2"></label>
        <label for="switch3"></label>
    </p>
</div>
</body>
</html>
