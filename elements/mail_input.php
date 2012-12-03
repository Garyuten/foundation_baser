<?php

/* SVN FILE: $Id$ */
/**
 * [PUBLISH] メールフォーム本体
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2011, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2011, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.mail.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$group_field = null;
$iteration = 0;
if (!isset($blockEnd)) {
	$blockEnd = 0;
}
?>
<?php
//デフォルトのtable出力
if (!empty($mailFields)) {

	foreach ($mailFields as $key => $record) {

		$field = $record['MailField'];
		$iteration++;
		if ($field['use_field'] && ($blockStart && $iteration >= $blockStart) && (!$blockEnd || $iteration <= $blockEnd)) {

			$next_key = $key + 1;
			$description = $field['description'];

			// 項目名
			if ($group_field != $field['group_field'] || (!$group_field && !$field['group_field'])) {
				echo '<tr id="RowMessage' . Inflector::camelize($record['MailField']['field_name']) . '"';
				if ($field['type'] == 'hidden') {
					echo ' style="display:none"';
				}
				echo '><th class="col-head" width="150">' . $mailform->label("Message." . $field['field_name'] . "", $field['head']);
				if ($field['not_empty']) {
					echo '<span class="required">*</span>';
				}
				echo '</th><td class="col-input">';
			}

			echo '<span id="FieldMessage' . Inflector::camelize($record['MailField']['field_name']) . '">';

			if (!$freezed && $description) {
				echo '<span class="mail-description">' . $description . '</span>';
			}
			// 入力欄
			if (!$freezed || $mailform->value("Message." . $field['field_name']) !== '') {
				echo '<span class="mail-before-attachment">' . $field['before_attachment'] . '</span>';
			}
			if (!$field['no_send'] || !$freezed) {
				echo $mailform->control($field['type'], "Message." . $field['field_name'] . "", $mailfield->getOptions($record), $mailfield->getAttributes($record));
			}
			if (!$freezed || $mailform->value("Message." . $field['field_name']) !== '') {
				echo '<span class="mail-after-attachment">' . $field['after_attachment'] . '</span>';
			}
			if (!$freezed) {
				echo '<span class="mail-attention">' . $field['attention'] . '</span>';
			}
			if (!$field['group_valid']) {
				if ($mailform->error("Message." . $field['field_name'] . "_format", "check")) {
					echo $mailform->error("Message." . $field['field_name'] . "_format", "形式が不正です");
				} else {
					echo $mailform->error("Message." . $field['field_name'] . "", "必須項目です");
				}
			}

			// 説明欄
			if (($bcArray->last($mailFields, $key)) ||
							($field['group_field'] != $mailFields[$next_key]['MailField']['group_field']) ||
							(!$field['group_field'] && !$mailFields[$next_key]['MailField']['group_field']) ||
							($field['group_field'] != $mailFields[$next_key]['MailField']['group_field'] && $bcArray->first($mailFields, $key))) {

				if ($field['group_valid']) {
					if ($mailform->error("Message." . $field['group_field'] . "_format", "check")) {
						echo $mailform->error("Message." . $field['group_field'] . "_format", "形式が不正です");
					} else {
						echo $mailform->error("Message." . $field['group_field'] . "", "必須項目です");
					}
					echo $mailform->error("Message." . $field['group_field'] . "_not_same", "入力データが一致していません");
					$mailform->error("Message." . $field['group_field'] . "_not_complate", "入力データが不完全です");
				}

				echo '</span>';
				echo '</td></tr>';
			} else {
				echo '</span>';
			}
			$group_field = $field['group_field'];
		}
	}
}
?>
<?php /* //フォーマット調整中のコード（foundation3対応中）
  if (!empty($mailFields)) :

  foreach ($mailFields as $key => $record) :
  $field = $record['MailField'];
  $iteration++;

  if ($field['use_field'] && ($blockStart && $iteration >= $blockStart) && (!$blockEnd || $iteration <= $blockEnd)) :

  $next_key = $key + 1;
  $description = $field['description'];


  // 項目名
  if ($group_field != $field['group_field'] || (!$group_field && !$field['group_field'])) :
  ?>
  <div class="row" id="RowMessage<?php echo Inflector::camelize($record['MailField']['field_name']); ?>" <?php if ($field['type'] == 'hidden') { ?> style="display:none"<?php } ?>>
  <div class="two mobile-one columns">
  <?php if ($field['not_empty']) : ?>
  <span class="required">*</span>
  <?php endif; ?>
  <label class="right inline"><?php echo $mailform->label("Message." . $field['field_name'] . "", $field['head']); ?></label>
  </div>
  <div class="ten mobile-three columns">
  <?php endif; ?>
  <span id="FieldMessage<?php echo Inflector::camelize($record['MailField']['field_name']); ?>">
  <?php if (!$freezed && $description) : ?>
  <span class="mail-description"><?php echo $description; ?></span>
  <?php endif; ?>
  <?php
  // 入力欄
  if (!$freezed || $mailform->value("Message." . $field['field_name']) !== '') {
  echo '<span class="mail-before-attachment">' . $field['before_attachment'] . '</span>';
  }
  if (!$field['no_send'] || !$freezed) {
  echo $mailform->control($field['type'], "Message." . $field['field_name'] . "", $mailfield->getOptions($record), $mailfield->getAttributes($record));
  }
  if (!$freezed || $mailform->value("Message." . $field['field_name']) !== '') {
  echo '<span class="mail-after-attachment">' . $field['after_attachment'] . '</span>';
  }
  if (!$freezed) {
  echo '<span class="mail-attention">' . $field['attention'] . '</span>';
  }

  //<label class="error">Error</label>
  //<input type="text" class="error" />
  //<small class="error">Invalid entry</small>

  if (!$field['group_valid']) {
  if ($mailform->error("Message." . $field['field_name'] . "_format", "check")) {
  echo $mailform->error("Message." . $field['field_name'] . "_format", "形式が不正です");
  } else {
  echo $mailform->error("Message." . $field['field_name'] . "", "必須項目です");
  }
  }

  // 説明欄
  if (($bcArray->last($mailFields, $key)) ||
  ($field['group_field'] != $mailFields[$next_key]['MailField']['group_field']) ||
  (!$field['group_field'] && !$mailFields[$next_key]['MailField']['group_field']) ||
  ($field['group_field'] != $mailFields[$next_key]['MailField']['group_field'] && $bcArray->first($mailFields, $key))) :

  if ($field['group_valid']) :
  if ($mailform->error("Message." . $field['group_field'] . "_format", "check")) {
  echo $mailform->error("Message." . $field['group_field'] . "_format", "形式が不正です");
  } else {
  echo $mailform->error("Message." . $field['group_field'] . "", "必須項目です");
  }
  echo $mailform->error("Message." . $field['group_field'] . "_not_same", "入力データが一致していません");
  $mailform->error("Message." . $field['group_field'] . "_not_complate", "入力データが不完全です");
  endif;
  ?>
  </span><!-- /FieldMessage<?php echo Inflector::camelize($record['MailField']['field_name']); ?> -->
  </div>
  </div>
  <?php else: ?>
  <?php echo '</span>'; ?>
  <?php endif;

  $group_field = $field['group_field'];

  endif;
  endforeach;
  endif;
 */ ?>
