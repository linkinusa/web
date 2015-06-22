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

</head>
<?php include template("head_ctn");?>
<div class="content">
		<div class="usercenterborder">
		<div class="usercenterleft">
			<?php include template("account_left");?>
		</div>
	  <div class="usercenterright">
			<h1 class="usercentertitle">我的评价</h1>
            
            
            <?php if(is_array($orders)){foreach($orders AS $index=>$one) { ?>
		<div class="appraiselistfloor">
			<div class="appraiselisttop">
				<a href="/team.php?id=<?php echo $one['team_id']; ?>"><img src="<?php echo team_image($teams[$one['team_id']]['image']); ?>"/></a><p><?php echo mb_strimwidth($teams[$one['team_id']]['title'],0,30); ?></p><p>过期时间：<?php echo date('Y-m-d',$teams[$one['team_id']]['expire_time']); ?></p>
			</div>
			<div class="appraiselistmain">
				<span><?php echo mb_strimwidth($login_user['username'],0,10); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo date('Y-m-d',$one['add_time']); ?></span>
				<span style=" float:right; margin-right:20px;">
                
              <?php 
               for($i=0;$i<5;$i++){
                  if($i < $one['comment_grade']){
                     echo '<img src="/static/0750/images/fullstar.png"/>';
                  }else{
                     echo '<img src="/static/0750/images/midstar.png"/>';
                  }
                  
               }
              
              ; ?>
  <!--              <img src="/static/0750/images/fullstar.png"/>
                
                
                <img src="/static/0750/images/fullstar.png"/>
                <img src="/static/0750/images/fullstar.png"/>
                <img src="/static/0750/images/fullstar.png"/>
				<img src="/static/0750/images/midstar.png"/>-->
                
                </span>
				<p><?php echo mb_strimwidth($one['comment_content'],0,50); ?></p>
			</div>
		</div>
        <?php }}?>
		<tr><td colspan="6"><?php echo $pagestring; ?></tr>
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>