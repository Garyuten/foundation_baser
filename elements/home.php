<?php
/**
 * HOME専用テンプレート
 */
//テーマファイルパスの取得
$themed = $bcBaser->getUrl("/themed/" . $this->theme);
?>
<?php $bcBaser->content(); //スライドから商品説明の4カラムまで。お知らせフィードはテンプレート埋め込み。サイドバーはウィジェットで管理。 ?>
<div class="row">
	<div class="twelve columns">
		<div class="row">

			<!-- Content -->
			<div class="eight columns">
				<!-- Feed -->
				<h4><a href="<?php $bcBaser->url('/'); ?>info/index" title="お知らせ一覧はこちら">News</a></h4><hr/>
				<?php $bcBaser->feed(2); ?>

				<h4><a href="<?php $bcBaser->url('/'); ?>info/index" title="baserCMS一覧はこちら">baserCMS News</a></h4><hr/>
				<?php $bcBaser->feed(1); ?>
				<!-- End Feed -->
			</div>

			<div class="four columns hide-for-small">
				<?php $bcBaser->element('widget_area', array('no' => $widgetArea)); ?>
			</div>
			<!-- End Content -->
		</div>
	</div>
</div>
