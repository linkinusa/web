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

<style type="text/css">
input.formbutton {
    background-color: #05aecc;
    border: 1px solid #05aecc;
    border-radius: 5px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 0 2px #eee;
    color: #fff;
    display: inline;
    font-size: 14px;
    height: 36px;
    margin-left: 2px;
    margin-top: 10px;
    padding: 0 15px;
}
</style>

</head>
<?php include template("head_biz_ctn");?>
	<div class="content">
		<div class="usercenterborder">
		<div class="usercenterleft_biz" style="height:auto;  width:325px; float:left;">
			<?php include template("biz_header");?>
		</div>
        
 	  <div class="usercenterright_biz">
			<h1 class="usercentertitle">Merchant Information</h1>
			<hr/>
			<div class="userinfo">
				 <form id="login-user-form" method="post" action="/biz/settings.php" enctype="multipart/form-data" class="validator">
					<ul class="userinfoformul">
					<li><p>Merchant Name:</p><input type="text" size="30" name="title" id="partner-create-title" class="userinfoinput" value="<?php echo $partner['title']; ?>" datatype="require" require="ture"/></li>
					<li><p>Merchant Name:</p> <select name="group_id" class="userinfoinput" style="width:160px;"><?php echo Utility::Option(option_category('partner'), $partner['group_id']); ?></select></li>
                    <li><p>Telephone Number:</p><input type="text" name="mobile" id="partner-create-mobile" class="userinfoinput" value="<?php echo $partner['mobile']; ?>" maxLength="12" datatype="require" require="ture"/></li>
                    <li><p>Email Address:</p><input type="text" name="email" class="userinfoinput" value="<?php echo $partner['email']; ?>"/></li>
                    <li><p>FAX:</p><input type="text" name="fax" class="userinfoinput" value="<?php echo $partner['fax']; ?>"/></li>
                    <li><p>Merchant URL:</p><input type="text" name="homepage" id="partner-create-homepage" class="userinfoinput" value="<?php echo $partner['homepage']; ?>"/></li>
                    <li><p>No. of Business License:</p><input type="text" name="yyzz_num" value="<?php echo $partner['yyzz_num']; ?>" class="userinfoinput"/></li>
                    <li><p>Tax Number:</p><input name="shui_num" type="text" value="<?php echo $partner['shui_num']; ?>" class="userinfoinput"/></li>
                    <li><p>Contract Upload:</p><input type="file" size="30" name="upload_hetong" id="team-create-hetong" class="userinfoinput" /></li>
                    
					</ul>
                    <?php if($partner['hetong']){?>
                    <div style="padding:10px 50px 10px 100px;">
                    <a href="<?php echo team_image($partner['hetong']); ?>"><img width="100" height="120" src="<?php echo team_image($partner['hetong']); ?>" /></a>
                    </div>
                    <?php }?>
				<hr/>
				<h1 class="usercentertitle"> Account Management</h1>
					<ul class="userinfoformul">
				    <li><p> Account Management:</p><input type="text" size="30" name="bank_user" id="partner-create-bankuser" class="userinfoinput" value="<?php echo $partner['bank_user']; ?>"   /></li>
                    <li><p>Bank Name:</p> <input type="text" size="30" name="bank_name" id="partner-create-bankname" class="userinfoinput" value="<?php echo $partner['bank_name']; ?>"   /></li>
                    <li><p> Bank Account Number:</p> <input type="text" size="30" name="bank_no" id="partner-create-bankno" class="userinfoinput" value="<?php echo $partner['bank_no']; ?>"   /></li>
                    <li><p>Billing Address:</p><input type="text" size="30" name="zd_address" id="partner-create-zd_address" class="userinfoinput" value="<?php echo $partner['zd_address']; ?>"   /></li>
                    <li><p>City/State:</p>
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
                    </li>
                    <li><p>Zip code:</p><input type="text" size="30" name="zip_code" id="partner-create-zip_code" class="userinfoinput" value="<?php echo $partner['zip_code']; ?>"   /></li>
					</ul>
                    	<h1 class="usercentertitle">Director's Information</h1>
					<ul class="userinfoformul">
                    <li><p>Name:</p><input type="text" size="30" name="name" id="partner-create-name" class="userinfoinput" value="<?php echo $partner['name']; ?>"   /></li>
                    <li><p>Position:</p><input type="text" size="30" name="position" id="partner-create-position" class="userinfoinput" value="<?php echo $partner['position']; ?>"   /></li>
                    <li><p>Email Address:</p><input type="text" size="30" name="email2" id="partner-create-email2" class="userinfoinput" value="<?php echo $partner['email2']; ?>"   /></li>
                    <li><p>Telephone Number:</p><input type="text" name="phone" id="partner-create-phone" class="userinfoinput" value="<?php echo $partner['phone']; ?>" maxLength="12" datatype="require" require="ture"/></li>
					</ul>
                      	<h1 class="usercentertitle">Login Information</h1>
					<ul class="userinfoformul">
                    <li><p>User Name:</p> <input type="text" name="username" id="partner-create-username" class="userinfoinput" value="<?php echo $partner['username']; ?>"  /></li>
                    <li><p> New Password:</p> <input type="password"  name="password" id="settings-password" class="userinfoinput" /></li>
                    <li><p>Confirm Password:</p><input type="password" name="password2" id="settings-password-confirm" class="userinfoinput" /></li>
					</ul>
                    
                     <div class="act">
                            <input style="margin:10px 10px 30px 220px; background:#05aecc; border:#05aecc solid 1px;" type="submit" value="Confirm Password" name="commit" id="partner-submit" class="formbutton"/>
                        </div>
				</form>
			</div>
		</div>
       
            
			
		</div>
		</div>
	</div>
<?php include template("foot_ctn");?>