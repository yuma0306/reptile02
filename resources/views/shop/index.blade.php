<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>みんなのショップ一覧</title>
</head>
<body>
    <h1>
        @if(isset($pref))
            {{$pref}}のショップ一覧
        @else
            ショップ一覧
        @endif
    </h1>
    <ul>
        @foreach($shops as $shop)
            @if($shop->public_flag === 0)
                <li>
                    <a href="/shop/{{ $shop->id }}">
                        <p>{{ $shop->shop_name }}</p>
                        <img src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</body>
</html>
