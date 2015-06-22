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
			<h1 class="usercentertitle">点评本单</h1>
			<hr/>
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
					<p class="tabledivclassimg"><a href="/team.php?id=<?php echo $team['id']; ?>" target="_blank"><img src="<?php echo team_image($team['image']); ?>" width="145" height="106"/></a></p>
					<p class="tabledivclasstime"><?php echo mb_strimwidth($team['title'],0, 29,'...'); ?></p>
					<p class="tabledivclassaddress" style="margin-left:25px;"><?php echo getpartner($team['id']); ?> <img src="/static/0750/images/redaddress.png"/></p>
					<p class="tabledivclassprice">$<?php echo $team['team_price']; ?></p>
					<p class="tabledivclassmore"><a href="/team.php?id=<?php echo $team['id']; ?>">查看详情</a></p>
				</div>
				</td>
              </tr>
            </table>
			</div>
			<div class="userinfo" style="padding:0 54px;">
			 <form method="post" action="#" enctype="multipart/form-data">
             <p class="showmsgstar">
             <input type="radio" name="comment_grade" value="1"  title="1分"/>
             1分<img style="width:23px;" src="/static/0750/images/appraiseico.png" title="1分"/>
             <input type="radio" name="comment_grade" value="2"  title="2分" />
             2分<img style="width:23px;"  src="/static/0750/images/appraiseico.png" title="2分"/>
             <input type="radio" name="comment_grade" value="3"  title="3分" />
             3分<img style="width:23px;"  src="/static/0750/images/appraiseico.png" title="3分"/>
             <input type="radio" name="comment_grade"  value="4"  title="4分"/>
             4分<img style="width:23px;"  src="/static/0750/images/appraiseico.png" title="4分"/>
             <input type="radio" name="comment_grade"  value="5" title="5分" checked="checked" />
             5分<img style="width:23px;"  src="/static/0750/images/appraiseico.png" title="5分"/>
             
            </p>
            <textarea class="appraisetxt" style="width:780px;" id="comment_content"  maxlength="500" name="comment_content"></textarea>

             
            <input id="sub" type="submit" style="cursor:pointer" value="发表评论" class="formbutton"/>
               </form>
               
                    
                    <div style="clear:both;"></div>
                </div>
              
             
           
                
               
			</div>
		</div>
	</div>
<?php include template("foot_ctn");?>