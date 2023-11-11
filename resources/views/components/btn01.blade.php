@props([
    'link',
    'text'
])

<a href="{{ $link }}" class="inline-block w-3/5 max-w-xs bg-teal-600 text-white font-bold border-b-2 border-green-800 border-solid text-center p-3 rounded duration-200 hover:opacity-80">
    {{ $text }}
</a>
