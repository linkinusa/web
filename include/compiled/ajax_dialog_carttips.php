<style type="text/css">
.btn-gray {
    background-color: #2db3a6;
    background-image: linear-gradient(to bottom, #2ec3b4, #2db3a6);
    background-size: 100% auto;
    border-color: #0d7b71;
    color: white;
	display:block;
	width:100px;
	text-align:center;
	float:left;
	border-radius:5px;
}
.btn-orange{
	    background-color: #ff7200;
    background-image: linear-gradient(to bottom, #ff8901, #ff7200);
    background-size: 100% auto;
    border-color: #da3f02;
    color: white;
	display:block;
	width:140px;
	text-align:center;
	float:left;
	margin-left:20px;
	border-radius:5px;
	}
</style>


<div id="order-pay-dialog" class="order-pay-dialog-c shoppingcarttips" style="width:680px;">
  <h3>
     <font style="font-size:16px;">成功加入购物车</font>  
     <span id="order-pay-dialog-close" class="close" onclick="return X.boxClose();">关闭</span>
   </h3>
   <div style="padding-left:10px; margin-top:10px;">
         <img style="display:block; float:left;" src="/static/0750/images/gougimg.png" />
         <div style="width:240px; float:left; padding-left:20px; line-height:65px; font-size:14px;"> 
          购物车内共有 <strong style="color:#FF0000"><?php echo abs(count($_SESSION['mycart']['team_ids'])); ?></strong> 种商品  
          </div>
          <div style="padding:15px; line-height:30px; float:left">

            	<a href="javascript:" onclick="return X.boxClose();" class="btn-gray">&lt;&lt;继续浏览</a>
                
                <a href="/cart/index.php" class="btn-orange">去购物车结算&gt;&gt;</a>
	     </div>
   </div>

    <div style="padding:15px; padding-top:0px; margin-top:10px;">
           <div style="color:#666; border-bottom:#dbdbdb dotted 1px;border-top:#dbdbdb dotted 1px; padding:10px 0; line-height:28px; margin-bottom:10px;">购买了本团购的用户还看了</div>
        <?php if(is_array($haiteams)){foreach($haiteams AS $index=>$one) { ?>
             
        <div style="width:200px; float:left; margin-right:13px" class="panel <?php if($index%3 == 2){?>nomarginright<?php }?>">
         <ul>
          <li class="picture"><a style="width:200px; height:128px; display:block;" href="/team.php?id=<?php echo $one['id']; ?>" title="<?php echo $one['title']; ?>" target="_blank"><img src="<?php echo team_image($one['image']); ?>" width="200" height="128" style="width:200px; height:128px" /></a></li>
          <li class="title"><a href="/team.php?id=<?php echo $one['id']; ?>" title="<?php echo $one['title']; ?>" target="_blank"><?php echo mb_strimwidth($one['title'],0,50); ?></a></li>
          <li class="inf"><span class="floatleft"><b class="red"><?php echo $currency; ?><?php echo moneyit($one['team_price']); ?></b></span><span class="floatright"><i class="orange"><?php echo $one['now_number']; ?></i>人团购</span></li>
         </ul>
        </div>
  <?php }}?>   
    
    
    </div>

</div>
