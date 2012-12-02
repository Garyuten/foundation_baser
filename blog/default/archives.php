<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ブログアーカイブ一覧
 * 
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2011, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi 
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2011, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			baser.plugins.blog.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$bcBaser->css(array('/blog/css/style','colorbox/colorbox'), array('inline' => false));
$bcBaser->js('jquery.colorbox-min', false);
//$bcBaser->setTitle($this->pageTitle.'｜'.$blog->getTitle());
$bcBaser->setDescription($blog->getTitle().'｜'.$bcBaser->getContentsTitle().'のアーカイブ一覧です。');

// パラメーターによるブログアーカイブの種別判断
$pass = $this->params['pass'];
$title = '';

if($pass[0] == 'category') {
	$title = 'カテゴリ : ';
}elseif($pass[0] == 'tag') {
	$title = 'タグ : ';
}elseif($pass[0] == 'date') {
	$title = 'バックナンバー : ';
}

?>
<?php include(dirname(__FILE__). '/index.php' ); ?>