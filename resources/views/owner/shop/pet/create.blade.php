<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ペット情報投稿</title>
</head>
<body>
    <h1>ペット情報投稿</h1>
    <form action="{{ route('owner.shop.pet.store', ['id' => $shop_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="category">カテゴリー</label>
            <select name="category" id="category">
                <option value="トカゲ">トカゲ</option>
                <option value="ヘビ">ヘビ</option>
                <option value="カエル">カエル</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div>
            <label for="species">種</label>
            <input type="text" name="species" id="species">
        </div>
        <div>
            <label for="price">値段</label>
            <input type="number" name="price" id="price">
        </div>
        <div>
            <label for="age">年齢</label>
            <input type="number" name="age" id="age">
        </div>
        <div>
            <label for="size">大きさ</label>
            <input type="text" name="size" id="size">
        </div>
        <div>
            <label for="text">投稿内容</label>
            <textarea name="text" id="text"></textarea>
        </div>
        <button type="submit">登録</button>
    </form>
</body>
</html>
