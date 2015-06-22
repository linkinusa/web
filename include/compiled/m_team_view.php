<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8"><meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">

<script src="style/jquery-1.9.1.min.js"></script>
<script src="style/wpo_alog_speed.js" async></script><script src="style/alog.js"></script>
<title><?php echo $INI['system']['abbreviation']; ?></title>

<link rel="stylesheet" type="text/css" href="style/common_css_0_6c6ef1d.css">
<link rel="stylesheet" type="text/css" href="style/detail_css_0_4359dd4.css">
<link rel="stylesheet" type="text/css" href="style/list_css_0_6f15796.css">
<script>alog('speed.set', 'ht',new Date);</script>
</head>







<body mon="position=detail_local">

<?php include template("m_header");?>



<article class="p-detail" mon="action=click">


<div class="w-product-image">
<div class="wrapper">

<img src="<?php echo team_image($team['image'], true); ?>" width="290" height="180">
</div>
</div>



<div class="w-product-desc">
<div class="segment buy-segment">
<span class="current-price">
<em class="price-value">
<?php echo moneyit($team['team_price']); ?>
</em>
</span>
<span class="original-price">
<del><?php echo $team['market_price']; ?></del>
</span>
<div class="buy-wrapper" mon="action=click">



<div class="w-buy-btn-normal w-buy-btn-normal-small" id="j-buy-ctn" mon="type=topBuy">
<a href="buy.php?id=<?php echo $team['id']; ?>" class="buy-btn" mon="price=1&amp;content=立即抢购">立即抢购</a>
</div>
</div>
</div>

<div class="segment summary-segment">
<div class="title"><?php echo $team['title']; ?></div>
<!--<div class="description"><?php echo $team['summary']; ?></div>-->
</div>
<div class="segment desc-segment">
<div class="block">
<span class="bought-num">
<img class="icon" src="style/boughtNum_a709dd0.png"><?php echo $team['now_number']; ?>人已购买</span>
<span class="remaining-days">
<img class="icon" src="style/remainingDays_cc3f607.png">剩余  <?php if($left_day>0){?><?php echo $left_day; ?>天&nbsp;<?php echo $left_hour; ?>小时&nbsp;<?php echo $left_minute; ?>分钟
						<?php } else { ?>
	  <?php echo $left_hour; ?>小时&nbsp;<?php echo $left_minute; ?>分钟&nbsp;<?php echo $left_time; ?>秒<?php }?><!--{/if}-->
</div>
<div class="w-policy-list" mon="type=policy">
<a class="policy suibiantui" href="#" mon="content=随便退">
<img class="icon" src="style/suiBianTui_b5271ec.png">随便退<span>(<?php echo $INI['system']['abbreviation']; ?>诚信担保, 未消费, 随便退)</span>
</a>
</div>
</div>
</div>



<a class="w-ugc-preview clearfix " href="#" mon="type=ugcBtn">
<div class="ugc-rate">

<div class="w-rate-star">
<div class="rate-star-gray rate-star-gray16">
<div class="rate-star-real j-rate-star-real" style="width:111px;"></div>
</div>
</div>
<div class="rate-score">
5.0
</div>
</div>
<div class="ugc-total ugc-total-arrow-right">
2条评论</div>
</a>

<div class="product-shop-block">
<section id="j-product-shop" class="w-product-shop">
<div class="shop-info">
<section class="w-shop-poi">
<a href="http://m.nuomi.com/webapp/tuan/shopmap?merchantId=1478986" class="poi" mon="type=shopMain"><p class="shop-title"><?php echo $partner['title']; ?></p>
<p class="shop-address">
<?php echo $partner['address']; ?>
</p>
</a>
<a href="javascript:;" class="tel" bn-phone="010-82200459|010-82200452" mon="type=shopTelBtn"></a>
</section>
</div>
</section>
</div>

<style type="text/css">
.w-rich-text table{border:#e0e0e0 solid 1px;text-align:left;}
.w-rich-text table tr{border:#e0e0e0 solid 1px;text-align:left;}
.w-rich-text table td{border:#e0e0e0 solid 1px; text-align:left;}
.w-rich-text table td b{ text-align:left;}
</style>
<section class="w-rich-text"><div class="rich-title j-block-title">消费提示</div><div class="rich-content rich-wrapper">
<?php echo $team['summary']; ?>
</div></section>


<section class="w-rich-text"><div class="rich-title j-block-title">本单详情</div>

<style type="text/css">
.rich-wrapper table{width:100%;height:auto;}
.rich-wrapper img{width:100%;height:auto;display:block;}
</style>


<div class="rich-content rich-wrapper" style="overflow:hidden;">
<?php echo $team['wap_detail']; ?>

</div>


</section>





<div class="w-buy-btn-normal w-buy-btn-normal-large" id="j-buy-ctn" mon="type=bottomBuy">
<a href="buy.php?id=<?php echo $team['id']; ?>" class="buy-btn" mon="price=1&amp;content=立即抢购">立即抢购</a>
</div>




</article>

<?php include template("m_footer");?>


</body></html>
