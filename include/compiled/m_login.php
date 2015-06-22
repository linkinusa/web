<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8"><meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title><?php echo $INI['system']['abbreviation']; ?></title>

<link rel="stylesheet" type="text/css" href="style/common_css_0_6c6ef1d.css"><link rel="stylesheet" type="text/css" href="style/login_css_0_d77a8ad.css">
</head>






<body mon="position=login">



<header class="w-header" mon="type=header">
<a class="arrow-wrap" href="javascript:history.back()" mon="content=back">
<span class="arrow-left"></span>
</a>

<a href="index.php" class="home" mon="content=home"></a>
<div class="text">登录</div>
</header>




<?php $notice = Session::Get('notice', true); ?>
<?php if($notice){?>
<header style="background:#00FFCC" class="w-header" mon="type=header" style="margin-top:5px;">
<div class="text" id="okMsg" ><?php echo $notice; ?></div>
</header>
<?php }?>
<?php $error = Session::Get('error', true); ?>
<?php if($error){?>
<header style="background:#F3C" class="w-header" mon="type=header" style="margin-top:5px;">
<div class="text" id="okMsg" ><?php echo $error; ?></div>
</header>
<?php }?>


<article class="p-login p-login-common" mon="action=click" id="j-login">
<section class="title clearfix" id="j-title">
</section>

<form class="content j-content active" action="login.php" method="post">


<div>

<input placeholder="用户名/手机号/邮箱" class="j-input" name="email" id="email" autocomplete="off" maxlength="50" type="text">

<i class="j-clear-input"></i>
</div>

<div>
<input placeholder="密码" class="j-input" id="password" name="password" value="" autocomplete="off" maxlength="32" type="password">

<i class="j-clear-input"></i>
<!--<input  type="checkbox" name="remember" value="1" style="border:none;" checked="checked" />下次自动登录
-->

<i class="j-clear-input"></i>
</div>

<section class="btns clearfix">

<input type="submit" class="btn" id="j-login-btn"  value="登录" />

</form>
<a href="signup.php" class="reg">免费注册</a>
<a href="/thirdpart/qzone/index.php" target="_blank"><img alt="使用QQ账号登录" src="/static/0750/images/Connect_logo_1.png">QQ登录</a>

</section>

</article>



<?php include template("m_footer");?>
</body>

</html>
