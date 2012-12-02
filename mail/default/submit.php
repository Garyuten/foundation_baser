<?php
/**
 * メールフォーム送信完了ページ
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

<h2>お問い合わせ受付完了</h2>
<div class="section">
	<p>お問い合わせ頂きありがとうございました。</p>
	<p>事務局より数日中にご連絡させて頂きます。</p>

</div>
