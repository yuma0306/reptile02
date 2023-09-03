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
        <dl>
            <dt>
                <span>任意</span>
                <label for="pet_image1">生体画像</label>
            </dt>
            <dd style="display: flex;">
                <div>
                    <img src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                    <input type="file" id="pet_image1" name="pet_image1">
                </div>
                <div>
                    <img src="{{ asset('storage/' . $pet->pet_image2) }}" alt="">
                    <input type="file" id="pet_image2" name="pet_image2">
                </div>
                <div>
                    <img src="{{ asset('storage/' . $pet->pet_image3) }}" alt="">
                    <input type="file" id="pet_image3" name="pet_image3">
                </div>
                <div>
                    <img src="{{ asset('storage/' . $pet->pet_image4) }}" alt="">
                    <input type="file" id="pet_image4" name="pet_image4">
                </div>
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
                <label for="title">タイトル</label>
            </dt>
            <dd>
                <input type="text" name="title" id="title" value="{{ $pet->title }}">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
                <label for="category">カテゴリー</label>
            </dt>
            <dd>
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
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
                <label for="species">種名</label>
            </dt>
            <dd>
                <input type="text" name="species" id="species" value="{{ $pet->species }}">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="morph">モルフ</label>
            </dt>
            <dd>
                <input type="text" name="morph" id="morph" value="{{ $pet->morph }}">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="sex">性別</label>
            </dt>
            <dd>
                <select name="sex" id="sex">
                    <option value="オス" @if($pet->sex === 'オス') selected @endif>オス</option>
                    <option value="メス" @if($pet->sex === 'メス') selected @endif>メス</option>
                    <option value="不明" @if($pet->sex === '不明') selected @endif>不明</option>
                </select>
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="age">年齢</label>
            </dt>
            <dd>
                <input type="text" name="age" id="age" value="{{ $pet->age }}">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="size">大きさ</label>
            </dt>
            <dd>
                <input type="text" name="size" id="size" value="{{ $pet->size }}">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="weight">体重</label>
            </dt>
            <dd>
                <input type="text" name="weight" id="weight" value="{{ $pet->weight }}">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="arrival_day">入荷日</label>
            </dt>
            <dd>
                <input type="date" name="arrival_day" id="arrival_day" value="{{ $pet->arrival_day }}">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="price">値段</label>
            </dt>
            <dd>
                <input type="text" name="price" id="price" value="{{ $pet->price }}">
            </dd>
        </dl>
        <dl>
            <dt>
                <span>任意</span>
                <label for="description">コメント</label>
            </dt>
            <dd>
                <textarea name="description" id="description">{{ $pet->description }}</textarea>
            </dd>
        </dl>
        <dl>
            <dt>
                <span>必須</span>
            </dt>
            <dd>
                <label>
                    <input type="radio" name="public_flag" id="public_flag" value="0" @if($pet->public_flag === 0) checked @endif>公開
                </label>
                <label>
                    <input type="radio" name="public_flag" value="1" @if($pet->public_flag === 1) checked @endif>非公開
                </label>
            </dd>
        </dl>
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
