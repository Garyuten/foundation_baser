<?php
/**
 * ヘッダー
 */
//テーマファイルパスの取得
$themed = $bcBaser->getUrl( "/themed/".$this->theme);
?>
<?php //$bcBaser->element('search')   ?>

<header id="gHeader" class="row"><span class="guidance"><a name="pagetop" id="pagetop"><img src="<?php echo $blogName; ?>/img/spacer.gif" alt="このページのいちばん上です" /></a></span>
	<div class="twelve columns">
		<!-- Navigation -->

		<nav class="top-bar contain-to-grid">
			<ul>
				<li class="name"><h1><a href="<?php $bcBaser->url('/'); ?>">株式会社baserCMS</a></h1></li>
				<li class="toggle-topbar"><a href="#"></a></li>
			</ul>

			<section><span class="guidance"><img src="img/spacer.gif" alt="ここからメインメニュー" /></span>
				<div class="left">
					<?php $bcBaser->element('global_menu') ?>
				</div>
				<div class="right">
					<div class="row collapse">
						<form method="post">
							<div class="eight mobile-three columns">
								<input type="text" name="search" placeholder="search keyword">
							</div>
							<div class="four mobile-one columns">
								<input type="submit" class="postfix small button" value="search">
							</div>
						</form>
					</div>
				</div>
			</section>
		</nav>
		<!-- End Navigation -->
	</div>
</header>
