@props([
    'link',
    'src',
    'alt',
    'text',
    'title',
])

<a href="{{ $link }}" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
    <img src="{{ asset($src) }}" loading="lazy" alt="{{ $alt }}" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">
    <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
        <span class="text-gray-500">{{ $text }}</span>
        <span class="text-lg font-bold text-gray-800 lg:text-xl">{{ $title }}</span>
    </div>
</a>
