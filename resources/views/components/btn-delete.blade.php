@props([
    'type',
    'text',
])

<button type="{{ $type }}" class="grid place-content-center px-4 py-2 bg-red-700 text-white font-semibold border-b-2 border-red-800 border-solid text-center rounded duration-200 hover:opacity-80">
    {{ $text }}
</button>
