<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集画面</title>
</head>
<body>
    <h1>編集画面</h1>
    <form action="{{ route('owner.shop.pet.update', ['shop_id' => $shop->id, 'pet_id' => $pet->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" value="{{ $pet->title }}">
        </div>
        <div>
            <label for="category">カテゴリー</label>
            <select name="category" id="category">
                <option value="ニシキヘビ" @if($pet->category === 'ニシキヘビ') selected @endif>ニシキヘビ</option>
                <option value="ナミヘビ" @if($pet->category === 'ナミヘビ') selected @endif>ナミヘビ</option>
                <option value="トカゲ" @if($pet->category === 'トカゲ') selected @endif>トカゲ</option>
                <option value="ヤモリ" @if($pet->category === 'ヤモリ') selected @endif>ヤモリ</option>
                <option value="リクガメ" @if($pet->category === 'リクガメ') selected @endif>リクガメ</option>
                <option value="ミズガメ" @if($pet->category === 'ミズガメ') selected @endif>ミズガメ</option>
                <option value="カエル" @if($pet->category === 'カエル') selected @endif>カエル</option>
                <option value="有尾類" @if($pet->category === '有尾類') selected @endif>有尾類</option>
                <option value="その他" @if($pet->category === 'その他') selected @endif>その他</option>
            </select>
        </div>
        <div>
            <label for="species">種</label>
            <input type="text" name="species" id="species" value="{{ $pet->species }}">
        </div>
        <div>
            <label for="price">値段</label>
            <input type="number" name="price" id="price" value="{{ $pet->price }}">
        </div>
        <div>
            <label for="age">年齢</label>
            <input type="number" name="age" id="age" value="{{ $pet->age }}">
        </div>
        <div>
            <label for="size">大きさ</label>
            <input type="text" name="size" id="size" value="{{ $pet->size }}">
        </div>
        <div>
            <label for="text">投稿内容</label>
            <textarea name="text" id="text">{{ $pet->text }}</textarea>
        </div>
        <div>
            <div>
                <label for="pet_image4">生体画像1</label>
                <input type="file" id="pet_image1" name="pet_image1">
                <img src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
            </div>
            <div>
                <label for="pet_image4">生体画像2</label>
                <input type="file" id="pet_image2" name="pet_image2">
                <img src="{{ asset('storage/' . $pet->pet_image2) }}" alt="">
            </div>
            <div>
                <label for="pet_image4">生体画像3</label>
                <input type="file" id="pet_image3" name="pet_image3">
                <img src="{{ asset('storage/' . $pet->pet_image3) }}" alt="">
            </div>
            <div>
                <label for="pet_image4">生体画像4</label>
                <input type="file" id="pet_image4" name="pet_image4">
                <img src="{{ asset('storage/' . $pet->pet_image4) }}" alt="">
            </div>
        </div>
        <button type="submit">更新</button>
    </form>
    <hr>
    <form action="{{ route('owner.shop.pet.destroy', ['shop_id' => $shop->id, 'pet_id' => $pet->id]) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">投稿削除</button>
    </form>
</body>
</html>
