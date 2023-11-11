@props([
    'link',
    'src',
    'alt',
    'text',
    'title',
])

<a href="{{ $link }}" class="relative aspect-square rounded overflow-hidden duration-200 hover:opacity-80" style="background: url({{ asset($src) }}) no-repeat center / cover">
    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-20 grid place-items-end">
        <div class="w-full text-center text-white py-4">
            <p class="mb-1 text-center">{{ $text }}</p>
            <p class="text-lg font-bold">{{ $title }}</p>
        </div>
    </div>
</a>
