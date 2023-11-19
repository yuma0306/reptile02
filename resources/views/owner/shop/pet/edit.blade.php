<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            生体情報の編集
        </h2>
    </x-slot>
    @php
        $breads = [
            ['label' => 'ダッシュボード', 'url' => '/owner'],
            ['label' => Auth::user()->name . 'さんのショップ一覧', 'url' => "/owner/shop"],
            ['label' => "ショップ「{$shop->shop_name}」の生体一覧", 'url' => "/owner/shop/{$shop->id}/pet"],
            ['label' => "生体情報の編集", 'url' => ''],
        ];
    @endphp
    <x-breadcrumb :breads="$breads" />
    <div class="container m-auto pt-2 pb-10 px-4">
        <form class="mb-10 bg-white p-5" action="{{ route('owner.shop.pet.update', ['shop_id' => $shop->id, 'pet_id' => $pet->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="生体画像"
                    for="pet_image1"
                />
                <div class="flex items-end overflow-x-auto gap-3 whitespace-nowrap pb-3">
                    <div class="max-w-[300px]">
                        <img  class="mb-2 object-cover aspect-video" src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                        <input type="file" id="pet_image1" name="pet_image1">
                    </div>
                    <div class="max-w-[300px]">
                        <img  class="mb-2 object-cover aspect-video" src="{{ asset('storage/' . $pet->pet_image2) }}" alt="">
                        <input type="file" id="pet_image2" name="pet_image2">
                    </div>
                    <div class="max-w-[300px]">
                        <img  class="mb-2 object-cover aspect-video" src="{{ asset('storage/' . $pet->pet_image3) }}" alt="">
                        <input type="file" id="pet_image3" name="pet_image3">
                    </div>
                    <div class="max-w-[300px]">
                        <img  class="mb-2 object-cover aspect-video" src="{{ asset('storage/' . $pet->pet_image4) }}" alt="">
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
                    value="{{ $pet->title }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="必須"
                    text="カテゴリー"
                    for="category"
                />
                <x-form-select name="category" id="category">
                    <option value="ニシキヘビ" @if($pet->category === 'ニシキヘビ') selected @endif>ニシキヘビ</option>
                    <option value="ナミヘビ" @if($pet->category === 'ナミヘビ') selected @endif>ナミヘビ</option>
                    <option value="トカゲ" @if($pet->category === 'トカゲ') selected @endif>トカゲ</option>
                    <option value="ヤモリ" @if($pet->category === 'ヤモリ') selected @endif>ヤモリ</option>
                    <option value="リクガメ" @if($pet->category === 'リクガメ') selected @endif>リクガメ</option>
                    <option value="ミズガメ" @if($pet->category === 'ミズガメ') selected @endif>ミズガメ</option>
                    <option value="カエル" @if($pet->category === 'カエル') selected @endif>カエル</option>
                    <option value="有尾類" @if($pet->category === '有尾類') selected @endif>有尾類</option>
                    <option value="その他" @if($pet->category === 'その他') selected @endif>その他</option>
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
                    value="{{ $pet->species }}"
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
                    value="{{ $pet->morph }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="性別"
                    for="sex"
                />
                <x-form-select name="sex" id="sex">
                    <option value="オス" @if($pet->sex === 'オス') selected @endif>オス</option>
                    <option value="メス" @if($pet->sex === 'メス') selected @endif>メス</option>
                    <option value="不明" @if($pet->sex === '不明') selected @endif>不明</option>
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
                    value="{{ $pet->age }}"
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
                    value="{{ $pet->size }}"
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
                    value="{{ $pet->weight }}"
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
                    value="{{ $pet->arrival_day }}"
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
                    value="{{ $pet->price }}"
                />
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="任意"
                    text="コメント"
                    for="description"
                />
                <x-form-textarea name="description" id="description">{{ $pet->description }}</x-form-textarea>
            </x-form-group>
            <x-form-group>
                <x-form-label
                    label="必須"
                    text=""
                    for=""
                />
                <div class="grid gap-2">
                    <x-form-radio>
                        <input type="radio" name="sales_flag" id="sales_flag" value="0" @if($pet->sales_flag === 0) checked @endif>
                        <span>販売中</span>
                    </x-form-radio>
                    <x-form-radio>
                        <input type="radio" name="sales_flag" value="1" @if($pet->sales_flag === 1) checked @endif>
                        <span>売約済</span>
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
                        <input type="radio" name="public_flag" id="public_flag" value="0" @if($pet->public_flag === 0) checked @endif>
                        <span>公開</span>
                    </x-form-radio>
                    <x-form-radio>
                        <input type="radio" name="public_flag" value="1" @if($pet->public_flag === 1) checked @endif>
                        <span>非公開</span>
                    </x-form-radio>
                </div>
            </x-form-group>
            <x-btn-submit
                type="submit"
                text="更新"
            />
        </form>
        <form class="flex flex-col items-end" action="{{ route('owner.shop.pet.destroy', ['shop_id' => $shop->id, 'pet_id' => $pet->id]) }}" method="post">
            @csrf
            @method('delete')
            <x-btn-delete
                type="submit"
                text="投稿を削除"
            />
        </form>
    </div>
</x-app-layout>
