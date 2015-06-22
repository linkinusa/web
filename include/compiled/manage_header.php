<?php include template("manage_html_header");?>
<?php if($INI['system']['editor'] == 'xh'){?>
<script type="text/javascript" src="/static/js/xheditor/xheditor.js"></script>
<?php } else { ?>
<script type="text/javascript" src="/static/js/kindeditor/kindeditor-min.js"></script>
<?php }?> 



<?php if($session_notice=Session::Get('notice',true)){?>
<div class="sysmsgw" id="sysmsg-success"><div class="sysmsg"><p><?php echo $session_notice; ?></p><span class="close">关闭</span></div></div> 
<?php }?>
<?php if($session_notice=Session::Get('error',true)){?>
<div class="sysmsgw" id="sysmsg-error"><div class="sysmsg"><p><?php echo $session_notice; ?></p><span class="close">关闭</span></div></div> 
<?php }?>
