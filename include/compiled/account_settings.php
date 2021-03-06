<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ZH-CN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<script src="/static/0750/js/j.js" type="text/javascript"></script>
<script src="/static/0750/js/jquery.jcookie.min.js" type="text/javascript"></script>
<script src="/static/0750/js/js_lang.js" type="text/javascript"></script>
<script type="text/javascript">var WEB_ROOT = '<?php echo WEB_ROOT; ?>';</script>
<script type="text/javascript">var LOGINUID= <?php echo abs(intval($login_user_id)); ?>;</script>
<script src="/static/js/index.js" type="text/javascript"></script>
<script src="/static/0750/js/slide.js" type="text/javascript"></script>

<?php echo Session::Get('script',true);; ?>
<?php include template("meta_and_title");?>

</head>
<?php include template("head_ctn");?>
<div class="content">
		<div class="usercenterborder">
		<div class="usercenterleft">
			<?php include template("account_left");?>
		</div>
	  <div class="usercenterright">
			<h1 class="usercentertitle">基本信息</h1>
			<hr/>
			<div class="userinfo">
				        <form id="settings-form" method="post" action="/account/settings.php" enctype="multipart/form-data">
					<ul class="userinfoformul">
					<li><p>姓名:</p><input type="text" class="userinfoinput" name="first_name" value="<?php echo $login_user['first_name']; ?>" /></li>
					<li><p>邮件:</p><input type="text" class="userinfoinput"  name="email" value="<?php echo $login_user['email']; ?>"/></li>
					</ul>
				<hr/>
				<h1 class="usercentertitle">修改密码</h1>
					<ul class="userinfoformul">
                    <li><p>用户名:</p><input type="text" class="userinfoinput"  name="username"  value="<?php echo $login_user['username']; ?>" /></li>
					<li><p>当前密码:</p><input type="password" class="userinfoinput"  name="oldpassword" /></li>
					<li><p>新密码:</p><input type="password" class="userinfoinput"  name="password" /></li>
					<li><p>确定密码:</p><input type="password" class="userinfoinput"  name="password2" /></li>
					<li><input type="submit" value="保存" class="userinfosave"  name="commit" style="cursor:pointer" /></li>
					</ul>
				</form>
			</div>
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>