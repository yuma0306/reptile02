@props([
    'type',
    'name',
    'id',
    'value',
])

<div>
    <input class="block w-full max-w-[500px] p-2 border-gray-400 border-1 rounded" type="{{$type}}" name="{{$name}}" id="{{$id}}" value="{{$value}}">
</div>
