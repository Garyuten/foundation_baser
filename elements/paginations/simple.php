<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ページネーションシンプル
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
if(empty($paginator)) {
	return;
}
if(!isset($modules)) {
	$modules = 8;
}
?>
<?php $paginator->options = array('url' => $this->passedArgs) ?>
<?php if((int)$paginator->counter(array('format'=>'%pages%')) > 1): ?>
<ul class="pagination">
<li class="arrow"><?php echo $paginator->prev('«', array('class'=>'prev'), null, array('class'=>'disabled')) ?></li>
<?php echo $paginator->numbers(
				array('tag'=> 'li','separator' => '', 'class' => 'number', 'modulus' => $modules),
				array('class' => 'page-numbers')) ?>
<li class="arrow"><?php echo $paginator->next('»', array('class'=>'next'), null, array('class'=>'disabled')) ?></li>
</ul>
<?php endif; ?>
