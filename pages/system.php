<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('システム要件') ?>
<?php $bcBaser->setDescription('baserCMSの導入について、サーバーサイドのシステム要件をご紹介いたします。') ?>
<!-- BaserPageTagEnd -->

<h1>
	システム要件</h1>
<div class="Section" id="section1">
	<h2>
		<span>ソフトウェア</span></h2>
	<ul>
		<li>
			サーバーOS：Linux glibc 2.1 以降 Or FreeBSD 5.4以降 Or Windows 2000以降</li>
		<li>
			Webサーバー：Apache</li>
		<li>
			開発言語：PHP5.2.17以降を推奨<br />
			<span class="Notice">※ baserCMS１系の場合、PHP4.3.10以降</span>　　　　　　　　</li>
		<li>
			データベース：MySQL4.1以降 Or PostgreSQL7.4以降 Or <strong>不要</strong><br />
			<span class="Notice">※ データベース環境がない場合は、SQLite3やCSVファイルでも動作可能です。<br />
			ただし、大量のデータを扱う場合は、データベースサーバー環境のご用意をおすすめします。</span></li>
		<li>
			推奨Apacheモジュール：Rewrite<br />
			<span class="Notice">※ なくても動作しますが、ない場合、URL形式、表示速度に影響します。</span></li>
		<li>
			推奨PHPモジュール：GD2<br />
			<span class="Notice">※ なくても動作しますが、ない場合、ファイルアップロード時の画像の自動リサイズができません。</span></li>
		<li>
			管理システム対応ブラウザ：Chrome・Firefox・Opera・Safari・InternetExplorer8以降を推奨<br />
			<span class="Notice">※ baserCMS１系の場合、InternetExplorer6以降</span></li>
	</ul>
</div>
<div class="Section" id="section2">
	<h2>
		<span>ハードウェア</span></h2>
	<ul>
		<li>
			CPU：intel Pentium互換 300MHz以上を推奨</li>
		<li>
			メモリー：OSの最低動作環境以上</li>
		<li>
			ハードディスク：空領域 ５MB以上を推奨</li>
	</ul>
</div>
<p>
	&nbsp;</p>