<!DOCTYPE html>
<html>
<head>
    <title>エキゾサーチ</title>
    <script src="{{ asset('js/common.js') }}" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="">
        <x-header></x-header>
        <section class="lg:flex lg:items-center lg:justify-between lg:gap-10 container m-auto p-4 px-4 md:px-0">
            <div>
                <h1 class="mb-10 text-slate-700 text-4xl font-bold sm:text-5xl md:text-6xl">レプナビ</h1>
                <p class="mb-5 text-slate-700 text-sm md:text-base">数ある種類やモルフの中から理想の生体を見つけるのは大変です。レプナビなら種名やモルフ名で欲しい生体をすぐに見つけることができます。</p>
                <x-search>種名で検索</x-search>
            </div>
            <div class="mt-5 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mt-0">
                <img src="{{ asset('img/fv-img02.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
        </section>
        @isset($pets)
            <div class="bg-white py-6 sm:py-8 lg:py-12">
                <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                    <div class="mb-6 flex items-end justify-between gap-4">
                        <x-title2>新着入荷</x-title2>
                        <a href="/pet" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">生体一覧</a>
                    </div>
                    <div class="grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($pets as $pet)
                            @if($pet->public_flag === 0)
                                <x-card
                                    :link="'/pet/' . $pet->id"
                                    :src="$pet->pet_image1"
                                    :date="$pet->date"
                                    :title="$pet->title"
                                    :sex="$pet->sex"
                                />
                            @endif
                            @if($loop->iteration == 10)
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
                    <x-title2>カテゴリから探す</x-title2>
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
                    <x-card2
                        :link="'/pet?category=ニシキヘビ'"
                        :src="'img/img-python.jpg'"
                        :alt="'ニシキヘビ'"
                        :text="'python'"
                        :title="'ニシキヘビ'"
                    />
                    <x-card2
                        :link="'/pet?category=トカゲ'"
                        :src="'img/img-lizard.jpg'"
                        :alt="'トカゲ'"
                        :text="'lizard'"
                        :title="'トカゲ'"
                    />
                    <x-card2
                        :link="'/pet?category=リクガメ'"
                        :src="'img/img-tortoise.jpg'"
                        :alt="'リクガメ'"
                        :text="'tortoise'"
                        :title="'リクガメ'"
                    />
                    <x-card2
                        :link="'/pet?category=カエル'"
                        :src="'img/img-frog.jpg'"
                        :alt="'カエル'"
                        :text="'frog'"
                        :title="'カエル'"
                    />
                </div>
            </div>
        </div>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-6 flex items-end justify-between gap-4">
                    <x-title2>ショップを探す</x-title2>
                    <div>
                        <a href="/shop" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">ショップ一覧</a>
                    </div>
                </div>
                <div class="mb-8 grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4">
                    <x-card2
                        :link="'/pet?category=東京'"
                        :src="'img/img-tokyo.jpg'"
                        :alt="'東京'"
                        :text="'tokyo'"
                        :title="'東京'"
                    />
                    <x-card2
                        :link="'/pet?category=神奈川'"
                        :src="'img/img-kanagawa.jpg'"
                        :alt="'神奈川'"
                        :text="'kanagawa'"
                        :title="'神奈川'"
                    />
                    <x-card2
                        :link="'/pet?category=大阪'"
                        :src="'img/img-osaka.jpg'"
                        :alt="'大阪'"
                        :text="'osaka'"
                        :title="'大阪'"
                    />
                    <x-card2
                        :link="'/pet?category=愛知'"
                        :src="'img/img-aichi.jpg'"
                        :alt="'愛知'"
                        :text="'aichi'"
                        :title="'愛知'"
                    />
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
                        <x-search>ショップ名で検索</x-search>
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
    </div>
</body>
</html>


