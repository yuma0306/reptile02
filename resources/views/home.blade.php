<!DOCTYPE html>
<html>
<head>
    <title>エキゾサーチ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/common.js') }}" defer></script>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1 class="">タイトル</h1>
    <div class="">
        <div class="">
            <header class="">
                <a href="/" class="">
                    <svg width="95" height="94" viewBox="0 0 95 94" class="">
                        <path d="M96 0V47L48 94H0V47L48 0H96Z">
                    </svg>
                    レプナビ
                </a>
                <div class="">
                    <a href="/pet" class="">生体</a>
                    <a href="/shop" class="">ショップ</a>
                    <a href="/login" class="">ログイン</a>
                    <a href="/register" class="">登録</a>
                </div>
                <button type="button" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd">
                    </svg>
                    Menu
                </button>
            </header>
            <section class="">
                <div class="">
                    <h1 class="">レプナビ</h1>
                    <p class="">数ある種類やモルフの中から理想の生体を見つけるのは大変です。レプナビなら種名やモルフ名で欲しい生体をすぐに見つけることができます。</p>
                    <form action="/pet" method="get" class="">
                        <input type="text" name="keyword" id="keyword" placeholder="ショップ名で検索" class="">
                        <button type="submit" class="">検索</button>
                    </form>
                </div>
                <div class="">
                    <img src="{{ asset('img/fv-img02.jpg') }}" alt="" class="">
                </div>
            </section>
        </div>
    </div>
    @isset($pets)
        <div class="">
            <div class="">
                <div class="">
                    <h2 class="">新着入荷</h2>
                    <a href="/pet" class="">生体一覧</a>
                </div>
                <div class="">
                    @foreach ($pets as $pet)
                        @if($pet->public_flag === 0)
                            <div>
                                <a href="/pet/{{ $pet->id }}" class="">
                                    <img src="{{ asset('storage/' . $pet->pet_image1) }}" loading="lazy" alt="" class="">
                                    <span class="">2023-09-02</span>
                                </a>
                                <div>
                                    <div class="">
                                        <span class="">{{ $pet->title }}</span>
                                    </div>
                                    <p class="">{{ $pet->sex }}</p>
                                </div>
                            </div>
                        @endif
                        @if($loop->iteration == 4)
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endisset
    <div class="">
        <div class="">
            <div class="">
                <h2 class="">カテゴリから探す</h2>
                <select class="">
                    <option value="" selected disabled>カテゴリ一覧</option>
                    <option value="/pet?category=ニシキヘビ">ニシキヘビ</option>
                    <option value="/pet?category=ナミヘビ">ナミヘビ</option>
                    <option value="/pet?category=トカゲ">トカゲ</option>
                    <option value="/pet?category=ヤモリ">ヤモリ</option>
                    <option value="/pet?category=リクガメ">リクガメ</option>
                    <option value="/pet?category=ミズガメ">ミズガメ</option>
                    <option value="/pet?category=カエル">カエル</option>
                    <option value="/pet?category=有尾類">有尾類</option>
                    <option value="/pet?category=その他">その他</option>
                </select>
            </div>
            <div class="">
                <div>
                    <a href="/pet?category=ニシキヘビ" class="">
                    <img src="{{ asset('img/img-python.jpg') }}" loading="lazy" alt="" class="">
                    <div class="">
                        <span class="">python</span>
                        <span class="">ニシキヘビ</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/pet?category=トカゲ" class="">
                    <img src="{{ asset('img/img-lizard.jpg') }}" loading="lazy" alt="" class="">
                    <div class="">
                        <span class="">lizard</span>
                        <span class="">トカゲ</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/pet?category=リクガメ" class="">
                    <img src="{{ asset('img/img-tortoise.jpg') }}" loading="lazy" alt="" class="">
                    <div class="">
                        <span class="">tortoise</span>
                        <span class="">リクガメ</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/pet?category=カエル" class="">
                    <img src="{{ asset('img/img-frog.jpg') }}" loading="lazy" alt="" class="">
                    <div class="">
                        <span class="">frog</span>
                        <span class="">カエル</span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="">
            <div class="">
                <h2 class="">ショップを探す</h2>
                <div>
                    <a href="/shop" class="">ショップ一覧</a>
                </div>
            </div>
            <div class="">
                <div>
                    <a href="/shop?pref=東京" class="">
                    <img src="{{ asset('img/img-tokyo.jpg') }}" loading="lazy" alt="" class="">
                    <div class="">
                        <span class="">tokyo</span>
                        <span class="">東京</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/shop?pref=神奈川" class="">
                    <img src="{{ asset('img/img-kanagawa.jpg') }}" loading="lazy" alt="" class="">
                    <div class="">
                        <span class="">kanagawa</span>
                        <span class="">神奈川</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/shop?pref=大阪" class="">
                    <img src="{{ asset('img/img-osaka.jpg') }}" loading="lazy" alt="" class="">
                    <div class="">
                        <span class="">osaka</span>
                        <span class="">大阪</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="/shop?pref=愛知" class="">
                    <img src="{{ asset('img/img-aichi.jpg') }}" loading="lazy" alt="" class="">
                    <div class="">
                        <span class="">aichi</span>
                        <span class="">愛知</span>
                    </div>
                    </a>
                </div>
            </div>
            <div class="">
                <div>
                    <select class="">
                        <option value="" selected disabled>都道府県から探す</option>
                        <option value="/shop?pref=北海道">北海道</option>
                        <option value="/shop?pref=青森県">青森県</option>
                        <option value="/shop?pref=岩手県">岩手県</option>
                        <option value="/shop?pref=宮城県">宮城県</option>
                        <option value="/shop?pref=秋田県">秋田県</option>
                        <option value="/shop?pref=山形県">山形県</option>
                        <option value="/shop?pref=福島県">福島県</option>
                        <option value="/shop?pref=茨城県">茨城県</option>
                        <option value="/shop?pref=栃木県">栃木県</option>
                        <option value="/shop?pref=群馬県">群馬県</option>
                        <option value="/shop?pref=埼玉県">埼玉県</option>
                        <option value="/shop?pref=千葉県">千葉県</option>
                        <option value="/shop?pref=東京都">東京都</option>
                        <option value="/shop?pref=神奈川県">神奈川県</option>
                        <option value="/shop?pref=新潟県">新潟県</option>
                        <option value="/shop?pref=富山県">富山県</option>
                        <option value="/shop?pref=石川県">石川県</option>
                        <option value="/shop?pref=福井県">福井県</option>
                        <option value="/shop?pref=山梨県">山梨県</option>
                        <option value="/shop?pref=長野県">長野県</option>
                        <option value="/shop?pref=岐阜県">岐阜県</option>
                        <option value="/shop?pref=静岡県">静岡県</option>
                        <option value="/shop?pref=愛知県">愛知県</option>
                        <option value="/shop?pref=三重県">三重県</option>
                        <option value="/shop?pref=滋賀県">滋賀県</option>
                        <option value="/shop?pref=京都府">京都府</option>
                        <option value="/shop?pref=大阪府">大阪府</option>
                        <option value="/shop?pref=兵庫県">兵庫県</option>
                        <option value="/shop?pref=奈良県">奈良県</option>
                        <option value="/shop?pref=和歌山県">和歌山県</option>
                        <option value="/shop?pref=鳥取県">鳥取県</option>
                        <option value="/shop?pref=島根県">島根県</option>
                        <option value="/shop?pref=岡山県">岡山県</option>
                        <option value="/shop?pref=広島県">広島県</option>
                        <option value="/shop?pref=山口県">山口県</option>
                        <option value="/shop?pref=徳島県">徳島県</option>
                        <option value="/shop?pref=香川県">香川県</option>
                        <option value="/shop?pref=愛媛県">愛媛県</option>
                        <option value="/shop?pref=高知県">高知県</option>
                        <option value="/shop?pref=福岡県">福岡県</option>
                        <option value="/shop?pref=佐賀県">佐賀県</option>
                        <option value="/shop?pref=長崎県">長崎県</option>
                        <option value="/shop?pref=熊本県">熊本県</option>
                        <option value="/shop?pref=大分県">大分県</option>
                        <option value="/shop?pref=宮崎県">宮崎県</option>
                        <option value="/shop?pref=鹿児島県">鹿児島県</option>
                        <option value="/shop?pref=沖縄県">沖縄県</option>
                    </select>
                </div>
                <div>
                    <form action="/shop" method="get" class="">
                        <input type="text" name="keyword" id="keyword" placeholder="ショップ名で検索" class="">
                        <button type="submit" class="">検索</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <footer class="">
            <div class="">
                <nav class="">
                    <a href="/pet" class="">生体</a>
                    <a href="/shop" class="">ショップ</a>
                    <a href="/login" class="">ログイン</a>
                    <a href="/register" class="">登録</a>
                </nav>
            </div>
            <div class="">© 2023 - レプナビ All rights reserved</div>
        </footer>
    </div>
</body>
</html>


