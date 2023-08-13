<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップ一覧</title>
</head>
<body>
    <h1>ショップ一覧</h1>
    <ul>
        @foreach($shops as $shop)
        <li>
            <a href="/owner/shop/{{ $shop->id }}">{{ $shop->name }}</a>
            <a href="/owner/shop/{{ $shop->id }}/pet/">ペット情報</a>
        </li>
        @endforeach
    </ul>
</body>
</html>
