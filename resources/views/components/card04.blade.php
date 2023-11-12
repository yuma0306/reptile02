@props([
    'link',
    'title',
    'src',
])

<a href="{{ $link }} " class="relative aspect-square shadow rounded overflow-hidden duration-200 hover:opacity-80">
    <p class="grid place-content-center px-3 py-4 w-full h-[20%] overflow-y-hidden text-base lg:text-xl font-bold text-slate-700">{{ $title }}</p>
    <img src="{{ asset('storage/' . $src) }}" loading="lazy" alt="" class="w-full h-[80%] object-cover object-center overflow-y-hidden">
</a>
