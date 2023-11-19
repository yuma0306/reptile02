<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $shop->shop_name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide-core.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            const main = new Splide( '#js-main-splide', {
                pagination: false,
                type: 'loop',
                drag: true,
                pagination: false,
            });
            const thumbnails = new Splide( '#js-pager-splide', {
                rewind      : true,
                pagination  : false,
                cover       : true,
                isNavigation: true,
                arrows    : false,
            });
            main.sync( thumbnails );
            main.mount();
            thumbnails.mount();
        });
    </script>
</head>
<body>
    <div>
        <x-header></x-header>
        <main>
            <x-heading-lv1>{{ $shop->shop_name }}</x-heading-lv1>
            <section class="container m-auto py-10 px-4">
                @if($shop->shop_image1 || $shop->shop_image2 || $shop->shop_image3 ||  $shop->shop_image4)
                    <div class="splide relative m-auto mb-2 max-w-2xl w-full aspect-video" id="js-main-splide">
                        <div class="splide__track h-full">
                            <ul class="splide__list">
                                @if($shop->shop_image1)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
                                    </li>
                                @endif
                                @if($shop->shop_image2)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $shop->shop_image2) }}" alt="">
                                    </li>
                                @endif
                                @if($shop->shop_image3)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $shop->shop_image3) }}" alt="">
                                    </li>
                                @endif
                                @if($shop->shop_image4)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $shop->shop_image4) }}" alt="">
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <x-btn-slider></x-btn-slider>
                    </div>
                    <div class="splide relative m-auto max-w-2xl w-full aspect-video h-[15vw] max-h-[100px]" id="js-pager-splide">
                        <div class="splide__track h-full mr-[-8px]">
                            <ul class="splide__list gap-2">
                                @if($shop->shop_image1)
                                    <li class="splide__slide max-w-[calc(25%-8px)]">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
                                    </li>
                                @endif
                                @if($shop->shop_image2)
                                    <li class="splide__slide max-w-[calc(25%-8px)]">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $shop->shop_image2) }}" alt="">
                                    </li>
                                @endif
                                @if($shop->shop_image3)
                                    <li class="splide__slide max-w-[calc(25%-8px)]">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $shop->shop_image3) }}" alt="">
                                    </li>
                                @endif
                                @if($shop->shop_image4)
                                    <li class="splide__slide max-w-[calc(25%-8px)]">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $shop->shop_image4) }}" alt="">
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                @endif
            </section>
            @if($shop->description)
                <section class="container m-auto py-10 px-4">
                    <x-heading-lv2>ショップ紹介</x-heading-lv2>
                    <p class="mb-10">{{ $shop->description }}</p>
                    <div class="flex justify-center items-center">
                        <x-btn01
                            link="/pet/?shop={{ $shop->id }}"
                            text="このショップの生体一覧"
                        />
                    </div>
                </section>
            @endif
            <section class="container m-auto py-10 px-4">
                <x-heading-lv2>ショップ詳細</x-heading-lv2>
                <div class="grid gap-5 mb-10">
                    @if($shop->website)
                        <x-list01
                            term="公式サイト"
                            :desc="$shop->website"
                        />
                    @endif
                    @if($shop->business_hours)
                        <x-list01
                            term="営業時間"
                            :desc="$shop->business_hours"
                        />
                    @endif
                    @if($shop->regular_holiday)
                        <x-list01
                            term="定休日"
                            :desc="$shop->regular_holiday"
                        />
                    @endif
                    @if($shop->phone)
                        <x-list01
                            term="電話番号"
                            :desc="$shop->phone"
                        />
                    @endif
                    @if($shop->animal_handler)
                        <x-list01
                            term="動物取扱責任者"
                            :desc="$shop->animal_handler"
                        />
                    @endif
                    @if($shop->pref)
                        <x-list01
                            term="都道府県"
                            :desc="$shop->pref"
                        />
                    @endif
                    @if($shop->postal_code)
                        <x-list01
                            term="郵便番号"
                            :desc="$shop->postal_code"
                        />
                    @endif
                    @if($shop->address)
                        <x-list01
                            term="住所"
                            :desc="$shop->address"
                        />
                    @endif
                    @if($shop->access_method)
                        <x-list01
                            term="アクセス"
                            :desc="$shop->access_method"
                        />
                    @endif
                    @if($shop->description)
                        <x-list01
                            term="店舗紹介"
                            :desc="$shop->description"
                        />
                    @endif
                    @if($shop->map)
                        <div class="w-full aspect-video overflow-hidden mb-5 [&>iframe]:w-full [&>iframe]:h-full">
                            {!! $shop->map !!}
                        </div>
                    @endif
                </div>
                <div class="flex justify-center items-center">
                    <x-btn01
                        link="/pet/?shop={{ $shop->id }}"
                        text="このショップの生体一覧"
                    />
                </div>
            </section>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>
