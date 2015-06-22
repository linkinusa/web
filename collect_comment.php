<?php
require_once(dirname(__FILE__) . '/app.php');
need_login();


if ( is_post() ) {
	
	$team_id = $_POST['team_id'];
	$team = Table::Fetch('team', $team_id);
	$cid = Table::Fetch('comment', $team_id,'team_id');
	$group_id = $team['group_id'];
	
	echo 'team_';

	if($cid){
		redirect( WEB_ROOT . "/team.php?id=$team_id");
	}
	
	$comment = $_POST;
  
    $comment['comment_grade_all'] = json_encode($comment['xing']);

	$insert = array(
		'order_id', 'user_id','partner_id','team_id','add_time',
		'comment_content','image1','image2','image3','image4',
		'reply_cotent','comment_grade','comment_grade_all','comment_grade_three'
	);
	$comment['order_id'] = 0;
	$comment['user_id'] = $login_user_id;
	$comment['add_time'] = time();
	$comment['partner_id'] = abs(intval($team['partner_id']));
	$comment['team_id'] = abs(intval($team_id));
	$comment['image1'] = upload_image('upload_image1',null,'team',true);
	$comment['image2'] = upload_image('upload_image2',null,'team');
	$comment['image3'] = upload_image('upload_image3',null,'team');
	$comment['image4'] = upload_image('upload_image4',null,'team');
	
	//print_r($comment);exit();
	
	$insert = array_unique($insert);
	$table = new Table('comment', $comment);
	
	if(!$cid){
	    if ( $table->insert($insert) ) {
		 Session::Set('notice', '评论成功');
		 redirect( WEB_ROOT . "/team.php?id=$team_id");
		}
		else {
			Session::Set('error', '评论失败');
			redirect(null);
		}
	}

}	


