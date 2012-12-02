<?php
/* SVN FILE: $Id$ */
/**
 * [EMAIL] メール送信 イベント申込み用
 */
?>

                                           <?php echo $other['date'] ?> 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　　　　　　　　◆◇　イベント申込を受付けました　◇◆ 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

<?php if($other['mode']=='user'): ?>
　イベント申込み、ありがとうございます。 
　送信内容は下記のようになっております。  
<?php elseif($other['mode']=='admin'): ?>
　イベント申込を受け付けました。
　受信内容は下記のとおりです。   
<?php endif; ?>

━━━━◇◆━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　◆ イベント申込内容
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━◆◇━━━━
<?php echo $this->element('email/text/mail_data') ?>
 
 
 
───────────────────────────────────

<?php if($other['mode']=='user'): ?>
　なお、このメールは自動返信メールとなっております。 
　メールを確認させて頂き次第、早急にご連絡させていただきます。 
　恐れ入りますがしばらくお待ちください。 
<?php elseif($other['mode']=='admin'): ?>
　なお、このメールは自動転送システムです。 
　受け付けた旨のメールもユーザーへ送られています。 
<?php endif; ?>
 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

　<?php echo $mailConfig['site_name'] ?>
 
　<?php echo $mailConfig['site_url'] ?>　<?php echo $mailConfig['site_email'] ?>
<?php if($mailConfig['site_tel']): ?>

　TEL　<?php echo $mailConfig['site_tel'] ?><?php endif; ?>
<?php if($mailConfig['site_fax']): ?>
　FAX　<?php echo $mailConfig['site_fax'] ?>

<?php endif; ?>
 
 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━