<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ZH-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="edge" />
<?php include template("meta_and_title");?>
<link rel="icon" href="favicon.ico" type="/image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="/image/x-icon" />
<link rel="stylesheet" href="/static/css/index.css" type="text/css" media="screen" charset="utf-8" />
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<link href="static/0750/css/list.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/custom.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/near.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/og.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/page.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/supplier.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/member.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/poptips.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/reviews.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/hack.css" rel="stylesheet" type="text/css" />
<link href="static/0750/css/baidu.css" rel="stylesheet" type="text/css" />

<!--<script src="static/0750/js/j.js" type="text/javascript"></script>-->
<script src="static/0750/js/history.js" type="text/javascript"></script>
<script src="static/0750/js/slide.js" type="text/javascript"></script>
<script src="static/0750/js/jquery-1.2.6.pack.js" type="text/javascript"></script>
<script src="static/0750/js/base.js" type="text/javascript"></script>

<link rel="stylesheet" href="/static/css/map.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">var WEB_ROOT = '<?php echo WEB_ROOT; ?>';</script>
<script src="/static/js/index.js" type="text/javascript"></script>
<script src="static/0750/js/lib.js" type="text/javascript"></script>
<script src="static/0750/js/163css.js" type="text/javascript"></script>


<script language="JavaScript">
$(document).ready(function () {					
	$("#small_list li").click(function(){ 
		var src = $(this).find("img").attr('src');
        $(this).addClass('a').siblings().removeClass('a');
		$("#imgview").find("img").attr("src",src);
		
  });
 
if(!ie6){
$("#fix").scrollFix("top","top");
$("#history").scrollFix("top","top");}
var pagesize=getPageSize();
	$('#Mask').width(pagesize[0]);
	$('#Mask').height(pagesize[1]);
resize(); 
$(".otherlist").mouseover(
	  function () {
	    $(this).addClass("hover");
	  }
	);
	$(".otherlist").mouseout(
	  function () {
	    $(this).removeClass("hover");
	  }
	);
});
</script>

<style type="text/css">
.showmsgstar img {
    height: 23px;
    margin-right: 5px;
    width: 23px;
    z-index: 1;
}
</style>

</head>

<body data-spy="scroll" data-target=".gre-navigation" data-offset="60">
<div id="pagemasker"></div><div id="dialog"></div>
<?php include template("head_ctn");?>

<script type="text/javascript">
$('.ptl .choose a').hover(function(){
	$('.ptl .tl').show();
},function(){});
$('.ptl').hover(function(){},
    function(){
        $('.ptl .tl').hide();
    });
</script>
<style type="text/css">
#Mask {
	position:absolute;
	display:none;
	left:0;
	top:0;
	width:100%;
	height:100%;
	background:#000000;
	opacity:0.1;
	filter:alpha(opacity=10);
	z-index:9000;
}
#mbox {
	position:fixed;
	_position:absolute;
	visibility:hidden;
	top:10px;
	width:1000px;
	height:550px;
	border:1px solid #68b02c;
	background:#ffffff;
	z-index:10000;
}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4&services=true"></script>
<script type="text/javascript" src="static/0750/js/SearchInfoWindow_min.js"></script>
<link rel="stylesheet" href="static/0750/css/SearchInfoWindow_min.css" />
<script type="text/javascript" src="static/0750/js/scrollFix.js"></script>

<script type="text/javascript">
bShareOpt = {
   uuid: "95a39e2f-f790-4936-b87a-942b33c3690a", 
   url: "", //商品的永久链接
   summary: "", //商品描述
   pic: "", //商品图片链接
   vUid: "", //用户id，为了让您能够知道您网站的注册用户分享、喜欢了哪些商品
   product: "", //商品名称
   price: "", //商品价格
   brand: "", //商品品牌
   tag: "", //商品标签
   category: "", //商品分类
   template: "1" 
};
</script>
<div class="content">
		<div class="listnav">
		<div class="nownav"><?php echo $home_url; ?> <?php echo $team['title']; ?></div>
		</div>
		<div class="merchanttitle">
			<h1><?php echo $team['title']; ?></h1>
			<div class="merchanttitlep"><?php echo $team['product']; ?></div>
		</div>
		<div class="merchantbanner">
		<div class="merchantfocus">
			<div id="preview">
						<div class=""  id="imgview"><IMG height=295
						src="<?php echo team_image_0750($team['image']); ?>" jqimg="<?php echo team_image_0750($team['image']); ?>" width=685>
						</div>
					<div id="spec-n5">
								
								<div id="spec-list">
								    <ul class="list-h" id="small_list">
										<li><a><img src="<?php echo team_image_0750($team['image']); ?>"></a></li>
										<?php if($team['image1']){?>
										<li><a><img src="<?php echo team_image($team['image1']); ?>"></a></li>
										<?php }?>
										<?php if($team['image2']){?>
										<li><a><img src="<?php echo team_image($team['image2']); ?>"></li>
										<?php }?>
									</ul>
								</div>
							
						
					</div>
		</div>

			
		</div>
		<div class="merchantinfo">
			<ul class="merchantinfoul">
				<li style="height:30px;">
                <span>
                     <img src="/static/0750/images/fullstar.png">
                    <img src="/static/0750/images/fullstar.png">
                    <img src="/static/0750/images/fullstar.png">
                    <img src="/static/0750/images/fullstar.png">
                    <img src="/static/0750/images/fullstar.png">                  
                    5.0 分
                </span>
				<span  style="margin-left: 200px;">评价 <b style="color:#05aecc;font-weight:bold;"><?php echo $all_comment; ?></b></span>
				</li>
				<li style="height:auto; font-size:14px;">
                    <div>
                       <strong>介绍：</strong> <?php echo $team['product']; ?>
                   </div>  
                    <div>
                     <strong>人均消费：</strong><?php echo $team['rjxf']; ?>
                    </div>
                     <div> 
                        <strong>特色：</strong> <?php echo $team['tese']; ?>
                     </div>
                      <div> 
                         <strong>营业时间：</strong><?php echo $partner['yy_time']; ?>
                     </div>
                </li>
		
				<li><div> <?php if($is_collect == 1){?>   
					<a class="addfav"><input type="button" class="collectbtnsmall" value="已收藏"/></a>
					 <?php } else { ?> 
					<a href="/team.php?id=<?php echo $team['id']; ?>&act=collect" class="addfav"><input type="button" class="collectbtnsmall" value="收藏"/></a>
					 <?php }?> 
                     
                     
                     
					
					<a href="/team.php?id=<?php echo $team['id']; ?>&act=zan" style="font-size:20px; color:#05aecc"><img style="width:22px;height:30px; margin-top:13px;margin-left:20px;" src="/static/0750/images/zanimg.png"/> <span><?php echo $team['zan']; ?><span></a>
                    
                    
                    
                    </div>
                    </li>
				<li style="margin-top:20px">
                <!-- 百度分享代码开始 -->
				<div class="bdsharebuttonbox" data-tag="share_1">
				<span style="float:left; margin-top:10px; margin-right:10px;">
						<img src="/static/0750/images/shareico.png"/>
						分享到:
					</span>
			<a class="bds_weixin" data-cmd="weixin"></a>
			<a class="bds_qzone" data-cmd="qzone" href="#"></a>
			<a class="bds_renren" data-cmd="renren"></a>
			<a class="bds_tqq" data-cmd="tqq"></a>
			<a class="bds_tsina" data-cmd="tsina"></a>
			<a class="bds_fbook" data-cmd="fbook"></a>
		</div>
<script>
	window._bd_share_config = {
		common : {
			bdText : '',	
			bdDesc : '',	
			bdUrl : '', 	
			bdPic : ''
		},
		share : [{
			"bdCustomStyle" : "static/0750/css/baidu.css",
		}],
		slide : [{	   
			bdImg : 0,
			bdPos : "right",
			bdTop : 100
		}],
		image : [{
			viewType : 'list',
			viewPos : 'top',
			viewColor : 'black',
			viewSize : '16',
			viewList : ['qzone','tsina','huaban','tqq','renren']
		}],
		selectShare : [{
			"bdselectMiniList" : ['qzone','tqq','kaixin001','bdxc','tqf']
		}]
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>
				<!-- 百度分享代码结束1 -->
            </li>
				<li><div class="topreason">服务承诺：
				<?php if($team['allowrefund'] == 'Y'){?>
				<img src="/static/0750/images/tuiico.png"/><span>随时退</span>
				<?php } else { ?><?php }?>
				<img src="/static/0750/images/pinzhi.png"/><span>品质保证</span><img src="/static/0750/images/xjb.png"/><span>性价比高</span></div>
</li>
			</ul>
			
		</div>
		</div>
		<div class="merchantnav">
			<ul><a href="#position" onclick="a(this.id)"><li id="nav1">位置</li></a><a href="#mustknow"><li id="nav2">介绍</li></a><a href="#details"><li id="nav3">文章导读</li></a><a href="#appraise"><li id="nav5">消费评价</li></a></ul>
		</div>
		<h1 class="merchantitle" id="position">商家位置</h1>
		  
	 
	  <div style="float:left;">
	   <?php include template("block_block_partnermap");?>
	<!--	<img src="/static/0750/images/googlemap.png"/>-->
        </div>
     <?php $partner = Table::Fetch('partner', $team['partner_id']);; ?>
      
		<div class="merchantaddress"><h1><?php echo $partner['title']; ?></h1>
			<ul><li>地址：<?php echo $partner['address']; ?></li>
				<li>路线：<?php echo $partner['route']; ?></li>
				<li>网站：<?php echo $partner['homepage']; ?></li>
				<li>电话：<?php echo $partner['phone']; ?></li>
			</ul>
		</div>
		<div class="buyrules">
		<h1 class="merchantitle" id="mustknow">介绍</h1>
		<?php echo $team['summary']; ?>
				</div>
		<div class="bdxq">
		<h1 class="merchantitle" id="details">文章导读</h1>
		<?php echo $team['detail']; ?>
		</div>

		
		<h1 class="merchantitle" id="appraise">消费评价<p class="lookalla"><a>我要评价</a></p></h1>
		 <form method="post" action="collect_comment.php" enctype="multipart/form-data">		
		<p class="showmsgstar"> 
			<span><b><?php echo $all_comment; ?></b>人评价</span>
		</p>
		<textarea class="appraisetxt" name="comment_content"></textarea>
		
		<input type="hidden" name="team_id" value="<?php echo $team['id']; ?>" />

		<input type="submit" class="replybtnbg" style=" margin-top:10px;" value=""/>
		</form>
		<div class="pinglunlist">
        
          <?php if(is_array($comment_all_list)){foreach($comment_all_list AS $index=>$one) { ?>
		<div class="appraiselist">
			<p><b><?php echo $one['username']; ?></b><span></span><span class="plimg"><?php echo date('d-m-Y',$one['comment_time']); ?></span></p>
			<p><?php echo $one['comment_content']; ?></p>
		</div>
        <?php }}?>
        

		</div>
		<div class="recommend">
			<h1 class="merchantitle">附近团购</h1>
			<p class="recommendp">您可能感兴趣的新产品</p>
			<ul>
					
                    <?php if(is_array($fjteams)){foreach($fjteams AS $index=>$one) { ?>
				<li><div><a href="/team.php?id=<?php echo $one['id']; ?>" target="_blank"><img src="<?php echo team_image($one['image']); ?>" /></a><h1><?php echo mb_strimwidth($one['title'],0, 29,'...'); ?></h1><p><?php echo mb_strimwidth($one['product'],0, 45,'...'); ?></p><p><img src="/static/0750/images/addressico.png"/><span><?php echo get_area_name($one['area_id']); ?></span></p><p class="productstar"><img src="/static/0750/images/fullstar.png"/><img src="/static/0750/images/fullstar.png"/><img src="/static/0750/images/fullstar.png"/><img src="/static/0750/images/fullstar.png"/><img src="/static/0750/images/midstar.png"/><span>4.5分</span></p></div>
					<div class="pricetopline"><div class="pricebg"><?php echo $currency; ?><?php echo getbigprice($one['team_price']); ?></div><div class="spricebg"><?php echo $currency; ?><?php echo getbigprice($one['market_price']); ?></div></div>
					</li>
			 <?php }}?>   
			</ul>
		</div>
	</div>
<script type="text/javascript" charset="utf-8" src="static/0750/js/jquery.raty.min.dev.js"></script>
<script type="text/javascript">
        var endTime = <?php echo $team['end_time']; ?>;
        var beginTime = <?php echo $team['begin_time']; ?>;
        var system_time = <?php echo $now; ?>;
        var sysSecond;
        var interValObj;
        var statusTimeout;
        
        function setRemainTime()
        {
			if (sysSecond1 > 0){
				  var second = Math.floor(sysSecond1 % 60);              // 计算秒     
                var minite = Math.floor((sysSecond1 / 60) % 60);       //计算分
                var hour = Math.floor((sysSecond1 / 3600) % 24);       //计算小时
                var day = Math.floor((sysSecond1 / 3600) / 24);        //计算天
                var timeHtml = "";
                if(day >= 3)
                    timeHtml = "<b>3</b>天以上";
                else
                {
                    timeHtml = "<b>"+hour+"</b>"+LANG.JS_HOUR+"<b>"+minite+"</b>"+LANG.JS_MINUTE;
                    if(day > 0)
                        timeHtml ="<b>"+day+"</b>"+LANG.JS_DAY + timeHtml;
                    timeHtml+="<b>"+second+"</b>"+LANG.JS_SECOND;
                }
                try
                {
                    var tip_text = "";
                    if(beginTime > system_time)
                        tip_text = "倒计时:";
                    else if(endTime > system_time)
                        tip_text = "距离团购结束还有";
                    $("#counter").html(tip_text+timeHtml);
                    sysSecond1--;
                }
                catch(e){}
			}else if(sysSecond1 == 0)
            {
                window.clearTimeout(interValObj);
                window.location.href=window.location.href;
            }
            else if (sysSecond > 0)
            {
                var second = Math.floor(sysSecond % 60);              // 计算秒     
                var minite = Math.floor((sysSecond / 60) % 60);       //计算分
                var hour = Math.floor((sysSecond / 3600) % 24);       //计算小时
                var day = Math.floor((sysSecond / 3600) / 24);        //计算天
                var timeHtml = "";
                if(day >= 3)
                    timeHtml = "<b>3</b>天以上";
                else
                {
                    timeHtml = "<b>"+hour+"</b>"+LANG.JS_HOUR+"<b>"+minite+"</b>"+LANG.JS_MINUTE;
                    if(day > 0)
                        timeHtml ="<b>"+day+"</b>"+LANG.JS_DAY + timeHtml;
                    timeHtml+="<b>"+second+"</b>"+LANG.JS_SECOND;
                }
                try
                {
                    var tip_text = "";
                    if(beginTime > system_time)
                        tip_text = "倒计时:";
                    else if(endTime > system_time)
                        tip_text = "距离团购结束还有";
                    $("#counter").html(tip_text+timeHtml);
                    sysSecond--;
                }
                catch(e){}
            }
            else if(sysSecond == 0)
            {
                window.clearTimeout(interValObj);
                window.location.href=window.location.href;
            }else{
			    tip_text = "";
			}
            interValObj = window.setTimeout("setRemainTime()", 1000); 	
        }
                    sysSecond = endTime - system_time;
					sysSecond1 = beginTime - system_time;
            setRemainTime();
			
			
                
                var arrhints_0= ['很不满意', '不满意', '一般', '满意', '很满意'];
        var arrhints_1= ['太难吃了，很不满意', '不好吃，需要好好改进', '味道一般，勉强凑合吧', '味道还不错，再接再厉哟', '味道好极了，还想吃'];
        var arrhints_2= ['服务太差了，气死我了', '服务有点差，需要好好改进', '服务一般，勉强可以接受啦', '服务还不错，再接再厉哟', '服务一级棒，好贴心呀'];
        var arrhints_3= ['环境非常差，我都看不下去了', '环境有点差，需要好好改善', '环境一般，勉强可以接受啦', '环境还不错，希望越来越好', '环境超级好，好喜欢'];
                
        $(function(){
            showStar();
        });
        function showStar()
        {
            $(".star").each(function(){
                var s = $(this).attr("rel");
                var _arrhints = $(this).attr("data-a") ? eval($(this).attr("data-a")) : arrhints_0;
                if(s!="")
                {
                    s=parseFloat(s).toFixed(1);
                    $(this).raty({
                    half	:	false,
                    space	:	false,
                    score	:	s,
                    readOnly	:	true,
                    // path	:	'#/app/Tpl/0750/Public/Supplier/images/',
                    width	:	'100',
                    hints	:	_arrhints,
                    noRatedMsg	: '还没有评价哟'
                    });
                }
            });
        }
        $('#a_vote').click(function(){
            var goods_id = $('#user-reviews-c').attr("data-goods_id");
            var rate_box = $("#rateform");
            if(goods_id > 0)
            {
                if(! rate_box.attr("data-is_loaded"))
                {
                    $.ajax({
                        url: "index.php?m=Ajax&a=getrateform",
                        dataType: "json",
                        data:{goods_id:goods_id},
                        cache : false,
                        success:function(data)
                        {
                            if(data.status == 1)
                            {
                                if(data.html)
                                {
                                    rate_box.attr("data-is_loaded", true);
                                    rate_box.html(data.html);
                                    showRate();
                                    $.ShowDialog({"dialog":"rating_box"});
                                }
                            }
                            else
                            {
                                alert(data.msg);
                                if(data.status == -1){window.location.href ="index.php?m=User&a=login";}
                            }
                        }
                    });
                }
                else
                    $.ShowDialog({"dialog":"rating_box"});
            }
        });
        function showRate()
        {
            $('#r_overall').raty({
            scoreName:'overall',
            targetKeep: true,
            targetText: '请选择评分！',
            target:"#t_overall",
            space:false,
            width: "100",
            //path: '#/app/Tpl/0750/Public/Supplier/images/',
            hints:arrhints_0
            });
            $('#r_tasting').raty({
            scoreName:'tasting',
            targetKeep: true,
            targetText: '请选择评分！',
            target:"#t_tasting",
            space:false,
            width: "100",
            //path: '#/app/Tpl/0750/Public/Supplier/images/',
            hints: arrhints_1
            });
            $('#r_service').raty({
            scoreName:'service',
            targetKeep: true,
            targetText: '请选择评分！',
            target:"#t_service",
            space:false,
            width: "100",
            //path: '#/app/Tpl/0750/Public/Supplier/images/',
            hints: arrhints_2
            });
            $('#r_enwir').raty({
            scoreName:'enwir',
            targetKeep: true,
            targetText: '请选择评分！',
            target:"#t_enwir",
            space:false,
            width: "100",
            //path: '#/app/Tpl/0750/Public/Supplier/images/',
            hints: arrhints_3
            });
            if($("#overall").val()>0)
            {
                $('#r_overall').raty('score',$("#overall").val());
            }
            if($("#tasting").val()>0)
            {
                $('#r_tasting').raty('score', $("#tasting").val());
            }
            if($("#service").val()>0)
            {
                $('#r_service').raty('score',$("#service").val());
            }

            if($("#enwir").val()>0)
            {
                $('#r_enwir').raty('score', $("#enwir").val());
            }
        }
 function displayRate(id)
 {
    var r=$('#r'+id);
    var s=r.attr('rel');
    r.raty({readOnly:true,score:s});
 }
function submitRate()
{
	var rate={};
	//var action="Add";
	//var isEdit=false;
    var form = $("form#rate_form");
	if($('#rate_id').val()!="")
	{
	  rate.id=$('#rate_id').val();
	  //action="Update";
	  //isEdit=true;
	}
	rate.overall=$('#r_overall').raty('score');
	rate.tasting=$('#r_tasting').raty('score');
	rate.service=$('#r_service').raty('score');
	rate.enwir=$('#r_enwir').raty('score');
	rate.back_again=$('#back_again')[0].checked?1:0;
	rate.content=$('#ratecontent').val();
	rate.order_id=$('#order_id').val();
	rate.goods_id=$('#goods_id').val();
	rate.is_hide_username=$('#is_hide_username').is(":checked") ? 1 : 0;
	$.ajax({
          url: "index.php?m=Ajax&a=updaterate",
          data:form.serialize(),
          dataType: "json",
          success:function(data)
            {
               if(data.status==1)
               {
                alert(data.msg);
                //$('.rating_box').hide();
                //$('#__back_ground_div').remove();
                //$('.user-reviews-st a.timeOff').click();
                window.location.reload();
                //window.location.href = window.location.href;
               }
               else
               {
                alert(data.msg);
               }
            },
            error:function(a,b,c)
            {
                alert(a.responseText);
            }
    });
	return false;	
}

function del_gallery(id, obj)
{
    obj = $("#"+obj);
    if(id > 0 && obj.length > 0 && confirm("确定要删除此图片吗？"))
    {
        $.ajax({
            url: ROOT_PATH+"/index.php?m=UcRating&a=img_del",
            type : "POST",
            data:{id:id},
            dataType: "json",
            success:function(data)
            {
               if(data.type==1)
               {
                var label = $("#l-"+obj.attr("id"));
                if(label.length > 0)
                {
                    //var img = $("<a><img src=\""+data.data.img+"\" width=\"100%\" border=\"0\" /></a><input type=\"hidden\" name=\"rating_gallery[]\" value=\""+data.data.id+"\" />");
                    label.html('');
                    $(".pic_album span."+obj.attr("id")).remove();
                    // label.append(i_id);
                }
               }
               else
               {
                alert(data.msg);
                if(data.type == -1)
                    window.location.href = ROOT_PATH+"/index.php?m=User&a=login";
               }
            },
            error:function(a,b,c)
            {
                alert(a.responseText);
            }
		});
    }
    return false;
}

function rating_upload(obj)
{
    var _obj = $(obj);
    if(_obj.length > 0 && _obj.val() != "")
    {
	var f_file = new FormData();
    f_file.append("file",obj.files[0]);
	$.ajax({
			  url: ROOT_PATH+"/index.php?m=UcRating&a=upload",
              type : "POST",
			  data:f_file,
			  dataType: "json",
			  contentType: false,
			  processData: false,
			  success:function(data)
				{
				   if(data.type==1)
				   {
                    var label = $("#l-"+_obj.attr("id"));
                    if(label.length > 0)
                    {
                        var html = $("<a><img src=\""+data.data.img+"\" width=\"100%\" border=\"0\" /></a><input type=\"hidden\" name=\"rating_gallery[]\" value=\""+data.data.id+"\" />");
                        label.html(html);
                        var del_html = $("<span class=\"del "+_obj.attr("id")+"\" onclick=\"del_gallery('"+data.data.id+"','"+_obj.attr("id")+"');\">删除</span>");
                        label.after(del_html);
                        showGalleryDel();
                        // label.append(i_id);
                    }
				   }
				   else
				   {
					alert(data.msg);
                    if(data.type == -1)
                        window.location.href = ROOT_PATH+"/index.php?m=User&a=login";
				   }
                   _obj.val('');
				},
				error:function(a,b,c)
				{
					alert(a.responseText);
				}
		});
    }
	return false;	
}

function showGalleryDel()
{
    $(".pic_album label").hover(function(){
        var _this = $(this);
        $(".pic_album span."+_this.attr("for")).show();
    },function(){
        var _this = $(this);
        $(".pic_album span."+_this.attr("for")).hide();
    });
    $(".pic_album span.del").hover(function(){
        $(this).show();
    },function(){
        $(this).hide();
    });
}

/*To change the number of goods */
    $('.ordernumsadd').click(function(){
		
        var n = $('.ordernumsshow').val();
            n = parseInt($('.ordernumsshow').val());
            if(n>1){n-=1;}else{n=1;}
	        $('.ordernumsshow').val(n);
		});
	$('.ordernumscut').click(function(){
            n = parseInt($('.ordernumsshow').val());
            if(n>0){n+=1;}else{n=1;}
			$('.ordernumsshow').val(n);
    });
	 $(window).bind("scroll",function(){
		scrollheight = parseFloat($(window).scrollTop()); 
		if (scrollheight > 800) { 
			$('.merchantnav').css({'position':'fixed','top':'-80px'});
		}else{
			$('.merchantnav').css({'position':'','top':'0'});
		}
		
	});
	/*li 点击背景色*/
	$(".merchantnav a li").click(function(){ 
	$(".merchantnav a li").each(function(i){ 
	$(this).removeClass("navlibg"); 
	}); 
	$(this).addClass("navlibg"); 
	}).mouseout(function(){ 
	});
    $("a.buy-now").click(function(){
        var quantity = parseInt($('.unit ul li.nums .td2 .num input').val());
        if(quantity > 1)
        {
            $(this).attr("href", $(this).attr("href") + "&quantity=" + quantity);
        }
    });
    </script>
<?php include template("foot_ctn");?>
<link href="static/0750/css/baidu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){

});
</script>
