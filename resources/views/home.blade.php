<!DOCTYPE html>
<html>
<x-head></x-head>
<body>
    <div>
        <x-header></x-header>
        <main>
            <section class="lg:flex lg:items-center lg:justify-between lg:gap-10 container m-auto py-10 px-4">
                <div>
                    <h1 class="mb-8 sm:mb-10 text-slate-700 font-bold text-4xl sm:text-5xl md:text-6xl">レプナビ</h1>
                    <p class="mb-5 text-slate-700 text-sm md:text-base">
                        数ある種類やモルフの中から理想の生体を見つけるのは大変です。レプナビなら種名やモルフ名で欲しい生体をすぐに見つけることができます。
                    </p>
                    <x-search
                        :action="'/pet/'"
                        :placeholder="'種名で検索'"
                    />
                </div>
                <div class="mt-5 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mt-0">
                    <img src="{{ asset('img/fv-img02.jpg') }}" alt="" class="w-full object-cover object-center">
                </div>
            </section>
            @isset($pets)
                <section class="container m-auto py-10 px-4">
                    <x-heading-lv2>新着入荷</x-heading-lv2>
                    <div class="flex overflow-x-auto gap-5 mb-5 pb-5">
                        @foreach ($pets as $pet)
                            @if($pet->public_flag === 0)
                                <x-card03
                                    :link="'/pet/' . $pet->id"
                                    :src="$pet->pet_image1"
                                    :date="$pet->arrival_day"
                                    :title="$pet->title"
                                    :sex="$pet->sex"
                                />
                            @endif
                            @if($loop->iteration == 6)
                                @break
                            @endif
                        @endforeach
                    </div>
                    <div class="flex justify-center">
                        <x-btn01
                            :link="'/pet/'"
                            :text="'生体一覧'"
                        />
                    </div>
                </section>
            @endisset
            <section class="container m-auto py-10 px-4">
                <x-heading-lv2>カテゴリから探す</x-heading-lv2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-5 mb-10">
                    <x-card02
                        :link="'/pet?category=ニシキヘビ'"
                        :src="'img/img-python.jpg'"
                        :alt="'ニシキヘビ'"
                        :text="'python'"
                        :title="'ニシキヘビ'"
                    />
                    <x-card02
                        :link="'/pet?category=ナミヘビ'"
                        :src="'img/img-colubrid.jpg'"
                        :alt="'ナミヘビ'"
                        :text="'colubrid'"
                        :title="'ナミヘビ'"
                    />
                    <x-card02
                        :link="'/pet?category=トカゲ'"
                        :src="'img/img-lizard.jpg'"
                        :alt="'トカゲ'"
                        :text="'lizard'"
                        :title="'トカゲ'"
                    />
                    <x-card02
                        :link="'/pet?category=ヤモリ'"
                        :src="'img/img-gecko.jpg'"
                        :alt="'ヤモリ'"
                        :text="'gecko'"
                        :title="'ヤモリ'"
                    />
                    <x-card02
                        :link="'/pet?category=リクガメ'"
                        :src="'img/img-tortoise.jpg'"
                        :alt="'リクガメ'"
                        :text="'tortoise'"
                        :title="'リクガメ'"
                    />
                    <x-card02
                        :link="'/pet?category=ミズガメ'"
                        :src="'img/img-turtle.jpg'"
                        :alt="'ミズガメ'"
                        :text="'turtle'"
                        :title="'ミズガメ'"
                    />
                    <x-card02
                        :link="'/pet?category=カエル'"
                        :src="'img/img-frog.jpg'"
                        :alt="'カエル'"
                        :text="'frog'"
                        :title="'カエル'"
                    />
                    <x-card02
                        :link="'/pet?category=有尾類'"
                        :src="'img/img-caudata.jpg'"
                        :alt="'有尾類'"
                        :text="'caudata'"
                        :title="'有尾類'"
                    />
                    <x-card02
                        :link="'/pet?category=その他'"
                        :src="'img/img-other.jpg'"
                        :alt="'その他'"
                        :text="'other'"
                        :title="'その他'"
                    />
                </div>
                <div class="flex justify-center">
                    <x-btn01
                        :link="'/pet/'"
                        :text="'生体一覧'"
                    />
                </div>
            </section>
            <section class="container m-auto py-10 px-4">
                <x-heading-lv2>ショップを探す</x-heading-lv2>
                <div class="mb-5">
                    <x-search
                        :action="'/shop/'"
                        :placeholder="'ショップ名で検索'"
                    />
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-5 mb-10">
                    <x-card02
                        :link="'/shop?pref=東京'"
                        :src="'img/img-tokyo.jpg'"
                        :alt="'東京'"
                        :text="'tokyo'"
                        :title="'東京'"
                    />
                    <x-card02
                        :link="'/shop?pref=神奈川'"
                        :src="'img/img-kanagawa.jpg'"
                        :alt="'神奈川'"
                        :text="'kanagawa'"
                        :title="'神奈川'"
                    />
                    <x-card02
                        :link="'/shop?pref=大阪'"
                        :src="'img/img-osaka.jpg'"
                        :alt="'大阪'"
                        :text="'osaka'"
                        :title="'大阪'"
                    />
                    <x-card02
                        :link="'/shop?pref=京都'"
                        :src="'img/img-kyoto.jpg'"
                        :alt="'京都'"
                        :text="'kyoto'"
                        :title="'京都'"
                    />
                    <x-card02
                        :link="'/shop?pref=愛知'"
                        :src="'img/img-aichi.jpg'"
                        :alt="'愛知'"
                        :text="'aichi'"
                        :title="'愛知'"
                    />
                    <x-card02
                        :link="'/shop?pref=福岡'"
                        :src="'img/img-fukuoka.jpg'"
                        :alt="'福岡'"
                        :text="'fukuoka'"
                        :title="'福岡'"
                    />
                </div>
                <div class="flex justify-center flex-wrap gap-5">
                    <x-btn-select>
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
                    </x-btn-select>
                    <x-btn01
                        :link="'/shop/'"
                        :text="'ショップ一覧'"
                    />
                </div>
            </section>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>
