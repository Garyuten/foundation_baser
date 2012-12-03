<?php
//ブログのタグリスト出力用
?>
<?php //print_r($blog->getTag($post,'')); ?>
<?php if(!empty($blog->blogContent['tag_use'])
				&& $blog->getTag($post,'') !==''  ): ?>
<dl class="sub-nav tag"><dt>Tag : </dt><dd><?php echo $blog->getTag($post,'</dd><dd>') ?></dd></dl>
<?php endif ?>