<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] グロバールメニュー
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

if(!empty($class)){

}
?>
<ul class="global-menu <?php if(isset($class) && $class){ echo $class; } ?>">
	<?php if(empty($menuType)) $menuType = '' ?>
		<?php $globalMenus = $bcBaser->getMenus() ?>
		<?php if(!empty($globalMenus)): ?>
			<?php
			//フッターのみ 先頭に[HOME][更新情報]を追加する
      /*
			if(isset($footer) && $footer) {
				$homeLink = array(
					'GlobalMenu' => array(
						'name' => 'HOME',
						'link' => $bcBaser->getUrl('/'),
						'status' => 1
					)
				);
				$newsLink = array(
					'GlobalMenu' => array(
						'name' => 'お知らせ',
						'link' => $bcBaser->getUrl('/news'),
						'status' => 1
					)
				);
				
				$conferenceLink = array(
					'GlobalMenu' => array(
						'name' => 'ご相談・お問い合わせ',
						'link' => $bcBaser->getUrl('/conference/index'),
						'status' => 1
					)
				);
				
				array_unshift( $globalMenus,$homeLink,$newsLink);
				array_push ( $globalMenus, $conferenceLink);
				//print_r($footer);
			}
      */
			?>
			<?php foreach($globalMenus as $key => $globalMenu): ?>
				<?php $no = sprintf('%02d',$key+1) ?>
				<?php if($globalMenu['GlobalMenu']['status']): ?>
					<?php if($key == 0): ?>
						<?php $class = ' class="first menu'.$no.'"' ?>
					<?php elseif($key == count($globalMenus) - 1): ?>
						<?php $class = ' class="last menu'.$no.'"' ?>
					<?php else: ?>
						<?php $class = ' class="menu'.$no.'"' ?>
					<?php endif ?>
					<?php if($this->base == '/index.php' && $globalMenu['GlobalMenu']['link'] == '/'): ?>
	<li<?php echo $class ?>><?php echo str_replace('/index.php','',$html->link($globalMenu['GlobalMenu']['name'],$globalMenu['GlobalMenu']['link'])) ?></li>
					<?php else: ?>
	<li<?php echo $class ?>>
	<?php $bcBaser->link($globalMenu['GlobalMenu']['name'],$globalMenu['GlobalMenu']['link']) ?>
	</li>
					<?php endif ?>
				<?php endif ?>
		<?php endforeach ?>
	<?php endif ?>
</ul>
