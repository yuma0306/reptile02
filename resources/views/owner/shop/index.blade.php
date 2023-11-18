<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さんの管理画面
        </h2>
    </x-slot>
    <div class="container m-auto py-10 px-4">
        <h1>ショップ一覧</h1>
        <ul>
            @foreach($shops as $shop)
            <li>
                @if($shop->public_flag === 0)
                    <div>
                        <a href="/shop/{{ $shop->id }}">公開中ページ</a>
                    </div>
                @endif
                <a href="/owner/shop/{{ $shop->id }}">
                    <p>{{ $shop->shop_name }}</p>
                    <img src="{{ asset('storage/' . $shop->shop_image1) }}" alt="">
                </a>
                <div>
                    <a href="/owner/shop/{{ $shop->id }}/pet">このショップの生体情報一覧</a>
                </div>
                <hr>
            </li>
            @endforeach
        </ul>
        <a href="/owner/shop/create">ショップ追加</a>
    </div>
</x-app-layout>
