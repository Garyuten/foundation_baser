<?php
/**
 * サイドバー
 */
?>
<div id="side">
	<?php if (!empty($widgetArea)): ?>
		<?php
		//ブログ
		if (!empty($blog)) {
			$bcBaser->element('widget_area', array('no' => $widgetArea)); //ブログ
		} else { //固定ページ
			$PageCategoryID = 0;
			if(!empty($bcPage) && is_object($bcPage) && isset($bcPage->data['PageCategory']['id'])){
				$PageCategoryID = $bcPage->data['PageCategory']['id'];
			}
			//echo "[$PageCategoryID]";

			$p = $Path[1];
			//echo $p;
			if ($p === 'service_businesses')
				$PageCategoryID = 3; //法人・個人事業経営者のお客様へ
			elseif ($p === 'service_individuals')
				$PageCategoryID = 4; //個人のお客様
			elseif ($p === 'legal_fee')
				$PageCategoryID = ''; //弁護士費用
			elseif ($p === 'about')
				$PageCategoryID = 14; //事務所紹介

			if ($PageCategoryID) {
				?>
				<div class="widget-area widget-area-1">
					<div class="widget widget-local-navi">
						<ul class="clearfix">
							<?php $bcBaser->sitemap($PageCategoryID); ?>
						</ul>
					</div>
					<?php
				} else {
					$bcBaser->element('widget_area', array('no' => $widgetArea));
				}
			}
			?>
		<?php endif ?>
	</div>