<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップ</title>
</head>
<body>
    <h1>ショップ</h1>
    <form action="{{ route('owner.shop.update', ['id' => $shop->id]) }}" method="post">
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
