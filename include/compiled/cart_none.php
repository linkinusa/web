<?php include template("header");?>
<link rel="stylesheet" href="/static/css/index.css" type="text/css" media="screen" charset="utf-8" />
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<script>
X.get(WEB_ROOT+'/ajax/cart.php?a=check_login');
</script>
<style type="text/css">
#content{ line-height:30px; font-size:14px; line-height:36px;}

</style>
<div id="bdw" class="bdw">
  <div id="bd" class="cf">
   <div id="content" style="width:980px; border:#CCCCCC solid 1px; padding-bottom:25px;">
        <div class="buytop"><img src="/static/0750/images/ztgoucheimg.png" /></div>
        <div style="text-align:center">
          <h3 style="font-size:16px; font-weight:bold;">您的购物车还是空的，赶紧行动吧！您可以：</h3>
          <p><a style="color:#05aecc" href="/index.php">马上去挑选商品</a></p>
          <p><a style="color:#05aecc" href="/order/index.php?s=index&ocur=1">看看已买到的商品</a></p>
        </div>
    
      

    </div>
  </div>
</div>

<?php include template("footer");?> 
