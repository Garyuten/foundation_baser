<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('baserCMSのデモサイト') ?>
<?php $bcBaser->setDescription('baserCMSのデモサイトをご紹介いたします。') ?>
<!-- BaserPageTagEnd -->

<?php $bcBaser->css('page/demo',array('inline'=>false)) ?>
<h1 id="DemoIndex">
	<span>デモサイトのご紹介</span></h1>
<div class="Section">
	<p>
		baserCMSのデモサイトとしてフロント機能と管理機能の操作を体験できます。<br />
		管理機能のバージョンはbaserCMS2.0.0になります。</p>
	<p>
		<small>※ デモサイトのデータは30分おきにリセットされますので各種データの追加、変更、削除等ご自由にご確認ください。</small><br />
		<small>※ 一切の機能制限を行っていない為、別の方の操作内容によっては正常に動作しなくなる可能性もあります。その場合は、しばらく待って、データがリセットされてからお試しください。</small></p>
</div>
<div class="Section" id="section1">
	<h2>
		<span>フロント機能デモ</span></h2>
	<div class="FloatRight Screenshot">
		<a href="http://demo.basercms.net/" target="_blank"><img alt="フロント機能イメージ" src="http://basercms.net/img/demo/index_01.png" /></a></div>
	<div>
		<p>
			公開サイド（フロント）のデモサイトです。初期状態では、デモ用のテーマが適用されています。</p>
		<p>
			<a class="navi" href="http://demo.basercms.net/" target="_blank">フロント機能デモ</a></p>
		<h3>
			チェックポイント</h3>
		<ul>
			<li>
				リンクをクリックして各ページを確認してみてください。</li>
			<li>
				実際にお問い合わせフォームでメールを送信してみてください。</li>
			<li>
				携帯電話からもアクセスしてみてください。<br />
				http://demo.basercms.net/</li>
		</ul>
	</div>
</div>
<div class="Section" id="section2">
	<h2>
		<span>管理機能デモ</span></h2>
	<div class="FloatRight Screenshot">
		<a href="http://demo.basercms.net/admin/users/login" target="_blank"><img alt="管理機能イメージ" src="http://basercms.net/img/demo/index_03.png" /></a></div>
	<div>
		<p>
			管理サイドのデモサイトです。管理機能デモで更新した内容はフロント機能デモに反映されます。</p>
		<p>
			<a class="navi" href="http://demo.basercms.net/admin/users/login" target="_blank">管理機能デモ</a></p>
		<ul>
			<li>
				<strong>管理ユーザー</strong><br />
				アカウント：admin<br />
				パスワード：demodemo</li>
			<li>
				<strong>運営ユーザー（機能制限あり）</strong><br />
				アカウント：operator<br />
				パスワード：demodemo</li>
		</ul>
		<h3>
			チェックポイント</h3>
		<ul>
			<li>
				管理ユーザーと運営ユーザーの両方でログインして、画面の違いを確認してみてください。</li>
			<li>
				システム設定より、WEBサイト名等を編集して公開サイドにどのように反映されるか確認してみてください。</li>
			<li>
				ページ管理、ニュース管理、お問合せ管理より実際に記事や項目を編集して公開サイドにどのように反映されるか確認してみてください。</li>
			<li>
				システム設定画面の左側のメニューにプラグイン管理がありますので、アップローダープラグインをインストールして実際にファイルをアップロードしてみてください。（登録ボタンでインストールしますが、他の方が既にインストールされている場合、登録ボタンは表示されません。その場合、無効ボタンで一旦無効化します。）</li>
		</ul>
	</div>
</div>