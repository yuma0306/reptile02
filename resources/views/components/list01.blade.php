@props([
    'term',
    'desc',
    'emphasis' => 'false',
    'sex' => '',
])

<dl class="flex flex-wrap border-b-2 pb-3 px-5 gap-2">
    <dt class="w-56 font-bold text-lg text-slate-700">{{ $term }}</dt>
    <dd class="text-lg min-w-[75%] {{ $emphasis === 'true' ? 'text-amber-600 font-bold' : 'text-slate-700' }}">{{ $desc }}</dd>
</dl>
