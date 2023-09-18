<!DOCTYPE html>
<html>
<head>
    <title>エキゾサーチ</title>
    <script src="{{ asset('js/common.js') }}" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <header class="mb-8 flex items-center justify-between py-4 md:mb-12 md:py-8 xl:mb-16">
                <a href="/" class="inline-flex items-center gap-2.5 text-2xl font-bold text-black md:text-3xl" aria-label="logo">
                    <svg width="95" height="94" viewBox="0 0 95 94" class="h-auto w-6 text-indigo-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M96 0V47L48 94H0V47L48 0H96Z">
                    </svg>
                    レプナビ
                </a>
                <div class="-ml-8 hidden flex-col gap-2.5 sm:flex-row sm:justify-center lg:flex lg:justify-start">
                    <a href="/pet" class="inline-block rounded-lg px-4 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:text-indigo-500 focus-visible:ring active:text-indigo-600 md:text-base">生体</a>
                    <a href="/shop" class="inline-block rounded-lg px-4 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:text-indigo-500 focus-visible:ring active:text-indigo-600 md:text-base">ショップ</a>
                    <a href="/login" class="inline-block rounded-lg px-4 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:text-indigo-500 focus-visible:ring active:text-indigo-600 md:text-base">ログイン</a>
                    <a href="/register" class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">登録</a>
                </div>
                <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-gray-200 px-2.5 py-2 text-sm font-semibold text-gray-500 ring-indigo-300 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd">
                    </svg>
                    Menu
                </button>
            </header>
            <section class="flex flex-col justify-between gap-6 sm:gap-10 md:gap-16 lg:flex-row">
                <div class="flex flex-col items-center justify-center sm:text-center lg:items-start lg:py-12 lg:text-left xl:w-5/12 xl:py-24">
                    <h1 class="mb-8 text-4xl font-bold text-black sm:text-5xl md:mb-12 md:text-6xl">レプナビ</h1>
                    <p class="mb-8 leading-relaxed text-gray-500 md:mb-12 lg:w-4/5 xl:text-lg">数ある種類やモルフの中から理想の生体を見つけるのは大変です。レプナビなら種名やモルフ名で欲しい生体をすぐに見つけることができます。</p>
                    <form action="/pet" method="get" class="flex w-full gap-2 md:max-w-md">
                        <input type="text" name="keyword" id="keyword" placeholder="ショップ名で検索" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                        <button type="submit" class="inline-block rounded-lg border px-4 py-2 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base bg-indigo-500">検索</button>
                    </form>
                </div>
                <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-auto xl:w-5/12">
                    <img src="{{ asset('img/fv-img02.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                </div>
            </section>
        </div>
    </div>
    @isset($pets)
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-6 flex items-end justify-between gap-4">
                    <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl">新着入荷</h2>
                    <a href="/pet" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">生体一覧</a>
                </div>
                <div class="grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach ($pets as $pet)
                        @if($pet->public_flag === 0)
                            <div>
                                <a href="/pet/{{ $pet->id }}" class="group relative mb-2 block h-80 overflow-hidden rounded-lg bg-gray-100 lg:mb-3">
                                    <img src="{{ asset('storage/' . $pet->pet_image1) }}" loading="lazy" alt="" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                                    <span class="absolute left-0 top-0 rounded-br-lg bg-red-500 px-3 py-1.5 text-sm uppercase tracking-wider text-white">2023-09-02</span>
                                </a>
                                <div>
                                    <div class="flex items-end gap-2">
                                        <span class="font-bold text-gray-800 lg:text-lg">{{ $pet->title }}</span>
                                    </div>
                                    <p class="hover:gray-800 mb-1 text-gray-500 transition duration-100 lg:text-lg">{{ $pet->sex }}</p>
                                </div>
                            </div>
                        @endif
                        @if($loop->iteration == 4)
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endisset
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-6 flex items-end justify-between gap-4">
                <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl">カテゴリから探す</h2>
                <select class="js-select-redirect inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                    <option value="" selected disabled>カテゴリ一覧</option>
                    <option value="/pet?category=ニシキヘビ">ニシキヘビ</option>
                    <option value="/pet?category=ナミヘビ">ナミヘビ</option>
                    <option value="/pet?category=トカゲ">トカゲ</option>
                    <option value="/pet?category=ヤモリ">ヤモリ</option>
                    <option value="/pet?category=リクガメ">リクガメ</option>
                    <option value="/pet?category=ミズガメ">ミズガメ</option>
                    <option value="/pet?category=カエル">カエル</option>
                    <option value="/pet?category=有尾類">有尾類</option>
                    <option value="/pet?category=その他">その他</option>
                </select>
            </div>
            <div class="grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4">
                <div>
                    <a href="/pet?category=ニシキヘビ" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="{{ asset('img/img-python.jpg') }}" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                        <span class="text-gray-500">python</span>
                        <span class="text-lg font-bold text-gray-800 lg:text-xl">ニシキヘビ</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/pet?category=トカゲ" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="{{ asset('img/img-lizard.jpg') }}" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                        <span class="text-gray-500">lizard</span>
                        <span class="text-lg font-bold text-gray-800 lg:text-xl">トカゲ</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/pet?category=リクガメ" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="{{ asset('img/img-tortoise.jpg') }}" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                        <span class="text-gray-500">tortoise</span>
                        <span class="text-lg font-bold text-gray-800 lg:text-xl">リクガメ</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/pet?category=カエル" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="{{ asset('img/img-frog.jpg') }}" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                        <span class="text-gray-500">frog</span>
                        <span class="text-lg font-bold text-gray-800 lg:text-xl">カエル</span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-6 flex items-end justify-between gap-4">
                <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl">ショップを探す</h2>
                <div>
                    <a href="/shop" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">ショップ一覧</a>
                </div>
            </div>
            <div class="mb-8 grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4">
                <div>
                    <a href="/shop?pref=東京" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="{{ asset('img/img-tokyo.jpg') }}" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                        <span class="text-gray-500">tokyo</span>
                        <span class="text-lg font-bold text-gray-800 lg:text-xl">東京</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/shop?pref=神奈川" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="{{ asset('img/img-kanagawa.jpg') }}" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                        <span class="text-gray-500">kanagawa</span>
                        <span class="text-lg font-bold text-gray-800 lg:text-xl">神奈川</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/shop?pref=大阪" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="{{ asset('img/img-osaka.jpg') }}" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                        <span class="text-gray-500">osaka</span>
                        <span class="text-lg font-bold text-gray-800 lg:text-xl">大阪</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/shop?pref=愛知" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="{{ asset('img/img-aichi.jpg') }}" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
                    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                        <span class="text-gray-500">aichi</span>
                        <span class="text-lg font-bold text-gray-800 lg:text-xl">愛知</span>
                    </div>
                    </a>
                </div>
            </div>
            <div class="flex justify-center w-full gap-20">
                <div>
                    <select class="js-select-redirect inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                        <option value="" selected disabled>都道府県から探す</option>
                        <option value="/shop?pref=北海道">北海道</option>
                        <option value="/shop?pref=青森県">青森県</option>
                        <option value="/shop?pref=岩手県">岩手県</option>
                        <option value="/shop?pref=宮城県">宮城県</option>
                        <option value="/shop?pref=秋田県">秋田県</option>
                        <option value="/shop?pref=山形県">山形県</option>
                        <option value="/shop?pref=福島県">福島県</option>
                        <option value="/shop?pref=茨城県">茨城県</option>
                        <option value="/shop?pref=栃木県">栃木県</option>
                        <option value="/shop?pref=群馬県">群馬県</option>
                        <option value="/shop?pref=埼玉県">埼玉県</option>
                        <option value="/shop?pref=千葉県">千葉県</option>
                        <option value="/shop?pref=東京都">東京都</option>
                        <option value="/shop?pref=神奈川県">神奈川県</option>
                        <option value="/shop?pref=新潟県">新潟県</option>
                        <option value="/shop?pref=富山県">富山県</option>
                        <option value="/shop?pref=石川県">石川県</option>
                        <option value="/shop?pref=福井県">福井県</option>
                        <option value="/shop?pref=山梨県">山梨県</option>
                        <option value="/shop?pref=長野県">長野県</option>
                        <option value="/shop?pref=岐阜県">岐阜県</option>
                        <option value="/shop?pref=静岡県">静岡県</option>
                        <option value="/shop?pref=愛知県">愛知県</option>
                        <option value="/shop?pref=三重県">三重県</option>
                        <option value="/shop?pref=滋賀県">滋賀県</option>
                        <option value="/shop?pref=京都府">京都府</option>
                        <option value="/shop?pref=大阪府">大阪府</option>
                        <option value="/shop?pref=兵庫県">兵庫県</option>
                        <option value="/shop?pref=奈良県">奈良県</option>
                        <option value="/shop?pref=和歌山県">和歌山県</option>
                        <option value="/shop?pref=鳥取県">鳥取県</option>
                        <option value="/shop?pref=島根県">島根県</option>
                        <option value="/shop?pref=岡山県">岡山県</option>
                        <option value="/shop?pref=広島県">広島県</option>
                        <option value="/shop?pref=山口県">山口県</option>
                        <option value="/shop?pref=徳島県">徳島県</option>
                        <option value="/shop?pref=香川県">香川県</option>
                        <option value="/shop?pref=愛媛県">愛媛県</option>
                        <option value="/shop?pref=高知県">高知県</option>
                        <option value="/shop?pref=福岡県">福岡県</option>
                        <option value="/shop?pref=佐賀県">佐賀県</option>
                        <option value="/shop?pref=長崎県">長崎県</option>
                        <option value="/shop?pref=熊本県">熊本県</option>
                        <option value="/shop?pref=大分県">大分県</option>
                        <option value="/shop?pref=宮崎県">宮崎県</option>
                        <option value="/shop?pref=鹿児島県">鹿児島県</option>
                        <option value="/shop?pref=沖縄県">沖縄県</option>
                    </select>
                </div>
                <div>
                    <form action="/shop" method="get" class="flex w-full gap-2 md:max-w-md">
                        <input type="text" name="keyword" id="keyword" placeholder="ショップ名で検索" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                        <button type="submit" class="inline-block rounded-lg border px-4 py-2 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base bg-indigo-500">検索</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-4 sm:pt-10 lg:pt-12">
        <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="flex flex-col items-center border-t pt-6">
                <nav class="mb-4 flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start md:gap-6">
                    <a href="/pet" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">生体</a>
                    <a href="/shop" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">ショップ</a>
                    <a href="/login" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">ログイン</a>
                    <a href="/register" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">登録</a>
                </nav>
            </div>
            <div class="py-8 text-center text-sm text-gray-400">© 2023 - レプナビ All rights reserved</div>
        </footer>
    </div>
</body>
</html>


