<?php
/**
 * 	ブログ: デフォルト
 */
$bcBaser->css('colorbox/colorbox', array('inline' => false));
$bcBaser->js('jquery.colorbox-min', false);
$bcBaser->setDescription($blog->getDescription());

//パラメータ取得（URLでタグ、カテゴリ、一覧の判断）
$pramAry = array(1);
if (isset($this->params['pass'][0])) {
	$pramAry = $this->params['pass'];
}
?>
<?php
echo '<!--';
//print_r ($posts);
echo '-->';
?>
<div id="main">
	<section class="Wrap Section SectionParent">
		<header>
			<h1>
				<?php if ($pramAry[0] == 'tag'): ?>タグ：
				<?php elseif ($pramAry[0] == 'category'): ?>カテゴリ：
				<?php endif; ?>
				<?php echo $bcBaser->contentsTitle(); ?>
				<?php if (!isset($this->params['pass'][0])): ?>一覧<?php endif; ?></h1>
		</header>
    <!-- blog description -->
		<?php if ($blog->descriptionExists()): ?>
			<section class="Explain">
				<?php $blog->description() ?>
			</section>
		<?php endif ?>


		<?php if (!empty($posts)): ?>
			<?php foreach ($posts as $post): ?>
				<article class="Post">
					<header class="PostHeader">
						<h2 class="PostTitle">
							<?php $blog->postTitle($post) ?>
						</h2>
						<div class="Meta">
							<span class="Category"><?php $blog->category($post) ?></span>
							<time datetime="<?php $blog->getPostDate($post); ?>" pubdate="pubdate" class="PostDate"><?php echo date("Y年m月d日", strtotime($blog->getPostDate($post))); ?></time>
						</div>
					</header>
					<?php
						echo $blog->getPostContent($post, true , false , 200 ) . '…';
						//echo $post['BlogPost']['detail'];
					?>
					<?php 
          $link = $bcBaser->getUrl('../') . $post['BlogContent']['name'] . '/archives/' . $post['BlogPost']['no'];
					?>
					<p class="LinkDetail"><a href="<?php echo $link; ?>" title='<?php $blog->postTitle($post,false); ?>の詳細はこちら'>続きを読む</a></p>
					<footer class="PostFooter">
						<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>
					</footer>
				</article>
			<?php endforeach; ?>
		<?php else: ?>
			<p class="no-data">記事がありません。</p>
		<?php endif; ?>
    <!-- pagination -->
		<?php $bcBaser->pagination('simple'); ?>
		<div class="BannerContact">
	    <a href="<?php $bcBaser->url('/'); ?>contact/index" title="インターネットお問い合わせ窓口はこちら"><img src="/_shared/img/banner_contact.png" alt="法律相談のご予約・お問い合わせはこちら 電話番号092-714-3450 受付時間は9時から17時15分まで（土日祝祭日・年末年始除く）"></a>
	  </div>
	</section>
  <!-- /#main -->
</div>
