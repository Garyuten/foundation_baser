<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] 記事一覧
 *
 * BaserHelper::blogPosts( コンテンツ名, 件数 ) で呼び出す
 * （例）<?php $bcBaser->blogPosts('news', 3) ?>
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
?>
<?php if($posts): ?>
<ul class="post-list">
	<?php foreach($posts as $key => $post): ?>
		<?php $class = array('clearfix', 'post-'.($key+1)) ?>
		<?php if($bcArray->first($posts, $key)): ?>
			<?php $class[] = 'first' ?>
		<?php elseif($bcArray->last($posts, $key)): ?>
			<?php $class[] = 'last' ?>
		<?php endif ?>
	<li class="<?php echo implode(' ', $class) ?>">
		<span class="date"><?php $blog->postDate($post, 'Y.m.d') ?></span><br />
		<span class="title"><?php $blog->postTitle($post) ?></span>
	</li>
	<?php endforeach ?>
</ul>
<?php else: ?>
<p class="no-data">記事がありません</p>
<?php endif ?>