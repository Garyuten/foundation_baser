<?php
/**
 * メールフォーム確認ページ
 */
$html->css('jquery-ui/ui.all', null, null, false);
$bcBaser->js(array('jquery-ui-1.8.14.custom.min', 'i18n/ui.datepicker-ja'), false);
if($freezed){
	$mailform->freeze();
}
?>
<div class="Confirm">
<?php if($freezed): ?>
<h2>入力内容の確認</h2>
<p class="section">入力した内容に間違いがなければ「送信する」ボタンをクリックしてください。</p>
<!--
<p><a href="javascript:history.back();" title="入力した内容を修正されたい場合はこちらからお戻りください">[←入力画面に戻る]</a></p>
-->
<?php else: ?>
<?php endif ?>
<div class="Section">
	<?php $bcBaser->flash() ?>
	<?php $bcBaser->element('mail_form') ?>
</div>
</div>
