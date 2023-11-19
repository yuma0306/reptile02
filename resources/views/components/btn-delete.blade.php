@props([
    'type',
    'text',
])

<button type="{{ $type }}" class="grid place-content-center w-full max-w-[150px] h-14 bg-red-700 text-white font-bold border-b-2 border-red-800 border-solid text-center rounded duration-200 hover:opacity-80">
    {{ $text }}
</button>
