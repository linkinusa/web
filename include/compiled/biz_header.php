<div class="bizuser">
<div class="usercenterinfo" style="height:50px; line-height:60px; text-indent:7em;">
        <h1 style="font-size:22px;"> My Account</h1>
    </div>
    <div class="mylink <?php if($pagetitle == 'settings'){?>bizcur<?php }?>">
        <h1  onmouseover="document.getElementById('scur').src='/static/0750/images/biz_bodyico-1.png'"  <?php if($pagetitle != 'settings'){?>   onmouseout="document.getElementById('scur').src='/static/0750/images/biz_bodyico.png'" <?php }?>  class="usercenternav"><a href="/biz/settings.php?scur=1">
       
         <?php if($pagetitle == 'settings'){?>  <img id="scur" src="/static/0750/images/biz_bodyico-1.png"/><?php } else { ?>  <img id="scur"  src="/static/0750/images/biz_bodyico.png"/><?php }?>
        
        Personal Information</a></h1>
    </div>
    
    <div class="myappraise <?php if($pagetitle == 'index'){?>bizcur<?php }?>">
        <h1   onmouseover="document.getElementById('tcur').src='/static/0750/images/biz_xmxx-1.png'"  <?php if($pagetitle != 'index'){?>onmouseout="document.getElementById('tcur').src='/static/0750/images/biz_xmxx.png'" <?php }?> class="usercenternav"><a href="/biz/index.php?tcur=1">
        
        <?php if($pagetitle == 'index'){?>  <img  id="tcur" src="/static/0750/images/biz_xmxx-1.png"/><?php } else { ?>  <img id="tcur"  src="/static/0750/images/biz_xmxx.png"/><?php }?>
      
        
        My Items</a></h1>

    </div>
    
     <div class="myappraise <?php if($pagetitle == 'comment'){?>bizcur<?php }?>">
        <h1  onmouseover="document.getElementById('ccur').src='/static/0750/images/biz_msgico-1.png'"   <?php if($pagetitle != 'comment'){?> onmouseout="document.getElementById('ccur').src='/static/0750/images/biz_msgico.png'" <?php }?>  class="usercenternav"><a href="/biz/comment.php?ccur=1">
        
        <?php if($pagetitle == 'comment'){?>  <img id="ccur"  src="/static/0750/images/biz_msgico-1.png"/><?php } else { ?>  <img id="ccur"  src="/static/0750/images/biz_msgico.png"/><?php }?>
        
 Users' Comments</a></h1>

    </div>
    
    <div class="myorder  <?php if($pagetitle == 'bill'){?>bizcur<?php }?>">
        <h1  onmouseover="document.getElementById('ocur').src='/static/0750/images/biz_orderico-1.png'" <?php if($pagetitle != 'bill'){?>   onmouseout="document.getElementById('ocur').src='/static/0750/images/biz_orderico.png'" <?php }?>  class="usercenternav"><a href="/biz/bill_index.php?ocur=1">

         <?php if($pagetitle == 'bill'){?>  <img id="ocur"  src="/static/0750/images/biz_orderico-1.png"/><?php } else { ?>  <img id="ocur"  src="/static/0750/images/biz_orderico.png"/><?php }?>
        
        Financial Management</a></h1>
    </div>

<!--   <div class="myappraise">
        <h1 class="usercenternav"><a href="/biz/coupon.php"><img src="/static/0750/images/msgico.png"/>优惠劵</a></h1>

    </div>-->
    
  
    
    <div class="mycollect">
       <h1  onmouseover="document.getElementById('xfdj').src='/static/0750/images/biz_xfdj (2).png'"  onmouseout="document.getElementById('xfdj').src='/static/0750/images/biz_xfdj (1).png'"   class="usercenternav">
        <a id="verify-coupon-id" href="javascript:;"><img  id="xfdj" src="/static/0750/images/biz_xfdj (1).png"/>Consumption Registration</a>
       </h1>
        
    </div>
</div>    
    <div id="pagemasker"></div><div id="dialog"></div>