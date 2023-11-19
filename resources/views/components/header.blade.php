<header>
    <div class="relative flex items-center justify-between aligin-center container m-auto py-4 px-4">
        <a href="/" class="font-bold text-slate-700 text-2xl md:text-3xl duration-200 hover:text-teal-600">
            レプナビ
        </a>
        <div class="hidden lg:flex items-center gap-5">
            <a href="/pet" class="text-sm md:text-base font-semibold text-slate-700 duration-200 hover:text-teal-600">生体</a>
            <a href="/shop" class="text-sm md:text-base font-semibold text-slate-700 duration-200 hover:text-teal-600">ショップ</a>
            <a href="/register" class="text-sm md:text-base font-semibold text-slate-700 duration-200 hover:text-teal-600">ショップオーナーの方</a>
        </div>
    </div>
    <nav>
        <ul id="js-burger-menu" class="fixed top-0 left-0 z-10 w-full py-10 bg-white shadow-lg duration-100 ease-linear translate-x-full text-center transition">
            <li>
                <a href="/pet" class="text-slate-700 duration-200 hover:text-teal-600 font-semibold">生体一覧</a>
            </li>
            <li class="mt-4">
                <a href="/shop" class="text-slate-700 duration-200 hover:text-teal-600 font-semibold">ショップ一覧</a>
            </li>
            <li class="mt-4">
                <a href="/register" class="text-slate-700 duration-200 hover:text-teal-600 font-semibold">ショップオーナーの方</a>
            </li>
        </ul>
        <button type="button" class="lg:hidden fixed top-0 right-0 z-20 p-3 bg-teal-600 text-white" id="js-burger-btn">
            <svg id="js-burger-open" class="h-8 w-8 text-black text-inherit" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
            </svg>
            <svg id="js-burger-close" class="text-inherit h-8 w-8 hidden"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z"/><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
    </nav>
</header>
