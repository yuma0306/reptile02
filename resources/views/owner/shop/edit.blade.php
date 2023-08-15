<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップ</title>
</head>
<body>
    <h1>ショップ</h1>
    <form action="{{ route('owner.shop.update', ['id' => $shop->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">ショップ名</label>
            <input type="text" name="name" id="name" value="{{ $shop->name }}">
        </div>
        <div>
            <label for="business_hours">営業時間</label>
            <input type="text" name="business_hours" id="business_hours" value="{{ $shop->business_hours }}">
        </div>
        <div>
            <label for="regular_holiday">定休日</label>
            <input type="text" name="regular_holiday" id="regular_holiday" value="{{ $shop->regular_holiday }}">
        </div>
        <div>
            <label for="phone">電話番号</label>
            <input type="text" name="phone" id="phone" value="{{ $shop->phone }}">
        </div>
        <div>
            <label for="payment_method">支払い方法</label>
            <input type="text" name="payment_method" id="payment_method" value="{{ $shop->payment_method }}">
        </div>
        <div>
            <label for="access_method">アクセス</label>
            <input type="text" name="access_method" id="access_method" value="{{ $shop->access_method }}">
        </div>
        <div>
            <label for="postal_code">郵便番号</label>
            <input type="text" name="postal_code" id="postal_code" value="{{ $shop->postal_code }}">
        </div>
        <div>
            <label for="pref">都道府県</label>
            <select name="pref" id="pref">
                <option value="北海道">北海道</option>
                <option value="青森県" @if($shop->pref=== '青森県') selected @endif>青森県</option>
                <option value="岩手県" @if($shop->pref=== '岩手県') selected @endif>岩手県</option>
                <option value="宮城県" @if($shop->pref=== '宮城県') selected @endif>宮城県</option>
                <option value="秋田県" @if($shop->pref=== '秋田県') selected @endif>秋田県</option>
                <option value="山形県" @if($shop->pref=== '山形県') selected @endif>山形県</option>
                <option value="福島県" @if($shop->pref=== '福島県') selected @endif>福島県</option>
                <option value="茨城県" @if($shop->pref=== '茨城県') selected @endif>茨城県</option>
                <option value="栃木県" @if($shop->pref=== '栃木県') selected @endif>栃木県</option>
                <option value="群馬県" @if($shop->pref=== '群馬県') selected @endif>群馬県</option>
                <option value="埼玉県" @if($shop->pref=== '埼玉県') selected @endif>埼玉県</option>
                <option value="千葉県" @if($shop->pref=== '千葉県') selected @endif>千葉県</option>
                <option value="東京都" @if($shop->pref=== '東京都') selected @endif>東京都</option>
                <option value="神奈川県" @if($shop->pref=== '神奈川県') selected @endif>神奈川県</option>
                <option value="新潟県" @if($shop->pref=== '新潟県') selected @endif>新潟県</option>
                <option value="富山県" @if($shop->pref=== '富山県') selected @endif>富山県</option>
                <option value="石川県" @if($shop->pref=== '石川県') selected @endif>石川県</option>
                <option value="福井県" @if($shop->pref=== '福井県') selected @endif>福井県</option>
                <option value="山梨県" @if($shop->pref=== '山梨県') selected @endif>山梨県</option>
                <option value="長野県" @if($shop->pref=== '長野県') selected @endif>長野県</option>
                <option value="岐阜県" @if($shop->pref=== '岐阜県') selected @endif>岐阜県</option>
                <option value="静岡県" @if($shop->pref=== '静岡県') selected @endif>静岡県</option>
                <option value="愛知県" @if($shop->pref=== '愛知県') selected @endif>愛知県</option>
                <option value="三重県" @if($shop->pref=== '三重県') selected @endif>三重県</option>
                <option value="滋賀県" @if($shop->pref=== '滋賀県') selected @endif>滋賀県</option>
                <option value="京都府" @if($shop->pref=== '京都府') selected @endif>京都府</option>
                <option value="大阪府" @if($shop->pref=== '大阪府') selected @endif>大阪府</option>
                <option value="兵庫県" @if($shop->pref=== '兵庫県') selected @endif>兵庫県</option>
                <option value="奈良県" @if($shop->pref=== '奈良県') selected @endif>奈良県</option>
                <option value="和歌山県" @if($shop->pref=== '和歌山県') selected @endif>和歌山県</option>
                <option value="鳥取県" @if($shop->pref=== '鳥取県') selected @endif>鳥取県</option>
                <option value="島根県" @if($shop->pref=== '島根県') selected @endif>島根県</option>
                <option value="岡山県" @if($shop->pref=== '岡山県') selected @endif>岡山県</option>
                <option value="広島県" @if($shop->pref=== '広島県') selected @endif>広島県</option>
                <option value="山口県" @if($shop->pref=== '山口県') selected @endif>山口県</option>
                <option value="徳島県" @if($shop->pref=== '徳島県') selected @endif>徳島県</option>
                <option value="香川県" @if($shop->pref=== '香川県') selected @endif>香川県</option>
                <option value="愛媛県" @if($shop->pref=== '愛媛県') selected @endif>愛媛県</option>
                <option value="高知県" @if($shop->pref=== '高知県') selected @endif>高知県</option>
                <option value="福岡県" @if($shop->pref=== '福岡県') selected @endif>福岡県</option>
                <option value="佐賀県" @if($shop->pref=== '佐賀県') selected @endif>佐賀県</option>
                <option value="長崎県" @if($shop->pref=== '長崎県') selected @endif>長崎県</option>
                <option value="熊本県" @if($shop->pref=== '熊本県') selected @endif>熊本県</option>
                <option value="大分県" @if($shop->pref=== '大分県') selected @endif>大分県</option>
                <option value="宮崎県" @if($shop->pref=== '宮崎県') selected @endif>宮崎県</option>
                <option value="鹿児島県" @if($shop->pref=== '鹿児島県') selected @endif>鹿児島県</option>
                <option value="沖縄県" @if($shop->pref=== '沖縄県') selected @endif>沖縄県</option>
            </select>
        </div>
        <div>
            <label for="address">住所</label>
            <input type="text" name="address" id="address" value="{{ $shop->address }}">
        </div>
        <div>
            <label for="google_map">Google Map</label>
            <input type="text" name="google_map" id="google_map" value="{{ $shop->google_map }}">
        </div>
        <div>
            <label for="sns">SNS</label>
            <input type="text" name="sns" id="sns" value="{{ $shop->sns }}">
        </div>
        <div>
            <label for="available_pets">取扱生体</label>
            <input type="text" name="available_pets" id="available_pets" value="{{ $shop->available_pets }}">
        </div>
        <div>
            <label for="available_feeds">取扱エサ</label>
            <input type="text" name="available_feeds" id="available_feeds" value="{{ $shop->available_feeds }}">
        </div>
        <div>
            <label for="website">公式サイト</label>
            <input type="text" name="website" id="website" value="{{ $shop->website }}">
        </div>
        <div>
            <label for="image">店舗画像</label>
            <input type="file" id="website" name="image" value="{{ $shop->image }}">
            <img src="{{ asset('storage/' . $shop->image) }}" alt="店舗画像">
        </div>
        <button type="submit">更新</button>
    </form>
    <hr>
    <form action="{{ route('owner.shop.destroy', ['id' => $shop->id]) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">ショップ削除</button>
    </form>
</body>
</html>
