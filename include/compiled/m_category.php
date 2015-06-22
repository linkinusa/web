<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8"><meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">

<script src="style/wpo_alog_speed.js" async></script>
<script src="style/alog.js"></script>
<script src="style/jquery-1.9.1.min.js"></script>
<title><?php echo $INI['system']['abbreviation']; ?></title>
<link rel="stylesheet" type="text/css" href="style/common_css_0_6c6ef1d.css">
<link rel="stylesheet" type="text/css" href="style/common_css_1_ad94b5d.css">
<link rel="stylesheet" type="text/css" href="style/list_css_0_6f15796.css">
<script>alog('speed.set', 'ht',new Date);</script>


<script type="text/javascript">

function dingwei(){
  if(navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(function (p) {
			var latitude = p.coords.latitude//纬度
			var longitude = p.coords.longitude;
			
			 window.location.href = "category.php?act=juli&la="+latitude+"+&lo="+longitude;
		  
		}, function (e) {//错误信息
			var aa = e.code + "\n" + e.message;
			alert(aa);
		}
		);
	}
 
}
</script>


<script type="text/javascript">

$(document).ready(function() {
     $(".w-sort").children("li").click(function(){
		  $(this).toggleClass("active").siblings().removeClass("active");
		  var id = $(this).attr("data-type");	  
		  $("#"+id).toggleClass("cblock").siblings().removeClass("cblock");
		  
		  if($(this).attr("class") == "active"){
		      $(".w-sort__mask").addClass("cblock")  
		  }else{
			 $(".w-sort__mask").removeClass("cblock");
		}
	});
	
	
});



</script>
</head>








<body mon="position=list">

<?php include template("m_header");?>



<section class="w-index-search">
<form method="get" action="search.php" class="j-search-form">
<div class="search-input-wrap">
<input name="searchName" class="j-search-input" autocomplete="off" placeholder="请输入您想找的团购" type="text">
<i id="j-clear-input"></i>
<button type="submit" class="j-search-submit">搜索</button>
</div>


<div class="j-search-suggestion search-suggestion"></div></form>
</section>




<article class="p-list" mon="action=click">

<ul class="w-sort j-w-sort clearfix" mon="action=click&amp;type=selectorBar">


<li class="" data-type="category" mon="content=cate">美食</li>
<li class="" data-type="area" mon="content=area">地区</li>
<li class="" data-type="order" mon="content=order">排序</li>



</ul>


<div class="w-sort-container j-w-sort-container" mon="action=click">

<section id="category" class="j-category w-sort__2col" mon="action=click">
<ul class="nav j-nav" mon="type=mainCate">
<li data-count="<?php echo $all_num; ?>" data-query="cateId=0">全部分类</li>



    <?php if(is_array($cate)){foreach($cate AS $tindex=>$one) { ?>
    
        <li class="s-has-sub" data-count="<?php echo get_num($one['id']); ?>"><a style="color:#666666" href="category.php?gid=<?php echo $one['id']; ?>"><?php echo $one['name']; ?></a></li>
       
    <?php }}?>  


</ul>
</section>
<section id="area" class="j-area w-sort__2col" mon="action=click">
<ul class="nav j-nav" mon="type=mainArea">

<?php if(($area_list)){?>	
       <?php if(is_array($area_list)){foreach($area_list AS $one_sq) { ?>
         <?php 
					  $daytime = time();
    
                         $one_sq_id = $one_sq['id'];
					$condition_ev56_s3 = " city_id = $city_id and area_id = $one_sq_id and  end_time > $daytime and begin_time <  $daytime";
				  $ev56_num_3 = Table::Count('team', $condition_ev56_s3);
                  

		; ?>

<li class="s-has-sub" data-count="<?php echo $ev56_num_3; ?>"><a href="category.php?area=<?php echo $one_sq['id']; ?>"><?php echo $one_sq['name']; ?></a></li>

<?php }}?>

<?php }?>


</ul>

</section>




<section id="order" class="j-order w-sort__single" mon="action=click&amp;type=sort">
<ul>
    
    <li data-query="listorder=0"><a href="category.php">默认排序</a></li>
   
    
    <li data-query="listorder=2"><a href="category.php?s=b">销量最高</a></li>
    
    <li data-query="listorder=3"><a href="category.php?s=jg">价格最高</a></li>
    
    <li data-query="listorder=4"><a href="category.php?s=zk">折扣排序</a></li>
	
	<li data-query="listorder=5"><a onClick="return dingwei()">离我最近</a></li>
</ul>
</section>
</div>

<div id="j-goods-container">

<?php if(is_array($teams)){foreach($teams AS $tindex=>$team) { ?>

<section class="w-goods " mon="action=click&amp;type=item">
 <a href="team.php?id=<?php echo $team['id']; ?>" mon="query=&amp;page_catg=0&amp;nuomi_order=0&amp;content=item0&amp;dealTinyUrl=swdbwplc&amp;deal_id=964894&amp;nuomi_index=0&amp;pageindex=0" class="clearfix" name="0" id="0">
 <div class="img-wrapper">
 <span class="tag-free-reservation"></span>
 <img style="visibility: visible;" src="<?php echo team_image($team['image'], true); ?>" height="79" width="118">
 </div>
 <ul>
 <li class="title"><span class="store "></span>
 <span class="item-name"><?php echo $team['title']; ?></span>
 </li>
 <li class="info"><?php echo $team['summary']; ?></li>
 <li class="others"><ins><?php echo moneyit($team['team_price']); ?></ins><span class="slash">/</span>
 <del class="old-price"><?php echo $currency; ?><?php echo moneyit($team['market_price']); ?></del>
 <span class="bought"><?php echo $team['now_number']; ?>  <?php echo $team['julis']; ?></span>
 </li>
 </ul>
 </a>
 </section>
  <?php }}?>  
</div>

<div class="w-viewmore clearfix" mon="action=click">
<a id="j-viewmore" href="category.php?gid=<?php echo $group_id; ?>&fid_s=<?php echo $fid_s; ?>&size=300" class="op-btn more" mon="type=more">查看更多</a>
<a href="javascript:;" id="j-gotop" class="op-btn gotop" mon="type=gotop">回到顶部</a>
</div>
</article>



<?php include template("m_footer");?>


<!--<div class="w-sort__mask" style="display: block; height: 3071px;"></div>-->

</body></html>
