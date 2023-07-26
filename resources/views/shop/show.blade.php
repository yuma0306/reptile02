<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップ詳細</title>
</head>
<body>
    <h1>ショップ詳細</h1>
    <dl>
        <dt>ショップ名</dt>
        <dd>{{ $shop->name }}</dd>
    </dl>
    <dl>
        <dt>営業時間</dt>
        <dd>{{ $shop->business_hours }}</dd>
    </dl>
    <dl>
        <dt>定休日</dt>
        <dd>{{ $shop->regular_holiday }}</dd>
    </dl>
    <dl>
        <dt>電話番号</dt>
        <dd>{{ $shop->phone }}</dd>
    </dl>
    <dl>
        <dt>支払い方法</dt>
        <dd>{{ $shop->payment_method }}</dd>
    </dl>
    <dl>
        <dt>アクセス</dt>
        <dd>{{ $shop->access_method }}</dd>
    </dl>
    <dl>
        <dt>郵便番号</dt>
        <dd>{{ $shop->postal_code }}</dd>
    </dl>
    <dl>
        <dt>住所</dt>
        <dd>{{ $shop->address }}</dd>
    </dl>
    <dl>
        <dt>Google Map</dt>
        <dd>{!! $shop->google_map !!}</dd>
    </dl>
    <dl>
        <dt>SNS</dt>
        <dd>{{ $shop->sns }}</dd>
    </dl>
    <dl>
        <dt>取扱生体</dt>
        <dd>{{ $shop->available_pets }}</dd>
    </dl>
    <dl>
        <dt>取扱エサ</dt>
        <dd>{{ $shop->available_feeds }}</dd>
    </dl>
    <dl>
        <dt>公式サイト</dt>
        <dd>{{ $shop->website }}</dd>
    </dl>
</body>
</html>
