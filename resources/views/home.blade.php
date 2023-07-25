<!DOCTYPE html>
<html>
<head>
    <title>エキゾサーチ</title>
</head>
<body>
    <ul>
        <li>
            <a href="/register">登録</a>
        </li>
        <li>
            <a href="/login">ログイン</a>
        </li>
    </ul>
    <h1>エキゾサーチ</h1>
    <h2>新着入荷</h2>
    <ul>
        {{--  @foreach ($pets as $pet)
            <li>
                <a href="/pet/{{ $pet->id }}">{{ $pet->title }}</a>
            </li>
        @endforeach  --}}
    </ul>
    <h2>ショップを探す</h2>
    <dl>
        <dt>北海道・東北</dt>
        <dd>
            <a href="">北海道</a>
        </dd>
        <dd>
            <a href="">青森</a>
        </dd>
        <dd>
            <a href="">岩手</a>
        </dd>
        <dd>
            <a href="">宮城</a>
        </dd>
        <dd>
            <a href="">徳島</a>
        </dd>
    </dl>
</body>
</html>
