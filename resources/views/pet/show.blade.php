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
            const splide = new Splide( '.splide', {
                pagination: false,
                type: 'fade',
                type: 'loop',
                drag: true,
            });
            splide.mount();
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
                    <section class="splide relative m-auto max-w-2xl w-full aspect-video mb-10">
                        <div class="splide__track h-full">
                            <ul class="splide__list">
                                @if($pet->pet_image1)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover rounded" src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image2)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover rounded"  src="{{ asset('storage/' . $pet->pet_image2) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image3)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover rounded"  src="{{ asset('storage/' . $pet->pet_image3) }}" alt="">
                                    </li>
                                @endif
                                @if($pet->pet_image4)
                                    <li class="splide__slide">
                                        <img class="w-full h-full object-cover rounded"  src="{{ asset('storage/' . $pet->pet_image4) }}" alt="">
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="splide__arrows flex justify-between absolute top-1/2 left-0 translate-y-[-50%] w-full h-fit">
                            <button class="splide__arrow splide__arrow--prev translate-x-[-16px]">
                                <svg class="h-10 w-10 text-teal-600 bg-white rounded-[50%]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 8 8 12 12 16" />
                                    <line x1="16" y1="12" x2="8" y2="12" />
                                </svg>
                            </button>
                            <button class="splide__arrow splide__arrow--next translate-x-[16px]">
                                <svg class="h-10 w-10 text-teal-600 bg-white rounded-[50%]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 16 16 12 12 8" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </button>
                        </div>
                        @if($pet->sex === 'オス')
                            <span class="absolute top-0 left-0 py-2 px-3 bg-indigo-300 text-white font-bold rounded-br-lg">{{$pet->sex}}</span>
                        @elseif($pet->sex === 'メス')
                            <span class="absolute top-0 left-0 py-2 px-3 bg-red-300 text-white font-bold rounded-br-lg">{{$pet->sex}}</span>
                        @endif
                    </section>
                @endif
                <div class="grid gap-5 mb-10">
                    <x-list01
                        term="販売状況"
                        :desc="$salesText"
                        emphasis=true
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
                    <x-list01
                        term="コメント"
                        :desc="$pet->description"
                    />
                </div>
                <div class="grid place-content-center">
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
