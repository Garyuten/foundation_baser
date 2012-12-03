<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('HOME') ?>
<?php $bcBaser->setDescription('') ?>
<!-- BaserPageTagEnd -->
<?php
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
			<div class="three mobile-two columns">
				<img src="<?php echo $themed; ?>/img/dummy-w400h300.png" alt="" />
				<div class="panel">
					<h4>Description</h4>
					<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
				</div>
			</div>
			<div class="three mobile-two columns">
				<img src="<?php echo $themed; ?>/img/dummy-w400h300.png" alt="" />
				<div class="panel">
					<h4>Description</h4>
					<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
				</div>
			</div>
			<div class="three mobile-two columns">
				<img src="<?php echo $themed; ?>/img/dummy-w400h300.png" alt="" />
				<div class="panel">
					<h4>Description</h4>
					<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
				</div>
			</div>
			<div class="three mobile-two columns">
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