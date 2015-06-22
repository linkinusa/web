<?php
require_once(dirname(dirname(__FILE__)) . '/app.php');

need_login();
$condition = array( 'user_id' => $login_user_id, 'team_id > 0', );
$selector = strval($_GET['s']);
$allow = array('index','unpay','pay','askrefund');

if (false==in_array($selector, $allow))  $selector == 'index';


$condition['state'] = 'pay';


$count = Table::Count('order', $condition);
list($pagesize, $offset, $pagestring) = pagestring($count, 10);
$orders = DB::LimitQuery('order', array(
	'condition' => $condition,
	'order' => 'ORDER BY id DESC',
	'size' => $pagesize,
	'offset' => $offset,
));

foreach($orders as $key=>$val){
   	if(!get_comment_order($val['id'])){
		$orders[$key][is_c] = 0;
	}else{
		$orders[$key][is_c] = 1;
	}
}


function get_comment_order($order_id){
   $cid = Table::Fetch('comment', $order_id,'order_id');
   if($cid){
      return true;
   }else{
      return false;
   }
}

$team_ids = Utility::GetColumn($orders, 'team_id');
$teams = Table::Fetch('team', $team_ids);
foreach($teams AS $tid=>$one){
	team_state($one);
	$teams[$tid] = $one;
}

$pagetitle = '我的订单';

if($_GET['os'] == 'ok'){
include template('order_comment_index');
}else{
include template('order_comment_index1');
}



