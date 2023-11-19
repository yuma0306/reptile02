<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ショップ「{{ $shop_name }}」の生体情報
        </h2>
    </x-slot>
    @php
        $breads = [
            ['label' => 'ダッシュボード', 'url' => '/owner'],
            ['label' => Auth::user()->name . 'さんのショップ一覧', 'url' => "/owner/shop"],
            ['label' => "ショップ「{$shop_name}」の生体情報", 'url' => ''],
        ];
    @endphp
    <x-breadcrumb :breads="$breads" />
    <div class="container m-auto pt-2 pb-10 px-4">
        @if($pets->isEmpty())
            <p class="mb-10">生体はまだ登録されていません</p>
        @else
            <x-list-edit>
                @foreach($pets as $pet)
                    <x-list-edit-item>
                        <p class="text-center font-bold text-lg col-start-1 col-end-3">{{ $pet->title }}</p>
                        <div class="w-full sm:max-w-[200px] sm:max-h-[200px] col-start-1 col-end-3 sm:col-start-auto sm:col-end-auto">
                            <img class="w-full object-cover aspect-video" src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                        </div>
                        <div class="grid gap-3 col-start-1 col-end-3 sm:col-start-auto sm:col-end-auto">
                            <x-link-text
                                link="/owner/shop/{{ $shop_id }}/pet/{{ $pet->id }}"
                                text="生体情報を編集"
                            />
                            @if($pet->public_flag === 0)
                                <x-link-text
                                    link="/pet/{{ $pet->id }}"
                                    text="公開中ページ"
                                />
                            @endif
                        </div>
                    </x-list-edit-item>
                @endforeach
            </x-list-edit>
        @endif
        <x-btn01
            link="/owner/shop/{{ $shop_id }}/pet/create"
            text="新しい生体を登録"
        />
    </div>
</x-app-layout>
