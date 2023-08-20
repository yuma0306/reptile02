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
                <option value="トカゲ" @if($pet->category === 'トカゲ') selected @endif>トカゲ</option>
                <option value="ヘビ" @if($pet->category === 'ヘビ') selected @endif>ヘビ</option>
                <option value="カエル" @if($pet->category === 'カエル') selected @endif>カエル</option>
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
