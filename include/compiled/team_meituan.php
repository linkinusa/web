<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" charset="utf-8" async src="/static/0750/js/contains.js"></script><script type="text/javascript" charset="utf-8" async src="/static/0750/js/taskMgr.js"></script><script type="text/javascript" charset="utf-8" async src="/static/0750/js/views.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="edge">
<meta name="360-site-verification" content="2dadc453e682b674113f25c8a172d39c" />
<?php include template("meta_and_title");?>
<link rel="icon" href="favicon.ico" type="/image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="/image/x-icon">
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/list.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/custom.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/near.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/og.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/page.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/supplier.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/member.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/poptips.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/hack.css" rel="stylesheet" type="text/css">
<script src="/static/0750/js/j.js" type="text/javascript"></script>
<script src="/static/0750/js/jquery.jcookie.min.js" type="text/javascript"></script>
<script src="/static/0750/js/history.js" type="text/javascript"></script>
<script src="/static/0750/js/js_lang.js" type="text/javascript"></script>
<script src="/static/0750/js/slide.js" type="text/javascript"></script>
<link href="/static/0750/css/style.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
<!--
//指定当前组模块URL地址
var CND_URL = '#';
var HTTP_URL = '#';
var ROOT_PATH = '';
var PUBLIC = 'app/Tpl/0750/Public';
var VAR_MODULE = 'm';
var VAR_ACTION = 'a';
var FANWE_LANG_ID = '1';
var cityID = '25';

//-->
</script>
</head>

<body>
<?php include template("head_ctn");?>
<?php include template("head_ctn2");?>
<div class="shoptxt">
			<ul>
				<li class="showtxt1"><a href="/news.php?id=4#f1"> </a></li>
				<li class="showtxt2"><a href="/news.php?id=4#f2"> </a></li>
				<li class="showtxt3"><a href="/news.php?id=4#f3"> </a></li>
				<li class="showtxt4" style="background:none"><a href="/news.php?id=12"> </a></li>
			</ul>
	</div>
	<div class="banner">
	<div class="slidenav">
		<ul class="slidenav_1"  style=" display:none;">
			<?php if(is_array($hot_cat)){foreach($hot_cat AS $index=>$cat) { ?>
			 <a href="/category.php?gid=<?php echo $cat['fid']; ?>&sid=<?php echo $cat['id']; ?>" class="black"><li><img src="/static/0750/images/food.png" /><span><?php echo $cat['name']; ?></span></li></a>
			<?php }}?>
			
		</ul>

	</div>
	<div class="focus">
		 <div id="show" rel="autoPlay">
      <div class="img">
          <span>
             <div class="">
				<h1></h1>
				<p><p class="focustitlespan"></p> <p class="focustitleline">|</p> 
               
               
				<p class="focustitleprice"><s></s><p class="focusprice"></p></p></div>
				<a href="#"><div class=""></div></a>
                
                
		       <?php if(is_array($indexad)){foreach($indexad AS $index=>$one) { ?> 
			     <a class="focusnum" href="<?php echo $one['link']; ?>" target="_blank"><img src="/static/<?php echo $one['image']; ?>" /></a>
               <?php }}?>
       
              
          </span>
        <div class="masks mk1"></div>
        <div class="masks mk2"></div>
      </div>
    </div>
	</div>
	</div>
	<div class="content_usa">
		<form class="validator" action="/subscribe.php" method="post" name="email">
		<div class="rss"><h1><span>订阅</span>&nbsp邻客美国</h1><p>第一时间为您发送纽约</p><p>最新娱乐活动和优惠折扣</p>
        <input class="f-text" type="text" name="email">
        <input class="dingyu" type="submit" value="" style="width:90px; margin:10px 10px 0px 0px;"/></div>
       </form> 
       
		<div class="topproduct">
             <?php if(is_array($indexadteam)){foreach($indexadteam AS $index=>$one) { ?> 
             <div class="ad<?php echo $index + 1; ?>">  <a class="focusnum" href="<?php echo $one['link']; ?>" target="_blank"><img src="/static/<?php echo $one['image']; ?>" /></div>
			   
               <?php }}?>
        
        </div>
		<div class="floortop">
			<div class="floortoptitle"><h1>最新折扣推荐</h1></div>
			<div class="floortab">
			<a href="javascript:void()" id="prevs" title="上翻"><img src="/static/0750/images/leftjt.png"/></a>
			<a href="javascript:void()" id="nexts" title="下翻"><img src="/static/0750/images/rightjt.png"/></a></div>
			<div class="mainproduct" id="mainproduct">
				<ul class="qiehuanul">
				<?php if(is_array($teams_rec)){foreach($teams_rec AS $rindex=>$one) { ?>
					<a href="/team.php?id=<?php echo $one['id']; ?>" target="_blank"><li class="qiehuanli"><div class="productlist"><img class="productlistimg" src="<?php echo team_image($one['image']); ?>" /><h1><?php echo mb_strimwidth($one['title'],0, 29,'...'); ?></h1><div class="productindexinfo"><?php echo mb_strimwidth($one['product'],0, 40,'...'); ?></div>
                    
                    <p></p>
					<div class="productstar" style="width:100%; padding:0; margin:0;">
                    <span style="float:left; margin-right:80px;"><img width="15" height="15" src="/static/0750/images/addressico.png"/><font><?php echo get_area_name($one['area_id']); ?></font></span>
					<em><i style="width:<?php echo $one['score']*20; ?>%;"><img src="static/0750/images/stars.gif" height="15" width="66" /></i></em>
					<span><?php echo $one['score']; ?>分</span></div></div>
                    
					<div class="price">
                    <?php if($one['team_type'] == 'collect'){?>
                          <div class="pricebg">
                    <span></span><b>收藏</b></div>
                    <div class="spricebg"><span></span>
                    </div>
                     <?php } else { ?>
                    <div class="pricebg">
                    <span></span><b><?php echo $currency; ?><?php echo getbigprice($one['team_price']); ?></b></div>
                    <div class="spricebg"><span></span><s><?php echo $currency; ?><?php echo getbigprice($one['market_price']); ?>&nbsp;&nbsp;</s>
                    </div>
                     <?php }?>
                    </div>
                    
					</li></a>
       			<?php }}?>
				</ul>
			</div>
		</div>
	</div>
    
	<?php if(is_array($cat_team)){foreach($cat_team AS $cindex=>$cat) { ?>
	<?php if($cat['number']> 0){?>   
	<div class="floortop">
			<div class="floortoptitle"><h1><?php echo $cat['name']; ?></h1></div>
			<div class="floornav"><ul>
<?php 
$floornav = get_floornav($cat['id']);
; ?>
 			 <?php if(is_array($floornav)){foreach($floornav AS $findex=>$fcat) { ?>
            <?php if($findex < 1){?>
			<li style="background:none">
			<?php } else { ?>
			<li>
			<?php }?>
            <a href="/category.php?gid=<?php echo $cat['id']; ?>&sid=<?php echo $fcat['id']; ?>"><?php echo $fcat['name']; ?></a>
		    </li>
         <?php }}?>
			</ul></div>
			<div class="mainproduct">
				<ul class="qiehuanul">
				<?php if(is_array($cat['teams'])){foreach($cat['teams'] AS $tindex=>$one) { ?>  
					<a href="/team.php?id=<?php echo $one['id']; ?>" target="_blank"><li class="qiehuanli"><div class="productlist"><img class="productlistimg" src="<?php echo team_image($one['image']); ?>" /><h1><?php echo mb_strimwidth($one['title'],0, 29,'...'); ?></h1><div class="productindexinfo"><?php echo mb_strimwidth($one['product'],0, 40,'...'); ?></div>
                    
                    <p></p>
						<div class="productstar" style="width:100%; padding:0; margin:0;">
                    <span style="float:left; margin-right:80px;"><img width="15" height="15" src="/static/0750/images/addressico.png"/><font><?php echo get_area_name($one['area_id']); ?></font></span>
					<em><i style="width:<?php echo $one['score']*20; ?>%;"><img src="static/0750/images/stars.gif" height="15" width="66" /></i></em>
					<span><?php echo $one['score']; ?>分</span></div></div>
					<div class="price" style="boder-top:0;">
                    
                       <?php if($one['team_type'] == 'collect'){?>
                          <div class="pricebg">
                    <span></span><b>收藏</b></div>
                    <div class="spricebg"><span></span>
                    </div>
                     <?php } else { ?>
                    <div class="pricebg">
                    <span></span><b><?php echo $currency; ?><?php echo getbigprice($one['team_price']); ?></b></div>
                    <div class="spricebg"><span></span><s><?php echo $currency; ?><?php echo getbigprice($one['market_price']); ?>&nbsp;&nbsp;</s>
                    </div>
                     <?php }?>
                    
                    </div>
					</li></a>
				<?php }}?>
				</ul>
			</div>
		</div>
	</div>
	<?php }?>
	<?php }}?>	

<?php include template("foot_ctn");?>




<script src="/static/0750/js/jquery.lazyload.min.js" type="text/javascript"></script>
<script type="text/javascript">
$("img.lazy").lazyload({
  effect:"fadeIn"
  });
</script>
<script src="/static/0750/js/index_cate_fix.js" type="text/javascript"></script>
<link rel="stylesheet" href="/static/0750/css/og.css">
<script type="text/javascript" src="/static/0750/js/often_location_dev.js"></script>
