<?php
/**
 * 	ブログ: デフォルト
 */
//パラメータ取得（URLでタグ、カテゴリ、一覧の判断）
$pramAry = array(1);
if (isset($this->params['pass'][0])) {
	$pramAry = $this->params['pass'];
}

//var_dump($blog->_view->viewVars['blogContent']['BlogContent']);
?>

<!-- Content Header -->
<div id="contentHeader" class="row">
	<div class="twelve columns">
		<header class="">
			<h1><a href='<?php $bcBaser->url('/' . $blog->_view->viewVars['blogContent']['BlogContent']['name'] . '/index'); ?>'>
					<?php $blog->title(); //ブログタイトル  ?></a>
				<?php if ($blog->descriptionExists()): //ブログ説明 ?>
					<small><?php $blog->description(); ?></small>
				<?php endif ?>
			</h1>
      <hr>
			</h1>
		</header>
	</div>
</div>
<!-- End Content Header -->


<!-- Content -->
<div id="content" class="row blogIndex">
	<section id="main" class="nine columns">
		<header>
			<h1>
				<?php if ($pramAry[0] == 'tag'): ?>タグ：
				<?php elseif ($pramAry[0] == 'category'): ?>カテゴリ：
				<?php endif; ?>
				<?php echo $bcBaser->contentsTitle(); ?>
				<?php if (!isset($this->params['pass'][0])): ?>一覧<?php endif; ?></h1>
		</header>

		<?php if (!empty($posts)): ?>
			<?php foreach ($posts as $post): ?>
				<article class="post">
					<header>
						<h2><?php $blog->postTitle($post) ?></h2>
						<div class="meta">
							<span class="Category"><?php $blog->category($post, array()); ?></span>
							<time datetime="<?php $blog->getPostDate($post); ?>" pubdate="pubdate" class="PostDate"><?php echo date("Y年m月d日", strtotime($blog->getPostDate($post))); ?></time>
						</div>
					</header>
					<div class="postBody">
						<?php
						//echo $blog->getPostContent($post, true, false, 200) . '…';
						echo $post['BlogPost']['detail'];
						?>
					</div>
					<?php
					$link = $bcBaser->getUrl('../') . $post['BlogContent']['name'] . '/archives/' . $post['BlogPost']['no'];
					?>
					<p class="linkDetail"><a href="<?php echo $link; ?>" title='<?php $blog->postTitle($post, false); ?>の詳細はこちら'>続きを読む</a></p>
					<footer class="postFooter">
						<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>
					</footer>
				</article>
			<?php endforeach; ?>
		<?php else: ?>
			<p class="no-data">記事がありません。</p>
		<?php endif; ?>
		<hr>
		<!-- pagination -->
		<?php $bcBaser->pagination('simple'); ?>
	</section>

	<?php
	include(dirname(__FILE__) . '/../../elements/sidebar.php'); //サイドバー読み込み
	?>
</div>
<!-- End Content -->