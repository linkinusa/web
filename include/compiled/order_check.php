<?php include template("header");?>
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="content" style="width:1100px;">
    <div id="deal-buy" class="box">
        <h1 style="color:#58585b;font-size:18px; font-weight:bold; padding-bottom:10px; border-bottom:#e2e2e2 solid 1px; margin-bottom:10px;">完成你的预订</h1>
        <div class="box-content" style="border:none">
            
            <div class="sect" style="border-top:none; padding:0px;border:#b2b2b2 solid 1px;">
                <table class="order-table">

                    <tr>
                        <th style="border-right:#b2b2b2 solid 1px;border-bottom:#b2b2b2 solid 1px; background:#ebebeb"  class="deal-buy-desc">项目名称</th>
                         <th style="border-right:#b2b2b2 solid 1px;border-bottom:#b2b2b2 solid 1px; background:#ebebeb"  class="deal-buy-price">数量</th>
                        <th style="border-right:#b2b2b2 solid 1px;border-bottom:#b2b2b2 solid 1px; background:#ebebeb"  class="deal-buy-quantity">价格</th>
                        <th style="border-bottom:#b2b2b2 solid 1px;background:#ebebeb; text-align:center" class="deal-buy-total">总价</th>
                    </tr>
                    
                    	
                                    <?php if($team_num > 1){?>
	  <?php if(is_array($order_list)){foreach($order_list AS $tindex=>$one) { ?>
						<td  style="border-bottom:#b2b2b2 solid 1px;" class="pname"><?php echo get_team_title($one['team_id']); ?></td>
	
    
    <td style="border-bottom:#b2b2b2 solid 1px;"  class="deal-buy-price" id="deal-buy-price"><span class="money"><?php echo $currency; ?></span><?php echo moneyit($one['price']); ?></td>

<td style="border-bottom:#b2b2b2 solid 1px;" >&nbsp;&nbsp;<?php echo $one['quantity']; ?>&nbsp;&nbsp;</td>

	<td align="center" style="border-bottom:#b2b2b2 solid 1px;"  class="deal-buy-total" id="deal-buy-total"><strong><span class="money"><?php echo $currency; ?></span><?php echo moneyit($one['price']*$one['quantity']); ?></strong></td>
				</tr>
	 <?php }}?>           
<?php } else { ?>                   
		  <tr>
						<td  style="border-bottom:#b2b2b2 solid 1px;text-align: left;" class="pname"><?php echo $team['title']; ?></td>
	<td  style="border-bottom:#b2b2b2 solid 1px;" >&nbsp;&nbsp;<?php echo $order['quantity']; ?>&nbsp;&nbsp;</td>

	<td  style="border-bottom:#b2b2b2 solid 1px;"  class="deal-buy-price" id="deal-buy-price"><span class="money"><?php echo $currency; ?></span><?php echo moneyit($order['price']); ?></td>

	<td  align="center"  style="border-bottom:#b2b2b2 solid 1px;"  class="deal-buy-total" id="deal-buy-total"><strong><span class="money"><?php echo $currency; ?></span><?php echo moneyit($order['price']*$order['quantity']); ?></strong></td>
				</tr>             
<?php }?> 
                    
                    
                    
                    
                  
                
					<?php if($order['card']>0){?>
				   <tr id="cardcode-row">
						<td class="deal-buy-desc">代金券：<span id="cardcode-row-n"><?php echo $order['card_id']; ?></span></td>
						<td class="deal-buy-quantity"></td>
						<td class="deal-buy-multi"></td>

						<td class="deal-buy-price"><span class="money"><?php echo $currency; ?></span><?php echo moneyit($order['card']); ?></td>
						<td class="deal-buy-equal">=</td>
						<td class="deal-buy-total">-<span class="money">¥</span><span id="cardcode-row-t"><?php echo $order['card']; ?></span></td>
					</tr>
					<?php }?>

			
                </table>
				<div class="paytype">
                <form action="/order/pay.php" method="post" class="validator">
				<div>
					<div class="order-pay-credit">
						
						<p>账户余额：<strong><span class="money"><?php echo $currency; ?></span><?php echo moneyit($login_user['money']); ?></strong> <?php if(false==$credityes){?>，您的余额不够完成本次付款，还需支付 <strong><span class="money"><?php echo $currency; ?></span><?php echo moneyit($order['origin']-$login_user['money']); ?></strong>。<?php if($creditonly){?>请赶紧去<a href="/credit/charge.php">充值</a>。<?php } else { ?>请选择支付方式：<?php }?><?php } else { ?>，您的余额足够本次购买，请直接确认订单，完成付款。<?php }?></p>
						<div class="other_pay"><?php echo $INI['other']['pay']; ?></div>
					</div>
				
					
				<?php if(false==$creditonly && false==$credityes &&empty($_SESSION['ali_token'])){?>
					<ul class="typelist">
					<?php if($INI['alipay']['mid']){?>
						<li><input id="check-alipay" type="radio" name="paytype" value="alipay" <?php echo $ordercheck['alipay']; ?> /><label for="check-alipay" class="alipay">支付宝交易，推荐淘宝用户使用</label></li>
					<?php }?>
					<?php if($INI['tenpay']['mid']){?>
						<li><input id="check-tenpay" type="radio" name="paytype" value="tenpay" <?php echo $ordercheck['tenpay']; ?> /><label for="check-tenpay" class="tenpay">财付通交易，推荐拍拍用户使用</label></li>
					<?php }?>
				        <?php if($INI['sdopay']['mid']){?>
										<li><input id="check-sdopay" type="radio" name="paytype" value="sdopay" <?php echo $ordercheck['sdopay']; ?> /><label for="check-sdopay" class="sdopay">盛付通交易，推荐盛大一卡通用户使用</label></li>
					<?php }?>
                                 	<?php if($INI['yeepay']['mid']){?>
						<li><input id="check-yeepay" type="radio" name="paytype" value="yeepay" <?php echo $ordercheck['yeepay']; ?> /><label for="check-yeepay" class="yeepay">易宝支付，人民币支付网关</label></li>
					<?php }?>
					<?php if($INI['bill']['mid']){?>
						<li><input id="check-bill" type="radio" name="paytype" value="bill" <?php echo $ordercheck['bill']; ?> /><label for="check-bill" class="bill">快钱交易，助您生活娱乐更加便捷</label></li>
					<?php }?>
					<?php if($INI['chinabank']['mid']){?>
						<li><input id="check-chinabank" type="radio" name="paytype" value="chinabank" <?php echo $ordercheck['chinabank']; ?> /><label for="check-chinabank" class="chinabank">网银支付交易，支持招商、工行、建行、中行等主流银行</label></li>
					<?php }?>
					<?php if($INI['paypal']['mid']){?>
						<li><input id="check-paypal" type="radio" name="paytype" value="paypal" <?php echo $ordercheck['paypal']; ?> /><label for="check-paypal" class="paypal">PayPal, Recommended</label></li>
					<?php }?>
                    <?php if($INI['cmpay']['mid']){?>
						<li><input id="check-cmpay" type="radio" name="paytype" value="cmpay" <?php echo $ordercheck['cmpay']; ?> /><label for="check-cmpay" class="cmpay">手机号就是您的支付账户，中国移动为您提供随时随地随身的支付服务！</label></li>
					<?php }?>
                    <?php if($INI['gopay']['mid']){?>
						<li><input id="check-gopay" type="radio" name="paytype" value="gopay" <?php echo $ordercheck['gopay']; ?> /><label for="check-gopay" class="gopay">国家级电子支付平台，超低费率，安全保证。</label></li>
					<?php }?>
					</ul>

   	        <?php if($INI['tenpay']['mid']&&'Y'==$INI['tenpay']['direct']&&'N'==$INI['tenpay']['guarantee']){?>
					<div id="paybank">
						<?php if(is_array($paybank)){foreach($paybank AS $one) { ?>
						<p><input id="check-<?php echo $one; ?>" type="radio" name="paytype" value="<?php echo $one; ?>" /><label for="check-<?php echo $one; ?>" class="<?php echo $one; ?>"></label></p>
						<?php }}?>
					</div>  
		<?php }?>

		<?php if($INI['sdopay']['mid']&&'Y'==$INI['sdopay']['direct']&&'N'==$INI['tenpay']['direct']){?>
					<div id="paybank">
						<?php if(is_array($sdopaybank)){foreach($sdopaybank AS $one=>$sid) { ?>
						<p><input id="check-<?php echo $one; ?>" type="radio" name="paytype" value="<?php echo $sid; ?>" /><label for="check-<?php echo $one; ?>" class="<?php echo $one; ?>"></label></p>
						<?php }}?>
					</div>  
		<?php }?>

		<?php if($INI['yeepay']['mid']&&'Y'==$INI['yeepay']['direct']&&'N'==$INI['tenpay']['direct']&&'N'==$INI['sdopay']['direct']){?>
					<div id="paybank">
						<?php if(is_array($yeepaybank)){foreach($yeepaybank AS $one=>$pid) { ?>
						<p><input id="check-<?php echo $one; ?>" type="radio" name="paytype" value="<?php echo $pid; ?>" /><label for="check-<?php echo $one; ?>" class="<?php echo $one; ?>"></label></p>
						<?php }}?>
					</div>  
		<?php }?>
        <?php if($INI['gopay']['mid']&&'Y'==$INI['gopay']['direct']&&'N'==$INI['tenpay']['direct']&&'N'==$INI['sdopay']['direct']&&'N'==$INI['yeepay']['direct']){?>
					<div id="paybank">
						<?php if(is_array($gopaybank)){foreach($gopaybank AS $one=>$gid) { ?>
						<p><input id="check-<?php echo $one; ?>" type="radio" name="paytype" value="<?php echo $gid; ?>" /><label for="check-<?php echo $one; ?>" class="<?php echo $one; ?>"></label></p>
						<?php }}?>
					</div>  
		<?php }?>
					<?php } else if(false==$creditonly && false==$credityes && $_SESSION['ali_token']) { ?>
					<ul class="typelist">
					<li><input id="check-alipay" type="radio" name="paytype" value="alipay" <?php echo $ordercheck['alipay']; ?> /><label for="check-alipay" class="alipay">支付宝交易</label></li>
                    </ul>
					<?php } else { ?>
					<input type="hidden" name="paytype" value="credit" />
					<?php }?>

					<?php if($credityes || false==$creditonly){?>
					<div class="clear"></div>
					<p style="text-align:center; padding-bottom:20px;">
					<input type="hidden" name="order_id" value="<?php echo $order['id']; ?>" />
					<input type="hidden" name="team_id" value="<?php echo $order['team_id']; ?>" />
					<input type="hidden" name="cardcode" value="" />
					<input type="hidden" name="quantity" value="<?php echo $order['quantity']; ?>" />
					<input type="hidden" name="address" value="<?php echo $order['address']; ?>" />
					<input type="hidden" name="express" value="<?php echo $order['express']; ?>" />
					<input type="hidden" name="remark" value="<?php echo $order['remark']; ?>" />
					<input  style="margin:5px 0 0 2px; background:#05aecc; border:#05aecc solid 1px;cursor:pointer" type="submit" value="确认订单，付款" class="formbutton" />
					<?php if(false==$credityes){?>
					<input type="button" style="cursor:pointer" value="确认订单，以后再付款" class="formbutton" onclick="location.href='/order/index.php?s=index&ocur=1';" />
					<?php }?>
                    
                        <?php if($team_num > 1){?>
					    <a href="/cart/index.php" style="margin-left:1em;color:#000000;">返回修改订单</a>
                    	<?php } else { ?>
                        <a href="/team/buy.php?id=<?php echo $order['team_id']; ?>" style="margin-left:1em;color:#000000;">返回修改订单</a>
                    	<?php }?>
					<?php }?>
					</p>
					</div>
					</form>
					</div>
					</div>
					</div>
					</div>
					</div>

					</div> <!-- bd end -->
					</div> <!-- bdw end -->

					<?php include template("footer");?>
