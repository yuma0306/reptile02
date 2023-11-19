<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ショップ「{{ $shop->shop_name }}」の店舗情報
        </h2>
    </x-slot>
    @php
        $breads = [
            ['label' => 'ダッシュボード', 'url' => '/owner'],
            ['label' => Auth::user()->name . 'さんのショップ一覧', 'url' => "/owner/shop"],
            ['label' => "ショップ「{$shop->shop_name}」の店舗情報", 'url' => ''],
        ];
    @endphp
    <x-breadcrumb :breads="$breads" />
    <div class="container m-auto pt-2 py-10 px-4">
        <form class="mb-10 bg-white p-5" action="{{ route('owner.shop.update', ['id' => $shop->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="店舗画像"
                    for="shop_image1"
                />
                <div class="flex items-end overflow-x-auto gap-3 whitespace-nowrap pb-3">
                    <div class="max-w-[300px]">
                        <img class="mb-2 object-cover aspect-video" src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
                        <input type="file" id="shop_image1" name="shop_image1">
                    </div>
                    <div class="max-w-[300px]">
                        <img class="mb-2 object-cover aspect-video"  src="{{ asset('storage/' . $shop->shop_image2) }}" alt="">
                        <input type="file" id="shop_image2" name="shop_image2">
                    </div>
                    <div class="max-w-[300px]">
                        <img class="mb-2 object-cover aspect-video"  src="{{ asset('storage/' . $shop->shop_image3) }}" alt="">
                        <input type="file" id="shop_image3" name="shop_image3">
                    </div>
                    <div class="max-w-[300px]">
                        <img class="mb-2 object-cover aspect-video" src="{{ asset('storage/' . $shop->shop_image4) }}" alt="">
                        <input type="file" id="shop_image4" name="shop_image4">
                    </div>
                </div>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="必須"
                    text="ショップ名"
                    for="shop_name"
                />
                <x-form-input
                    type="text"
                    name="shop_name"
                    id="shop_name"
                    value="{{ $shop->shop_name }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="公式サイト"
                    for="website"
                />
                <x-form-input
                    type="text"
                    name="website"
                    id="website"
                    value="{{ $shop->website }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="営業時間"
                    for="business_hours"
                />
                <x-form-input
                    type="text"
                    name="business_hours"
                    id="business_hours"
                    value="{{ $shop->business_hours }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="定休日"
                    for="regular_holiday"
                />
                <x-form-input
                    type="text"
                    name="regular_holiday"
                    id="regular_holiday"
                    value="{{ $shop->regular_holiday }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="電話番号"
                    for="phone"
                />
                <x-form-input
                    type="text"
                    name="phone"
                    id="phone"
                    value="{{ $shop->phone }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="動物取扱責任者"
                    for="animal_handler"
                />
                <x-form-input
                    type="text"
                    name="animal_handler"
                    id="animal_handler"
                    value="{{ $shop->animal_handler }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="都道府県"
                    for="pref"
                />
                <x-form-select name="pref" id="pref">
                    <option value="北海道" @if($shop->pref=== '北海道') selected @endif>北海道</option>
                    <option value="青森県" @if($shop->pref=== '青森県') selected @endif>青森県</option>
                    <option value="岩手県" @if($shop->pref=== '岩手県') selected @endif>岩手県</option>
                    <option value="宮城県" @if($shop->pref=== '宮城県') selected @endif>宮城県</option>
                    <option value="秋田県" @if($shop->pref=== '秋田県') selected @endif>秋田県</option>
                    <option value="山形県" @if($shop->pref=== '山形県') selected @endif>山形県</option>
                    <option value="福島県" @if($shop->pref=== '福島県') selected @endif>福島県</option>
                    <option value="茨城県" @if($shop->pref=== '茨城県') selected @endif>茨城県</option>
                    <option value="栃木県" @if($shop->pref=== '栃木県') selected @endif>栃木県</option>
                    <option value="群馬県" @if($shop->pref=== '群馬県') selected @endif>群馬県</option>
                    <option value="埼玉県" @if($shop->pref=== '埼玉県') selected @endif>埼玉県</option>
                    <option value="千葉県" @if($shop->pref=== '千葉県') selected @endif>千葉県</option>
                    <option value="東京都" @if($shop->pref=== '東京都') selected @endif>東京都</option>
                    <option value="神奈川県" @if($shop->pref=== '神奈川県') selected @endif>神奈川県</option>
                    <option value="新潟県" @if($shop->pref=== '新潟県') selected @endif>新潟県</option>
                    <option value="富山県" @if($shop->pref=== '富山県') selected @endif>富山県</option>
                    <option value="石川県" @if($shop->pref=== '石川県') selected @endif>石川県</option>
                    <option value="福井県
                    " @if($shop->pref=== '福井県') selected @endif>福井県</option>
                    <option value="山梨県" @if($shop->pref=== '山梨県') selected @endif>山梨県</option>
                    <option value="長野県" @if($shop->pref=== '長野県') selected @endif>長野県</option>
                    <option value="岐阜県" @if($shop->pref=== '岐阜県') selected @endif>岐阜県</option>
                    <option value="静岡県" @if($shop->pref=== '静岡県') selected @endif>静岡県</option>
                    <option value="愛知県" @if($shop->pref=== '愛知県') selected @endif>愛知県</option>
                    <option value="三重県" @if($shop->pref=== '三重県') selected @endif>三重県</option>
                    <option value="滋賀県" @if($shop->pref=== '滋賀県') selected @endif>滋賀県</option>
                    <option value="京都府" @if($shop->pref=== '京都府') selected @endif>京都府</option>
                    <option value="大阪府" @if($shop->pref=== '大阪府') selected @endif>大阪府</option>
                    <option value="兵庫県" @if($shop->pref=== '兵庫県') selected @endif>兵庫県</option>
                    <option value="奈良県" @if($shop->pref=== '奈良県') selected @endif>奈良県</option>
                    <option value="和歌山県" @if($shop->pref=== '和歌山県') selected @endif>和歌山県</option>
                    <option value="鳥取県" @if($shop->pref=== '鳥取県') selected @endif>鳥取県</option>
                    <option value="島根県" @if($shop->pref=== '島根県') selected @endif>島根県</option>
                    <option value="岡山県" @if($shop->pref=== '岡山県') selected @endif>岡山県</option>
                    <option value="広島県" @if($shop->pref=== '広島県') selected @endif>広島県</option>
                    <option value="山口県" @if($shop->pref=== '山口県') selected @endif>山口県</option>
                    <option value="徳島県" @if($shop->pref=== '徳島県') selected @endif>徳島県</option>
                    <option value="香川県" @if($shop->pref=== '香川県') selected @endif>香川県</option>
                    <option value="愛媛県" @if($shop->pref=== '愛媛県') selected @endif>愛媛県</option>
                    <option value="高知県" @if($shop->pref=== '高知県') selected @endif>高知県</option>
                    <option value="福岡県" @if($shop->pref=== '福岡県') selected @endif>福岡県</option>
                    <option value="佐賀県" @if($shop->pref=== '佐賀県') selected @endif>佐賀県</option>
                    <option value="長崎県" @if($shop->pref=== '長崎県') selected @endif>長崎県</option>
                    <option value="熊本県" @if($shop->pref=== '熊本県') selected @endif>熊本県</option>
                    <option value="大分県" @if($shop->pref=== '大分県') selected @endif>大分県</option>
                    <option value="宮崎県" @if($shop->pref=== '宮崎県') selected @endif>宮崎県</option>
                    <option value="鹿児島県" @if($shop->pref=== '鹿児島県') selected @endif>鹿児島県</option>
                    <option value="沖縄県" @if($shop->pref=== '沖縄県') selected @endif>沖縄県</option>
                </x-form-select>
            </x-form-group>
            <x-form-group>
                <x-form-label
                label="任意"
                text="以降住所"
                for="address"
                />
                <x-form-input
                type="text"
                name="address"
                id="address"
                value="{{ $shop->address }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="郵便番号"
                    for="postal_code"
                />
                <x-form-input
                    type="text"
                    name="postal_code"
                    id="postal_code"
                    value="{{ $shop->postal_code }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="マップ"
                    for="map"
                />
                <x-form-textarea name="map" id="map">{{ $shop->map }}</x-form-textarea>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="アクセス"
                    for="access_method"
                />
                <x-form-textarea name="access_method" id="access_method">{{ $shop->access_method }}</x-form-textarea>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="コメント"
                    for="description"
                />
                <x-form-textarea name="description" id="description">{{ $shop->description }}</x-form-textarea>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="必須"
                    text=""
                    for=""
                />
                <div class="grid gap-2">
                    <x-form-radio>
                        <input type="radio" name="public_flag" id="public_flag" value="0" @if($shop->public_flag === 0) checked @endif>
                        <span>公開</span>
                    </x-form-radio>
                    <x-form-radio>
                        <input type="radio" name="public_flag" value="1" @if($shop->public_flag === 1) checked @endif>
                        <span>非公開</span>
                    </x-form-radio>
                </div>
            </x-form-group>
            <x-btn-submit
                type="submit"
                text="更新する"
            />
        </form>
        <form class="flex flex-col items-end" action="{{ route('owner.shop.destroy', ['id' => $shop->id]) }}" method="post">
            @csrf
            @method('delete')
            <x-btn-delete
                type="submit"
                text="ショップを削除"
            />
        </form>
    </div>
</x-app-layout>
