<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ペット一覧</title>
</head>
<body>
    <h1>{{ $shop_name }}のペット情報</h1>
    <ul>
        @foreach($pets as $pet)
        <li>
            <a href="/owner/shop/{{ $shop_id }}/pet/{{ $pet->id }}">{{ $pet->title }}</a>
        </li>
        @endforeach
    </ul>
    <hr>
    <a href="/owner/shop/{{ $shop_id }}/pet/create">新規投稿</a>
</body>
</html>
