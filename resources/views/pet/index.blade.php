<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入荷情報一覧</title>
    @vite(['resources/css/app.css', 'resources/scss/hoge.scss' 'resources/js/app.js'])
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
                <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">Show more</a>
            </div>
            <div class="grid gap-x-4 gap-y-6 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($pets as $pet)
                    @if($pet->public_flag === 0)
                        <div>
                            <a href="/pet/{{ $pet->id }}" class="group mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3">
                                <img src="{{ asset('storage/' . $pet->pet_image1) }}" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                            </a>
                            <div class="flex flex-col">
                                <span class="text-gray-500">{{ $pet->sex }}</span>
                                <span class="text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl">{{ $pet->title }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
