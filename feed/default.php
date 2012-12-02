<?php
/**
 * フィード
 */
$feed->saveCachetime();

?>
<?php /*
<cake:nocache>
	<?php $feed->cacheHeader() ?>
</cake:nocache>
*/ ?>
<?php if(!empty($items)): ?>
<dl class="DlDateList">
	<?php foreach($items as $key => $item): ?>
  <?php
  //新着情報お知らせ用：ブログ名をURLから判別
  $blogName = null;
  $url = $item['link']['value'];
  if( strpos($url , '/event/') >= 1 ){
    $blogName = "イベント情報";
    $blogNameSlug = "Event";
  }
  elseif( strpos($url , '/activity/') >= 1 ){
    $blogName = "活動実績";
    $blogNameSlug = "Activity";
  }
  ?>
		<?php $no = sprintf('%02d',$key+1) ?>
		<?php if($key == 0): ?>
			<?php $class = ' class="First feed'.$no.'"' ?>
		<?php elseif($key == count($items) - 1): ?>
			<?php $class = ' class="Last feed'.$no.'"' ?>
		<?php else: ?>
			<?php $class = ' class="feed'.$no.'"' ?>
		<?php endif ?>
	<dt<?php echo $class ?>><?php echo date("Y年m月d日",strtotime($item['pubDate']['value'])); ?></dt>
	<dd><?php if (!empty($blogName)): ?><span class="BlogName BlogName-<?php echo $blogNameSlug; ?>"><?php echo $blogName; ?></span><?php endif; ?><a href="<?php echo $item['link']['value']; ?>"><?php echo $item['title']['value']; ?></a></dd>
	<?php endforeach; ?>
</dl>
<?php else: ?>
<p>ー</p>
<?php endif; ?>
