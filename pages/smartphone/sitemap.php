<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('サイトマップ') ?>
<?php $bcBaser->setDescription('baserCMS inc.のサイトマップページ') ?>
<!-- BaserPageTagEnd -->
<h2 class="contents-head">サイトマップ</h2>
<?php $bcBaser->sitemap() ?>
<ul class="section sitemap">
	<li><?php $bcBaser->link("新着情報","/s/news/index") ?></li>
	<li><?php $bcBaser->link("お問い合わせ","/s/contact/index") ?>	</li>
</ul>
