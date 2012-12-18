<?php
/**
 * HOME専用テンプレート
 */
//テーマファイルパスの取得
$themed = $bcBaser->getUrl("/themed/" . $this->theme);
?>

<div class="row">
	<div class="twelve columns">

		<!-- Desktop Slider -->

		<div class="hide-for-small">
			<div id="featured">
				<img src="<?php echo $themed; ?>/img/img_top_main1.png" alt="slide image" />
				<img src="<?php echo $themed; ?>/img/img_top_main2.png" alt="slide image" />
				<img src="<?php echo $themed; ?>/img/img_top_main3.png" alt="slide image" />
			</div>
		</div>

		<!-- End Desktop Slider -->


		<!-- Mobile Header -->
		<div class="row">
			<div class="mobile-four show-for-small"><br>
				<img src="<?php echo $themed; ?>/img/img_top_main_small.jpg" />
			</div>
		</div>
		<!-- End Mobile Header -->

	</div>
</div>

<div class="row">
	<div class="twelve columns">
		<div class="row">

			<!-- Thumbnails -->
			<div class="three columns">
				<img src="<?php echo $themed; ?>/img/dummy-w400h300.png" alt="" />
				<div class="panel">
					<h4>Description</h4>
					<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
				</div>
			</div>
			<div class="three columns">
				<img src="<?php echo $themed; ?>/img/dummy-w400h300.png" alt="" />
				<div class="panel">
					<h4>Description</h4>
					<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
				</div>
			</div>
			<div class="three columns">
				<img src="<?php echo $themed; ?>/img/dummy-w400h300.png" alt="" />
				<div class="panel">
					<h4>Description</h4>
					<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
				</div>
			</div>
			<div class="three columns">
				<img src="<?php echo $themed; ?>/img/dummy-w400h300.png" alt="" />
				<div class="panel">
					<h4>Description</h4>
					<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
				</div>
			</div>
			<!-- End Thumbnails -->

		</div>
	</div>
</div>

<div class="row">
	<div class="twelve columns">
		<div class="row">
			<!-- Content -->
			<div class="eight columns">

				<?php //$bcBaser->content(); //スライドから商品説明の4カラムまで。お知らせフィードはテンプレート埋め込み。サイドバーはウィジェットで管理。 ?>

				<!-- Feed -->
				<h4><a href="<?php $bcBaser->url('/'); ?>info/index" title="お知らせ一覧はこちら">News</a></h4><hr/>
				<?php $bcBaser->feed(2); ?>

				<h4><a href="http://basercms.net/news/" target='_blank' title="baserCMSニュース一覧はこちら">baserCMS News</a></h4><hr/>
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
