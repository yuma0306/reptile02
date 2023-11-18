<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さんのショップ一覧
        </h2>
    </x-slot>
    <div class="container m-auto py-10 px-4">
        <ul class="grid gap-5 mb-10">
            @foreach($shops as $shop)
                <li class="flex items-center flex-wrap gap-x-10 gap-y-5 bg-white p-5 sm:p-10">
                    <div class="w-full max-w-[300px] max-h-[300px]">
                        <p class="text-center font-bold text-lg mb-2">{{ $shop->shop_name }}</p>
                        <img class="w-full object-cover aspect-video" src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
                    </div>
                    <div class="grid gap-5">
                        <a class="text-teal-600 font-bold underline decoration-2 duration-200 hover:opacity-80" href="/owner/shop/{{ $shop->id }}">ショップ情報を編集</a>
                        <a class="text-teal-600 font-bold underline decoration-2 duration-200 hover:opacity-80" href="/owner/shop/{{ $shop->id }}/pet">このショップの生体情報一覧</a>
                        @if($shop->public_flag === 0)
                            <a class="text-teal-600 font-bold underline decoration-2 duration-200 hover:opacity-80" href="/shop/{{ $shop->id }}">公開中ページ</a>
                        @endif

                    </div>
                </li>
            @endforeach
        </ul>
        <x-btn01
            link="/owner/shop/create"
            text="新しいショップを追加"
        />
    </div>
</x-app-layout>
