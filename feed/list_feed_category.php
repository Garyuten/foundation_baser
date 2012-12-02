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
<?php if (!empty($items)): ?>
  <ul class="ListFeedCategory">
    <?php foreach ($items as $key => $item): ?>
        <?php
        $blogName = null;
        $url = $item['link']['value'];
        if (strpos($url, '/event/') >= 1) {
          $blogName = "イベント情報";
          $blogNameSlug = "Event";
        } elseif (strpos($url, '/activity/') >= 1) {
          $blogName = "活動実績";
          $blogNameSlug = "Activity";
        }
        ?>
        <!--
        <?php print_r($item) ?>
        -->
        <?php $no = sprintf('%02d', $key + 1) ?>
        <?php if ($key == 0): ?>
          <?php $class = ' class="First feed' . $no . '"' ?>
        <?php elseif ($key == count($items) - 1): ?>
          <?php $class = ' class="Last feed' . $no . '"' ?>
        <?php else: ?>
          <?php $class = ' class="feed' . $no . '"' ?>
        <?php endif ?>
      <li<?php echo $class ?>>
        <?php if( $item['category']['value']!=''): ?><div class="EntryCtg"><?php echo $item['category']['value']; ?></div><?php endif; ?>
        <div class="EntryMeta">
          <p class="EntryDate"><?php echo date("Y年m月d日", strtotime($item['pubDate']['value'])); ?></p>
          <p class="EntryTitle"><a href="<?php echo $item['link']['value']; ?>"><?php echo $item['title']['value']; ?></a></p>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
<?php else: ?>
  <p>ー</p>
<?php endif; ?>
