<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入荷情報一覧</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-6 flex items-end justify-between gap-4">
                <h1 class="text-2xl font-bold text-gray-800 lg:text-3xl">
                    @if(isset($shopModel))
                        {{$shopModel->shop_name}}の入荷情報一覧
                    @elseif (isset($category))
                        {{$category}}の入荷情報一覧
                    @elseif(isset($keyword))
                        「{{$keyword}}」の入荷情報一覧
                    @else
                        入荷情報一覧
                    @endif
                </h1>
            </div>
            <div class="grid gap-x-4 gap-y-6 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($pets as $pet)
                    @if($pet->public_flag === 0)
                        <x-card
                            :link="'/pet/' . $pet->id"
                            :src="$pet->pet_image1"
                            :date="$pet->date"
                            :title="$pet->title"
                            :sex="$pet->sex"
                        />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
