<?php include template("header");?>
<link rel="stylesheet" href="/static/css/index.css" type="text/css" media="screen" charset="utf-8" />
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<script src="/static/js/index.js" type="text/javascript"></script>
<script>
X.get(WEB_ROOT+'/ajax/cart.php?a=check_login');
</script>
<style type="text/css">
.order-body{ line-height:30px;}
td{ line-height:26px; padding:3px 8px;font-size:12px;}
</style>
<div id="bdw" class="bdw">
  <div id="bd" class="cf" style="margin-top:10px;">
   <div id="content" style="width:980px; border:#CCCCCC solid 1px; padding-bottom:25px; margin-left:50px;">
    <form method="post" action="/cart/index.php" class="validator" >
      <div class="box-big" style="padding:20px">
        <div class="order-body">
       <div class="buytop"><img src="/static/0750/images/ztgoucheimg.png" /></div>
       
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="cart-table">
            <tbody>
              <tr> 
                
                <th width="50%">项目</th>
                <th width="15%">类型/数量</th>
                <th width="12%">单价($)</th>
                <th width="13%">小计($)</th>
                <th width="10%">操作</th>
              </tr>
                 <?php if(is_array($p_teams)){foreach($p_teams AS $p_id=>$p) { ?>
              <?php if(is_array($p['teams'])){foreach($p['teams'] AS $index=>$one) { ?>
              
              <tr class="cart-item-list"> 

                <td class="t_l" style="padding:5px 25px 0 0"><a style="color:#222; font-size:12px;" href="/team.php?id=<?php echo $one['id']; ?>" target="_blank"><?php echo $one['title']; ?> </a></td>
                <td>
                  
                  <div class="num-item"><span class="num-reduce"></span>
                    <input style="height:20px;width:50px;" type="text" name="quantity" maxlength="4" value="<?php echo $one['num']; ?>" id="J_num_<?php echo $one['id']; ?>" class="inputQ" min_num="<?php echo $one['min_num']; ?>" max_num="<?php echo $one['max_num']; ?>" fare="<?php echo $one['fare']; ?>" farefree="<?php echo $one['farefree']; ?>" />
                    <input type="hidden" name="hid_num[<?php echo $one['id']; ?>][]" class="hid_num" value="<?php echo $one['num']; ?>" />
                    <span class="num-pluse"></span><?php if($one['farefree']>1){?><span class="tips"><?php echo $one['farefree']; ?> 件包邮</span><?php }?><?php if($one['num']<$one['min_num']){?><span class="tips errotips">最少购买<?php echo $one['min_num']; ?>件</span><?php } else if($one['max_num']>0&&$one['num']>$one['max_num']) { ?><span class="tips errotips">最多购买<?php echo $one['max_num']; ?>件</span><?php }?></div>
                  
                  </td>
                <td><?php echo $currency; ?><span class="item-price"><?php echo moneyit($one['team_price']); ?></span></td>
                <td><?php echo $currency; ?><span class="item-subtotal"><?php echo moneyit($one['team_price']*$one['num']); ?></span></td>
                <td><a href="javascript:void(0);" class="blue" onclick="cart_del(this);">删除</a>
                  <input name="cartItem" type="hidden" value="<?php echo $index; ?>"></td>
              </tr>
              <?php }}?>
              <?php }}?>
              <tr>
                <td colspan="3"><?php if($p_id>0){?>此订单由 <span class="orange">合作商家</span> 发货<?php } else { ?>此订单由 <span class="orange"><?php echo $INI['system']['sitename']; ?></span> 发货<?php }?></td>
                <td colspan="2"><div style="font-size:12px; font-weight:bold;">共 <b id="total_num"><?php echo $total_num; ?></b> 件商品，订单总金额：<b class="orange"><?php echo $currency; ?><i id="total_price"><?php echo $total_price; ?></i></b></div></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          
  
  <?php if($is_express == 1){?>
          <h3 style="font-size:16px; font-weight:bold; margin-top:10px;"><span>配送信息</span></h3>
          <div class="address" id="addressBox">
            <ul>
              <?php if($address){?>
              <li class="check"><span class="icon">寄送至</span>
                <label class="cf"><span class="input" style="background:none;">
                  <input name="address-list" type="radio" value="1" checked="checked">
                  </span> <span class="add"><?php echo $address['realname']; ?>，<?php echo $address['mobile']; ?>，<?php echo $address['address']; ?></span></label>
                <input type="hidden" name="o_realname" value="<?php echo $address['realname']; ?>"/>
                <input type="hidden" name="o_mobile" value="<?php echo $address['mobile']; ?>"/>
                <input type="hidden" name="o_address" value="<?php echo $address['address']; ?>"/>
              </li>
              <?php }?>
              <li id="add_address"><span class="icon">寄送至</span>
                <label class="cf"><span class="input" style="background:none;">
                  <input name="address-list" type="radio" value="0" <?php if(!$address){?>checked<?php }?> />
                  </span> <span class="add">使用其它地址</span></label>
              </li>
              <li class="postaddress">
                <div>
                  <label>　省市区：</label>
                  <select name="province" id="s1" class="f-input" style="width:140px;margin:2px 3px 2px 0;" require="true" datatype="require">
                    <option value="">-----</option>
                  </select>
                  <select style="width:140px;margin:2px 3px 2px 2px;" id="s2" name="area" class="f-input" require="true" datatype="require">
                    <option value="">-----</option>
                  </select>
                  <select style="width:140px;margin:2px 3px 2px 2px;" id="s3" name="city" class="f-input" >
                    <option value="">-----</option>
                  </select>
                </div>
                <div>
                  <label>详细地址：</label>
                  <input type="text" size="30" name="street" id="settings-street" class="f-input" style="width:425px" value="<?php echo $login_user['address']; ?>" require="true" datatype="require"/>
                </div>
                <div>
                  <label>　收件人：</label>
                  <input type="text" size="30" name="realname" id="settings-realname" class="f-input" value="<?php echo $login_user['realname']; ?>" require="true" datatype="require"/>
                </div>
                <div>
                  <label>手机号码：</label>
                  <input type="text" size="30" name="mobile" id="settings-mobile" class="f-input" value="<?php echo $login_user['mobile']; ?>"  maxLength="11" require="true" datatype="mobile"/>
                </div>
              </li>
            </ul>
          </div>
         <h3 style="font-size:16px; font-weight:bold; margin-top:10px;"><span>附加信息</span></h3>
          <div class="send-date">
            <p><strong>送货时间：</strong><span>
              <label>
                <input type="radio" value="任何时间均可送货" name="express_xx" checked="checked" />
                任何时间均可送货 </label>
              </span> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" value="只工作日送货" name="express_xx"  />
                只工作日送货 </label>
              </span> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" value="只双休日、假日送货" name="express_xx" />
                只双休日、假日送货 </label>
              </span></p>
              
               <?php }?>
            <p><strong>订单备注：</strong>
              <input type="text" maxlength="50" name="remark" id="remark" class="f-input" value="" style=" width:415px; font-size:13px; color:#999"/>
            </p>
          </div>
        </div>
        <div style="text-align:center">
          <input type="submit" value="提交订单" class="formbutton" id="saveOrder" style="cursor:pointer" />
        </div>
      </div>
      
    </form>
    </div>
       <div style="width:940px; border:#CCCCCC solid 1px; padding:15px 20px;float:left; margin-top:15px;margin-left:50px;">
                       <div style="font-size:16px; font-weight:bold; line-height:28px;">购买了本团购的用户还看了</div>
       <div class="list-nearby">
       
       
       

<?php if(is_array($haiteams)){foreach($haiteams AS $index=>$one) { ?>
             
        <div style="width:300px;" class="panel <?php if($index%3 == 2){?>nomarginright<?php }?>">
         <ul>
          <li class="picture"><a style="width:290px; display:block;" href="/team.php?id=<?php echo $one['id']; ?>" title="<?php echo $one['title']; ?>" target="_blank"><img src="<?php echo team_image($one['image']); ?>" width="290" height="142" style="width:290px;" /></a></li>
          <li class="title"><a href="/team.php?id=<?php echo $one['id']; ?>" title="<?php echo $one['title']; ?>" target="_blank"><?php echo $one['title']; ?></a></li>
          <li class="inf"><span class="floatleft"><b class="red"><?php echo $currency; ?><?php echo moneyit($one['team_price']); ?></b><em>原价<?php echo $currency; ?><?php echo moneyit($one['market_price']); ?></em></span><span class="floatright"><i class="orange"><?php echo $one['now_number']; ?></i>人团购</span></li>
          <li class="locate">附近商家：<?php echo get_partner_name($one['partner_id']); ?></li>
         </ul>
        </div>
  <?php }}?>             
               
               </div>
      </div>
  </div>
  

  
</div>
<script type="text/javascript" src="/static/js/city.js"></script> 
<script>
setupcity();
$('#addressBox li label').click(function(){
	 $(this).parent('li').addClass('check').siblings('li').removeClass('check');
	 if($(this).find('input[name=address-list]').val()==1){
		 $('.postaddress').hide();
		 $('.postaddress select,.postaddress input').attr('require','false');
	 }else{
		 $('.postaddress').show();
		 $('.postaddress select,.postaddress input').attr('require','true');
	 }
});
$('#addressBox li label').first().click();
$('#remark').focus(function(){
	if($(this).val()=='选填，可以告诉卖家您对商品的特殊要求，如快递、包装等') $(this).val('').css('color','#333');
});
$('#remark').blur(function(){
	if($(this).val()==''||$(this).val()=='选填，可以告诉卖家您对商品的特殊要求，如快递、包装等'){
		$(this).val('选填，可以告诉卖家您对商品的特殊要求，如快递、包装等').css('color','#999');
	}
});
</script> 
<script>
$('.J_type').click(function(){
	var html=$(this).siblings('.condbuys-box').html();
	X.boxShow(html,true);
	var info=$.parseJSON($(this).attr('data-info'));
	for(index in info){
		$('#dialog input[name=condbuy]').eq(index).attr('checked',(info[index]>0?true:false));
		$('#dialog input[name=num]').eq(index).val(info[index]);
	}
	return false;
});
$('#dialog input[name=num]').live('change',function(){
	var num=$(this).val();
	if(!/^[1-9]\d*$/.test(num)){
		$(this).val('');
		$(this).parents('tr').find('input[name=condbuy]').attr('checked',false);
	}else{
		$(this).parents('tr').find('input[name=condbuy]').attr('checked',true);
	}
});
$('#dialog input[name=condbuy]').live('change',function(){
	var num=$(this).attr('checked')==true?1:'';
	$(this).parents('tr').find('input[name=num]').val(num);
});
$('#dialog .num-item .num-pluse').live('click',function(){
	var obj=$(this).siblings('input');
	var num=parseInt($(obj).val());
	if(isNaN(num)) num=0;
	$(obj).val(num+1);
	$(this).parents('tr').find('input[name=condbuy]').attr('checked',true);
});
$('#dialog .num-item .num-reduce').live('click',function(){
	var obj=$(this).siblings('input');
	var num=parseInt($(obj).val());
	if(isNaN(num)||num<=1){
		num='';
		$(this).parents('tr').find('input[name=condbuy]').attr('checked',false);
	}else{
		num-=1;
	};
	$(obj).val(num);
});
function select_type(id){
	var min_num=parseInt($('#J_num_'+id).attr('min_num'));
	var max_num=parseInt($('#J_num_'+id).attr('max_num'));
	var num=0;
	var attrs=new Array();
	var info=new Array();
	$('#dialog input[name=num]').each(function(){
		var v=parseInt($(this).val());
		var index=$('#dialog input[name=num]').index(this);
		if(v>0){
			num+=v;
			var condbuy=$('#dialog input[name=condbuy]').eq(index).val();
			attrs.push(condbuy+'*'+v);
			info.push('"'+index+'":"'+v+'"');
		}else{
			info.push('"'+index+'":""');
		}
	});
	if(num<min_num) return alert('该商品最少购买'+min_num+'件，请增加购买数量！');
	else if(max_num>0&&num>max_num) return alert('该商品最多购买'+max_num+'件，请减少购买数量！');
	attrs=attrs.join('，');
	$.get(WEB_ROOT+'/ajax/cart.php?a=select_type&id='+id+'&attrs='+encodeURIComponent(attrs));
	$('#J_num_'+id).val(num).change();
	info=info.join(',');
	$('#J_type_'+id).text(attrs+'，共'+num+'件').attr('data-info','{'+info+'}');
	total_count();
	return X.boxClose();
}
$('.order-body .num-item input[name=quantity]').change(function(){
	var num=$(this).val();
	var min_num=parseInt($(this).attr('min_num'));
	var max_num=parseInt($(this).attr('max_num'));
	var key=$(this).parents('tr').find('input[name=cartItem]').val();
	if(!/^[1-9]\d*$/.test(num)||num<min_num){
		$(this).val(min_num);
		num=min_num;
		$(this).parent().append('<span class="tips errotips">最少购买'+min_num+'件</span>');
		$(this).siblings('.errotips').fadeTo(1500,0,function(){
			$(this).remove();
		});
	}else if(max_num>0&&num>max_num){
		$(this).val(max_num);
		num=max_num;
		$(this).parent().append('<span class="tips errotips">最多购买'+max_num+'件</span>');
		$(this).siblings('.errotips').fadeTo(1500,0,function(){
			$(this).remove();
		});
	}
	$.get(WEB_ROOT+'/ajax/cart.php?a=changecart&key='+key+'&num='+num);
	total_count();
});
$('.order-body .num-item .num-pluse').click(function(){
	var obj=$(this).siblings('input');
	var max_num=parseInt($(obj).attr('max_num'));
	var num=parseInt($(obj).val());
	if(max_num==0||(max_num>0&&num<max_num)) $(obj).val(num+1).change();
	if(max_num>0&&num==max_num){
		$(this).parent().append('<span class="tips errotips">最多购买'+max_num+'件</span>');
		$(this).siblings('.errotips').fadeTo(1500,0,function(){
			$(this).remove();
		});
	}
});
$('.order-body .num-item .num-reduce').click(function(){
	var obj=$(this).siblings('input');
	var min_num=parseInt($(obj).attr('min_num'));
	var num=parseInt($(obj).val());
	if(num>min_num) $(obj).val(num-1).change();
	if(num==min_num){
		$(this).parent().append('<span class="tips errotips">最少购买'+min_num+'件</span>');
		$(this).siblings('.errotips').fadeTo(1500,0,function(){
			$(this).remove();
		});
	}
});
function cart_del(obj){
	
	var obj=$(obj).parents('tr');
	var key=$(obj).find('input[name=cartItem]').val();
	$.get(WEB_ROOT+'/ajax/cart.php?a=delcart&key='+key,function(data){
		alert('商品从购物车中删除！');
		window.location.reload();
		if(data.data.data=='1'){
			if($(obj).siblings('.cart-item-list').length==0){
				$(obj).parents('.cart-table').remove();
			}else{
				$(obj).remove();
			}
			total_count();
		}else if(data.data.data=='2'){
			window.location.reload();
		}else alert('商品从购物车中删除失败！');
	},'json');
};
function total_count(){
	var total_num=0;
	var total_price=0;
	var total_fare=0;
	$('.cart-table').each(function(){
		var pfare=0;
		var is_farefree=0;
		$(this).find('.cart-item-list').each(function(){
			var price=parseFloat($(this).find('.item-price').text());
			var obj=$(this).find('input[name=quantity]');
			var num=parseInt($(obj).val());
			var subtotal=parseFloat((num*price).toFixed(2));
			$(this).find('.item-subtotal').text(subtotal);
			$(this).find('input.hid_num').val(num);
			total_num+=num;
			total_price+=subtotal;
			var fare=parseFloat($(obj).attr('fare'));
			var farefree=parseInt($(obj).attr('farefree'));
			if(farefree>0&&num>=farefree) is_farefree=1;
			pfare=Math.max(pfare,fare);
		});
		if(is_farefree==1) pfare=0;
		$(this).find('.J_fare').text(pfare);
		total_fare+=pfare;
	});
	
	$('#total_num').text(total_num);
	$('#total_price').text(total_price+total_fare);
}
$('#saveOrder').click(function(){
	if($('input[name=condbuys[]]').length>0){
		alert('请先选择商品类型和数量！');
		$(document).scrollTop($('input[name=condbuys[]]').first().parent().offset().top-30);
		return false;
	}
});
</script> 
<!--百分点代码：购物车页--> 
<?php 
foreach($teams as $one){
    $bfd_item[]='["'.$one['id'].'",'.$one['team_price'].','.$one['num'].']';
}
$bfd_items=implode(',',$bfd_item);
; ?> 
﻿<script type="text/javascript">
	window["_BFD"] = window["_BFD"] || {};
	_BFD.BFD_INFO = {
		"cart_items" : [<?php echo $bfd_items; ?>],   //2维数组，参数分别是["商品id号","该商品的单价","购物车中该商品的数量"];商品id号需和单品页提供的ID号一致
		"city" : "<?php echo $city['name']; ?>",   //城市
		"user_id" : "<?php echo $login_user_id; ?>", //网站当前用户id，如果未登录就为0或空字符串
		"page_type" : "shopcart" //当前页面全称，请勿修改
	};
</script> 
<?php include template("footer");?> 
