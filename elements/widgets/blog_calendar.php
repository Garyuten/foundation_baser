<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ブログカレンダー
 * 
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.blog.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
if(isset($blogContent)){
	$id = $blogContent['BlogContent']['id'];
}else{
	$id = $blog_content_id;
}
$url = '/blog/blog/get_calendar/'.$id;
if(!empty($year)){
	$url.='/'.$year;
}
if(!empty($month)){
	$url.='/'.$month;
}
$data = $this->requestAction($url);
$blogContent = $data['blogContent'];
$entryDates = $data['entryDates'];
?>
<?php // TODO コード整理する事 ?>

<div class="widget widget-blog-calendar widget-blog-calendar-<?php echo $id ?> blog-widget">
<?php if($name && $use_title): ?>
<h5><?php echo $name ?></h5>
<?php endif ?>
<?php
//本日の日付を取得する
$time = time();

//各日付をセットする
$year = date("Y", $time);
$month = date("n", $time);
$day = date("j", $time);

//GETにきた年月をチェックする
if(isset($this->params['pass']['0']) && $this->params['pass']['0'] == 'date'){
	$year2=h(@$this->params['pass']['1']);
	$month2=h(@$this->params['pass']['2']);
	$day2=h(@$this->params['pass']['3']);
}else{
	$year2='';
	$month2='';
	$day2='';
}

//先月、来月をクリックした場合の処理
if($year2!="" || $month2!="" || $day2!=""){
	if($year2!=""){
		$year = $year2;
	}
	if($month2!=""){
		$month = $month2;
	}
	if($day2!=""){
		$day = $day2;
	}
	else{
		$day = 1;
	}
	$time = mktime(0,0,0,$month,$day,$year);
}

//今月の日付の数
$num = date("t", $time);

//曜日を取得するために時間をセット
$today = mktime(0,0,0,$month,$day,$year);

//曜日の配列
$date = array('日','月','火','水','木','金','土');

//カレンダーを表示する
//先月の場合
if($month==1){
	$year3 = $year-1;
	$month3 = 12;
}
else{
	$year3 = $year;
	$month3 = $month-1;
}

//来月の場合
if($month==12){
	$year4 = $year+1;
	$month4 = 1;
}
else{
	$year4 = $year;
	$month4 = $month+1;
}

//カレンダーを表示するHTML
print '<table class="blog-calendar twelve"><thead><tr><td colspan=7>';
print "<center>";
if($data['prev']) {
	print $bcBaser->getLink($month3."月",array('admin'=>false,'blog'=>false,'plugin'=>'','controller'=>$blogContent['BlogContent']['name'],'action'=>'archives', 'date', $year3, $month3),null,false);
} else {
	print $month3."月";
}
print "　".$year."年".$month."月　";
if($data['next']) {
	print $bcBaser->getLink($month4."月",array('admin'=>false,'blog'=>false,'plugin'=>'','controller'=>$blogContent['BlogContent']['name'],'action'=>'archives', 'date', $year4, $month4),null,false);
} else {
	print $month4."月";
}
print "</td></tr>";

print '
<tr> 
<th class="sunday">日</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th class="saturday">土</th>
</tr></thead>
<tbody>
';

//カレンダーの日付を作る
for($i=1;$i<=$num;$i++){

	//本日の曜日を取得する
	$print_today = mktime(0, 0, 0, $month, $i, $year);
	//曜日は数値
	$w = date("w", $print_today);

	//一日目の曜日を取得する
	if($i==1){
		//一日目の曜日を提示するまでを繰り返し
		print "<tr>";
		for($j=1;$j<=$w;$j++){
			print "<td>&nbsp;</td>";
		}
		
		$data = check($i,$w,$year,$month,$day,$entryDates,$bcBaser,$blogContent);
		print "$data";
		if($w==6){
			print "</tr>";
		}
	}
	//一日目以降の場合
	else{
		if($w==0){
			print "<tr>";
		}
		$data = check($i,$w,$year,$month,$day,$entryDates,$bcBaser,$blogContent);
		print "$data";
		if($w==6){
			print "</tr>";
		}
	}
}
print "</tbody></table>";

//特定の日付の場合の処理
function check($i,$w,$year,$month,$day,$entryDates,$bcBaser,$blogContent){
	
	if(in_array(date('Y-m-d',strtotime($year.'-'.$month.'-'.$i)),$entryDates)){
		if(date('Y-m-d') == date('Y-m-d',strtotime($year.'-'.$month.'-'.$i))){
			$change = '<td class="today">'.$bcBaser->getLink($i,array('admin'=>false,'blog'=>false,'plugin'=>'','controller'=>$blogContent['BlogContent']['name'],'action'=>'archives', 'date', $year, $month, $i),null,false).'</td>';
		}elseif($w==0){
			$change = '<td class="sunday">'.$bcBaser->getLink($i,array('admin'=>false,'blog'=>false,'plugin'=>'','controller'=>$blogContent['BlogContent']['name'],'action'=>'archives', 'date', $year, $month, $i),null,false).'</td>';
		}elseif($w==6){
			$change = '<td class="saturday">'.$bcBaser->getLink($i,array('admin'=>false,'blog'=>false,'plugin'=>'','controller'=>$blogContent['BlogContent']['name'],'action'=>'archives', 'date', $year, $month, $i),null,false).'</td>';
		}else{
			$change = '<td>'.$bcBaser->getLink($i,array('admin'=>false,'blog'=>false,'plugin'=>'','controller'=>$blogContent['BlogContent']['name'],'action'=>'archives', 'date', $year, $month, $i),null,false).'</td>';
		}
	}else{
		if(date('Y-m-d') == date('Y-m-d',strtotime($year.'-'.$month.'-'.$i))){
			$change = '<td class="today">'.$i.'</td>';		
		}else{
			$change = '<td>'.$i.'</td>';
		}
	}
	return $change;

}
?>
</div>