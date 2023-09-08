# portfolio

ET ウェブデザイン（ポートフォリオ）

[https://et-design.main.jp/](https://et-design.main.jp/)

## Authors

Taro Ejiri

## Dependency

### 【 CMS 】

WordPress

### 【 言語、フレームワーク等 】

- SASS(SCSS)
  ※VSCode【Live Sass Compiler】でコンパイル
- jQuery
- Vue.js(CDN)


## CSS設計
FLOCSSベースで分ける

- foundation/
  - _reset.scss
- layout/
  - _header.scss, _footer.scss, _sidebar.scss
- component/
  - _[最小単位パーツ名].scss
- project/
  - _[共通パーツ名].scss
- utility/
  - _[ユーティリティ名].scss

### class命名規則
ファイル名を共通パーツのテンプレートのクラス名と合わせる。

クラス名にプレフィックス（接頭辞）を付与
例）　.p-testParts　というパーツの場合、project/_testParts.scss　とする。

Layout：l-*
Component：c-*
Project：p-*
Utility：u-*

JavaScript関連のクラスは「js-*」のようにプレフィックスを付ける

キャメルケースで統一

## ブレイクポイント
▼ベース
PC：768px以上（※）
SP：767px以下
※タブレットも含む。992px以下を想定

▼ヘッダー
・width：100％
・768px
・993px
・1231px
でコンテンツを出し分け

▼メインコンテンツ
・width：100％
・最大幅（1231px以上）：1170px（現行サイトと同じ）


▼２カラム　メインコンテンツ
・width：75%
・1230px以下で697.5px
・992px以下で最大815px（widthは100%）

▼２カラム　サイドバー
・width：25%（最大幅 292.5px）
・1230px以下で212.5px
・992px以下で非表示（ヘッダーメニューが表示される）

メディアクエリは、min-widthの使用を基本にします。
指定なし
sm：≧480px
md：≧768px
lg：≧993px
xl：≧1231px


■その他
・フォントサイズはremとする
10px = 1rem としています

画像上にテキストを配置するなど可変の必要がある場合はvwなどを用いて別途共通パーツとして作成する。

・marginやpaddingは、基本的に8の倍数。
8の倍数が難しい場合は、4の倍数でも可。

パーツ内の微調整をする場合はその限りではない。


## コーディングルール

画像ファイル

■ 基本記述
例
<img alt="tast" width="100" height="100" src="../assets/img/common/test.png">
・altには必ず入力
・CWVの視点で画像【width/height】も必ず指定

■ imgの閉じ方
" />　"/>　">　" >
は
">で統一


### 【 ビルドツール 】

- gulp（コンパイルは VSCode で行う様変更したのでスプライト画像作成や画像圧縮の際に使用）

## 環境設定
エディタ:VSCode
ローカル環境は Local by Flywheel を使用  
wp-config.php と themes ファイルのみ編集対象  
node_modules は更新対象外

### 上記以外を編集した場合

WP 固定ページなどダッシュボード内を編集した場合

1. Local 環境で「All-in-One WP Migration」からエクスポート
2. 本番環境の「All-in-One WP Migration」へインポート
