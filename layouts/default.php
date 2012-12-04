<?php
/**
 * デフォルトレイアウト
 */

//テーマファイルパスの取得
$themed = $bcBaser->getUrl("/themed/" . $this->theme);
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ja"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="ja"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="ja"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="ja"> <!--<![endif]-->
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
	));
	echo "<!-- themed: " .$themed . " -->";
	?>
	<?php $bcBaser->scripts() ?>
	<!-- Included JavaScript Files -->
	<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/modernizr.foundation.js"></script>
	<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.js"></script>
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
			<?php include(dirname(__FILE__) . '/../elements/home.php'); ?>
		<?php else : //HOME以外   ?>
			<?php if (empty($blog)) : //ページ専用  ?>
				<?php
				include(dirname(__FILE__) . '/../elements/page.php');
				?>
			<?php else : //ブログ専用  ?>
				<?php $bcBaser->content() ?>
			<?php endif; ?>
		<?php endif; ?>

		<?php $bcBaser->footer() ?>

		<!-- Included JS Files (Uncompressed) -->
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.accordion.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.alerts.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.buttons.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.forms.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.mediaQueryToggle.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.navigation.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.orbit.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.reveal.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.tabs.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.tooltips.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.foundation.topbar.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/jquery.placeholder.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/foundation/app.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/jquery.colorbox-min.js"></script>
		<script type="text/javascript" src="<?php echo $themed; ?>/js/jquery.config.js"></script>
		<?php $bcBaser->func() ?>
	</body>
</html>