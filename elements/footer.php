<?php
/**
 * フッター
 */

//テーマファイルパスの取得
$themed = $bcBaser->getUrl( "/themed/".$this->theme);

?>
<hr />
<div id="topLink"><a href="#pagetop"><img src="<?php echo $themed; ?>/img/pgtop.png" alt="このページ上部へ"></a></div>


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


<!-- breadcrumbs -->
<div class="row">
	<div class="twelve columns">
		<ul class="breadcrumbs">
			<li><a href="#">Home</a></li>
			<li><a href="#">Features</a></li>
			<li class="unavailable"><a href="#">Gene Splicing</a></li>
			<li class="current"><a href="#">Home</a></li>
		</ul>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- Footer -->

<footer class="row">
	<div class="twelve columns">
		<hr />
		<div class="row">
			<div class="six columns">
				<address>&copy; Copyright CGFM LLC. All Rights Reserved.</address>
			</div>
			<div class="six columns">
				<ul class="link-list right">
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- End Footer -->
