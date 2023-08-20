<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップ情報登録</title>
</head>
<body>
    <h1>ショップ情報登録</h1>
    <form action="{{ route('owner.shop.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">ショップ名</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="business_hours">営業時間</label>
            <input type="text" name="business_hours" id="business_hours">
        </div>
        <div>
            <label for="regular_holiday">定休日</label>
            <input type="text" name="regular_holiday" id="regular_holiday">
        </div>
        <div>
            <label for="phone">電話番号</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="payment_method">支払い方法</label>
            <input type="text" name="payment_method" id="payment_method">
        </div>
        <div>
            <label for="access_method">アクセス</label>
            <input type="text" name="access_method" id="access_method">
        </div>
        <div>
            <label for="postal_code">郵便番号</label>
            <input type="text" name="postal_code" id="postal_code">
        </div>
        <div>
            <label for="pref">都道府県</label>
            <select name="pref" id="pref">
                <option value="" disabled selected>選択してください</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
        </div>
        <div>
            <label for="address">住所</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="google_map">Google Map</label>
            <input type="text" name="google_map" id="google_map">
        </div>
        <div>
            <label for="sns">SNS</label>
            <input type="text" name="sns" id="sns">
        </div>
        <div>
            <label for="available_pets">取扱生体</label>
            <input type="text" name="available_pets" id="available_pets">
        </div>
        <div>
            <label for="available_feeds">取扱エサ</label>
            <input type="text" name="available_feeds" id="available_feeds">
        </div>
        <div>
            <label for="website">公式サイト</label>
            <input type="text" name="website" id="website">
        </div>
        <div>
            <label for="image">店舗画像</label>
            <input type="file" id="website" name="image">
        </div>
        <button type="submit">登録</button>
    </form>
</body>
</html>
