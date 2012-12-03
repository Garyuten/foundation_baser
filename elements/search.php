<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] サイト内検索フォーム
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
 * @package			baser.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
if(!empty($this->passedArgs['num'])) {
	$url = array('plugin' => null, 'controller' => 'contents', 'num' => $this->passedArgs['num']);
} else {
	$url = array('plugin' => null, 'controller' => 'contents');
}
?>
<div class="row collapse search-box">
	<?php echo $bcForm->create('Content', array('type' => 'get', 'action' => 'search', 'url' => $url)) ?>
		<div class="eight mobile-three columns">
			<?php if(unserialize($bcBaser->siteConfig['content_categories'])) : ?>
			<?php //echo $bcForm->input('Content.c', array('type' => 'select', 'options' => unserialize($bcBaser->siteConfig['content_categories']), 'empty' => 'カテゴリ： 指定しない　')) ?>
			<?php endif ?>
			<?php echo $bcForm->input('Content.q', array('placeholder'=>'search keyword')) ?>
		</div>
		<div class="four mobile-one columns">
			<?php echo $bcForm->submit('検索', array('div'=>false, 'class'=>'postfix small button')) ?>
		</div>
	<?php echo $bcForm->end() ?>
</div>