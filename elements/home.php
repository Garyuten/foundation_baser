<?php
/**
 * HOME専用テンプレート
 */
//テーマファイルパスの取得
$themed = $bcBaser->getUrl("/themed/" . $this->theme);
?>

<?php $bcBaser->content(); //スライドから商品説明の4カラムまで。お知らせフィードはテンプレート埋め込み。サイドバーはウィジェットで管理。 ?>
<?php /* <!--
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
--> */ ?>
ああああああああああ
<div class="row">
	<div class="twelve columns">
		<div class="row">

			<!-- Content -->
			<div class="eight columns">
				<!-- Feed -->
				<h4><a href="<?php $bcBaser->url('/'); ?>info/index" title="お知らせ一覧はこちら">News</a></h4><hr/>
				<?php $bcBaser->feed(2); ?>
				<div class="item">
					<h5><a href="#">Post Title 1</a></h5>
					<h6 class="subheader">
						Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
					</h6>
					<h6><a href="#">Read More »</a></h6>
				</div><hr/>
				<div class="item">
					<h5><a href="#">Post Title 2</a></h5>
					<h6 class="subheader">
						Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
					</h6>
					<h6><a href="#">Read More »</a></h6>
				</div><hr/>
				<div class="item">
					<h5><a href="#">Post Title 3</a></h5>
					<h6 class="subheader">
						Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
					</h6>
					<h6><a href="#">Read More »</a></h6>
				</div>
				<p class="right"><a href="#">Go To Blog »</a></p>
				<!-- End Feed -->
			</div>

			<div class="four columns hide-for-small">

				<h4>サイドメニュー</h4><hr/>
				<a href="#">
					<div class="panel radius callout" align="center">
						<strong>商品のご予約はこちらから</strong>
					</div>
				</a>

				<a href="#">
					<div class="panel radius callout" align="center">
						<strong>商品のご予約はこちらから</strong>
					</div>
				</a>

				<a href="#">
					<div class="panel radius callout" align="center">
						<strong>お問い合わせ窓口はこちらから</strong>
					</div>
				</a>

			</div>
			<!-- End Content -->
		</div>
	</div>
</div>
