@props([
    'link',
    'src',
    'title',
    'sex',
    'date',
])

<a href="{{ $link }} " class="relative aspect-square shadow rounded overflow-hidden duration-200 hover:opacity-80">
    <img src="{{ asset('storage/' . $src) }}" loading="lazy" alt="" class="w-full h-[60%] object-cover object-center overflow-y-hidden">
    <div class="px-3 py-4 w-full h-[40%] ">
        <p class="mb-2 text-gray-500">{{ $date }}</p>
        <p class="overflow-y-hidden text-base font-bold text-slate-700">{{ $title }}</p>
    </div>
    <p class="absolute top-0 left-0 p-2 text-white font-bold rounded-br-lg {{ $sex === 'オス' ? 'bg-indigo-300' : ($sex === '不明' ? 'bg-gray-400' : 'bg-red-300') }}">{{ $sex }}</p>
</a>
