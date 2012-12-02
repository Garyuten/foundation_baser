<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('機能一覧') ?>
<?php $bcBaser->setDescription('管理画面、ページ管理、メールフォーム、ブログ、フィードプラグイン等、baserCMSの機能を一覧でご紹介いたします。') ?>
<!-- BaserPageTagEnd -->

<?php $bcBaser->css('page/about',array('inline'=>false)) ?>
<h1 id="AboutFeature">
	<span>機能一覧</span></h1>
<div class="Section">
	<p>
		baserCMSが提供する機能をフロント機能と管理機能にわけてご紹介いたします。</p>
</div>
<div class="Section" id="section1">
	<h2>
		<span>フロント機能一覧</span></h2>
	<table cellpadding="0" cellspacing="0">
		<colgroup>
			<col width="122" />
			<col width="215" />
			<col />
		</colgroup>
		<tbody>
			<tr>
				<th scope="row">
					分類</th>
				<th scope="row">
					機能</th>
				<th scope="row">
					説明</th>
			</tr>
			<tr>
				<td class="thin" rowspan="2">
					ページ</td>
				<td>
					サーバーキャッシュ</td>
				<td>
					プログラムの出力結果をサーバー上に保存し処理速度を向上します。</td>
			</tr>
			<tr class="dark">
				<td>
					編集リンク表示</td>
				<td>
					管理画面にログインした状態であれば、ツールバー上に編集画面へのリンクを表示します。</td>
			</tr>
			<tr>
				<td class="thin" rowspan="11">
					ブログ</td>
				<td>
					カテゴリ別記事一覧</td>
				<td>
					ブログカテゴリ別の記事の一覧を表示します。</td>
			</tr>
			<tr class="dark">
				<td>
					タブ別記事一覧</td>
				<td>
					タブ別の記事の一覧を表示します。</td>
			</tr>
			<tr>
				<td>
					月別記事一覧</td>
				<td>
					月別の記事の一覧を表示します。</td>
			</tr>
			<tr class="dark">
				<td>
					日別記事一覧</td>
				<td>
					日別の記事の一覧を表示します。</td>
			</tr>
			<tr>
				<td>
					カレンダー</td>
				<td>
					カレンダー形式で、日別記事一覧へのリンクを表示します。</td>
			</tr>
			<tr class="dark">
				<td>
					最近の投稿</td>
				<td>
					最近投稿された記事の一覧を表示します。</td>
			</tr>
			<tr>
				<td>
					カテゴリ一覧</td>
				<td>
					カテゴリ別記事一覧へのリンクを一覧で表示します。</td>
			</tr>
			<tr class="dark">
				<td>
					月別アーカイブ一覧</td>
				<td>
					月別記事一覧へのリンクを一覧で表示します。</td>
			</tr>
			<tr>
				<td>
					コメント送信・承認</td>
				<td>
					各ブログ記事ごとにコメントを送信する事ができます。<br />
					ユーザーよりコメントが送信された際、管理者が承認したもののみ公開する事ができます。コメントが送信された場合は、管理者用のメールアドレスに通知します。</td>
			</tr>
			<tr class="dark">
				<td>
					コメント画象認証</td>
				<td>
					画象で生成した文字列を入力させる事で認証を行ないます。</td>
			</tr>
			<tr>
				<td>
					編集リンク表示</td>
				<td>
					管理画面にログインした状態であれば、ツールバー上に編集画面へのリンクを表示します。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="8">
					メールフォーム</td>
				<td>
					メール送信</td>
				<td>
					フォーム経由で管理者宛にメールをする事ができます。</td>
			</tr>
			<tr>
				<td>
					入力チェック</td>
				<td>
					必須チェック、Eメールチェックなど各種入力チェックを行います。</td>
			</tr>
			<tr class="dark">
				<td>
					自動変換</td>
				<td>
					入力内容中の全角文字を半角文字に自動変換します。</td>
			</tr>
			<tr>
				<td>
					住所補完</td>
				<td>
					郵便番号を元に住所を検索し自動入力します。</td>
			</tr>
			<tr class="dark">
				<td>
					送信前確認</td>
				<td>
					入力後、送信前に入力内容の確認が行えます。</td>
			</tr>
			<tr>
				<td>
					自動リダイレクト</td>
				<td>
					送信完了後、指定したURLへ自動でリダイレクトします。</td>
			</tr>
			<tr class="dark">
				<td>
					画象認証</td>
				<td>
					メールフォーム送信の際、画象で生成された文字列を入力させ認証を行ないます。</td>
			</tr>
			<tr>
				<td>
					ユーザーへの控えメール送信</td>
				<td>
					メール送信時、入力内容にEメールの項目があればユーザー宛に控えメールを送信します。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="2">
					フィード</td>
				<td>
					RSSフィード読み込み</td>
				<td>
					自サイトのブログのRSSフィードだけでなく、他サイトのRSSフィードも読み込み、整形した上で貼り付ける事ができます。</td>
			</tr>
			<tr>
				<td>
					サーバーキャッシュ</td>
				<td>
					外部RSSフィードを読み込む際などに取得した内容をサーバー上に保存し、サーバーの負荷軽減を行います。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="2">
					スマートフォン</td>
				<td>
					スマートフォン自動リダイレクト</td>
				<td>
					スマートフォンからのアクセスの際、スマートフォン用URLに自動でリダイレクトします。</td>
			</tr>
			<tr>
				<td>
					スマートフォン用表示最適化</td>
				<td>
					スマートフォンからのアクセスの際、ブログ記事や、ナビゲーションボタンを自動でスマートフォン用の表示に最適化します。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="3">
					モバイル</td>
				<td>
					モバイル自動リダイレクト</td>
				<td>
					モバイルからのアクセスの際、モバイル用URLに自動でリダイレクトします。</td>
			</tr>
			<tr>
				<td>
					画像自動リサイズ</td>
				<td>
					モバイルからのアクセスの際、ブログ記事や、ページ機能で投稿した画像を自動でモバイル用のサイズに変換して表示します。</td>
			</tr>
			<tr class="dark">
				<td>
					カタカナ半角変換</td>
				<td>
					モバイルからのアクセスの際、カタカナや全角英数字を自動で半角文字に変換します。</td>
			</tr>
			<tr>
				<td class="thin" rowspan="4">
					その他</td>
				<td>
					サイト内検索</td>
				<td>
					サイト内のコンテンツをカテゴリ別に検索できます。各コンテンツは検索除外設定を行う事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					GoogleMaps表示</td>
				<td>
					管理画面で登録した住所を元に簡単にGoogleMapsの地図を表示する事ができます。</td>
			</tr>
			<tr>
				<td>
					Twitterユーザータイムライン読み込み<br />
					（Twitterプラグイン）</td>
				<td>
					管理画面で登録した Twitterユーザー名を元に、Twitter のユーザータイムラインを簡単に読み込む事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					画像ポップアップ表示</td>
				<td>
					画像をポップアップで拡大表示します。</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="Section" id="section2">
	<h2>
		<span>管理機能一覧</span></h2>
	<table cellpadding="0" cellspacing="0">
		<colgroup>
			<col width="122" />
			<col width="215" />
			<col />
		</colgroup>
		<tbody>
			<tr>
				<th>
					分類</th>
				<th>
					機能</th>
				<th>
					説明</th>
			</tr>
			<tr>
				<td class="thin" rowspan="5">
					ユーザー管理</td>
				<td>
					ログイン認証</td>
				<td>
					管理画面で登録したユーザーのアカウントとパスワードを元に認証を行います。</td>
			</tr>
			<tr class="dark">
				<td>
					ユーザー登録・編集</td>
				<td>
					複数のログインユーザーの登録が行えます。</td>
			</tr>
			<tr>
				<td>
					ユーザーグループ登録・編集</td>
				<td>
					アクセス制限別にユーザーをグルーピングする事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					アクセス制限設定</td>
				<td>
					ユーザーグループごとに管理画面内のアクセス制限をかける事ができます。</td>
			</tr>
			<tr>
				<td>
					代理ログイン</td>
				<td>
					管理者でログインしている場合に、別ユーザーの代理としてログインする事ができます。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="9">
					固定ページ管理</td>
				<td>
					固定ページ登録・編集</td>
				<td>
					WEBページの登録・編集を便利なHTMLエディタでおこなえます。</td>
			</tr>
			<tr>
				<td>
					固定ページタイトル・説明文個別設定</td>
				<td>
					WEBページのタイトルや説明文を個別に設定する事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					固定ページ公開状態設定</td>
				<td>
					WEBページごとに公開状態の設定ができます。期間を指定して制限する事もできます。</td>
			</tr>
			<tr>
				<td>
					モバイルページ反映</td>
				<td>
					PC用ページを作成する際、携帯・スマートフォンページとして複製できます。</td>
			</tr>
			<tr class="dark">
				<td>
					スマートフォンページ反映</td>
				<td>
					PC用ページを作成する際、スマートフォン用ページとして複製できます。</td>
			</tr>
			<tr>
				<td>
					サイト検索除外設定</td>
				<td>
					サイト内検索結果から除外するかどうかの設定を行う事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					固定ページカテゴリ登録・編集</td>
				<td>
					WEBページを分類する為のページカテゴリの登録・編集が行えます。</td>
			</tr>
			<tr>
				<td>
					固定ページテンプレート読み込み</td>
				<td>
					FTP等でサーバー上にアップロードしたページテンプレートを読み込んでデータベースに登録する事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					固定ページテンプレート書き出し</td>
				<td>
					データベースに登録されているページテンプレートをテーマ内のpagesフォルダに書き出す事ができます。</td>
			</tr>
			<tr>
				<td class="thin" rowspan="9">
					ブログ管理</td>
				<td>
					ブログ作成</td>
				<td>
					ブログコンテンツを複数作成する事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					ブログ記事登録・編集</td>
				<td>
					ブログ記事の登録・編集を便利なHTMLエディタで行えます。</td>
			</tr>
			<tr>
				<td>
					ブログ記事公開状態設定</td>
				<td>
					ブログ記事ごとに公開状態の設定ができます。期間を指定して制限する事もできます。</td>
			</tr>
			<tr class="dark">
				<td>
					サイト検索除外設定</td>
				<td>
					サイト内検索結果から除外するかどうかの設定を行う事ができます。</td>
			</tr>
			<tr>
				<td>
					コメント管理</td>
				<td>
					ブログ記事の投稿されたコメントの承認・削除が行えます。</td>
			</tr>
			<tr class="dark">
				<td>
					ブログカテゴリ登録・編集</td>
				<td>
					ブログ記事を分類するブログカテゴリの登録・編集が行えます。</td>
			</tr>
			<tr>
				<td>
					ブログタグ登録・編集</td>
				<td>
					ブログ記事をタグ付けするブログタグの登録・編集が行えます。</td>
			</tr>
			<tr class="dark">
				<td>
					ブログテンプレート切り替え</td>
				<td>
					ブログごとに違うデザインを適用する事ができます。</td>
			</tr>
			<tr>
				<td>
					表示件数設定</td>
				<td>
					ブログ記事や、フィードの表示件数が設定できます。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="11">
					メールフォーム管理</td>
				<td>
					メールフォーム作成</td>
				<td>
					メールフォームコンテンツを複数作成する事ができます。</td>
			</tr>
			<tr>
				<td>
					メール項目登録・編集</td>
				<td>
					メールフォームの入力項目をテキストボックスやラジオボタン、コンボボックス等で登録・編集する事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					メール項目並び替え</td>
				<td>
					メール項目の表示順を並び替える事ができます。</td>
			</tr>
			<tr>
				<td>
					受信メール一覧表示</td>
				<td>
					受信メール個別詳細の確認、削除ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					SSL利用設定</td>
				<td>
					メールフォーム毎にSSLの利用設定を行えます。</td>
			</tr>
			<tr>
				<td>
					BCCの利用設定</td>
				<td>
					受信メールをBCCで受け取る事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					サイト検索除外設定</td>
				<td>
					サイト内検索結果から除外するかどうかの設定を行う事ができます。</td>
			</tr>
			<tr>
				<td>
					メールフォームテンプレート切り替え</td>
				<td>
					メールフォームごとに違うデザインを適用する事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					送信メールテンプレート切り替え</td>
				<td>
					メールフォームごとに送信するメールの雛形を切り替える事ができます。</td>
			</tr>
			<tr>
				<td>
					送信完了後リダイレクトURL登録</td>
				<td>
					メールフォームの送信完了後に自動遷移するリダイレクト先のURLを登録する事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					送信メールCSVダウンロード</td>
				<td>
					メールフォームで受信した内容をCSVファイルとしてダウンロードする事ができます。</td>
			</tr>
			<tr>
				<td class="thin" rowspan="5">
					フィード管理</td>
				<td>
					フィード情報登録・編集</td>
				<td>
					公開サイトに読み込むRSSフィードの登録・編集が行えます。</td>
			</tr>
			<tr class="dark">
				<td>
					複数フィード合成</td>
				<td>
					複数のRSSフィード内容を合成して、日付順で並べて出力する事ができます。</td>
			</tr>
			<tr>
				<td>
					カテゴリ絞り込み</td>
				<td>
					RSSフィードより読み込んだ記事をカテゴリで絞り込んで出力する事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					記事表示件数指定</td>
				<td>
					RSSフィードより読み込んで出力する記事の件数を設定する事ができます。</td>
			</tr>
			<tr>
				<td>
					フィードテンプレート複数登録</td>
				<td>
					RSSフィードを読み込んで出力する際のレイアウトを複数登録する事ができます。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="5">
					アップロードファイル管理<br />
					（Uploaderプラグイン）</td>
				<td>
					ファイルアップロード</td>
				<td>
					画像、Excel、Word、PDF等のファイルをアップロードし、一覧で管理する事ができます。</td>
			</tr>
			<tr>
				<td>
					ファイル貼り付け</td>
				<td>
					アップロードしたファイルをページ機能で管理するページやブログ記事に貼り付ける事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					画像サイズ設定</td>
				<td>
					アップロードした画像ファイルのサイズを指定する事ができます。また、正方形に切り抜く事ができます。</td>
			</tr>
			<tr>
				<td>
					編集制限設定</td>
				<td>
					管理者以外のユーザーが、自分がアップロードしたファイル以外、編集・削除ができないように設定する事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					カテゴリ登録・編集</td>
				<td>
					アップロードするファイルに付加するカテゴリの登録・編集が行えます。カテゴリ分けすることで、ファイルの絞り込みを行うことができます。</td>
			</tr>
			<tr>
				<td class="thin">
					Twitter連動<br />
					（Twitterプラグイン）</td>
				<td>
					ブログ記事ツイート</td>
				<td>
					ブログ記事の更新時に、編集画面から Twitter へツイートする事ができます。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="2">
					メニュー管理</td>
				<td>
					メニュー登録・編集</td>
				<td>
					グローバルナビゲーション等で利用するメニューの登録・編集が行えます。</td>
			</tr>
			<tr>
				<td>
					メニュー並び替え</td>
				<td>
					メニューの表示順を並び替える事ができます。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="4">
					テーマ管理</td>
				<td>
					テーマ複製・切り替え</td>
				<td>
					既存テーマの複製やテーマの切り替えが行えます。</td>
			</tr>
			<tr>
				<td>
					テンプレート編集</td>
				<td>
					テンプレートの編集・削除が行えます。</td>
			</tr>
			<tr class="dark">
				<td>
					ファイルアップロード</td>
				<td>
					テンプレートや、CSS、画象、javascript のアップロードができます。</td>
			</tr>
			<tr>
				<td>
					コアファイル複製</td>
				<td>
					初期状態で用意されているコアのテンプレートや、CSS、画象、javascript をテーマフォルダへコピーする事ができます。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="3">
					ウィジェットエリア管理</td>
				<td>
					ウィジェットエリア登録・編集</td>
				<td>
					複数のウィジェットをとりまとめるウィジェットエリアの登録・編集が行えます。</td>
			</tr>
			<tr>
				<td>
					ウィジェット登録・設定</td>
				<td>
					ウィジェットエリアへウィジェットの登録が行えます。また、ウィジェットごとに設定値の設定が行えます。</td>
			</tr>
			<tr class="dark">
				<td>
					ウィジェット並び替え</td>
				<td>
					各ウィジェットエリアにおいてウィジェットの並び替えが行えます。</td>
			</tr>
			<tr>
				<td class="thin">
					プラグイン管理</td>
				<td>
					プラグイン登録・削除</td>
				<td>
					各種プラグインの登録・削除が行えます。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="7">
					システム設定</td>
				<td>
					メタ情報登録・編集</td>
				<td>
					サイトタイトルや、説明文、キーワードの登録・編集が行えます。</td>
			</tr>
			<tr>
				<td>
					データバックアップ</td>
				<td>
					データベースのバックアップを管理画面上で行えます。</td>
			</tr>
			<tr class="dark">
				<td>
					GoogleMaps用住所登録</td>
				<td>
					Googlemapsで地図を表示する為の住所の登録が行えます。</td>
			</tr>
			<tr>
				<td>
					検索インデックス コンテンツ管理</td>
				<td>
					サイト内検索の対象コンテンツの優先度設定、検索インデックスへの追加・削除を行えます。</td>
			</tr>
			<tr class="dark">
				<td>
					メンテナンス切り替え</td>
				<td>
					メンテナンス中に切り替える事で、一般ユーザーがアクセスした場合にメンテナンス中ページを表示します。</td>
			</tr>
			<tr>
				<td>
					メール送信設定</td>
				<td>
					サイト内で利用するメールのSMTP設定、文字コードの設定を行う事ができます。</td>
			</tr>
			<tr class="dark">
				<td>
					制作・開発モード切り替え</td>
				<td>
					制作・開発モードの切り替えが行えます。デバッグモードのレベルはCakePHPに準拠します。</td>
			</tr>
			<tr>
				<td class="thin" rowspan="3">
					その他</td>
				<td>
					システムナビ</td>
				<td>
					管理システム内のすべてのメニューを表示します。</td>
			</tr>
			<tr class="dark">
				<td>
					ツールバー</td>
				<td>
					ログインしている場合には、フロントと管理システムのシームレスな移動を可能とします。</td>
			</tr>
			<tr>
				<td>
					よく使う項目</td>
				<td>
					管理システム内でよく使う項目をお気に入りとして登録しておくことができます。</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="Section" id="section3">
	<h2>
		<span>外部ライブラリ一覧</span></h2>
	<p>
		baserCMSの各機能は、次のオープンソースライブラリの恩恵を受けて成り立っています。感謝！</p>
	<table cellpadding="0" cellspacing="0">
		<colgroup>
			<col width="122" />
			<col width="215" />
			<col />
		</colgroup>
		<tbody>
			<tr>
				<th>
					分類</th>
				<th>
					ライブラリ名</th>
				<th>
					バージョン</th>
				<th>
					用途</th>
			</tr>
			<tr>
				<td class="thin" rowspan="7">
					PHP</td>
				<td>
					<a href="http://cakephp.jp" target="_blank">CakePHP</a></td>
				<td>
					1.2.11</td>
				<td>
					コアのフレームワークとして使用させて頂いています。</td>
			</tr>
			<tr class="dark">
				<td>
					<a href="http://cakeforge.org/snippet/detail.php?type=package&amp;id=18" target="_blank">CakePHP WebModel</a></td>
				<td>
					1.0</td>
				<td>
					フィード読み込み時の Web抽象化レイヤー</td>
			</tr>
			<tr>
				<td>
					<a href="http://cakeforge.org/snippet/detail.php?type=snippet&amp;id=78" target="_blank">CakePHP Rss</a></td>
				<td>
					-</td>
				<td>
					フィード読み込み用のモデルとして使用させて頂いています。</td>
			</tr>
			<tr class="dark">
				<td>
					<a href="http://simplepie.org/" target="_blank">SimplePie</a></td>
				<td>
					1.2</td>
				<td>
					フィード解析に使用させて頂いています。</td>
			</tr>
			<tr>
				<td>
					<a href="http://rochakchauhan.com/blog/2009/01/27/create-zip-file-create-zip-file-archives-and-serve-for-download" target="_blank">createZip</a></td>
				<td>
					-</td>
				<td>
					バックアップファイルの生成に使用させて頂いています。</td>
			</tr>
			<tr class="dark">
				<td>
					<a href="http://code.42dh.com/oauth/" target="_blank">CakePHP OAuth consumer</a></td>
				<td>
					-</td>
				<td>
					Twitter の OAuth認証に使用させて頂いています。</td>
			</tr>
			<tr>
				<td>
					<a href="http://www.captcha.ru/en/kcaptcha/" target="_blank">kcaptcha</a></td>
				<td>
					1.2.6</td>
				<td>
					画象認証に使用させて頂いています。</td>
			</tr>
			<tr class="dark">
				<td class="thin" rowspan="10">
					Javascript</td>
				<td>
					<a href="http://jquery.com/" target="_blank">jQuery</a></td>
				<td>
					1.7.2</td>
				<td>
					Javascriptフレームワークとして使用させて頂いています。</td>
			</tr>
			<tr>
				<td>
					<a href="http://jqueryui.com/" target="_blank">jQuery UI</a></td>
				<td>
					1.8.19</td>
				<td>
					Javascriptフレームワークとして使用させて頂いています。</td>
			</tr>
			<tr class="dark">
				<td>
					<a href="http://lagoscript.org/jquery/upload" target="_blank">jQuery upload</a></td>
				<td>
					1.0.0</td>
				<td>
					Ajax でのファイルアップロードに使用させて頂いています。</td>
			</tr>
			<tr>
				<td>
					<a href="http://colorpowered.com/colorbox/" target="_blank">jQuery ColorBox</a></td>
				<td>
					1.3.16</td>
				<td>
					画象ポップアップに使用させて頂いています。</td>
			</tr>
			<tr class="dark">
				<td>
					<a href="http://abeautifulsite.net/2008/09/jquery-context-menu-plugin/" target="_blank">jQuery Context Menu</a></td>
				<td>
					1.0.0</td>
				<td>
					右クリックメニューに使用させて頂いています。</td>
			</tr>
			<tr>
				<td>
					<a href="http://www.lullabot.com/articles/announcing-beautytips-jquery-tooltip-plugin" target="_blank">BeautyTips</a></td>
				<td>
					0.9.5-rc1</td>
				<td>
					ツールチップに使用させて頂いています。</td>
			</tr>
			<tr class="dark">
				<td>
					<a href="http://ckeditor.com/" target="_blank">CKEditor</a></td>
				<td>
					3.6.3</td>
				<td>
					WYSIWYGエディタに使用させて頂いています。</td>
			</tr>
			<tr>
				<td>
					<a href="http://code.google.com/p/ajaxzip3/" target="_blank">AjaxZip3</a></td>
				<td>
					0.4</td>
				<td>
					郵便番号による住所検索に使用させて頂いています。</td>
			</tr>
			<tr class="dark">
				<td>
					<a href="http://plugins.jquery.com/project/dimensions" target="_blank">jQuery dimensions</a></td>
				<td>
					1.2</td>
				<td>
					jQuery UI の draggable や sortable で必要なので使用させて頂いています。</td>
			</tr>
			<tr>
				<td>
					<a href="http://excanvas.sourceforge.net/" target="_blank">ExplorerCanvas</a></td>
				<td>
					-</td>
				<td>
					BeautyTips で必要なので使用させて頂いています。</td>
			</tr>
		</tbody>
	</table>
</div>
<p>
	&nbsp;</p>