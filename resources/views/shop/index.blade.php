<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>みんなのショップ一覧</title>
</head>
<body>
    <h1>みんなのショップ一覧</h1>
    <ul>
        @foreach($shops as $shop)
            <li>
                <a href="/shop/{{ $shop->id }}">{{ $shop->shop_name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
