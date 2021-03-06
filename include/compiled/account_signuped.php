<?php include template("header");?>
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="signuped">
    <div id="content">
        <div class="box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head success" style=" background:none"><h2>恭喜您，注册成功！</h2></div>
                <div class="sect">
                    <h3 class="notice-title">下一步，请验证您的Email</h3>
                    <div class="notice-content">
                        <p>我们发送了一封验证邮件到 <strong><?php echo $email; ?></strong>，请到您的邮箱收信，并点击其中的链接验证您的邮箱。</p>
					<?php if($wwwlink){?>
                        <p class="signup-gotoverify"><a href="<?php echo $wwwlink; ?>" target="_blank"><img src="/static/img/signup-email-link.gif"></a></p>                    
					<?php }?>
						</div>

                    <div class="help-tip">
                        <h3 class="help-title">收不到邮件？</h3>
                        <ul class="help-list">
                            <li>有可能被误判为垃圾邮件了，请到垃圾邮件文件夹找找。</li>
							<li><a href="/account/verify.php?email=<?php echo urlEncode($email); ?>" style="color:#05aecc">点击这里</a>重发验证邮件到你的邮箱：</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-bottom"></div>
        </div>
    </div>
    <div id="sidebar">
    </div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
