<?php
require_once(dirname(__FILE__) . '/app.php');

$tip = strval($_GET['tip']);

if ( $_POST['email'] ) {
	
	
	global $INI;
	$encoding = $INI['mail']['encoding'] ? $INI['mail']['encoding'] : 'UTF-8';

	$from = $INI['mail']['from'];
	$to = $_POST['email'];

	$message = '感谢您订阅邻客美国，我们会定期为您推送纽约最新的娱乐项目和折扣推荐。祝您生活愉快！';
	$subject = '感谢您订阅邻客美国，我们会定期为您推送纽约最新的娱乐项目和折扣推荐。祝您生活愉快！';

	$options = array(
		'contentType' => 'text/html',
		'encoding' => $encoding,
	);
	if ($INI['mail']['mail']=='mail') {
		Mailer::SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer::SmtpMail($from, $to, $subject, $message, $options);
	}
	
	
	
	$city_id = abs(intval($_POST['city_id']));
	ZSubscribe::Create($_POST['email'], $city_id);
	cookie_city( $city = Table::Fetch('category', $city_id));
	die(include template('subscribe_success'));
}

$pagetitle = '邮件订阅';
include template('subscribe');

