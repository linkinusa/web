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
			<h1 class="usercentertitle">收藏信息
  <!--            <select style="font-size:12px; margin-left:10px;">
                  <option onclick='window.location.href="collect.php?ccur=1";'>所有收藏</option>
                  <option onclick='window.location.href="collect.php?gid=1";'>热门推荐</option>
                  <option onclick='window.location.href="collect.php?gid=2";'>美食</option>
                  <option onclick='window.location.href="collect.php?gid=3";'>娱乐</option>
                  <option onclick='window.location.href="collect.php?gid=4";'>活动</option>
                  <option onclick='window.location.href="collect.php?gid=5";'>景点</option>
                  <option onclick='window.location.href="collect.php?gid=6";'>旅行</option> 

              </select>-->
            </h1>
		
           <?php if(is_array($orders)){foreach($orders AS $index=>$one) { ?>
           
           
			<div class="tablediv">
		    <table width="875" border="1" cellspacing="0" cellpadding="0">
              <tr class="tabletrbg">
                <td width="390">商品信息</td>
                <td width="230">地址</td>
                <td width="112">价格</td>
                <td></td>
              </tr>
              <tr>
                <td colspan="5">
				<div class="tabledivclass">
					<p class="tabledivclassimg"><a href="/team.php?id=<?php echo $one['team_id']; ?>" target="_blank"><img src="<?php echo team_image($one['image']); ?>" width="145" height="106"/></a></p>
					<p class="tabledivclasstime"><?php echo mb_strimwidth($one['title'],0, 29,'...'); ?><br/>收藏时间：<?php echo date('Y/m/d',$one['time']); ?></p>
					<p style="width:160px; padding-left:40px;margin-top: 30px;" class="tabledivclassaddresssc"><?php echo getpartner($one['team_id']); ?><img src="/static/0750/images/redaddress.png"/></p>
					<p  style="padding-left:10px;"  class="tabledivclasspricesc"><?php echo $currency; ?><?php echo $one['team_price']; ?></p>
					<p style="padding-top:35px;" class="tabledivclassmoresc">
                    <a href="/team.php?id=<?php echo $one['team_id']; ?>">查看详情</a><br />
                    <a href="/account/collect.php?act=delcollect&id=<?php echo $one['id']; ?>">取消收藏</a></p>
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