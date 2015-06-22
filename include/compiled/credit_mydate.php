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

<style type="text/css">
.mydate table{ width:100%; text-align:center; line-height:40px;}
.mydate tr{ border:#0CF solid 1px;}
.mydate td{ border:#0CF solid 1px;}
</style>

</head>
<?php include template("head_ctn");?>
<div class="content">
		<div class="usercenterborder">
		<div class="usercenterleft">
			<?php include template("account_left");?>
		</div>
	  <div class="usercenterright">

			<div class="userinfo">
				<h1 class="usercentertitle">我的日历</h1>
			    <div style="padding:35px;" class="mydate">
                   <div style="float:left;width:75%"> <?php  get_date($year,$month); ?></div>
                   <div style="float:right;width:24%; line-height:36px; font-size:14px;"> 
                     <h3 style="font-weight:bold; font-size:18px;">您有以下商品即将到期</h3>
                      <ul>
                       <?php if(is_array($team_pay)){foreach($team_pay AS $index=>$one) { ?>
                           <li><a href="/team.php?id=<?php echo $one['id']; ?>"><?php echo $index + 1; ?> , <?php echo $one['title']; ?></a></li>
                         <?php }}?>   
                      </ul>
                   </div>
                </div>

			</div>
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>