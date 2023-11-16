@php
    $pet->sales_flag === 0 ? $salesText = '販売中' : $salesText = '売約済';
@endphp
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pet->title }}</title>
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
            <x-heading-lv1>{{ $pet->title }}</x-heading-lv1>
            <section class="container m-auto py-10 px-4">
                @if($pet->pet_image1 || $pet->pet_image2 || $pet->pet_image3 ||  $pet->pet_image4)
                    <div class="splide relative m-auto mb-2 max-w-2xl w-full aspect-video" id="js-main-splide">
                        <div class="splide__track h-full">
                            <ul class="splide__list">
                                @if($pet->pet_image1)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image2)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $pet->pet_image2) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image3)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $pet->pet_image3) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image4)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $pet->pet_image4) }}" alt="">
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <x-btn-slider></x-btn-slider>
                        @if($pet->sex === 'オス')
                            <span class="absolute top-0 left-0 py-2 px-3 bg-indigo-300 text-white font-bold rounded-br-lg">{{$pet->sex}}</span>
                        @elseif($pet->sex === 'メス')
                            <span class="absolute top-0 left-0 py-2 px-3 bg-red-300 text-white font-bold rounded-br-lg">{{$pet->sex}}</span>
                        @elseif($pet->sex === '不明')
                            <span class="absolute top-0 left-0 py-2 px-3 bg-gray-400 text-white font-bold rounded-br-lg">{{$pet->sex}}</span>
                        @endif
                    </div>
                    <div class="splide relative m-auto max-w-2xl w-full aspect-video h-[15vw] max-h-[100px]" id="js-pager-splide">
                        <div class="splide__track h-full mr-[-8px]">
                            <ul class="splide__list gap-2">
                                @if($pet->pet_image1)
                                    <li class="splide__slide max-w-[calc(25%-8px)]">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image2)
                                    <li class="splide__slide max-w-[calc(25%-8px)]">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $pet->pet_image2) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image3)
                                    <li class="splide__slide max-w-[calc(25%-8px)]">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $pet->pet_image3) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image4)
                                    <li class="splide__slide max-w-[calc(25%-8px)]">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $pet->pet_image4) }}" alt="">
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                @endif
            </section>
            <section class="container m-auto py-10 px-4">
                <x-heading-lv2>ショップからのコメント</x-heading-lv2>
                <p class="mb-10">{{ $pet->description }}</p>
                <div class="flex justify-center items-center">
                    <x-btn01
                        link="/shop/{{ $pet->shop_id }}"
                        text="ショップページへ"
                    />
                </div>
            </section>
            <section class="container m-auto py-10 px-4">
                <x-heading-lv2>生体詳細</x-heading-lv2>
                <div class="grid gap-5 mb-10">
                    <x-list01
                        term="販売状況"
                        :desc="$salesText"
                    />
                    <x-list01
                        term="カテゴリー"
                        :desc="$pet->category"
                    />
                    <x-list01
                        term="種名"
                        :desc="$pet->species"
                    />
                    <x-list01
                        term="モルフ"
                        :desc="$pet->morph"
                    />
                    <x-list01
                        term="値段"
                        :desc="$pet->price"
                    />
                    <x-list01
                        term="性別"
                        :desc="$pet->sex"
                    />
                    <x-list01
                        term="年齢"
                        :desc="$pet->age"
                    />
                    <x-list01
                        term="大きさ"
                        :desc="$pet->size"
                    />
                    <x-list01
                        term="体重"
                        :desc="$pet->weight"
                    />
                    <x-list01
                        term="入荷日"
                        :desc="$pet->arrival_day"
                    />
                </div>
                <div class="flex justify-center items-center">
                    <x-btn01
                        link="/shop/{{ $pet->shop_id }}"
                        text="ショップページへ"
                    />
                </div>
            </section>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>
