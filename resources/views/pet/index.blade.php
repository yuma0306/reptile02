<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入荷情報一覧</title>
</head>
<body>
    <h1>
        @if(isset($shopModel))
            「{{$shopModel->name}}」の入荷情報一覧
        @elseif (isset($category))
            「{{$category}}」の入荷情報一覧
        @elseif(isset($keyword))
            「{{$keyword}}」の入荷情報一覧
        @else
            入荷情報一覧
        @endif
    </h1>
    <ul>
        @foreach($pets as $pet)
            <li>
                <a href="/pet/{{ $pet->id }}">
                    <p>{{ $pet->title }}</p>
                    <img src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
