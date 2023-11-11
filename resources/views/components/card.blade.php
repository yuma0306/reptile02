@props([
    'link',
    'src',
    'title',
    'sex',
    'date'
])

<a href="{{ $link }} " class="relative grid grid-rows-3 border-gray-300 rounded shadow overflow-hidden flex-none w-10/12 sm:w-7/12 md:w-auto max-h-96 duration-200 hover:opacity-80">
    <img src="{{ asset('storage/' . $src) }}" loading="lazy" alt="" class="row-span-2 w-full h-full object-cover object-center">
    <div class="px-3 py-4">
        <p class="mb-2 text-gray-500">{{ $date }}</p>
        <p class="overflow-y-hidden text-lg font-bold">{{ $title }}</p>
    </div>
    <p class="absolute top-0 left-0 p-2 text-white font-bold rounded-br-lg {{ $sex === 'オス' ? 'bg-indigo-300' : 'bg-red-300' }}">{{ $sex }}</p>
</a>
