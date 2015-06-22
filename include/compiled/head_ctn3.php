<div class="head">
  <div class="navigation" style="height:0px;">
  <div class="inside" style="height:10px;">
  
<!--导航分类代码 -->
<?php 
$categorys = get_categorys($gid);
; ?> 
   <div class="product-type-list ptl" style="top:70px">
    <div class="type-list tl">
     <ul>
     
     
     
     
     <?php if(is_array($categorys)){foreach($categorys AS $index=>$cat) { ?>
            <li class="tl<?php echo $index + 1; ?>" style="background:none; padding-left:60px;">
       <div class="gt"></div>       <div class="panel">
        <div class="ntype"><a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $cat['id']; ?>" class="n"><?php echo $cat['name']; ?></a></div>
     
        
         </div>
       <div class="showmenu" style="display: none;">
        <div class="this-type-all tta">
         <p class="t"><?php echo $cat['name']; ?></p>
         <p class="ty">
         <?php if(is_array($cat['fcat'])){foreach($cat['fcat'] AS $findex=>$fcat) { ?>
        <a href="/category.php?gid=<?php echo $gid; ?>&sid=<?php echo $cat['id']; ?>&sids=<?php echo $fcat['id']; ?>"><?php echo $fcat['name']; ?></a>
         
          <?php }}?>
         
         </p>
         <p class="hr"></p>                
          </div>
       </div>      </li>
       <?php }}?>   
           </ul>
    
    </div>
   </div>
<!--导航分类代码 -->
  </div>
 </div>
 </div>


 
 