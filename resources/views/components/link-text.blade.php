@props([
    'link',
    'text',
])

<a class="text-teal-600 font-bold underline decoration-2 duration-200 hover:opacity-80" href="{{ $link }}">{{ $text }}</a>
