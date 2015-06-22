<?php
require_once(dirname(dirname(__FILE__)) . '/app.php');

need_login();
$id = $_GET['id'];
if($_GET['act'] == 'delcollect'){
   if(Table::Delete('collect', $id)){
      redirect( WEB_ROOT . "/account/collect.php");
   }
}

$condition = array( 
	 'user_id' => $login_user_id,	 
 );
 
if($_GET['gid']){
  $condition['gid'] = $_GET['gid'];
}

$count = Table::Count('collect', $condition);
list($pagesize, $offset, $pagestring) = pagestring($count, 10);
$orders = DB::LimitQuery('collect', array(
	'condition' => $condition,
	'order' => 'ORDER BY team_id DESC, id ASC',
	'size' => $pagesize,
	'offset' => $offset,
));


function get_team_id($id){
	$collect = Table::FetchForce('collect', $id);
	
	$team = Table::FetchForce('team', $collect['team_id']);
	
	 $area = Table::Fetch('category', $team['area_id']);
   
   if($area['name']){
      return $area['name'];
   }else{
      return 'New York';
   }
}

$pagetitle = '我的收藏';
include template('account_collect');


