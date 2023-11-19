<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さんのダッシュボード
        </h2>
    </x-slot>
    <div class="container m-auto py-10 px-4">
        <ul class="text-slate-700 font-semibold grid gap-5">
            <li class="bg-white rounded">
                <a href="/owner/shop" class="block w-full p-5 duration-200 hover:opacity-80">ショップ一覧</a>
            </li>
            <li class="bg-white rounded">
                <a href="/owner/profile" class="block w-full p-5 duration-200 hover:opacity-80">アカウント設定</a>
            </li>
        </ul>
    </div>
</x-app-layout>
