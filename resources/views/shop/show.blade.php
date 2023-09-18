<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップ詳細</title>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide-core.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            const splide = new Splide( '.splide', {
                pagination: true,
                type: 'fade',
                type: 'loop',
            });
            splide.mount();
        });
    </script>
</head>
<body>
    <h1>{{ $shop->shop_name }}</h1>
    <p>{{ $shop->description }}</p>
    <div>
        <a href="/pet/?shop={{ $shop->id }}">このショップの生体一覧</a>
    </div>
    <section class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('storage/' . $shop->shop_image2) }}" alt="">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('storage/' . $shop->shop_image3) }}" alt="">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('storage/' . $shop->shop_image4) }}" alt="">
                </li>
            </ul>
        </div>
    </section>
    <dl>
        <dt>公式サイト</dt>
        <dd>{{ $shop->website }}</dd>
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
        <dt>動物取扱責任者</dt>
        <dd>{{ $shop->animal_handler }}</dd>
    </dl>
    <dl>
        <dt>都道府県</dt>
        <dd>{{ $shop->pref }}</dd>
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
        <dt>アクセス</dt>
        <dd>{{ $shop->access_method }}</dd>
    </dl>
    <dl>
        <dt>マップ</dt>
        <dd>{!! $shop->map !!}</dd>
    </dl>
</body>
</html>
