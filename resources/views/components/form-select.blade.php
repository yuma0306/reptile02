@props([
    'name',
    'id',
])

<div class="block w-full max-w-[500px]">
    <select class="w-full p-2 border-gray-400 border-1 rounded" name="{{$name}}" id="{{$id}}">
        {{$slot}}
    </select>
</div>
