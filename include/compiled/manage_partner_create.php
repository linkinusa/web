<?php include template("manage_header");?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=<?php echo $INI['system']['googlemap']; ?>" type="text/javascript"></script>
<!--<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>-->
<script type="text/javascript">
window.x_init_hook_gm = function() {
	X.misc.setgooglemap = function(ll) {
		X.get(WEB_ROOT+'/ajax/system.php?action=googlemap&ll='+ll);
	};
	X.misc.setbaidumap = function(ll){
		X.get(WEB_ROOT+'/ajax/system.php?action=baidumap&ll='+ll);	
	};
	X.misc.setgooglemappoint = function(latlng) {
		jQuery('#inputlonglat').val(latlng.y+','+latlng.x);
	};
	X.misc.setbaidumappoint = function(e){
		jQuery('#inputlonglat').val(e.point.lat+','+e.point.lng);	
	};
	X.misc.setgooglemapclick = function(overlay, latlng) {
		//jQuery('#inputlonglat').val(latlng.y+','+latlng.x);
		jQuery('#inputlonglat').val(latlng);
	};
	X.misc.setbaidumapclick = function(e){
		jQuery('#inputlonglat').val(e.point.lat+','+e.point.lng);	
	};
};
</script>

<div id="bdw" class="bdw">
<?php include template("manage_left_menu");?>
<div class="right_main">
<div id="bd" class="cf">
<div id="partner">
	<div class="dashboard" id="dashboard">
		<ul><?php echo mcurrent_partner('create'); ?></ul>
	</div>
	<div id="content" class="clear mainwide">
        <div class="clear box">
        
            <div class="box-content">
                <div class="head"><h2>新建商户</h2></div>
                <div class="sect">
                    <form id="login-user-form" method="post" action="/manage/partner/create.php" enctype="multipart/form-data" class="validator">
						<div class="wholetip clear"><h3>1、登录信息</h3></div>
                        <div class="field">
                            <label>用户名</label>
                            <input type="text" size="30" name="username" id="partner-create-username" class="f-input f-hint" value="<?php echo $partner['username']; ?>" require="true" datatype="require" />
                        </div>
                        <div class="field password">
                            <label>登录密码</label>
                            <input type="text" size="30" name="password" id="settings-password" class="f-input f-hint" require="true" datatype="require" />
                        </div>

						<div class="wholetip clear"><h3>2、标注信息</h3></div>
						<div class="field">
							<label>所属分类：</label>
							<select name="group_id" class="f-input f-hint" style="width:160px;"><?php echo Utility::Option(option_category('partner'), $partner['group_id']); ?></select>
						</div>
                        
                                       <div class="field">
						<label>所属商圈：</label>
						<select name="city_id" id="city_id"  onchange="changeArea(this,this.value,'area')">
							<option value="">选择城市</option>
							<?php if(is_array($allcities)){foreach($allcities AS $index=>$city) { ?>
							<option value="<?php echo $city['id']; ?>"<?php if($city['id']==$partner['city_id']){?> selected<?php }?>><?php echo $city['name']; ?></option>
							<?php }}?>
						</select>
						<select name="area_id" id="area_id" datatype="require" onchange="changeArea(this,this.value,'circle')">
							<option value="">选择区域</option>
							<?php echo Utility::Option($areas, $partner['area_id']); ?>
						</select>

					</div>
                        
                        
                        
                        <div class="field">
                            <label>排序字段</label>
                            <input type="text" size="10" name="head" value="<?php echo abs(intval($partner['head'])); ?>" class="number"/><span class="inputtip">数字大的排的靠前</span>
						</div>
				
						<div class="field">
							<label>是否显示</label>
							<input type="text" size="30" name="open" id="partner-edit-open" class="number" value="<?php echo $partner['open']; ?>" maxLength="1" require="true" datatype="english" style="text-transform:uppercase;" /><span class="inputtip">Y:前台商户展示 N:不参与前台商户展示</span>
						</div>
                   
						<div class="field">
							<label>商家图片</label>
							<input type="file" size="30" name="upload_image" id="partner-create-image" class="f-input f-hint" />
							<span class="hint">至少得上传一张商家图片</span>
						</div>
						<div class="field">
							<label>商家图片1</label>
							<input type="file" size="30" name="upload_image1" id="partner-create-image1" class="f-input f-hint" />
						</div>
						<div class="field">
							<label>商家图片2</label>
							<input type="file" size="30" name="upload_image2" id="partner-create-image2" class="f-input f-hint" />
						</div>
                      <!--  <div class="field">
                            <label>地图坐标</label>
                            <input type="text" size="30" name="longlat" style="width:300px;cursor:point;" class="f-input f-hint" id="inputlonglat" readonly value="<?php echo $partner['longlat']; ?>" onclick="X.misc.setbaidumap('<?php echo $partner['longlat']; ?>');" /><span class="inputtip"><a href="javascript:;" style="cursor:point;" onclick="jQuery('#inputlonglat').val('');">取消地图坐标信息</a></span>
						</div>-->
                         <div class="field">
                            <label>地图坐标</label>
                            <input type="text" size="30" name="longlat" style="width:300px;cursor:point;" class="f-input f-hint" id="inputlonglat" readonly value="<?php echo $partner['longlat']; ?>" onclick="X.misc.setgooglemap('<?php echo $partner['longlat']; ?>');" /><span class="inputtip"><a href="javascript:;" style="cursor:point;" onclick="jQuery('#inputlonglat').val('');">取消地图坐标信息</a></span>
						</div>
						<div class="wholetip clear"><h3>3、基本信息</h3></div>
                        <div class="field">
                            <label>商户名称</label>
                            <input type="text" size="30" name="title" id="partner-create-title" class="f-input f-hint" value="<?php echo $partner['title']; ?>" require="true" datatype="require" />
                        </div>
                        <div class="field">
                            <label>网站地址</label>
                            <input type="text" size="30" name="homepage" id="partner-create-homepage" class="f-input f-hint" value="<?php echo $partner['homepage']; ?>"/>
                        </div>
                         <div class="field">
                            <label>路线</label>
                            <input type="text" size="30" name="route" id="partner-create-homepage" class="f-input f-hint" value="<?php echo $partner['route']; ?>"/>
                        </div>
                        <div class="field">
                            <label>联系人</label>
                            <input type="text" size="30" name="contact" id="partner-create-contact" class="f-input f-hint" value="<?php echo $partner['contact']; ?>" />
						</div>
                        <div class="field">
                            <label>联系电话</label>
                            <input type="text" size="30" name="phone" id="partner-create-phone" class="f-input f-hint" value="<?php echo $partner['phone']; ?>" maxLength="18" datatype="require" require="ture" />
						</div>
                        <div class="field">
                            <label>商户地址</label>
                            <input type="text" size="30" name="address" id="partner-create-address" class="f-input f-hint" value="<?php echo $partner['address']; ?>" datatype="require" require="true" />
						</div>
                        <div class="field">
                            <label>手机号码</label>
                            <input type="text" size="30" name="mobile" id="partner-create-mobile" class="f-input f-hint" value="<?php echo $partner['mobile']; ?>" maxLength="11" />
						</div>
                         <div class="field">
                            <label>营业时间</label>
                            <input type="text" size="30" name="yy_time" id="partner-create-mobile" class="f-input f-hint" value="<?php echo $partner['yy_time']; ?>" maxLength="11" />
						</div>
                
                        <div class="field">
                            <label>位置信息</label>
                            <div style="float:left;"><textarea cols="45" rows="5" name="location" id="partner-create-location" class="f-textarea editor"></textarea></div>
						</div>
                        <div class="field">
                            <label>商家介绍</label>
                            <div style="float:left;"><textarea cols="45" rows="5" name="other" id="partner-create-other" class="f-textarea editor"></textarea></div>
						</div>
                        
                        
                          <div class="field">
                            <label>店面服务</label>
                     
                            
                            <textarea cols="45" rows="5" name="server" id="partner-create-other" class="f-textarea editor"></textarea>
                 >
						</div>
                        
						<div class="wholetip clear"><h3>4、银行信息</h3></div>
                        <div class="field">
                            <label>开户行</label>
                            <input type="text" size="30" name="bank_name" id="partner-create-bankname" class="f-input f-hint" value="<?php echo $partner['bank_name']; ?>"/>
                        </div>
                        <div class="field">
                            <label>开户名</label>
                            <input type="text" size="30" name="bank_user" id="partner-create-bankuser" class="f-input f-hint" value="<?php echo $partner['bank_user']; ?>"/>
                        </div>
                        <div class="field">
                            <label>银行账户</label>
                            <input type="text" size="30" name="bank_no" id="partner-create-bankno" class="f-input f-hint" value="<?php echo $partner['bank_no']; ?>"/>
                        </div>
                        <div class="act">
                            <input type="submit" value="新建" name="commit" id="partner-submit" class="formbutton"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>

<div id="sidebar">
</div>

</div>
</div> <!-- bd end -->
</div>
</div> <!-- bdw end -->

<?php include template("manage_footer");?>

<script type="text/javascript">
function changeArea(self,fid,zone){
	$this=$(self);
	$.get("area.php",{
		'fid':fid,
		'zone':zone
		},function(data){
			$this.next().html(data);
			if(self.name=='city_id'){
				$this.next().next().html('<option value="">选择商圈</option>');
			}
		});
}

</script>