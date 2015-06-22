<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ZH-CN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<link href="/static/css/index.css" rel="stylesheet" type="text/css">
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
input.formbutton {
    background-color: #05aecc;
    border: 1px solid #05aecc;
    border-radius: 5px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 0 2px #eee;
    color: #fff;
    display: inline;
    font-size: 14px;
    height: 36px;
    margin-left: 2px;
    margin-top: 10px;
    padding: 0 15px;
}
</style>

</head>
<?php include template("head_biz_ctn");?>
	<div class="content">
		<div class="usercenterborder">
		<div class="usercenterleft_biz" style="height:auto;  width:325px; float:left;">
			<?php include template("biz_header");?>
		</div>
        
 	  <div class="usercenterright_biz">
			<h1 class="usercentertitle">Users' Comments</h1>
			            <?php if(is_array($orders)){foreach($orders AS $index=>$one) { ?>
		<div class="appraiselistfloor">
			<div class="appraiselisttop">
				<a href="/team.php?id=<?php echo $one['team_id']; ?>"><img src="<?php echo team_image($teams[$one['team_id']]['image']); ?>"/></a><p><?php echo mb_strimwidth($teams[$one['team_id']]['title'],0,30); ?></p><p><!--评价时间：<?php echo date('Y/m/d',$one['add_time']); ?>--></p>
			</div>
			<div class="appraiselistmain">
				<span><?php echo mb_strimwidth($login_user['username'],0,10); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo date('d-m-Y',$one['add_time']); ?></span>
				<span style=" float:right; margin-right:50px;"><img src="/static/0750/images/fullstar.png"/><img src="/static/0750/images/fullstar.png"/><img src="/static/0750/images/fullstar.png"/><img src="/static/0750/images/fullstar.png"/>
				<img src="/static/0750/images/midstar.png"/></span>
				<p><?php echo mb_strimwidth($one['comment_content'],0,50); ?></p>
			</div>
		</div>
        <?php }}?>
		<tr><td colspan="6"><?php echo $pagestring; ?></tr>
		</div>
       
            
			
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>