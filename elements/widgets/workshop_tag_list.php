<?php
/*
 * Workshop のタグ一覧リスト
 */
?>

<div class="widget-local-navi-contact">
  <h2>ワークショップ</h2>

  <ul class="tag-list blog-workshop-tag-list">
    <?php
    //echo "<!--";
    //print_r ($this->viewVars['posts']);
    //echo "-->";

    /*

      $this->viewVars['posts'][0]['BlogTag']の出力結果
      ↓
      Array
      (
      [0] => Array
      (
      [id] => 4
      [name] => プログラミング
      [created] => 2012-02-16 00:26:22
      [modified] => 2012-02-16 00:26:22
      [BlogPostsBlogTag] => Array
      (
      [id] => 60
      [blog_post_id] => 18
      [blog_tag_id] => 4
      [created] =>
      [modified] =>
      )

      )

      [1] => Array
      (
      [id] => 5
      [name] => パソコン
      [created] => 2012-02-16 00:26:29
      [modified] => 2012-02-16 00:26:29
      [BlogPostsBlogTag] => Array
      (
      [id] => 61
      [blog_post_id] => 18
      [blog_tag_id] => 5
      [created] =>
      [modified] =>
      )

      )

      )

      $tag => Array
      (
      [id] = Array
      (
      [name]
      [num]
      )
      )
     */

    /*

      $tags = array(); //ブログ記事内のタグ一覧を格納
      foreach ($this->viewVars['posts'] as $post) {
      foreach ($post['BlogTag'] as $tag) {
      $tags[$tag['id']]['name']= $tag['name'];
      if(empty($tags[$tag['id']]['num'])){
      $tags[$tag['id']]['num'] = 1;
      }
      $tags[$tag['id']]['num'] = intval($tags[$tag['id']]['num'])+1; //タグが使われてる記事数をカウント
      }
      }

      echo "<!--";
      //print_r($tags);
      echo "-->";

      $baseUrl = $bcBaser->getUrl('/') . $post['BlogContent']['name'] . '/archives/tag/';
      //echo $baseUrl;
      //echo $this->here;
      if(!empty($tags)) : ?>
      <ul class="tag-list blog-<?php echo $post['BlogContent']['name'] ?>-tag-list">
      <?php foreach($tags as $tagID =>  $tag) :
      $class = 'tag-list-'.$tagID ;
      $url = $baseUrl.urlencode($tag['name']); //タグ名をURLエンコード
      if ( $url == $this->here ) { //カレント処理：現在のURLと同じ場合に current付加
      $class .= ' current';
      }
      ?>
      <li class="<?php echo $class; ?>">
      <a href="<?php echo $url; ?>"><?php echo $tag['name']; ?> (<?php echo $tag['num']; ?>)</a>
      </li>
      <?php endforeach; ?>
      </ul>
      <?php else: ?>
      <p>タグが利用された記事はありません</p>
      <?php endif; ?>
     */
    ?>
    <li class="tag-list-2">
      <a href="/index.php/workshop/archives/tag/%E8%87%AA%E7%84%B6%E4%BD%93%E9%A8%93">自然体験</a>
    </li>
    <li class="tag-list-7">

      <a href="/index.php/workshop/archives/tag/%E5%9C%B0%E7%90%86">地理</a>
    </li>
    <li class="tag-list-11">
      <a href="/index.php/workshop/archives/tag/%E7%90%86%E7%A7%91">理科</a>
    </li>
    <li class="tag-list-4">
      <a href="/index.php/workshop/archives/tag/%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0">プログラミング</a>

    </li>
    <li class="tag-list-5">
      <a href="/index.php/workshop/archives/tag/%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3">パソコン</a>
    </li>
    <li class="tag-list-10">
      <a href="/index.php/workshop/archives/tag/%E7%94%9F%E7%89%A9%E5%AD%A6">生物学</a>
    </li>
    <li class="tag-list-6">

      <a href="/index.php/workshop/archives/tag/%E6%95%B0%E5%AD%A6">数学</a>
    </li>
    <li class="tag-list-12">
      <a href="/index.php/workshop/archives/tag/%E3%82%A4%E3%83%B3%E3%82%BF%E3%83%BC%E3%83%8D%E3%83%83%E3%83%88">インターネット</a>
    </li>
  </ul>
</div>
