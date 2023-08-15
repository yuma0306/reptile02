<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>全ショップの入荷情報一覧</title>
</head>
<body>
    <h1>全ショップの入荷情報一覧</h1>
    <ul>
        @foreach($pets as $pet)
            <li>
                <a href="/pet/{{ $pet->id }}">{{ $pet->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>