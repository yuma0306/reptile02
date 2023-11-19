@props([
    'name',
    'id',
])

<textarea class="block w-full max-w-[500px] aspect-video p-2 border-gray-400 border-1 rounded" name="{{$name}}" id="{{$id}}">
    {{$slot}}
</textarea>
