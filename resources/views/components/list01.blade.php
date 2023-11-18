@props([
    'term',
    'desc',
    'sex',
])

<dl class="flex flex-wrap border-b-2 pb-3 px-5 gap-2">
    <dt class="w-56 font-bold text-lg text-slate-700">{{ $term }}</dt>
    <dd class="text-lg min-w-[75%] {{ $desc === '販売中' ? 'text-lime-600 font-bold' : '' }} {{ $desc === '売約済' ? 'text-rose-600 font-bold' : '' }}">{{ $desc }}</dd>
</dl>
