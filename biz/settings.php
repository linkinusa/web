<?php
require_once(dirname(dirname(__FILE__)) . '/app.php');

need_partner();
$partner_id = abs(intval($_SESSION['partner_id']));
$login_partner = $partner = Table::Fetch('partner', $partner_id);

if ( $_POST ) {
	
	/*
	'title', 'bank_name', 'bank_user', 'bank_no',
		'location', 'other', 'homepage', 'contact', 'mobile', 'phone',
		'address',
		
		*/
	
	$table = new Table('partner', $_POST);
	$table->SetStrip('location', 'other');
	$table->SetPk('id', $partner_id);
	$table->hetong = upload_image('upload_hetong', $partner['hetong'], 'team', true);
	$update = array(
		'title', 'bank_name', 'bank_user', 'bank_no',
		'location', 'other', 'homepage', 'contact', 'mobile', 'phone',
		'address',
		'group_id','email','email2','fax','yyzz_num','shui_num','hetong','zd_address',
		'zip_code','name','position','city_id',
	);
	if ( $table->password == $table->password2 && $table->password ) {
		$update[] = 'password';
		$table->password = ZPartner::GenPassword($table->password);
	}
	

	$flag = $table->update($update);
	if ( $flag ) {
		Session::Set('notice', '修改商户信息成功');
		redirect( WEB_ROOT . "/biz/settings.php");
	}else{
	    Session::Set('error', '修改商户信息失败');
	}

	$partner = $_POST;
}
$pagetitle = 'settings';
include template('biz_settings');
