<?php
/**
 * デフォルトレイアウト
 */

?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
		<?php $bcBaser->title() ?>
		<?php $bcBaser->metaDescription() ?>
		<?php $bcBaser->metaKeywords() ?>
    <meta name="author" content="">
		<?php $bcBaser->icon() ?>
		<?php $bcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>
		<?php //$bcBaser->css(array('import')) ?>


    <!-- Included CSS Files -->
		<?php
		$bcBaser->css(array(
				'style',
				'colorbox/colorbox'
		))
		?>
		<?php //$bcBaser->scripts() ?>
    <!-- Included JavaScript Files -->
		<?php
		$bcBaser->js(array(
				'foundation/modernizr.foundation',
				'foundation/jquery'
		))
		?>
		<?php $bcBaser->scripts() ?>

    <!-- google analytics -->
		<?php $bcBaser->element('google_analytics') ?>
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
		<?php
		$bcBaser->js(array(
				'html5shiv-printshiv'
		))
		?>
    <![endif]-->
	</head>
  <body>
		<?php $bcBaser->header() ?>
		<?php if ($bcBaser->isTop()): //HOME専用  ?>
			<?php //$bcBaser->element('home') ?>
			<?php include(dirname(__FILE__) . '/../elements/home.php'); ?>

		<?php else : //HOME以外   ?>
			<?php if (empty($blog)) : //ページ専用  ?>
				<?php
				include(dirname(__FILE__) . '/../elements/page.php');
				//include(dirname(__FILE__) . '/../elements/sidebar.php');
				?>

			<?php else : //ブログ専用  ?>
				<?php $bcBaser->content() ?>
				<?php
				//$bcBaser->element('sidebar');
				//include(dirname(__FILE__) . '/../elements/sidebar.php');
				?>

			<?php endif; ?>
		<?php endif; ?>

		<?php $bcBaser->footer() ?>

		<!-- Included JS Files (Uncompressed) -->
		<?php
		$bcBaser->js(array(
				'foundation/jquery.foundation.accordion',
				'foundation/jquery.foundation.alerts',
				'foundation/jquery.foundation.buttons',
				'foundation/jquery.foundation.forms',
				'foundation/jquery.foundation.mediaQueryToggle',
				'foundation/jquery.foundation.navigation',
				'foundation/jquery.foundation.orbit',
				'foundation/jquery.foundation.reveal',
				'foundation/jquery.foundation.tabs',
				'foundation/jquery.foundation.tooltips',
				'foundation/jquery.foundation.topbar',
				'foundation/jquery.placeholder',
				'foundation/app',
				'jquery.colorbox-min',
				'jquery.config'
		))
		?>
		<?php $bcBaser->func() ?>
	</body>
</html>