<footer class="footer" mon="type=footer">
<section class="login">
<div class="login-wrap">
<?php if($login_user){?>
<a href="my.php" style="width:120px;" class="btn login-btn" mon="content=login"><?php echo $login_user['username']; ?></a>
<a href="logout.php" class="btn" mon="content=register">退出</a>
<?php } else { ?>  
<a href="login.php" class="btn login-btn" mon="content=login">登录</a>
<a href="signup.php" class="btn" mon="content=register">注册</a>
<?php }?>
</div>
<div class="city-wrap">
<a class="btn text" href="#"><span>城市：</span></a>
<a href="#" class="btn" mon="content=city"><span><?php echo $city['name']; ?></span></a></div>
</section>

<section class="links">
<a href="index.php" class="link" mon="content=index">首页</a>
<a href="/index.php" class="link" mon="content=pc">电脑版</a>
<a href="#" class="link" mon="content=app">客户端</a>
<a href="#" class="link" mon="content=aboutus">关于我们</a>
<a href="#" class="link" mon="content=feedback">信息反馈</a>
<a href="help.php" class="link" mon="content=help">帮助</a>
</section>
<section class="copyright">©zaoyouhui.com 京ICP证067807号</section>
</footer>

<div class="w-sort__mask" style="height: 3071px;"></div>


