<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtype="text" name="title" id="title" value=h=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pet->title }}</title>
</head>
<body>
    <h1>{{ $pet->title }}</h1>
    <a href="/shop/{{ $pet->shop_id }}">ショップページ</a>
    <dl>
        <dt>タイトル</dt>
        <dd>{{ $pet->title }}</dd>
    </dl>
    <dl>
        <dt>カテゴリー</dt>
        <dd>{{ $pet->category }}</dd>
    </dl>
    <dl>
        <dt>種</dt>
        <dd>{{ $pet->species }}</dd>
    </dl>
    <dl>
        <dt>値段</dt>
        <dd>{{ $pet->price }}</dd>
    </dl>
    <dl>
        <dt>年齢</dt>
        <dd>{{ $pet->age }}</dd>
    </dl>
    <dl>
        <dt>大きさ</dt>
        <dd>{{ $pet->size }}</dd>
    </dl>
    <dl>
        <dt>投稿内容</dt>
        <dd>{{ $pet->text }}</dd>
    </dl>
</body>
</html>
