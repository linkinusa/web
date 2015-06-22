<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8"><meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">

<script src="style/jquery-1.9.1.min.js"></script>
<script src="style/wpo_alog_speed.js" async></script>
<script src="style/alog.js"></script>
<title><?php echo $INI['system']['abbreviation']; ?></title>

<link rel="stylesheet" type="text/css" href="style/list_css_0_6f15796.css">
<link rel="stylesheet" type="text/css" href="style/common_css_0_6c6ef1d.css">
<link rel="stylesheet" type="text/css" href="style/common_css_1_ad94b5d.css">

</head>





<body mon="position=index">

<?php include template("m_header");?>



<article class="p-index" mon="action=click" id="j-index">
<section class="w-index-search">
<form method="get" action="search.php" class="j-search-form">
<div class="search-input-wrap">
<input name="searchName" class="j-search-input" autocomplete="off" placeholder="请输入您想找的团购" type="text">
<i id="j-clear-input"></i>
<button type="submit" class="j-search-submit">搜索</button>
</div>


<div class="j-search-suggestion search-suggestion"></div></form>
</section>
<section class="widget-index-catg clearfix" mon="type=catg">
<div class="wrap wrap8 clearfix">
<a class="item item1" href="category.php?gid=5" mon="content=美食">
<div class="img meishi"></div>
<div class="text">餐饮美食</div></a>
<a class="item item2" href="category.php?gid=6" mon="content=娱乐">
<div class="img dianying"></div>
<div class="text">休闲娱乐</div></a>
<a class="item item3" href="category.php?gid=7" mon="content=服务">
<div class="img jiudian"></div>
<div class="text">生活服务</div></a>
<a class="item item4" href="category.php?gid=8" mon="content=美容">
<div class="img ktv"></div>
<div class="text">美容保健</div></a>
<a class="item item5" href="category.php?gid=9" mon="content=火锅">
<div class="img huoguo"></div>
<div class="text">酒店旅游</div></a>
<a class="item item6" href="category.php?gid=34" mon="content=自助餐">
<div class="img zizhucan"></div>
<div class="text">自助餐</div></a>
<a class="item item7" href="category.php?gid=10" mon="content=购物">
<div class="img gouwu"></div>
<div class="text">自选商品购物</div></a>
<a class="item item8" href="category.php" mon="content=全部分类">
<div class="img quanbufenlei"></div>
<div class="text">全部分类</div></a>
</div>
</section>

<div class="w-banner-swipe" mon="action=click&amp;type=adscroll">
<div class="wrap" style="padding-top:26.666666666667%">
<ul style="visibility: visible;" id="j-sliders" class="sliders">

<li class="holder" style="background-image:url(../wap/style/indeximg.jpg);">
<a href="#" mon="content=app导流"></a>
</li>
</ul>
<div id="j-pointers" class="pointers"></div>
</div>
</div>

<section class="goods-list-title">商品列表</section>


<div id="j-goods-container">


<?php if(is_array($teams)){foreach($teams AS $team) { ?>
    <?php if($team){?>
   
        

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
 <span class="bought"><?php echo $team['now_number']; ?></span>
 </li>
 </ul>
 </a>
 </section>
    
    <?php }?> 
<?php }}?>

</div>

<div class="w-viewmore clearfix" mon="action=click">
<a id="j-viewmore" href="index.php?size=100" class="op-btn more" mon="type=more">查看全部团购</a>
<a href="javascript:;" id="j-gotop" class="op-btn gotop" mon="type=gotop">回到顶部</a>
</div>
</article>




<?php include template("m_footer");?>

</body>

</html>
