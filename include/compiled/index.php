<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">

<title>最土后台管理系统</title>

<link href="/static/css/style.css" rel="stylesheet" type="text/css" id="cssfile"/>



</head>
<body>

    <table class="wrap" id="frameTable" cellpadding="0" cellspacing="0">

    	<tbody>
    		<tr>
				<td class="header" colspan="2">
	
					<span class='header-welcome'>欢迎您：</span>
					<span><?php echo $login_user['username']; ?></span>
					<a target="_blank" class="header-out" href="/manage/logout.php"></a>
					<a class="header-btn" href="/index.php">首页</a>
				</td>
			</tr>
			<tr>
	          	<td class="logo">
		          	<a><img src="/static/images/logo.png" alt="" /></a>
	          	</td>
				<td class="layout-header"> 
	          		<nav id="nav" class="main_nav">
			            <ul class='nav-ul' id="nav-ul">
			            	<li class="actived">
			            		<a href="javascript:void(0);" data-nav="sort_setting">
			            			<i class="i01"></i>
			            			<span>设置</span>
			            		</a>
			            	</li>

			            	<li >
			            		<a href="javascript:void(0);" data-nav="sort_store">
			            			<i class="i05"></i>
			            			<span>商户管理</span>
			            		</a>
			            	</li>
			            	<li>
			            		<a href="javascript:void(0);" data-nav="sort_goods">
			            			<i class="i02"></i>
			            			<span>会员管理</span>
			            		</a>
			            	</li>

			            	<li>
			            		<a href="javascript:void(0);" data-nav="sort_member">
			            			<i class="i03"></i>
			            			<span>商品管理</span>
			            		</a>
			            	</li>

			            	<li>
			            		<a href="javascript:void(0);" data-nav="sort_groupbuy">
			            			<i class="i08"></i>
			            			<span>订单管理</span>
			            		</a>
			            	</li>

			            	<li>
			            		<a href="javascript:void(0);" data-nav="sort_coupon">
			            			<i class="i07"></i>
			            			<span>卡卷管理</span>
			            		</a>
			            	</li>

			            	<li>
			            		<a href="javascript:void(0);" data-nav="sort_website">
			            			<i class="i10"></i>
			            			<span>积分返利</span>
			            		</a>
			            	</li>
			            	<li>
			            		<a href="javascript:void(0);" data-nav="sort_circle">
			            			<i class="i09"></i>
			            			<span>网站运营</span>
			            		</a>
			            	</li>
                       
                            	
			            </ul>
			      	</nav>
			    </td>
    		</tr>

    		<tr>
    			<!-- 左侧菜单栏 -->
    			<td class="left-menu" id="left-menu">
				<!-- 网站首页二级菜单 -->
		    		<ul id='sort_setting' style="display:block;">
                    
                    
                    <li>
			            	<a href="/manage/system/index.php" class="selected" target="content">基本</a>
			            </li>

			            <li>
			            	<a href="/manage/system/option.php" class="" target="content">选项</a>
			            </li>

			            <li>
			            	<a href="/manage/system/bulletin.php" class="" target="content">公告</a>
			            </li>

			            <li>
			            	<a href="/manage/system/pay.php" class="" target="content">支付</a>
			            </li>

			            <li>
			            	<a href="/manage/system/email.php" class="" target="content">邮件</a>
			            </li>

			            <li>
			            	<a href="/manage/system/sms.php" class="" target="content">短信</a>
			            </li>
						<li>
			            	<a href="/manage/system/cache.php" class="" target="content">缓存</a>
			            </li>
						<li>
			            	<a href="/manage/system/skin.php" class="" target="content">皮肤</a>
			            </li>
						<li>
			            	<a href="/manage/system/template.php" class="" target="content">模板</a>
			            </li>
						<li>
			            	<a href="/manage/system/upgrade.php" class="" target="content">升级</a>
			            </li>
                    
                    <li>
			            	<a href="/manage/market/ad.php" class="" target="content">广告</a>
			            </li>
                    
                    
                    
		          	</ul>
                    <!-- 商户管理二级菜单 -->
					<ul id='sort_store' style="display:none;">
                        <!-- 商户管理 -->
                         <li>
			            	<a href="/manage/partner/index.php" class="selected" target="content">商户列表</a>
			            </li>

			            <li>
			            	<a href="/manage/partner/create.php" class="" target="content">新建商户</a>
			            </li>

			            <li>
			            	<a href="/manage/partner/bill_list.php" class="" target="content">账单管理</a>
			            </li>
                        	<li>
			            	<a href="/manage/comment/index.php" class="" target="content">评论列表</a>
			            </li>

			            <li>
			            	<a href="/manage/comment/comment_partner_index.php" class="" target="content">五星设置</a>
			            </li>
                        <!-- 商户管理二级菜单 -->
                    
                    

					
					</ul>

                    <!-- 会员二级菜单 -->
		          	<ul id='sort_goods' style="display:none;">
                                		<li>
			            	<a href="/manage/user/index.php" class="selected" target="content">用户列表</a>
			            </li>

			            <li>
			            	<a href="/manage/user/manager.php" class="" target="content">管理员列表</a>
			            </li>
                             				
		          	</ul>
					 <!-- 商品管理二级菜单 -->
					 <ul id='sort_member' style="display:none;">
                       	<li>
			            	<a href="/manage/team/index.php" class="selected" target="content">当前项目</a>
			            </li>

			            <li>
			            	<a href="/manage/team/success.php" class="" target="content">成功项目</a>
			            </li>

			            <li>
			            	<a href="/manage/team/failure.php" class="" target="content">失败项目</a>
			            </li>

			            <li>
			            	<a href="/manage/team/edit.php" class="" target="content">新建项目</a>
			            </li>
                           		<li>
			            	<a href="/manage/category/index.php?zone=city" class="" target="content">城市列表</a>
			            </li>

			            <li>
			            	<a href="/manage/category/index.php?zone=area" class="" target="content">城市区域</a>
			            </li>

			            <li>
			            	<a href="/manage/category/index.php?zone=group" class="" target="content">项目分类</a>
			            </li>

			            <li>
			            	<a href="/manage/category/index.php?zone=public" class="" target="content">讨论区分类</a>
			            </li>

			            <li>
			            	<a href="/manage/category/index.php?zone=grade" class="" target="content">用户等级</a>
			            </li>

			            <li>
			            	<a href="/manage/category/index.php?zone=express" class="" target="content">快递公司</a>
			            </li>

			            <li>
			            	<a href="/manage/category/index.php?zone=partner" class="" target="content">商户分类</a>
			            </li>
                        
                     
		
	          		</ul>
                    <!-- 订单管理二级菜单 -->
					<ul id='sort_groupbuy' style="display:none;">
		                <li>
			            	<a href="/manage/order/index.php" class="selected" target="content">当期订单</a>
			            </li>
		          
		          		<li>
			            	<a href="/manage/order/pay.php" class="" target="content">付款订单</a>
			            </li>

			            <li>
			            	<a href="/manage/order/credit.php" class="" target="content">余额支付</a>
			            </li>
						
						<li>
			            	<a href="/manage/order/unpay.php" class="" target="content">未付订单</a>
			            </li>
						
						<li>
			            	<a href="/manage/order/refund.php" class="" target="content">退款管理</a>
			            </li>
						
						<li>
			            	<a href="/manage/order/route.php" class="" target="content">订单来源</a>
			            </li>
						
						<li>
			            	<a href="/manage/order/express.php" class="" target="content">上传单号</a>
			            </li>
		          
		          	</ul>
                     <!-- 卡卷管理二级菜单 -->
					 <ul id='sort_coupon' style="display:none;">
		          
		                        <li>
			            	<a href="/manage/coupon/index.php" class="selected" target="content">未消费</a>
			            </li>

			            <li>
			            	<a href="/manage/coupon/consume.php" class="" target="content">已消费</a>
			            </li>

			            <li>
			            	<a href="/manage/coupon/expire.php" class="" target="content">已过期</a>
			            </li>
						
						<li>
			            	<a href="/manage/coupon/card.php" class="" target="content">代金券</a>
			            </li>
						
						<li>
			            	<a href="/manage/coupon/cardcreate.php" class="" target="content">新建代金券</a>
			            </li>
						
						<li>
			            	<a href="/manage/coupon/paycard.php" class="" target="content">充值卡</a>
			            </li>
						
						<li>
			            	<a href="/manage/coupon/paycardcreate.php" class="" target="content">新建充值卡</a>
			            </li>

		          	</ul>
                    <!-- 积分返利二级菜单 -->
					<ul id='sort_website' style="display:none;">
		                        
		          		<li>
			            	<a href="/manage/credit/index.php" class="selected" target="content">积分记录</a>
			            </li>

			            <li>
			            	<a href="/manage/credit/settings.php" class="" target="content">积分规则</a>
			            </li>

			            <li>
			            	<a href="/manage/credit/goods.php" class="" target="content">商品兑换</a>
			            </li>

		       
						
		          	    </ul>
                        <!-- 网站运营二级菜单 -->
						<ul id='sort_circle' style="display:none;">
                    	     
                                        <li>
                                            <a href="/manage/market/index.php" class="selected" target="content">邮件营销</a>
                                        </li>
                
                                        <li>
                                            <a href="/manage/market/sms.php" class="" target="content">短信群发</a>
                                        </li>
                
                                        <li>
                                            <a href="/manage/market/down.php" class="" target="content">数据下载</a>
                                        </li>
                
                                        <li>
                                            <a href="/manage/topic/index.php" class="" target="content">专题管理</a>
                                        </li>   
                                		<li>
                                            <a href="/manage/news/index.php" class="" target="content">当前新闻</a>
                                        </li>

                                      <li>
                                        <a href="/manage/news/edit.php" class="" target="content">添加新闻</a>
                                       </li>
                                       
                                        		<li>
                                    <a href="/manage/vote/index.php" class="" target="content">调查统计</a>
                                </li>
        
                                <li>
                                    <a href="/manage/vote/feedback.php" class="" target="content">问题列表</a>
                                </li>
        
                                <li>
                                    <a href="/manage/vote/question.php" class="" target="content">正在调查</a>
                                </li>
                                
						
						<li>
			            	<a href="/manage/misc/backup.php" class="" target="content">备份</a>
			            </li>
						
						<li>
			            	<a href="/manage/misc/logger.php" class="" target="content">日志</a>
			            </li>
						
						<li>
			            	<a href="/manage/misc/expire.php" class="" target="content">过期提醒</a>
			            </li>
		         
		               	</ul>
           
		    	</td>

		    	<td class="content_td" valign="top" width="100%">
		    		<iframe src="/manage/misc/index.php" id="content" name="content" frameborder="0" width="100%" height="100%" scrolling="yes" ></iframe>


		    		<div class="loading" id="loading">
		    			<img src="/static/images/loading.gif" alt="" width="40" height="40"/>
		    		</div>
		    	</td>
    		</tr>
    	</tbody>
    	
    </table>

<script type="text/javascript" src="/static/scripts/jquery.min.js"></script>
<script type="text/javascript" src="/static/scripts/index.js"></script>


              


</body>