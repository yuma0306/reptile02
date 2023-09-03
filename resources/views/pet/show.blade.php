<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtype="text" name="title" id="title" value=h=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pet->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
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
    <h1>{{ $pet->title }}</h1>
    <a href="/shop/{{ $pet->shop_id }}">ショップページ</a>
    <section class="splide">
        <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('storage/' . $pet->pet_image2) }}" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('storage/' . $pet->pet_image3) }}" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('storage/' . $pet->pet_image4) }}" alt="">
                    </li>
                </ul>
        </div>
    </section>
    <dl>
        <dt>カテゴリー</dt>
        <dd>{{ $pet->category }}</dd>
    </dl>
    <dl>
        <dt>種名</dt>
        <dd>{{ $pet->species }}</dd>
    </dl>
    <dl>
        <dt>
            モルフ
        </dt>
        <dd>
            {{ $pet->morph }}
        </dd>
    </dl>
    <dl>
        <dt>
            値段
        </dt>
        <dd>
            {{ $pet->price }}
        </dd>
    </dl>
    <dl>
        <dt>
            性別
        </dt>
        <dd>
            {{ $pet->sex }}
        </dd>
    </dl>
    <dl>
        <dt>
            年齢
        </dt>
        <dd>
            {{ $pet->age }}
        </dd>
    </dl>
    <dl>
        <dt>
            大きさ
        </dt>
        <dd>
            {{ $pet->size }}
        </dd>
    </dl>
    <dl>
        <dt>
            体重
        </dt>
        <dd>
            {{ $pet->weight }}
        </dd>
    </dl>
    <dl>
        <dt>
            入荷日
        </dt>
        <dd>
            {{ $pet->arrival_day }}
        </dd>
    </dl>
    <dl>
        <dt>
            値段
        </dt>
        <dd>
            {{ $pet->price }}
        </dd>
    </dl>
    <dl>
        <dt>
            コメント
        </dt>
        <dd>
            {{ $pet->description }}
        </dd>
    </dl>
    <div>
        @if($pet->sales_flag === 0) 販売中 @endif
        @if($pet->sales_flag === 1) 売り切れ @endif
    </div>
</body>
</html>
