<div class="headernav">
		<div class="headnav">
			<ul>
			<li style="background:none"><a class="dot" href="/account/settings.php">我的账户</a>
			<?php if($login_user){?>
			<div class="showmenu" style="display: none;">
              <!-- 未登录显示 -->
     		  <a class="white" href="/usercenter/index.php">
			  <?php if($_SESSION['ali_token']){?>
				<?php echo mb_strimwidth($login_user['realname'],0,10); ?>
                <?php } else { ?>
				<?php echo mb_strimwidth($login_user['username'],0,10); ?>
				<?php }?></a><a class="white" href="/account/logout.php">注销</a>
     		  <!-- //-->
             </div>
			 <?php } else { ?>
			<div class="showmenu" style="display: none;">
              <!-- 未登录显示 -->
     		  <a class="white" href="/account/login.php">亲，请先登录</a>
     		  <!-- //-->
             </div>
			
			<?php }?>			 
			 </li>
			<li><a class="white" href="/news.php?id=13">帮助</a></li>
			<li><a class="white" href="/cart/index.php">结账</a></li>
			</ul>
		</div>
		</div>