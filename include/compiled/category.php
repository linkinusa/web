<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ZH-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="edge" />

<?php include template("meta_and_title");?>

<link rel="icon" href="favicon.ico" type="/image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="/image/x-icon" />
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<link href="/static/0750/css/list.css" rel="stylesheet" type="text/css" />
<link href="/static/0750/css/custom.css" rel="stylesheet" type="text/css" />
<link href="/static/0750/css/near.css" rel="stylesheet" type="text/css" />
<link href="/static/0750/css/og.css" rel="stylesheet" type="text/css" />
<link href="/static/0750/css/page.css" rel="stylesheet" type="text/css" />
<link href="/static/0750/css/supplier.css" rel="stylesheet" type="text/css" />
<link href="/static/0750/css/member.css" rel="stylesheet" type="text/css" />
<link href="/static/0750/css/poptips.css" rel="stylesheet" type="text/css" />
<link href="/static/0750/css/hack.css" rel="stylesheet" type="text/css" />
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
<?php include template("head_ctn3");?>

	<div class="listnav">
		<div class="nownav"><?php echo $home_url; ?></div>
		<div class="foodnav">
			<ul>
				<li>
                <?php if($delivery){?>
                  <a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $sid; ?>&sids=<?php echo $sids; ?>&aid=<?php echo $aid; ?>">
                 <img src="/static/0750/images/boxico1.png" class="boximg"/>
                 <?php } else { ?>
                 <a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $sid; ?>&sids=<?php echo $sids; ?>&aid=<?php echo $aid; ?>&delivery=coupon">
                  <img src="/static/0750/images/boxico.png" class="boximg"/>
                  <?php }?>
                
                促销券></a></li>
				<li id="area"><a>地区</a><img src="/static/0750/images/jtico.png"/>
                    <script type="text/javascript">
                        var area = document.getElementById("area");
						var areas = document.getElementById("areas");
						    area.onmousemove =function(){
								document.getElementById("areas").style.display = "block";
							}
                    </script>
                    
                    <div id="areas" style="position:absolute; width:200px; padding:5px; background:#ffffff; z-index:9999; line-height:30px; text-align:left; display:none;top:275px;left:1260px;">
                          <?php if(is_array($area)){foreach($area AS $index=>$one) { ?>
                          <a style="margin:5px 10px; width:70px;" href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $sid; ?>&sids=<?php echo $sids; ?>&aid=<?php echo $one['id']; ?>"><?php echo $one['name']; ?></a>
                             <?php }}?>   
                     </div>
                </li>
                <?php if($_GET['sc'] == 'price'){?> 
				<li><a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $sid; ?>&sids=<?php echo $sids; ?>&aid=<?php echo $aid; ?>&sc=price1">价格<img src="/static/0750/images/jtico.png"/></a></li>
            <?php } else { ?>   
            			<li><a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $sid; ?>&sids=<?php echo $sids; ?>&aid=<?php echo $aid; ?>&sc=price">价格<img src="/static/0750/images/jtico.png"/></a></li>  
                <?php }?> 
                
				<li>
                     <a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $sid; ?>&sids=<?php echo $sids; ?>&aid=<?php echo $aid; ?>&sc=com">评价<img src="/static/0750/images/jtico.png"/></a>
                </li>
				<li><a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $sid; ?>&sids=<?php echo $sids; ?>&aid=<?php echo $aid; ?>&sc=new">时间<img src="/static/0750/images/jtico.png"/></a></li>
				</ul>
			</div>
		</div>
	<div class="banner">
		<div class="slidenav">
			<ul class="slidenav_1" style=" display:none;">
<?php if(is_array($cates)){foreach($cates AS $index=>$one) { ?>
<?php if($gid){?>         
	<a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $one['id']; ?>" class="<?php if($sid == $one['id']){?>focus<?php }?>"><li><img src="/static/0750/images/food.png" /><span><?php echo $one['name']; ?><?php echo $one['number']; ?></span></li></a>
<?php } else { ?>
    <a href="/category.php?gid=<?php echo $one['id']; ?>"><li><span><?php echo $one['name']; ?><?php echo $one['number']; ?></span></li></a>
<?php }?>
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
				<a><div class=""></div></a>
		    <?php if(is_array($catad)){foreach($catad AS $index=>$one) { ?> 
			     <a class="focusnum" href="<?php echo $one['link']; ?>" target="_blank"><img src="/static/<?php echo $one['image']; ?>" /></a>
               <?php }}?>
          </span>
        <div class="masks mk1"></div>
        <div class="masks mk2"></div>
      </div>
    </div>
		</div>
	</div>
	<div class="floortop" style="height:auto;">
			<div class="floortoptitle"><h1> 
            <?php if($catenamess['name']){?>
             <?php echo $catenamess['name']; ?>
            <?php } else if($catenames['name']) { ?>
            <?php echo $catenames['name']; ?>
            <?php } else if($catename['name']) { ?>
            <?php echo $catename['name']; ?>
            <?php } else { ?>全部商品<?php }?>
            </h1></div>
			<div class="floortab"><!--<img src="/static/0750/images/leftjt.png" /><img src="/static/0750/images/rightjt.png" />--></div>
			<div class="mainproduct_list" style="height:auto">
				<ul>
                <?php if(is_array($teams)){foreach($teams AS $tindex=>$one) { ?>  
					<li>
                    <div class="productlist_list">
                        <a href="/team.php?id=<?php echo $one['id']; ?>" target="_blank">
                        <img src="<?php echo team_image($one['image']); ?>" /></a>
                        <h1><?php echo mb_strimwidth($one['title'],0, 38,'...'); ?></h1><p><?php echo mb_strimwidth($one['product'],0, 38,'...'); ?></p>
                        
                        <p></p>
                        <div class="productstar" style="width:100%; padding:0; margin:0; margin-top:31px;">
                        <span style="float:left; margin-right:140px;">
                        <img style="height:15px; width:15px;" src="/static/0750/images/addressico.png"/><font><?php echo get_area_name($one['area_id']); ?></font></span>
                        <em><i style="width:<?php echo $one['score']*20; ?>%;"><img src="static/0750/images/stars.gif" height="15" width="66" /></i></em>
                        <span><?php echo $one['score']; ?>分</span>
                        </div>
                    
                    </div>
                    
              
					<div class="price_list">
                    <a href="/team.php?id=<?php echo $one['id']; ?>" target="_blank">
                       <?php if($one['team_type'] == 'collect'){?>
                           <div class="pricebg_list"><b>收藏</b><p></p></div><div class="spricebg_list"><s></s><p></p></div>
                 
                         <?php } else { ?>
                          <div class="pricebg_list"><b><?php echo $currency; ?><?php echo getbigprice($one['team_price']); ?></b><p></p></div><div class="spricebg_list"><s><?php echo $currency; ?><?php echo getbigprice($one['market_price']); ?></s><p></p></div>
                 
                       <?php }?>
                  </a>
                    </div>
					</li>
					<?php }}?>

				</ul>
			</div>
		</div>
	</div>
	



<?php include template("foot_ctn");?>




<script src="/static/0750/js/owr.js" type="text/javascript"></script>
<script src="/static/0750/js/ie6.js" type="text/javascript"></script><script src="/static/0750/js/js.js" type="text/javascript"></script>
<script src="/static/0750/js/scroll.js" type="text/javascript"></script>
<script src="/static/0750/js/scrollFix.js" type="text/javascript"></script>
<script src="/static/0750/js/scrollStu.js" type="text/javascript"></script>
<script src="/static/0750/js/common.js" type="text/javascript"></script>
<link href="/static/0750/css/birthday.css" rel="stylesheet" type="text/css" />

</body>
</html>