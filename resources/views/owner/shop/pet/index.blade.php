<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さんの管理画面
        </h2>
    </x-slot>
    <div class="container m-auto py-10 px-4">
        <h1>{{ $shop_name }}の生体情報</h1>
        <ul>
            @foreach($pets as $pet)
            <li>
                @if($pet->public_flag === 0)
                    <a href="/pet/{{ $pet->id }}">公開中ページ</a>
                @endif
                <a href="/owner/shop/{{ $shop_id }}/pet/{{ $pet->id }}">
                    <p>{{ $pet->title }}</p>
                    <img src="{{ asset('storage/' . $pet->pet_image1) }}" alt="">
                </a>
            </li>
            @endforeach
        </ul>
        <a href="/owner/shop/{{ $shop_id }}/pet/create">新規投稿</a>
    </div>
</x-app-layout>
