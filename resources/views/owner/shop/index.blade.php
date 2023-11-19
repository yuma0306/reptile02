<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さんのショップ一覧
        </h2>
    </x-slot>
    @php
        $breads = [
            ['label' => 'ダッシュボード', 'url' => '/owner'],
            ['label' => Auth::user()->name . 'さんのショップ一覧', 'url' => ''],
        ];
    @endphp
    <x-breadcrumb :breads="$breads" />
    <div class="container m-auto pt-2 pb-10 px-4">
        @if($shops->isEmpty())
            <p class="mb-10">ショップはまだ登録されていません</p>
        @else
            <x-list-edit>
                @foreach($shops as $shop)
                    <x-list-edit-item>
                        <p class="text-center font-bold text-lg col-start-1 col-end-3">{{ $shop->shop_name }}</p>
                        <div class="w-full sm:max-w-[200px] sm:max-h-[200px] col-start-1 col-end-3 sm:col-start-auto sm:col-end-auto">
                            <img class="w-full object-cover aspect-video" src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
                        </div>
                        <div class="grid gap-3 col-start-1 col-end-3 sm:col-start-auto sm:col-end-auto">
                            <x-link-text
                                link="/owner/shop/{{ $shop->id }}"
                                text="ショップ情報を編集"
                            />
                            <x-link-text
                                link="/owner/shop/{{ $shop->id }}/pet"
                                text="このショップの生体情報一覧"
                            />
                            @if($shop->public_flag === 0)
                                <x-link-text
                                    link="/shop/{{ $shop->id }}"
                                    text="公開中ページ"
                                />
                            @endif
                        </div>
                    </x-list-edit-item>
                @endforeach
            </x-list-edit>
        @endif
        <x-btn01
            link="/owner/shop/create"
            text="新しいショップを登録"
        />
    </div>
</x-app-layout>
