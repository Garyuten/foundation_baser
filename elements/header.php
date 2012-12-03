<?php
/**
 * ヘッダー
 */
//テーマファイルパスの取得
$themed = $bcBaser->getUrl( "/themed/".$this->theme);
?>
<header id="gHeader" class="row"><span class="guidance"><a name="pagetop" id="pagetop"><img src="<?php echo $themed; ?>/img/spacer.gif" alt="このページのいちばん上です" /></a></span>
	<div class="twelve columns">
		<!-- Navigation -->

		<nav class="top-bar contain-to-grid">
			<ul>
				<li class="name"><h1><a href="<?php $bcBaser->url('/'); ?>">株式会社baserCMS</a></h1></li>
				<li class="toggle-topbar"><a href="#"></a></li>
			</ul>

			<section><span class="guidance"><img src="<?php echo $themed; ?>/img/spacer.gif" alt="ここからメインメニュー" /></span>
				<div class="left">
					<?php $bcBaser->element('global_menu') ?>
				</div>
				<div class="right">
					<?php $bcBaser->element('search')   ?>
				</div>
			</section>
		</nav>
		<!-- End Navigation -->
	</div>
</header>
