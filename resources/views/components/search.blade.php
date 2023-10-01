<form action="/pet" method="get" class="flex w-full gap-2 md:max-w-md">
    <input type="text" name="keyword" id="keyword" placeholder="{{ $slot }}" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
    <button type="submit" class="inline-block rounded-lg border px-4 py-2 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base bg-indigo-500">検索</button>
</form>
