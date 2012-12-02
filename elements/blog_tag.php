<?php
//ブログのタグリスト出力用
?>
<?php if(!empty($blog->blogContent['tag_use'])
				&& $blog->getTag($post,'') !==''  ): ?>
<div class="Tag"><dl><dt>タグ：</dt><dd><?php echo $blog->getTag($post,'') ?></dd></dl></div>
<?php endif ?>