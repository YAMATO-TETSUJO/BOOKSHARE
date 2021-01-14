@extends('layout')

@section('content')

<div class="main">
    <div class="copy-container">
        <h1>あなたの本棚を<br>図書館に</h1>
        <h2>簡単に、正確に本を管理</h2>
    </div>

    <div class="contents">
        <h3 class="section-title">主なサービス</h3>
        <div class="contents-item">
            <img src="images/iconbook.png"><img src="images/iconchare.png"><img src="images/icongood.png">
            <p>自分の本の登録、管理</p><p>本の貸し借り管理</p><p>みんなの評価</p>
        </div>
        <br>
        <h3 class="section-title">本サービスの内容</h3>
        <p class="texts">Book Shareとは、自分の本をBook Shareに登録し、管理、他の人々と貸し借りをするサービスです。皆様の本棚を連結し、仮想上の図書館を形成することで、より正確に、よりかんたんに、そしてより多くの本を貸し借りすることができます。このサービスを通じて、利用者によりよい読書生活を提供することが目的です。</p>
        <h3 class="section-title">リンク</h3>
        <a href={{ route('book.list') }}>本の一覧</a>
        <a href={{ route('book.list') }}>サービスの詳細</a>
        <a href={{ route('book.ans') }}>Q&A</a>
    </div>
    <div>
</div>