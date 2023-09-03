<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>生体一覧</title>
</head>
<body>
    <h1>{{ $shop_name }}の生体情報</h1>
    <ul>
        @foreach($pets as $pet)
        <li>
            <a href="/owner/shop/{{ $shop_id }}/pet/{{ $pet->id }}">
                <p>{{ $pet->title }}</p>
                <img src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
            </a>
        </li>
        @endforeach
    </ul>
    <hr>
    <a href="/owner/shop/{{ $shop_id }}/pet/create">新規投稿</a>
</body>
</html>
