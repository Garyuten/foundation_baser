<?php
/**
 * フッター
 */
//テーマファイルパスの取得
$themed = $bcBaser->getUrl("/themed/" . $this->theme);
?>

<div class="row">
	<div class="twelve columns">
		<div id="topLink" class='right'><a href="#pagetop">go to page top</a></div>
	</div>
	<hr />
</div>

<!-- breadcrumbs -->
<div class="row breadcrumbs">
	<div class="twelve columns">
		<?php $bcBaser->element('crumbs'); ?>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- Call to Action Panel -->
<div class="row">
	<div class="twelve columns">

		<div class="panel">
			<h4>株式会社ベーサー・シー・エムエス</h4>

			<div class="row">
				<div class="nine columns">
					<p>〒888-8888 福岡県福岡市中央区那須苫１ー２３ー４５<br />TEL：000-000-0000 / FAX：000-000-0000</p>
				</div>
				<div class="three columns">
					<a href="#" class="radius button right">Contact Us</a>
				</div>
			</div>
		</div>

	</div>
</div>


<!-- Footer -->

<footer class="row">
	<div class="twelve columns">
		<hr />
		<div class="row">
			<div class="five columns">
				<address>&copy; Copyright CGFM LLC. All Rights Reserved.</address>
			</div>
			<div class="seven columns">
				<?php $bcBaser->element('global_menu' ,array('class'=>'link-list right')); ?>
			</div>
		</div>
	</div>
</footer>

<!-- End Footer -->
