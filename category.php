<?php
require_once(dirname(__FILE__) . '/app.php');
$city_id = abs(intval($city['id']));
$gid = abs(intval($_GET['gid']));
$sid = abs(intval($_GET['sid']));
$sids = abs(intval($_GET['sids']));
$aid = abs(intval($_GET['aid']));
$sc  = $_GET['sc'];
$delivery  = $_GET['delivery'];
$a  = $_GET['a'];
$min_price  = $_GET['min_price'];
$max_price  = $_GET['max_price'];
$keywords = trim($_GET['keywords']);




/*获取当前位置*/
$home_url = '<a href="/index.php">首页 ></a>';
if($gid){
    $gid_arr = Table::Fetch('category', $gid);
	$home_url .= '<a href="/category.php?gid='.$gid.'">'.$gid_arr[name].'</a> >';
}
if($sid){	
   $sub_id_arr = Table::Fetch('category', $sid);
   $home_url .= '<a href="/category.php?gid='.$gid.'&sid='.$sid.'">'.$sub_id_arr[name].'</a> >';
}
if($sids){
   $sub_ids_arr = Table::Fetch('category', $sids);	
   $home_url .= '<a href="/category.php?gid='.$gid.'&sid='.$sid.'&sids='.$sids.'">'.$sub_ids_arr[name].'</a> ';
}





$now = time();

$condition = array( 
	
		"begin_time < '{$now}'",
		"end_time > '{$now}'",
		'city_id'=>$city_id,
);

if(!empty($delivery)){
  $condition['team_type'] = 'normal';
}

if($gid){
  $catename = Table::FetchForce('category', $gid);
  $condition['group_id'] = $gid;
}
if($sid){
  $catenames = Table::FetchForce('category', $sid);
  $condition['sub_id'] = $sid;
}
if($sids){
  $catenamess = Table::FetchForce('category', $sids);
  $condition['sub_ids'] = $sids;
}
if($aid){
  $condition['area_id'] = $aid;
}

if($keywords){
  $condition[] = "( title like '%".mysql_escape_string($keywords)."%' )";
}

   $nowcate = DB::LimitQuery('category', array('condition'=>array(
		  'fid'=>0, 
		  'id'=>$gid,
		  ), 
		  'order'=>'ORDER BY `sort_order` DESC, `id` DESC',
	));
	$nowcatename = $nowcate[0]['name'];
if($gid){
   $cates = DB::LimitQuery('category', array('condition'=>array(
		  'zone'=>'group', 
		  'fid'=>$gid, 
		  'display'=>'Y',
		  ), 
		  'order'=>'ORDER BY `sort_order` DESC, `id` DESC',
		  'size'=>8
	));
	for($i = 0;$i<count($cates);$i++){
	  $cates[$i]['number'] = Table::Count('team', array('team_type'=>'normal', 'sub_id'=>$cates[$i][id], "begin_time < '{$now}'", "end_time > '{$now}'"));
	}
}else{
	 $cates = DB::LimitQuery('category', array('condition'=>array(
		  'zone'=>'group', 
		  'fid'=>0, 
		  'display'=>'Y',
		  ), 
		  'order'=>'ORDER BY `sort_order` DESC, `id` DESC',
		  'size'=>8
	));
    for($i = 0;$i<count($cates);$i++){
	  $cates[$i]['number'] = Table::Count('team', array('team_type'=>'normal', 'group_id'=>$cates[$i][id], "begin_time < '{$now}'", "end_time > '{$now}'"));
	}
}

$area = DB::LimitQuery('category', array('condition'=>array(
		  'zone'=>'area', 
		  'fid'=>$city[id], 
		  'display'=>'Y',
		  ), 
		'order' => 'ORDER BY display ,sort_order DESC, id DESC',
	));
for($i = 0;$i<count($area);$i++){
  $area[$i]['number'] = Table::Count('team', array('team_type'=>'normal', 'group_id'=>$gid,'sub_id'=>$sid,'area_id'=>$area[$i][id], "begin_time < '{$now}'", "end_time > '{$now}'"));
}


if($sc == 'xl'){
   $order='ORDER BY now_number DESC, id DESC';
}else if($sc == 'zhekou'){
   $order='ORDER BY market_price - team_price DESC, id DESC';
}else if($sc =='price'){
   $order='ORDER BY team_price DESC, id DESC';
}else if($sc =='price1'){
   $order='ORDER BY team_price ASC, id DESC';
}else if($sc == 'new'){
   $order='ORDER BY begin_time DESC, sort_order DESC,id DESC';
}else if($sc == 'com'){
    $order ='ORDER BY score DESC, `comment_num` DESC, `id` DESC';
}else{
   $order='ORDER BY `sort_order` DESC, `id` DESC';
}

if($min_price && $max_price){
   $condition[] = " ( team_price >= $min_price and team_price <= $max_price )"; 
}
if($_GET['wifi']){
   $condition['wifi'] = 'Y';
}
if($_GET['$park']){
  $condition['park'] = 'Y';
}
if($_GET['$holiday']){
  $condition['holiday'] = 'Y';
}
if($_GET['$free_yuyue']){
  $condition['free_yuyue'] = 'Y';
}
if($_GET['$weekend']){
  $condition['weekend'] = 'Y';
}


$count = Table::Count('team', $condition);
list($pagesize, $offset, $pagestring) = pagestring($count, 36);
$teams = DB::LimitQuery('team', array(
	'condition' => $condition,
	'order' => $order,
	'size' => $pagesize,
	'offset' => $offset,
));

/*热门团购*/

$hot_cat = DB::LimitQuery('category', array('condition'=>array(
		  'zone'=>'group',
		  'is_hot'=>'Y', 
		  'display'=>'Y',
		  'fid <> 0',
		  ), 
		'order' => 'ORDER BY display ,sort_order DESC, id DESC',
		'size' => 10,
));


$cate_info = Table::Fetch('category', $gid);
/*轮播广告*/
$catad = get_ads($cate_info['name']);

include template('category');


