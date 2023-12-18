## レプナビ

爬虫類などのエキゾチックアニマルを「購入したいユーザー」と「販売する店舗」を繋ぐマッチングサイトです。

### 作成背景

下記の理由から作成しようと考えました。

- 生体の種類が多すぎて、ユーザーが自分の欲しい生体を見つけられていない
- 生体を探す方法が、「イベントに出向いて探し回る」「Twitter（X）でひたすら検索する」「店舗に問い合わせる」など労力が伴い、情報が集約されていない
- そもそもホームページが無い店舗も多い

## 機能

他にも追加予定ですが下記機能を実装しました。

### 店舗オーナー

- 管理画面へのログイン機能
- ホームページを持たない店舗でも管理画面から「店舗情報を掲載し、ホームページの代わり」とすることができる
- 管理画面から「取扱生体の情報」を自由に投稿・編集・削除ができる

### ユーザー（生体を購入する側）

- 欲しい生体をキーワード検索できる
- カテゴリーから生体情報を検索できる
- 店舗名で店舗を検索し、「店舗情報」「その店舗で販売されている生体情報」を確認できる
- 都道府県から店舗一覧を確認することができる

### 開発環境

- Laravel10
- Blade Template
- Laravel Breeze（ログイン機能）
- Laravel Sail（Docker）
- Vanilla JS
- Tailwind CSS

![レプナビ](https://github.com/yuma0306/reptile02/blob/main/public/img/screen-shot01.png)
