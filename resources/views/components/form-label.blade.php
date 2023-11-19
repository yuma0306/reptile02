@props([
    'label',
    'text',
    'for',
])

<div class="flex mb-3 gap-3 items-center">
    <span class="py-1 px-2 font-bold rounded {{ $label === '必須' ? 'bg-amber-600 text-white' : 'bg-gray-400 text-white' }}">{{$label}}</span>
    <label class="font-bold flex-1" for="{{$for}}">{{$text}}</label>
</div>
