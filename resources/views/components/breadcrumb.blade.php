@props(['breads'])

<div class="container m-auto pt-10 px-4">
    <ul class="flex items-center overflow-x-auto gap-2 whitespace-nowrap pb-3">
        @foreach($breads as $key => $item)
            @if($loop->last)
                <span class="text-gray-700">{{ $item['label'] }}</span>
            @else
                <a class="text-gray-700 underline decoration-1 duration-200 hover:opacity-80" href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 6 15 12 9 18" /></svg>
            @endif
        @endforeach
    </ul>
</div>
