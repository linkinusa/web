<div class="head">
<style type="text/css">
.nav_cur{background-color:#f06261}
</style>
 <?php include template("top_bar");?>
		<div class="headextra">
			<div class="logo"><a href="/index.php" title="<?php echo $INI['system']['abbreviation']; ?>"><img src="/static/0750/images/logo.png" width="270" height="133"/></a></div>
			<div class="changecity"><h1><?php echo $city['name']; ?></h1><p><a style="color:#666" href="/city.php">切换城市</a></p></div>
			
<!--		
			<div class="search">
				
				<div class="select">
                 <a href="javascript:;" class="tg focus">团购</a><a href="javascript:;" class="sj">商家</a>
                </div>
                <div class="input">
                 <form action="/search.php" method="POST" id="search_form">
                 <div class="sp">
                  <input type="text" class="tg" name="keywords" placeholder="请输入要搜索的团购名称" value="">
                 </div>
                 <div class="sb"><input type="submit" value="搜索"><input type="hidden" name="m" value="Goods"><input type="hidden" name="a" value="showall"></div>
                 </form>
                </div>
		    </div>-->
            
            	<div class="search">
				<div class="searchlist" id="searchlist">
                <form action="/search.php" method="POST" id="search_form">
					<ul>
						<li style="border:none">
                        <select name="stype" style="height:35px;width:82px;padding-left:15px; font-size:16px; background:none repeat scroll 0 0 rgba(0, 0, 0, 0); border:medium none;cursor:pointer;color:#555555;">
                            <option style="padding-left:15px; font-size:15px;cursor:pointer;" value="tg">团购</option>
                            <option style="padding-left:15px; font-size:15px;cursor:pointer;" value="sj">商家</option>
                        </select>                     
                        </li>
						<li style="width: 0; height: 0; border-width: 6px 6px 0 6px; border-style: solid; border-color: #9a9a9a transparent;position: absolute;top: 15px;left: 55px;"></li>
					</ul>
                        
                   </div>
				<input class="kinput" type="text"  name="keywords" placeholder="输入关键词..."/>
			<!--    <img onclick="showsearch()" src="/static/0750/images/searchico.gif">-->
                <input class="sinput" type="submit" value="" />
                </form>
             </div>
            
            
			
			<div class="headtxt"><img src="http://mg.tuanzhang.cc/static/0750/images/top_font.png" width="110px" height="60px"></div>
<?php 
$p_teams = get_cart_team();
; ?> 
			<div class="scart"><div class="cartnum"><p><?php echo count($p_teams) - 1; ?></p></div><div class="carttxt"><p><a class="black" href="/cart/index.php">购物车</a></p><p>件-$<?php echo $p_teams['all_price']; ?></p></div><div class="loginbg"></div></div>
		</div>
		<div class="nav">
			<div class="bignavul">
			<div class="navul">
			<ul>
				<a href="/" class="white"><li>首页</li></a>
<!--导航分类代码 -->
<?php 
$categorys = get_categorys();
; ?>
 				<?php if(is_array($categorys)){foreach($categorys AS $index=>$cat) { ?>			
				<a href="/category.php?gid=<?php echo $cat['id']; ?>"><li class="<?php if($cat['id'] == $_GET['gid']){?>nav_cur<?php }?>"><?php echo $cat['name']; ?></li></a>
				<?php }}?>   
			</ul>
			</div>
			<div class="login">
		<?php if(is_partner()){?>
		
                
                	<ul>
				<li style="width:100px;"><a style="background:none; font-size:14px;"><?php echo mb_strimwidth($login_partner['username'],0,10); ?></a></li>
				<li style="width:58px;"><a style="background:none; font-size:14px;" href="/biz/logout.php">退出</a></li>
				</ul>
		<?php } else { ?>
				<ul>
				<li style="background-image:none"><a class="white" href="/biz/login.php">登陆</a></li>
				<li><a class="white" href="/account/signup.php">注册</a></li>
				</ul>
		<?php }?>
			</div>
			</div>
		</div>
	</div>
    
   <?php if($session_notice=Session::Get('error',true)){?>
 <div class="section" style="background:url(../static/0750/css/img/error.gif) no-repeat #FFF 12px center; text-indent:18px;margin: 0px auto; width: 1132px; padding:10px 18px; border:#ddd solid 1px;">
       
          <div style="color:#F00;"><?php echo $session_notice; ?></div>
     
 </div>     
<?php }?>    