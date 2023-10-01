@props([
    'link',
    'src',
    'title',
    'sex',
    'date'
])

<a href="{{ $link }} " class="">
    <img src="{{ asset('storage/' . $src) }}" loading="lazy" alt="" class="">
    <div class="">{{ $date }}</div>
    <div class="">{{ $title }}</div>
    <p class="">{{ $sex }}</p>
</a>
