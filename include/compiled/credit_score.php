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

			<div class="userinfo">
			    
				<h1 class="usercentertitle">我的积分：<strong><?php echo moneyit($login_user['score']); ?></strong></h1>
			    <div style="padding-left:35px;"><img src="/static/0750/images/jifen02.jpg" /></div>
                
                <h1 class="usercentertitle">积分兑换</h1>
                <div style="padding:0 40px;">
                <ul>
                <?php if(is_array($goods)){foreach($goods AS $tindex=>$one) { ?>  
                   <li style="float:left; margin-right:5px;"><a href="/credit/creditshop.php"><img width="250" height="160" src="<?php echo team_image($one['image']); ?>" /></a></li>
              <?php }}?> 
                </ul>
                </div>
			</div>
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>