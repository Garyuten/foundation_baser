<?php
/**
 * [モバイル] レイアウト
 */
?><cake:nocache><?php $bcMobile->header() ?></cake:nocache><?php $bcBaser->xmlHeader() ?><?php $bcBaser->docType() ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
<?php $bcBaser->charset() ?>
<?php $bcBaser->title() ?>
<?php $bcBaser->metaDescription() ?>
<?php $bcBaser->metaKeywords() ?>
</head>
<body bgcolor="#FFFFFF" id="<?php $bcBaser->contentsName() ?>">
<div style="color:#333333;margin:3px">
	<div style="display:-wap-marquee;text-align:center;background-color:#8ABE08;"> <span style="color:white;"><?php echo $bcBaser->siteConfig['name'] ?></span> </div>
	<center>
		<span style="color:#8ABE08;">Let's baserCMS!</span>
	</center>
	<hr size="2" style="width:100%;height:1px;margin:2px 0;padding:0;color:#8ABE08;background:#8ABE08;border:2px solid #8ABE08;" />
	<?php echo $content_for_layout; ?><br />
	<?php $bcBaser->element('contents_navi') ?><br />
	<hr size="1" style="width:100%;height:1px;margin:2px 0;padding:0;color:#8ABE08;background:#8ABE08;border:1px solid #8ABE08;" />
	<span style="color:#8ABE08">◆ </span>
	<?php $bcBaser->link('トップへ','/'.Configure::read('AgentSettings.mobile.alias').'/') ?>
	<hr size="1" style="width:100%;height:1px;margin:2px 0;padding:0;color:#8ABE08;background:#8ABE08;border:1px solid #8ABE08;" />
	<center>
		<?php $bcBaser->link($bcBaser->getImg('baser.power.gif', array('alt'=> 'baserCMS : Based Website Development Project', 'border'=> "0")),'http://basercms.net') ?>
		<?php $bcBaser->link($bcBaser->getImg('cake.power.gif', array('alt'=> 'CakePHP(tm) : Rapid Development Framework', 'border'=> "0")),'http://cakephp.jp') ?>
		<font size="1">(C)baserCMS</font>
	</center>
</div>
<?php $bcBaser->element('google_analytics') ?>
<?php $bcBaser->func() ?>
</body>
</html>