<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ZH-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<script src="/static/0750/js/j.js" type="text/javascript"></script>
<script src="/static/0750/js/jquery.jcookie.min.js" type="text/javascript"></script>
<script src="/static/0750/js/js_lang.js" type="text/javascript"></script>
<script src="/static/js/index.js" type="text/javascript"></script>
<?php include template("meta_and_title");?>
</head>

<body id="login">
<?php include template("head_ctn");?>
	<div class="content">
		<div class="logintitle"><h1>注册</h1></div>
		<div class="sharelogin">
			<p>您可以使用以下账号直接登陆邻客美国，无需注册</p>
			<ul>
				<li><a href=""><img src="/static/0750/images/wxico.png"/></a><br/><span><a href="">微信登陆</a></span></li>
				<li><a href=""><img src="/static/0750/images/wbico.png"/></a><br/><span><a href="/thirdpart/sina/login.php" target="_blank">微博登陆</a></span></li>
				<li><a href=""><img src="/static/0750/images/qqico.png"/></a><br/><span><a href="/thirdpart/qzone/index.php" target="_blank">QQ登陆</a></span></li>
				<li><a href=""><img src="/static/0750/images/fbico.png"/></a><br/><span><a href="">Facebook登陆</a></span></li>
				<li><a href=""><img src="/static/0750/images/rrico.png"/></a><br/><span><a href="">人人网登陆</a></span></li>
			</ul></div>
		<div class="registinfo">
			<form id="signup-user-form" method="post" action="/account/signup.php">
			  <?php if($session_notice=Session::Get('error',true)){?>
     	     <li id="" class="noStyle"><div class="area error"><?php echo $session_notice; ?></div></li>
    		 <?php }?>
	 
				<img src="/static/0750/images/mailico.png" class="registinfoimg"/><h1>邮箱注册</h1><br/><br/><br/><br/>
				<ul>
				<li><input type="text" name="email" id="signup-email-address" value="<?php echo $_POST['email']; ?>" require="true" datatype="email|ajax" url="<?php echo WEB_ROOT; ?>/ajax/validator.php" vname="signupemail" msg="Email格式不正确|Email已经被注册"/><p>邮箱</p></li>
				<li>
                <input type="text" name="username" id="signup-username" class="f-input" value="<?php echo $_POST['username']; ?>" datatype="limit|ajax" require="true" min="2" max="16" maxLength="16" url="<?php echo WEB_ROOT; ?>/ajax/validator.php" vname="signupname" msg="用户名长度受限|用户名已经被使用" /><p>用户名</p></li>
				<li><input type="password" name="password" id="signup-password" class="f-input" require="true" datatype="require" /><p>创建密码</p></li>
				<li><input type="password" name="password2" id="signup-password-confirm" class="f-input" require="true" datatype="compare" compare="signup-password"/><p>重复密码</p></li>
				</ul>
                <p style="padding-left:140px;"> <input checked="checked" type="checkbox" name="xieyi"/><a style="color:#000" href="/news.php?id=15"> 同意邻客美国协议 </a></p>
			
				<input type="submit" value="" name="commit" id="signup-submit"  class="registbtn"/>
			</form>
		</div>
	</div>
<?php include template("foot_ctn");?>