<!DOCTYPE html>
<html>
<head>
    <title>エキゾサーチ</title>
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
    <h2>入荷情報</h2>
    <a href="/pet">入荷一覧</a>
    <form action="/pet" method="get">
        <input type="text" name="keyword" id="keyword">
        <button type="submit">検索</button>
    </form>
    <hr>
    <h2>ショップを探す</h2>
    <select name="pref" id="js-select-redirect">
        <option value="/shop?keyword=北海道">北海道</option>
        <option value="/shop?keyword=青森県">青森県</option>
        <option value="/shop?keyword=岩手県">岩手県</option>
        <option value="/shop?keyword=宮城県">宮城県</option>
        <option value="/shop?keyword=秋田県">秋田県</option>
        <option value="/shop?keyword=山形県">山形県</option>
        <option value="/shop?keyword=福島県">福島県</option>
        <option value="/shop?keyword=茨城県">茨城県</option>
        <option value="/shop?keyword=栃木県">栃木県</option>
        <option value="/shop?keyword=群馬県">群馬県</option>
        <option value="/shop?keyword=埼玉県">埼玉県</option>
        <option value="/shop?keyword=千葉県">千葉県</option>
        <option value="/shop?keyword=東京都">東京都</option>
        <option value="/shop?keyword=神奈川県">神奈川県</option>
        <option value="/shop?keyword=新潟県">新潟県</option>
        <option value="/shop?keyword=富山県">富山県</option>
        <option value="/shop?keyword=石川県">石川県</option>
        <option value="/shop?keyword=福井県">福井県</option>
        <option value="/shop?keyword=山梨県">山梨県</option>
        <option value="/shop?keyword=長野県">長野県</option>
        <option value="/shop?keyword=岐阜県">岐阜県</option>
        <option value="/shop?keyword=静岡県">静岡県</option>
        <option value="/shop?keyword=愛知県">愛知県</option>
        <option value="/shop?keyword=三重県">三重県</option>
        <option value="/shop?keyword=滋賀県">滋賀県</option>
        <option value="/shop?keyword=京都府">京都府</option>
        <option value="/shop?keyword=大阪府">大阪府</option>
        <option value="/shop?keyword=兵庫県">兵庫県</option>
        <option value="/shop?keyword=奈良県">奈良県</option>
        <option value="/shop?keyword=和歌山県">和歌山県</option>
        <option value="/shop?keyword=鳥取県">鳥取県</option>
        <option value="/shop?keyword=島根県">島根県</option>
        <option value="/shop?keyword=岡山県">岡山県</option>
        <option value="/shop?keyword=広島県">広島県</option>
        <option value="/shop?keyword=山口県">山口県</option>
        <option value="/shop?keyword=徳島県">徳島県</option>
        <option value="/shop?keyword=香川県">香川県</option>
        <option value="/shop?keyword=愛媛県">愛媛県</option>
        <option value="/shop?keyword=高知県">高知県</option>
        <option value="/shop?keyword=福岡県">福岡県</option>
        <option value="/shop?keyword=佐賀県">佐賀県</option>
        <option value="/shop?keyword=長崎県">長崎県</option>
        <option value="/shop?keyword=熊本県">熊本県</option>
        <option value="/shop?keyword=大分県">大分県</option>
        <option value="/shop?keyword=宮崎県">宮崎県</option>
        <option value="/shop?keyword=鹿児島県">鹿児島県</option>
        <option value="/shop?keyword=沖縄県">沖縄県</option>
    </select>
    <div>
        <a href="/shop">ショップ一覧</a>
    </div>
    <script>
        const selector = document.getElementById('js-select-redirect');
        // セレクトタグの値が変更されたときのイベントハンドラを定義
        selector.addEventListener('change', function() {
            const value = selector.value;
            value && (window.location.href = value);
        });
    </script>
</body>
</html>
