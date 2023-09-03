<!DOCTYPE html>
<html>
<head>
    <title>エキゾサーチ</title>
    <script src="{{ asset('js/common.js') }}" defer></script>
</head>
<body>
    <h1>エキゾサーチ</h1>
    <hr>
    <ul>
        <li>
            <a href="/register">登録</a>
        </li>
        <li>
            <a href="/login">ログイン</a>
        </li>
    </ul>
    <hr>
    <h2>新着入荷</h2>
    <ul>
        @foreach ($pets as $pet)
            <li>
                <a href="/pet/{{ $pet->id }}">{{ $pet->title }}</a>
            </li>
        @endforeach
    </ul>
    <hr>
    <h2>生体を探す</h2>
    <div>
        <a href="/pet">入荷一覧</a>
    </div>
    <dl>
        <dt>カテゴリーから探す</dt>
        <dd>
            <select class="js-select-redirect">
                <option value="" selected disabled>選択してください</option>
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
        </dd>
    </dl>
    <dl>
        <dt>種名で検索</dt>
        <dd>
            <form action="/pet" method="get">
                <input type="text" name="keyword" id="keyword">
                <button type="submit">検索</button>
            </form>
        </dd>
    </dl>
    <hr>
    <h2>ショップを探す</h2>
    <div>
        <a href="/shop">ショップ一覧</a>
    </div>
    <dl>
        <dt>ショップ名で検索</dt>
        <dd>
            <form action="/shop" method="get">
                <input type="text" name="keyword" id="keyword">
                <button type="submit">検索</button>
            </form>
        </dd>
    </dl>
    <dl>
        <dt>都道府県から探す</dt>
        <dd>
            <select class="js-select-redirect">
                <option value="" selected disabled>選択してください</option>
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
        </dd>
    </dl>
</body>
</html>


