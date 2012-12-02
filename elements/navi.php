<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ナビゲーション
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
if ($this->viewPath == 'home'){
	echo '<strong>ホーム</strong>';
}else{
	$navis = $bcBaser->getNavis();
	if (!empty($navis)){
		foreach($navis as $key => $value){
			$bcBaser->addCrumb($key,$value);
		}
	}
	if ($this->viewPath != 'home' && $title_for_element){
		$bcBaser->addCrumb('<strong>'.$title_for_element.'</strong>');
	}elseif($this->name == 'CakeError'){
		$bcBaser->addCrumb('<strong>404 NOT FOUND</strong>');
	}
	$bcBaser->crumbs(' &gt; ','ホーム');
}
?>