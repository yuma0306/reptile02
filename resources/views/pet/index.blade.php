@php
    $title = '生体一覧';
    if(isset($shopModel)) {
        $title = "{$shopModel->shop_name}の生体一覧";
    } elseif (isset($category)) {
        $title = "{$category}の生体一覧";
    } elseif(isset($keyword)) {
        $title = "「{$keyword}」の生体一覧";
    }
@endphp
<!DOCTYPE html>
<html lang="ja">
<x-head></x-head>
<body>
    <div>
        <x-header></x-header>
        <main>
            <x-heading-lv1>{{ $title }}</x-heading-lv1>
            <section class="container m-auto py-10 px-4">
                <div class="flex flex-wrap items-center gap-5 mb-10">
                    <x-btn-select>
                        <option value="" selected disabled>カテゴリーから探す</option>
                        <option value="/pet?category=ニシキヘビ">ニシキヘビ</option>
                        <option value="/pet?category=ナミヘビ">ナミヘビ</option>
                        <option value="/pet?category=トカゲ">トカゲ</option>
                        <option value="/pet?category=ヤモリ">ヤモリ</option>
                        <option value="/pet?category=リクガメ">リクガメ</option>
                        <option value="/pet?category=ミズガメ">ミズガメ</option>
                        <option value="/pet?category=カエル">カエル</option>
                        <option value="/pet?category=有尾類">有尾類</option>
                        <option value="/pet?category=その他">その他</option>
                    </x-btn-select>
                    <x-search
                        :action="'/pet/'"
                        :placeholder="'種名で検索'"
                    />
                </div>
                @if($pets->isEmpty())
                    <p>投稿はまだありません</p>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                        @foreach($pets as $pet)
                            @if($pet->public_flag === 0)
                                <x-card01
                                    :link="'/pet/' . $pet->id"
                                    :src="$pet->pet_image1"
                                    :date="$pet->arrival_day"
                                    :title="$pet->title"
                                    :sex="$pet->sex"
                                />
                            @endif
                        @endforeach
                    </div>
                @endif
            </section>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>
