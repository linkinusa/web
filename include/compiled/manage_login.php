<?php include template("manage_header");?>

<div id="bdw" class="bdw">

<div class="right_main">
<div id="bd" class="cf">
<div id="manage">
    <div id="content" class="manage" style="margin:0 auto; float:none; border:#ff940a solid 1px;width:500px; padding:30px; margin-top:30px;">
        <div class="box">
            
            <div class="box-content">
                                <div class="head"><h2>管理员登录</h2></div>
                <div class="sect">
                    <form id="manage-user-form" method="post" action="/manage/login.php" class="validator">
                        <div class="field">
                            <label for="manage-login">登录名</label>
                            <input type="text" size="30" name="username" id="manage-username" class="f-input" datatype="require" require="true" />
                        </div>
                        <div class="field">
                            <label for="manage-password">密码</label>
                            <input type="password" size="30" name="password" id="manage-password" class="f-input" datatype="require" require="true" />
                        </div>
                        <div class="act">
                            <input type="submit" value="登录" name="commit" id="login-submit" class="formbutton"/>
                        </div>
                    </form>
                </div>
                            </div>
           
        </div>
    </div>
    <div id="sidebar">
	</div>
</div>
</div> <!-- bd end -->
</div>
</div> <!-- bdw end -->

<?php include template("manage_footer");?>
