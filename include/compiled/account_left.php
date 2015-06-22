	<div class="usercenterinfo">
				<img src="/static/0750/images/usercenterico.png" class="usercenterico"/>
					<ul>
                    <li><a href="/account/settings.php"><img src="/static/0750/images/setico.png"/></a></li>
                    <li><a href="/credit/mydate.php"><img src="/static/0750/images/mobieico.png"/></a></li>
                    <li><a href="/order/index.php?s=index&ocur=1"><img src="/static/0750/images/txtico.png"/></a></li>
                    </ul>
			</div>
              <div class="mylink">
              <h1 class="usercenternav" style="text-align:center; font-size:16px;">积分 <?php echo moneyit($login_user['score']); ?></h1>
              </div>
	           <div class="mylink">
				<h1  onmouseover="document.getElementById('scur').src='/static/0750/images/bodyico-1.png'"  <?php if($_GET['scur']!= 1){?>onmouseout="document.getElementById('scur').src='/static/0750/images/bodyico.png'"<?php }?>   class="usercenternav <?php if($_GET['scur']== 1){?>curh1<?php }?>">
                <a href="/account/settings.php?scur=1">
                       <?php if($_GET['scur']== 1){?><img id="scur" src="/static/0750/images/bodyico-1.png"/><?php } else { ?><img id="scur"  src="/static/0750/images/bodyico.png"/><?php }?>
               我的邻客</a>
                
                </h1>
				<ul class="usercenterslideul">
					<li><a class="<?php if($pagetitle == '账户设置' && $_GET['scur'] != 1){?>leftcur<?php }?>" href="/account/settings.php">我的资料</a></li>
					<li><a class="<?php if($pagetitle == '我的积分'){?>leftcur<?php }?>" href="/credit/score.php">我的积分</a></li>
					<li><a class="<?php if($pagetitle == '我的日历'){?>leftcur<?php }?>" href="/credit/mydate.php">我的日历</a></li>
					<li><a class="<?php if($_GET['s']== 'askrefund'){?>leftcur<?php }?>"  href="/order/index.php?s=askrefund">我的退款</a></li>
				</ul>
			</div>
			<div class="myorder">
				<h1  onmouseover="document.getElementById('ocur').src='/static/0750/images/orderico-1.png'"  <?php if($_GET['ocur']!= 1){?>onmouseout="document.getElementById('ocur').src='/static/0750/images/orderico.png'" <?php }?>    class="usercenternav <?php if($_GET['ocur']== 1){?>curh1<?php }?>">
                
                <a href="/order/index.php?s=index&ocur=1">
                   <?php if($_GET['ocur']== 1){?><img id="ocur" src="/static/0750/images/orderico-1.png"/><?php } else { ?><img id="ocur" src="/static/0750/images/orderico.png"/><?php }?>    

                
                我的订单</a></h1>
                
                
                
				<ul class="usercenterslideul">
				<li><a  class="<?php if($_GET['s']== 'unpay'){?>leftcur<?php }?>"  href="/order/index.php?s=unpay">未付款</a></li>
				<li><a  class="<?php if($_GET['s']== 'pay'){?>leftcur<?php }?>"  href="/order/index.php?s=pay">已付款</a></li>
				</ul>
			</div>
			<div class="myappraise">
				<h1 onmouseover="document.getElementById('mcur').src='/static/0750/images/msgico-1.png'" <?php if($_GET['mcur']!= 1){?> onmouseout="document.getElementById('mcur').src='/static/0750/images/msgico.png'"<?php }?>  class="usercenternav <?php if($_GET['mcur']== 1){?>curh1<?php }?>">
                <a href="/account/comment.php?mcur=1" >
                  <?php if($_GET['mcur']== 1){?><img width="15" height="15" id="mcur" src="/static/0750/images/msgico-1.png"/><?php } else { ?>
                  <img id="mcur" src="/static/0750/images/msgico.png"/><?php }?>
      
                
                
                我的评价</a>
                </h1>
                <ul class="usercenterslideul">
                 	    <li><a class="<?php if($_GET['os']== 'yes'){?>leftcur<?php }?>"  href="/account/comment.php?os=yes">已评价</a></li>
			        	<li><a class="<?php if($_GET['os']== 'no'){?>leftcur<?php }?>"  href="/order/comment_index.php?os=no">未评价</a></li>
                        </ul>
			</div>
			<div class="mycollect">
				<h1  onmouseover="document.getElementById('ccur').src='/static/0750/images/collectico-1.png'"  <?php if($_GET['ccur']!= 1){?> onmouseout="document.getElementById('ccur').src='/static/0750/images/collectico.png'" <?php }?>  class="usercenternav <?php if($_GET['ccur']== 1){?>curh1<?php }?>">
                
                <a href="/account/collect.php?ccur=1">
                <?php if($_GET['ccur']== 1){?><img id="ccur" src="/static/0750/images/collectico-1.png"/><?php } else { ?><img id="ccur" src="/static/0750/images/collectico.png"/><?php }?>
                
                
                我的收藏
                
                </a>
                
                </h1>
				 <ul class="usercenterslideul">
                     <?php if(is_array($categorys)){foreach($categorys AS $index=>$cat) { ?>
                       <li><a class="<?php if($_GET['gid']== $cat['id']){?>leftcur<?php }?>"  href="/account/collect.php?gid=<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></a></li>
                     <?php }}?>
                 </ul>
			</div>