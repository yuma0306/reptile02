<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ショップ新規登録
        </h2>
    </x-slot>
    @php
        $breads = [
            ['label' => 'ダッシュボード', 'url' => '/owner'],
            ['label' => Auth::user()->name . 'さんのショップ一覧', 'url' => "/owner/shop"],
            ['label' => "ショップ新規登録", 'url' => ''],
        ];
    @endphp
    <x-breadcrumb :breads="$breads" />
    <div class="container m-auto py-10 px-4">
        <form action="{{ route('owner.shop.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="ショップ画像"
                    for="shop_image1"
                />
                <div class="flex items-end overflow-x-auto gap-3 whitespace-nowrap pb-3">
                    <div class="max-w-[300px]">
                        <input type="file" id="shop_image1" name="shop_image1">
                    </div>
                    <div class="max-w-[300px]">
                        <input type="file" id="shop_image2" name="shop_image2">
                    </div>
                    <div class="max-w-[300px]">
                        <input type="file" id="shop_image3" name="shop_image3">
                    </div>
                    <div class="max-w-[300px]">
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
                    value=""
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
                    value=""
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
                    value=""
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
                    value=""
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
                    value=""
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
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="都道府県"
                    for="pref"
                />
                <x-form-select name="pref" id="pref">
                    <option value="" disabled selected>選択してください</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
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
                value=""
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
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="マップ"
                    for="map"
                />
                <x-form-textarea name="map" id="map"></x-form-textarea>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="アクセス"
                    for="access_method"
                />
                <x-form-textarea name="access_method" id="access_method"></x-form-textarea>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="コメント"
                    for="description"
                />
                <x-form-textarea name="description" id="description"></x-form-textarea>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="必須"
                    text=""
                    for=""
                />
                <div class="grid gap-2">
                    <x-form-radio>
                        <input type="radio" name="public_flag" id="public_flag" value="0">
                        <span>公開</span>
                    </x-form-radio>
                    <x-form-radio>
                        <input type="radio" name="public_flag" value="1" checked>
                        <span>非公開</span>
                    </x-form-radio>
                </div>
            </x-form-group>
            <x-btn-submit
                type="submit"
                text="登録"
            />
        </form>
    </div>
</x-app-layout>
