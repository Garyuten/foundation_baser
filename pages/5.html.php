<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('baserCMSのCakePHP拡張について') ?>
<?php $bcBaser->setDescription('baserCMS は、基本的に従来のCakePHPの開発手法と同様の手法にて開発が可能ですが、独自に拡張を行っている部分もあります。
ここでは、その拡張された内容についてご説明します。') ?>
<!-- BaserPageTagEnd -->

<h1>
	baserCMSのCakePHP拡張について</h1>
<div class="Section">
	<p>
		baserCMS は、基本的に従来のCakePHPの開発手法と同様の手法にて開発が可能ですが、独自に拡張を行っている部分もあります。 ここでは、その拡張された内容についてご説明します。</p>
</div>
<div class="Section" id="section1">
	<h2>
		<span>CSV データベース</span></h2>
	<p>
		baserCMS は、CSVファイルに対してデータを取得、保存する為の BcCsvDbo クラスを梱包しています。<br />
		BcCsvDbo は、CakePHP が発行する SQL を解析して、CSVファイルに対するオペレーションを行う仕組みとしている為、開発者は、CSVファイルを意識せず、モデルクラスの開発等を行えます。<br />
		ただし、BcCsvDbo の実装はけして強力なものではなく、GROUP BY 句やサブクエリ等は実行できず、排他制御についても、ファイルロックベースの処理となっているので同時接続に弱く、大規模な WEB システム開発には向いていません。<br />
		大規模なWEB システム開発を行う場合は、MySQL や PostgreSQL 等データベースサーバーの利用をおすすめします。</p>
</div>
<div class="Section" id="section2">
	<h2 id="PluginHook">
		<span>プラグインフック</span></h2>
	<p>
		CakePHP が提供するプラグインの実装はあくまでも、追加機能としてのプラグインという位置づけになっていますが、baserCMS は、プラグインに対し、フック機能をつける 事で、本体の出力内容を変更できるようになっています。<br />
		プラグインフック機能というのは、CakePHP が提供する コンポーネント の beforeFilter や、ヘルパーの afterLayout 等のフックメソッドをプラグイン側からフックする為の実装です。 これにより本体のビューが出力する内容を書き換えたりという事ができるようになります。</p>
	<p>
		フックメソッドをフックするには、コンポーネントまたはヘルパー、ビヘイビアで実装します。<br />
		registerHooks プロパティにフック対象のメソッド名を配列で定義し、実装内容をメソッドとして定義します。<br />
		※ 各サポートメソッドの引き数は、baserフォルダ内の各PluginHookクラス（PluginHookComponent / PluginHookHelper / PluginHookBehavior）を参考にしてください。</p>
	<h3>
		フックコンポーネント</h3>
	<p>
		フック用のコンポーネントを設置する場合には、下記のパスにクラスファイルを設置します。</p>
	<pre>
● {プラグイン名}HookComponent
/app/plugins/{プラグイン名}/controllers/components/{プラグイン名}_hook.php
</pre>
	<p>
		[サポートメソッド]<br />
		initialize / startup / beforeRender / shutdown / beforeRedirect / afterPageAdd / afterPageEdit</p>
	<h3>
		フックヘルパー</h3>
	<p>
		フック用のヘルパーを設置する場合には、下記のパスにクラスファイルを設置します。</p>
	<pre>
● {プラグイン名}HookHelper
/app/plugins/{プラグイン名}/views/helpers/{プラグイン名}_hook.php
</pre>
</div>
<div class="Section" id="section3">
	<p>
		[サポートメソッド]<br />
		beforeRender / afterRender / beforeLayout / afterLayout / beforeFormCreate / afterFormCreate / beforeFormEnd / afterFormEnd / beforeFormInput / afterFormInput / baserHeader / baserFooter</p>
	<h3>
		フックビヘイビア</h3>
	<p>
		フック用のビヘイビアを設置する場合には、下記のパスにクラスファイルを設置します。</p>
	<pre>
● {プラグイン名}HookBehavior
/app/plugins/{プラグイン名}/models/behaviors/{プラグイン名}_hook.php
</pre>
	<p>
		[サポートメソッド]<br />
		setup / beforeFind / afterFind / beforeValidate / beforeSave / beforeDelete / afterDelete / onError / afterBaserGetLink / afterElement / beforeBaserGetLink / beforeElement</p>
	<h2>
		<span>ビューファイルのサブフォルダ化</span></h2>
	<p>
		一つのコントローラーで利用するビューファイルが増えてくると管理も大変になってきます。<br />
		baserCMSでは、管理画面等のプレフィックスルーティングを行った場合に、自動でサブフォルダを参照する仕組みとなっています。</p>
	<pre>
（例）UsersController の admin_index メソッド用のビューファイル
CakePHP・・・{viewsディレクトリ}/users/admin_index.ctp
BaserCMS・・・{viewsディレクトリ}/users/admin/index.ctp
</pre>
</div>
<h2>
	<span>BcBaserHelper拡張</span></h2>
<div class="Section">
	<p>
		CakePHPにおいて、新しいヘルパをビューで利用する場合、コントローラーにヘルパを追加する必要があるのですが、コントローラーをカスタマイズせずに、ヘルパの機能を追加したい場合があります。</p>
	<p>
		例えば、ページ編集画面で利用できるヘルパーをプラグインとして増やしたい場合は、新しいヘルパーをプラグインの中に梱包し、PagesControllerにそのヘルパーを定義する必要があります。この時baserディレクトリ内のPagesControllerを編集してしまえば、baserCMSのアップデートの際、上書きされてしまいます。かと言って、PagesControllerをカスタマイズする為に、app/controllersに配置する前提であると、利用者は不便になってしまいます。</p>
	<p>
		そこで、baserCMSでは、既に存在する「BcBaserHelper」を拡張する仕組みを持っています。<br />
		プラグインのヘルパーフォルダ内に次の命名規則でヘルパーファイルを設置すると、BcBaserHelperのインスタンスを通して呼び出す事ができます。</p>
	<pre>
● {プラグイン名}BaserHelper
/app/plugins/{プラグイン名}/views/helpers/{プラグイン名}_baser.php</pre>
	<p>
		この場合、上記ヘルパに test というメソッドを実装すれば、ページ編集画面内で次のように呼び出す事ができます。</p>
	<pre>
&lt;?php $bcBaser-&gt;test() ?&gt;</pre>
	<p>
		これは、ページ管理では、BcBaserHelperが読み込まれる前提となっており、それを利用している事になります。<br />
		(ちなみに、これは、BehaviorがModelを拡張する仕組みと同じです）</p>
</div>