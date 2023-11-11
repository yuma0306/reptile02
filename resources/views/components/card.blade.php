@props([
    'link',
    'src',
    'title',
    'sex',
    'date'
])

<a href="{{ $link }} " class="flex-none w-11/12 sm:w-8/12 md:w-6/12 lg:w-4/12 xl:w-3/12 aspect-square relative grid grid-rows-5 border-gray-300 rounded shadow overflow-hidden duration-200 hover:opacity-80">
    <img src="{{ asset('storage/' . $src) }}" loading="lazy" alt="" class="row-span-3 w-full h-full object-cover object-center">
    <div class="px-3 py-4">
        <p class="mb-2 text-gray-500">{{ $date }}</p>
        <p class="overflow-y-hidden text-base sm:text-lg font-bold">{{ $title }}</p>
    </div>
    <p class="absolute top-0 left-0 p-2 text-white font-bold rounded-br-lg {{ $sex === 'オス' ? 'bg-indigo-300' : 'bg-red-300' }}">{{ $sex }}</p>
</a>
