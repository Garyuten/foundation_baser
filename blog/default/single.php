<?php
/**
 * ブログデフォルト 詳細ページ
 */
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
<div id="content" class="row">
	<section id="main" class="nine columns">
		<article class="post postDetail">
			<header>
				<h1><?php $blog->postTitle($post) ?></h1>
				<div class="meta">
					<span class="Category"><?php
					$blog->category($post, array()
					);
					?></span>
					<time datetime="<?php $blog->getPostDate($post); ?>" pubdate="pubdate" class="PostDate"><?php echo date("Y年m月d日", strtotime($blog->getPostDate($post))); ?></time>
				</div>
			</header>
			<div class="postBody">
				<?php
				echo $blog->postContent($post);
				?>
				<?php
				$link = $bcBaser->getUrl('../') . $post['BlogContent']['name'] . '/archives/' . $post['BlogPost']['no'];
				?>
				<footer class="postFooter">
					<?php
					//$bcBaser->element('blog_tag', array('post' => $post));
					include(dirname(__FILE__) . '/../../elements/blog_tag.php'); //タグ出力
					?>
				</footer>
		</article>
		<nav id="contentsNavi">
			<?php $blog->prevLink($post) ?>
<?php $blog->nextLink($post) ?>
		</nav>
	</section>

	<?php
	include(dirname(__FILE__) . '/../../elements/sidebar.php'); //サイドバー読み込み
	?>
</div>
<!-- End Content -->