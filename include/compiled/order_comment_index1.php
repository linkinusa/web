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
			<h1 class="usercentertitle">
            未评价商品

            </h1>
		
        
 
        <?php if(is_array($orders)){foreach($orders AS $index=>$one) { ?>
              <?php if($_GET['os'] == 'no' && $one['is_c'] == 0){?>
			<div class="tablediv">
		    <table width="875" border="1" cellspacing="0" cellpadding="0">
              <tr class="tabletrbg">
                <td width="150">购买日期</td>
                <td width="150">过期日期</td>
                <td width="150">订购价格</td>
                <td width="240">订购人</td>
                <td>订单号</td>
              </tr>
              <tr class="tabletrbg">
                <td><?php echo date('Y/m/d',$one['create_time']); ?></td>
                <td><?php echo date('Y/m/d',$teams[$one['team_id']]['expire_time']); ?></td>
                <td><?php echo $currency; ?><?php echo moneyit($one['price']); ?></td>
                <td><?php echo mb_strimwidth($login_user['username'],0,10); ?></td>
                <td><?php echo $one['id']; ?></td>
              </tr>
              <tr>
                <td colspan="5">
				<div class="tabledivclass">
					<p class="tabledivclassimg"><a href="/team.php?id=<?php echo $one['team_id']; ?>"><img src="<?php echo team_image($teams[$one['team_id']]['image']); ?>"/></a></p>
					<p class="tabledivclasstime"><?php echo mb_strimwidth($teams[$one['team_id']]['title'],0,30); ?><br/>使用时间：10:00am - 19:00pm</p>
					<p class="tabledivclassaddress" style="margin-top:30px; margin-left:60px;"><?php echo getpartner($one['team_id']); ?><img src="/static/0750/images/redaddress.png"/></p>
					<p class="tabledivclassmore" style="margin-right:60px; padding-top:20px;">
                    
                     <a href="/order/view.php?id=<?php echo $one['id']; ?>">更多细节</a><br />
                     
                     
                    
               
                     <a href="/order/comment.php?id=<?php echo $one['id']; ?>"><?php echo get_comment_order($one['id'])?'已评':'评价'; ?></a>
            
                     
                  
                    </p>
				</div>
				</td>
              </tr>
              
            </table>
			</div>
               <?php }?>
            <?php }}?>
          
     
            
			
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>