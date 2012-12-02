<?php
/**
 * Page専用テンプレート
 */
?>
<?php //echo $html->css("page", null, null, false); //page用のCSSを出力   ?>
<?php
//テーマファイルパスの取得
$themed = $bcBaser->getUrl( "/themed/".$this->theme);

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
<div id="main">
  <div class="Wrap Section SectionParent">
		<section class="Wrap Section SectionParent">
			<header>
			</header>

			
		</section>
		<?php if ( isset($Ctg) && !empty($Ctg) && $Path[1] !== 'contact' ): //お問い合わせページ以外で表示 ?>
	  <div class="BannerContact">
	    <a href="<?php $bcBaser->url('/'); ?>contact/index" title="インターネットお問い合わせ窓口はこちら"><img src="/_shared/img/banner_contact.png" alt="法律相談のご予約・お問い合わせはこちら 電話番号092-714-3450 受付時間は9時から17時15分まで（土日祝祭日・年末年始除く）"></a>
	  </div>
		<?php endif; ?>
  </div>
</div>


<!-- Content -->
    <div class="row">
      <div class="twelve columns">

				<header class="panel radius">

				<?php if ($bcBaser->getContentsTitle() != ''): ?>
	        <h1><?php echo $bcBaser->contentsTitle(); ?></h1>
				<?php endif ?>
				</header>
      </div>
    </div>
    <!-- End Content -->

    <div class="row">
      <!-- Content -->
      <section id="main" class="nine columns">
				<header>
					<h2>Page Title</h2>
				</header>
				<hr>
				<div class="content">
					<?php $bcBaser->content(); //ページの中身 ?>
				</div>
      </section>

      <div id="side" class="three columns">
				<h4>ローカルメニュー</h4>
				<ul class="side-nav">
					<li><a href="#">page name</a></li>
					<li><a href="#">page name</a></li>
					<li><a href="#">page name</a></li>
					<li><a href="#">page name</a></li>
					<li><a href="#">page name</a></li>
					<li><a href="#">page name</a></li>
				</ul>
				<div class="hide-for-small">
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
      </div>
      <!-- End Content -->
    </div>