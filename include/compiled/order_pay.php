<?php include template("header");?>
<?php if(is_get()){?>
<div class="sysmsgw" id="sysmsg-error"><div class="sysmsg"><p>此订单尚未完成付款，请重新付款</p><span class="close">关闭</span></div></div>
<?php }?>
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="order-pay">
   <div id="content" style="width:1100px;">
        <div id="deal-buy" class="box">
        
            <div class="box-content">
                <div class="head">
                    <h2 style="color:#58585b;">应付总额：<strong class="total-money">$<?php echo moneyit($total_money); ?></strong></h2>
                </div>
                <div class="sect">
                    <div style="text-align:left;">
					<?php if($order['service']=='credit'){?>
						<form id="order-pay-credit-form" method="post" sid="<?php echo $order_id; ?>">
							<input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />
							<input type="hidden" name="service" value="credit" />
							<input type="submit" class="formbutton gotopay" value="使用账户余额支付" style="cursor:pointer"/>
						</form>
					<?php } else { ?>
						<?php echo $payhtml; ?>
					<?php }?>
						<div class="back-to-check"><a style="color:#333" href="/order/check.php?id=<?php echo $order_id; ?>">&raquo; 返回选择其他支付方式</a></div>
					</div>
				</div>
                
             
                
                
            </div>
          
        </div>
    </div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
