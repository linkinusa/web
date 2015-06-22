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
			<h1 class="usercentertitle"><a  style="color:#333;margin-right:15px;"  href="/biz/bill_index.php">Financial statistics</a>
            
             <a class="curl" href="/biz/bill_list.php"> Request Refund</a></h1>
			<hr/>
			<div class="userinfo">
				<div style="margin:30px; line-height:38px; font-size:18px;">
                       <table id="orders-list" cellspacing="0" cellpadding="0" border="0" class="coupons-table">
                        <tr>
                        <td align="center" width="200"><b>Balance</b></td>
                        <td align="center" width="200"><b>Gross Sales</b></td>
                        <td align="center" width="200"><b>Money Drawn</b></td>
                        </tr>
                
                        <tr>
                            <td align="center" style="color:#05aecc; font-weight:bold;"><?php echo $yue_price; ?></td>
                            <td align="center" style="color:#05aecc; font-weight:bold;"><?php echo $all_bill_price; ?></td>
                            <td align="center" style="color:#05aecc; font-weight:bold;"><?php echo $bill_price; ?></td>
                        </tr>
                        <!--{/loop}-->
                        </table>
                   </div>
                   
                <div  style="margin:30px; line-height:30px; font-size:14px;">
                      <p style="border-bottom:#b1b1b1 solid 1px;">Tips：</p>
					 <p>
                            1.Gross Sales: sales money since your items get online <br />

                            2.Money Drawn:sum of all the settlement amount <br />
                            
                            3.Balance = Gross Sales - Money Drawn - Money Refunded <br />
                     </p>
				</div>
                
                 <h2  style="margin:45px 10px 0px 35px; line-height:20px; padding-bottom:15px; padding-left:15px; font-size:18px; border-bottom:#b1b1b1 solid 1px;">Billing History</h2>  
                <div  style="margin:1px 30px; padding:0 10px; line-height:30px; font-size:14px;">
                      <table id="orders-list" cellspacing="0" cellpadding="0" border="0" class="coupons-table">
					<tr><th width="160"> Billing No.</th><th width="160">Application Date</th><th width="200">Settlement Amount</th><th width="150">Status</th><th width="150">Operation</th></tr>
					<?php if(is_array($partner_bill)){foreach($partner_bill AS $index=>$one) { ?>
					
					<tr <?php echo $index%2?'':'class="alt"'; ?> id="team-list-id-<?php echo $one['id']; ?>">
						<td style="text-align:left;"><?php echo $one['bill_sn']; ?></td>
						<td><?php echo date('Y/m/d',$one['add_time']); ?></td>
						<td><?php echo $one['price']; ?></td>
						<td>
                            <?php if($one['bill_status'] == 0){?>
                                 审核中
                             <?php } else if($one['bill_status'] == 1) { ?>
                                 已结算
                             <?php } else { ?>
                                 已拒绝
                             <?php }?>
                        </td>
						<td class="op" nowrap><a href="/ajax/bill.php?action=billdetail&id=<?php echo $one['id']; ?>" class="ajaxlink">详情</a></td>
					</tr>
					<?php }}?>
					<tr><td colspan="6"><?php echo $pagestring; ?></tr>
                    </table>
				</div>
			</div>
		</div>
       
            
			
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>