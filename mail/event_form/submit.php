<?php
/**
 * メールフォーム送信完了ページ
 * イベント申込フォーム用
 */
/*
if(Configure::read('debug')==0){
	// プラグインの為か、inlineが動作しない
	//$html->meta(array('http-equiv'=>'Refresh'),null,array('content'=>'5;url='.$mailContent['MailContent']['redirect_url']),false);
	$this->addScript($html->meta(array('http-equiv'=>'Refresh'),null,array('content'=>'5;url='.$mailContent['MailContent']['redirect_url'])));
}
*/

$formName = $bcBaser->getContentsName('true');
?>

<h2>イベント申し込み受付完了</h2>
<div class="section">
	<p>イベント申し込みありがとうございました。</p>
	<p>控えメールが届いているかご確認下さい。<br />
  事務局より数日中にご連絡させて頂きます。</p>
</div>
