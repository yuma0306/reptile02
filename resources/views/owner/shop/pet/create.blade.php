<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            生体新規登録
        </h2>
    </x-slot>
    @php
        $breads = [
            ['label' => 'ダッシュボード', 'url' => '/owner'],
            ['label' => Auth::user()->name . 'さんのショップ一覧', 'url' => "/owner/shop"],
            ['label' => "生体一覧", 'url' => "/owner/shop/{$shop_id}/pet"],
            ['label' => "生体情報の編集", 'url' => ''],
        ];
    @endphp
    <x-breadcrumb :breads="$breads" />
    <div class="container m-auto pt-2 pb-10 px-4">
        <form class="mb-10 bg-white p-5" action="{{ route('owner.shop.pet.store', ['id' => $shop_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="生体画像"
                    for="pet_image1"
                />
                <div class="flex items-end overflow-x-auto gap-3 whitespace-nowrap pb-3">
                    <div class="max-w-[300px]">
                        <input type="file" id="pet_image1" name="pet_image1">
                    </div>
                    <div class="max-w-[300px]">
                        <input type="file" id="pet_image2" name="pet_image2">
                    </div>
                    <div class="max-w-[300px]">
                        <input type="file" id="pet_image3" name="pet_image3">
                    </div>
                    <div class="max-w-[300px]">
                        <input type="file" id="pet_image4" name="pet_image4">
                    </div>
                </div>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="必須"
                    text="タイトル"
                    for="title"
                />
                <x-form-input
                    type="text"
                    name="title"
                    id="title"
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="必須"
                    text="カテゴリー"
                    for="category"
                />
                <x-form-select name="category" id="category">
                    <option value="ニシキヘビ">ニシキヘビ</option>
                    <option value="ナミヘビ">ナミヘビ</option>
                    <option value="トカゲ">トカゲ</option>
                    <option value="ヤモリ">ヤモリ</option>
                    <option value="リクガメ">リクガメ</option>
                    <option value="ミズガメ">ミズガメ</option>
                    <option value="カエル">カエル</option>
                    <option value="有尾類">有尾類</option>
                    <option value="その他">その他</option>
                </x-form-select>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="必須"
                    text="種名"
                    for="species"
                />
                <x-form-input
                    type="text"
                    name="species"
                    id="species"
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="モルフ"
                    for="morph"
                />
                <x-form-input
                    type="text"
                    name="morph"
                    id="morph"
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="性別"
                    for="sex"
                />
                <x-form-select name="sex" id="sex">
                    <option value="オス">オス</option>
                    <option value="メス">メス</option>
                    <option value="不明">不明</option>
                </x-form-select>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="年齢"
                    for="age"
                />
                <x-form-input
                    type="text"
                    name="age"
                    id="age"
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="大きさ"
                    for="size"
                />
                <x-form-input
                    type="text"
                    name="size"
                    id="size"
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="体重"
                    for="weight"
                />
                <x-form-input
                    type="text"
                    name="weight"
                    id="weight"
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="入荷日"
                    for="arrival_day"
                />
                <x-form-input
                    type="date"
                    name="arrival_day"
                    id="arrival_day"
                    value=""
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="値段"
                    for="price"
                />
                <x-form-input
                    type="text"
                    name="price"
                    id="price"
                    value=""
                />
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
                        <input type="radio" name="sales_flag" id="sales_flag" value="0" checked>
                        <span>販売中</span>
                    </x-form-radio>
                    <x-form-radio>
                        <input type="radio" name="sales_flag" value="1">
                        <span>売り切れ</span>
                    </x-form-radio>
                </div>
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
