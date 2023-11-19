<!DOCTYPE html>
<html lang="ja">
<x-head></x-head>
<body>
    <div>
        <x-header></x-header>
        <main>
            <x-heading-lv1>
                @if(isset($pref))
                    {{$pref}}のショップ一覧
                @else
                    ショップ一覧
                @endif
            </x-heading-lv1>
            <section class="container m-auto py-10 px-4">
                <div class="flex flex-wrap items-center gap-5 mb-10">
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
                    <x-search
                        :action="'/shop/'"
                        :placeholder="'ショップ名で検索'"
                    />
                </div>
                @if($shops->isEmpty())
                    @if(isset($pref))
                    <p>{{$pref}}のショップはまだありません</p>
                    @endif
                @else
                    @foreach($shops as $shop)
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                            @if($shop->public_flag === 0)
                                <x-card04
                                    :link="'/shop/' . $shop->id"
                                    :src="$shop->shop_image1"
                                    :title="$shop->shop_name"
                                />
                            @endif
                        </div>
                    @endforeach
                @endif
            </section>
        </main>
    </div>
</body>
</html>
