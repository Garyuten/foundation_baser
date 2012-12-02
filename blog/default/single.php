<?php
/**
 * ブログデフォルト 詳細ページ
 */
//$bcBaser->css('/_shared/css/page/event', array('inline' => false));
$bcBaser->css('colorbox/colorbox', array('inline' => false));
$bcBaser->js('jquery.colorbox-min', false);
$bcBaser->setDescription($blog->getTitle() . '｜' . $blog->getPostContent($post, false, false, 50));
//$blog->editPost($post['BlogPost']['blog_content_id'], $post['BlogPost']['id']);
?>
<!--
<?php //print_r($blog->Baser->_view->viewVars['crumbs'][0]['url']); ?>
-->
<div id="main">
	<section class="Wrap Section SectionParent">
		<article class="Post PostDetail">
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
			echo $blog->postContent($post);
			?>
			<?php
			$link = $bcBaser->getUrl('../') . $post['BlogContent']['name'] . '/archives/' . $post['BlogPost']['no'];
			?>
			<footer class="PostFooter">
				<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>
			</footer>
		</article>
		<nav id="contentsNavi">
			<?php $blog->prevLink($post) ?>
			<?php $blog->nextLink($post) ?>
		</nav>
		<div class="BannerContact">
	    <a href="<?php $bcBaser->url('/'); ?>contact/index" title="インターネットお問い合わせ窓口はこちら"><img src="/_shared/img/banner_contact.png" alt="法律相談のご予約・お問い合わせはこちら 電話番号092-714-3450 受付時間は9時から17時15分まで（土日祝祭日・年末年始除く）"></a>
	  </div>
	</section>
  <!-- /#main -->
</div>