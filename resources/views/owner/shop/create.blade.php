<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップ情報登録</title>
</head>
<body>
    <h1>ショップ情報登録</h1>
    <form action="{{ route('owner.shop.store') }}" method="post">
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
        <button type="submit">登録</button>
    </form>
</body>
</html>
