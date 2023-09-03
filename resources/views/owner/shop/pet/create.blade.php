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
        <dl>
            <dt>
                <span>任意</span>
                <label for="pet_image1">生体画像</label>
            </dt>
            <dd>
                <input type="file" id="pet_image1" name="pet_image1">
                <input type="file" id="pet_image2" name="pet_image2">
                <input type="file" id="pet_image3" name="pet_image3">
                <input type="file" id="pet_image4" name="pet_image4">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
                <label for="title">タイトル</label>
            </dt>
            <dd>
                <input type="text" name="title" id="title">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
                <label for="category">カテゴリー</label>
            </dt>
            <dd>
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
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
                <label for="species">種名</label>
            </dt>
            <dd>
                <input type="text" name="species" id="species">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="morph">モルフ</label>
            </dt>
            <dd>
                <input type="text" name="morph" id="morph">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="sex">性別</label>
            </dt>
            <dd>
                <select name="sex" id="sex">
                    <option value="オス">オス</option>
                    <option value="メス">メス</option>
                    <option value="不明">不明</option>
                </select>
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="age">年齢</label>
            </dt>
            <dd>
                <input type="text" name="age" id="age">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="size">大きさ</label>
            </dt>
            <dd>
                <input type="text" name="size" id="size">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="weight">体重</label>
            </dt>
            <dd>
                <input type="text" name="weight" id="weight">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="arrival_day">入荷日</label>
            </dt>
            <dd>
                <input type="date" name="arrival_day" id="arrival_day">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="price">値段</label>
            </dt>
            <dd>
                <input type="text" name="price" id="price">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="description">コメント</label>
            </dt>
            <dd>
                <textarea name="description" id="description"></textarea>
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
                <label for="description">販売状況</label>
            </dt>
            <dd>
                <label>
                    <input type="radio" name="sales_flag" id="sales_flag" value="0" checked>販売中
                </label>
                <label>
                    <input type="radio" name="sales_flag" value="1">売り切れ
                </label>
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
            </dt>
            <dd>
                <label>
                    <input type="radio" name="public_flag" id="public_flag" value="0">公開
                </label>
                <label>
                    <input type="radio" name="public_flag" value="1" checked>非公開
                </label>
            </dd>
        </dl>
        <button type="submit">登録</button>
    </form>
</body>
</html>
