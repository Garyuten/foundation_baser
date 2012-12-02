<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('プラグイン開発について') ?>
<?php $bcBaser->setDescription('baserCMSのプラグイン開発についてご説明します。') ?>
<!-- BaserPageTagEnd -->

<h1>
	プラグイン開発について</h1>
<div class="Section">
	<p>
		baserCMS は、独自のプラグイン管理機能を持ち、プラグインのインストール、有効化、無効化の仕組み、また、本体での処理をフックするプラグインフック機能を提供しています。<br />
		基本的には、CakePHP のプラグイン開発に準じますが、baserCMS の管理機能に認識させる為、baserCMS独自のルールを組み込む必要があります。</p>
</div>
<div class="Section" id="section1">
	<h2>
		<span>CakePHP のプラグイン開発に準じてプラグインを開発する</span></h2>
	<p>
		前述したとおり、baserCMS は基本的に CakePHP の開発手法に準じて開発されていますので、プラグインについても CakePHP の開発に準ずる必要があります。 CakePHP のプラグイン開発については次のリンク先を参考にしてください。</p>
</div>
<div class="Section" id="section2">
	<h2>
		<span>コントローラーは BaserPluginAppController を継承させる</span></h2>
	<p>
		コントローラーでは、baserCMS にパッケージされている BaserPluginAppController を継承させます。</p>
	<pre>
class DemoController extends BaserPluginAppController{
	var $name = &#39;Demo&#39;;	// nameプロパティをちゃんと定義しておく【重要】
}
</pre>
	<p>
		BaserPluginAppController は 事前に読み込んでおく必要あります。</p>
	<pre>
App::import(&#39;Controller&#39;, &#39;BaserPluginAppController&#39;);</pre>
</div>
<div class="Section" id="section3">
	<h2>
		<span>モデルでは BaserPluginAppModel を継承させる</span></h2>
	<p>
		プラグインで利用するモデルでは、baserCMS にパッケージされている BaserPluginAppModel を継承させます。</p>
	<pre>
class Demo extends BaserPluginAppModel {
	var $plugin = &#39;Demo&#39;;
}
</pre>
	<p>
		BaserPluginAppModel は 事前に読み込んでおく必要あります。</p>
	<pre>
App::import(&#39;Model&#39;, &#39;BaserPluginAppModel&#39;);</pre>
</div>
<div class="Section">
	<h2>
		<span>本体の機能を拡張する</span></h2>
	<p>
		baserCMSのプラグインは、本体に新しいコンテンツとしての機能を追加する以外に、本体の既にある機能の拡張を行ったり、振る舞いや表示内容を変えるという事も可能です。</p>
	<p>
		本体機能の拡張を行うには、<a href="/manuals/2/programmers/5.html#PluginHook">プラグインフック</a>という仕組みを利用します。<br />
		この仕組みによって、「ページ機能の入力項目を増やす」というような事も可能となります。</p>
	<ul>
		<li>
			<a href="/manuals/2/programmers/5.html#PluginHook">プラグインフックについて</a></li>
	</ul>
</div>
<div class="Section" id="section4">
	<h2>
		<span>インストール用のスキーマファイルと初期データファイルを準備する</span></h2>
	<p>
		データベースを利用するプラグインの場合は、テーブル定義用のスキーマファイルを用意します。また、初期データを登録する場合は、CSVファイルで作成します。</p>
	<h3>
		スキーマファイルの作成と設置</h3>
	<p>
		スキーマファイルの作成は「スキーマファイル生成ツール」を利用する事で簡単に行う事ができます。<br />
		※ スキーマファイルとは、コアフレームワークであるCakePHPで利用できる形式のデータベーステーブルの定義ファイルです。</p>
	<h4>
		１．データベースに任意のテーブルを作成する</h4>
	<p>
		データベースは MySQL をベースに開発を行なってください。<br />
		MySQLを利用する事により、適切なスキーマファイルを生成する事ができます。</p>
	<p>
		テーブル名は、インストール時に設定したプレフィックスと、純粋なテーブル名の間にプラグイン用のプレフィックス「pg_」を付加します。</p>
	<pre>
（例）インストール時のプレフィックスが「bc_」で、純粋なテーブル名が、「pens」の場合
　　　　bc_pg_pens</pre>
	<p>
		<small>※ v1.6.7 より、CSV、SQLiteはインストール時のプレフィックスはありません。</small></p>
	<p>
		テーブルには基本的に次のフィールドを含めてください。</p>
	<ul>
		<li>
			id・・・プライマリーキー用（CSVで利用する場合、プライマリーキーは自動的にidとなります）</li>
		<li>
			created・・・レコード作成日（自動更新されます）</li>
		<li>
			modified・・・レコード更新日（自動更新されます）</li>
	</ul>
	<h4>
		２．管理画面にログインし、スキーマファイル生成画面を開く</h4>
	<p>
		次のURLにアクセスすると、テーブルの一覧が表示されます。</p>
	<p>
		http://{baserCMS設置URL}/admin/tools/write_schema</p>
	<h4>
		３．生成する対象のテーブルを選択し、「生成」ボタンをクリックする</h4>
	<p>
		schema.zipとしてダウンロードする事ができますので、ダウンロードしたファイルを解凍し、生成されたスキーマファイルを確認します。<br />
		{プレフィックスなしのテーブル名}.php というファイルが出来ていればスキーマファイルの生成は完了です。</p>
	<h4>
		４．生成されたスキーマファイルを設置する</h4>
	<p>
		インストール時に実行するスキーマファイルは以下のパスに設置します。</p>
	<pre>
/app/plugins/{プラグイン名}/config/sql/{プレフィックスなしのテーブル名}.php
</pre>
</div>
<div class="Section" id="section5">
	<h3>
		初期データファイルの作成と設置</h3>
	<h4>
		１．CSVファイルを作成する</h4>
	<p>
		初期データファイルはCSVファイルで作成します。CSVファイルは次の仕様とします。</p>
	<ul>
		<li>
			文字コードは、Shift-JIS</li>
		<li>
			各フィールドをカンマで区切る</li>
		<li>
			各フィールドをダブルコーテーション（&quot;)で囲む</li>
		<li>
			フィールド内のダブルコーテーションは、ダブルコーテーションでエスケープする</li>
		<li>
			１行目は、フィールド名の定義とする</li>
	</ul>
	<pre>
（例）
&quot;id&quot;, &quot;name&quot;,&quot;title&quot;,&quot;created&quot;,&quot;modified&quot;
&quot;1&quot;,&quot;test&quot;,&quot;簡単な&quot;&quot;プラグイン&quot;&quot;の作り方&quot;,&quot;&quot;,&quot;&quot;</pre>
	<h4>
		２．作成したCSVファイルを設置する</h4>
	<p>
		インストール時に実行するCSVファイルは以下のパスに設置します。</p>
	<pre>
/app/plugins/{プラグイン名}/config/data/default/{プレフィックスなしのテーブル名}.csv</pre>
</div>
<div class="Section" id="section6">
	<h2>
		<span>インストール用設定ファイルを準備する</span></h2>
	<p>
		インストール画面で利用する設定値を記述する設定ファイルは、config.php というファイル名で以下のパスに設置します。</p>
	<pre>
/app/plugins/{プラグイン名}/config.php</pre>
	<p>
		設定ファイルには下記の設置値を記述します。</p>
	<pre>
$title = &#39;{プラグイン名（日本語可）}&#39;;
$description = &#39;{プラグインの説明文}&#39;;
$adminLink = &#39;{管理画面用初期ページへのリンク}&#39;;
$installMessage = &#39;{インストール画面に表示するメッセージ}&#39;;
$author = &#39;{プラグインの作成者名}&#39;;
$url = &#39;{プラグイン作成者のホームページURL}&#39;;
</pre>
</div>
<div class="Section" id="section7">
	<h2>
		<span>インストールスクリプトを準備する</span></h2>
	<p>
		インストールスクリプトは init.php というファイル名で以下のパスに設置します。<br />
		このスクリプトは、PluginsController の admin_add メソッドより呼び出されます。</p>
	<pre>
/app/plugins/{プラグイン名}/config/init.php</pre>
	<p>
		インストール用の スキーマファイル、初期データファイルを登録するには、下記メソッドを呼び出します。</p>
	<pre>
$this-&gt;Plugin-&gt;initDb(&#39;{プラグイン名}&#39;);
</pre>
</div>
<div class="Section" id="section8">
	<h2>
		<span>バージョンファイルを準備する</span></h2>
	<p>
		プラグインのバージョンを示すバージョンファイルを次のパスに設置します。</p>
	<pre>
/app/plugins/{プラグイン名}/VERSION.txt</pre>
	<p>
		バージョン番号は、上記ファイルの１行目に記述します。<br />
		baserCMSでは、３区切りまでのバージョン番号を認識します。</p>
	<pre>
（例）1.2.3・・・{メジャーバージョン}.{マイナーバージョン}.{パッチ}</pre>
</div>
<p>
	&nbsp;</p>