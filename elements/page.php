<?php
/**
 * Page専用テンプレート
 */
?>
<?php //echo $html->css("page", null, null, false); //page用のCSSを出力         ?>
<?php
//テーマファイルパスの取得
$themed = $bcBaser->getUrl("/themed/" . $this->theme);

$CategoryTitle = '';
$CategoryUrl = '';
$ctgAry = array();
if (isset($Ctg) && !empty($Ctg)) {
	if (strpos($Ctg, 'contact') !== false) { //お問い合わせページ
		$CategoryUrl = '/contact/index';
		$CategoryTitle .= "お問い合わせ";
	} else if (!empty($bcPage->data['PageCategory'])) { //通常の固定ページ
		$ctgAry = $bcPage->data['PageCategory'];
		$CategoryTitle .= $ctgAry['title'];
		$CategoryUrl = '/' . $ctgAry['name'] . '/index';
	}
}
echo '<!-- ';
//  print_r($bcPage->data);
//	print_r($page['content_categories']);
//	var_dump($bcPage->data['PageCategory']);
echo '-->';
?>


<?php if ($CategoryTitle != ''): ?>
	<!-- Content Header -->
	<div id="contentHeader" class="row">
		<div class="twelve columns">
			<header class="panel radius">
				<h1><?php echo $CategoryTitle; ?></h1>
			</header>
		</div>
	</div>
	<!-- End Content Header -->
<?php endif ?>

<!-- Content -->
<div id="content" class="row">
	<section id="main" class="nine columns">
		<header>
			<?php if ($bcBaser->getContentsTitle() != ''): ?>
				<h1><?php echo $bcBaser->contentsTitle(); ?></h1>
			<?php endif ?>
		</header>
		<hr>
		<div class="content">
			<?php $bcBaser->content(); //ページの中身 ?>
		</div>
	</section>

	<?php
	include(dirname(__FILE__) . '/../elements/sidebar.php'); //サイドバー読み込み
	?>
</div>
<!-- End Content -->