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
<?php include template("head_biz_ctn");?>
	<div class="content">
		<div class="usercenterborder">
		<div class="usercenterleft_biz" style="height:auto;  width:325px; float:left;">
			<?php include template("biz_header");?>
		</div>
	  <div class="usercenterright_biz">
			<h1 class="usercentertitle">My Items</h1>
            
            
         <?php if(is_array($teams)){foreach($teams AS $index=>$one) { ?>
			<div class="tablediv">
		    <table width="875" border="1" cellspacing="0" cellpadding="0">
              <tr class="tabletrbg">
                <td width="390">Item Information</td>
                <td width="150">Price</td>
                <td width="150">Amount</td>
                <td width="150" style="padding-right:30px">Total Price</td>

              </tr>
              <tr>
                <td colspan="5">
				<div class="tabledivclass">
					<p class="tabledivclassimg"><a href="/team.php?id=<?php echo $one['id']; ?>" target="_blank"><img src="<?php echo team_image($one['image']); ?>" width="145" height="106"/></a></p>
					<p class="tabledivclasstime"><?php echo mb_strimwidth($one['title'],0, 29,'...'); ?><br/>过期时间：<?php echo date('Y/m/d',$one['expire_time']); ?></p>
					<p class="tabledivclassaddress" style="margin-left:50px;width:140px; "><?php echo $currency; ?><?php echo $one['team_price']; ?></p>
					<p class="tabledivclassprice" style="width:0;height: 50px;float: left;line-height: 50px;padding-top: 40px;padding-left: 30px;"><?php echo $one['now_number']; ?></p>
					<p class="tabledivclassmore" style="height: 50px;float: right;margin-right: 50px;line-height: 50px;padding-top: 40px;"><span class="money"><?php echo $currency; ?></span><?php echo moneyit($one['team_price']*$one['now_number']); ?></p>
				</div>
				</td>
              </tr>
            </table>
			</div>
            <?php }}?>
		
        
     
       
           <tr><td colspan="6"><?php echo $pagestring; ?></tr>
            
			
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>