<!DOCTYPE html>
<html lang="ja">
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
            @if($shop->public_flag === 0)
                <div>
                    <a href="/shop/{{ $shop->id }}">公開中ページ</a>
                </div>
            @endif
            <a href="/owner/shop/{{ $shop->id }}">
                <p>{{ $shop->shop_name }}</p>
                <img src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
            </a>
            <div>
                <a href="/owner/shop/{{ $shop->id }}/pet">このショップの生体情報一覧</a>
            </div>
            <hr>
        </li>
        @endforeach
    </ul>
    <hr>
    <a href="/owner/shop/create">ショップ追加</a>
</body>
</html>
