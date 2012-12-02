<?php
/**
 * パーツ:SBM (Twitter,Google+, Facebook
 */

$Uri = "http://www.npo-an.com".$this->here;
?>
	<div class="SBM">
		<div class="Btn BtnTw"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="fnpoc" data-lang="ja">ツイート</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
		<div class="Btn BtnFb"><div id="fb-root"></div><script src="http://connect.facebook.net/ja_JP/all.js#appId=260929923930912&amp;xfbml=1"></script><fb:like href="<?php echo $Uri ?>" send="false" layout="button_count" width="200" show_faces="false" font=""></fb:like>
		</div>
		<div class="Btn BtnGp">
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'ja'}</script><g:plusone size="medium" annotation="inline"></g:plusone>
		</div>
	</div>
