<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>生体情報投稿</title>
</head>
<body>
    <h1>生体情報投稿</h1>
    <form action="{{ route('owner.shop.pet.store', ['id' => $shop_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="category">カテゴリー</label>
            <select name="category" id="category">
                <option value="ニシキヘビ">ニシキヘビ</option>
                <option value="ナミヘビ">ナミヘビ</option>
                <option value="トカゲ">トカゲ</option>
                <option value="ヤモリ">ヤモリ</option>
                <option value="リクガメ">リクガメ</option>
                <option value="ミズガメ">ミズガメ</option>
                <option value="カエル">カエル</option>
                <option value="有尾類">有尾類</option>
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
        <div>
            <div>
                <label for="pet_image1">生体画像1</label>
                <input type="file" id="pet_image1" name="pet_image1">
            </div>
            <div>
                <label for="pet_image2">生体画像2</label>
                <input type="file" id="pet_image2" name="pet_image2">
            </div>
            <div>
                <label for="pet_image3">生体画像3</label>
                <input type="file" id="pet_image3" name="pet_image3">
            </div>
            <div>
                <label for="pet_image4">生体画像4</label>
                <input type="file" id="pet_image4" name="pet_image4">
            </div>
        </div>
        <button type="submit">登録</button>
    </form>
</body>
</html>
