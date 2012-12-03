<?php
/**
 * サイドバー
 */

//全ページIDを取得
//$padeIds = $foundationBaser->getPageIds();
//var_dump($foundationBaser->getPageIds());
//var_dump($PageIds);
?>
<div id="side" class="three columns">
	<?php if (!empty($widgetArea)): ?>
		<?php if (!empty($blog)) : //ブログ用ウィジェット	?>
			<?php $bcBaser->element('widget_area', array('no' => $widgetArea)); //ブログ ?>
		<?php else: ?>
			<?php
			//固定ページ用ウィジェット
			$PageCategoryID = 0;
			if (!empty($bcPage) && is_object($bcPage) && isset($bcPage->data['PageCategory']['id'])) {
				$PageCategoryID = $bcPage->data['PageCategory']['id'];
			}
			//echo "[$PageCategoryID]";
			$uri = $this->here;
			if (strpos($uri, 'index.php') == 1) { //対策：スマートURLがOFF時
				$uri = substr($uri, strlen("index.php") + 1);
			}
			$Path = split("/", $uri); // "/"で分割して配列に格納
			$p = $Path[1];
			
			$PageCategoryID = null; //機能OFF。本来は一番上の親カテゴリを取得

			?>
			<?php if ($PageCategoryID) : //親カテゴリが格納されていれば、コンテンツ一覧を配下のページを階層で表示(未実装) ?>
				<div class="widget widget-local-navi">
					<ul class="clearfix">
						<?php $bcBaser->sitemap($PageCategoryID); ?>
					</ul>
				</div>
			<?php else: ?>
				<?php $bcBaser->element('widget_area', array('no' => $widgetArea)); ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
</div>


