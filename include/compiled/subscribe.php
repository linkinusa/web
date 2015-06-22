<?php include template("header");?>
<link rel="stylesheet" href="/static/css/index.css" type="text/css" media="screen" charset="utf-8" />
<link href="/static/0750/css/linkinusaindex.css" rel="stylesheet" type="text/css">
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="maillist">
	<div id="content" style="width:1100px;">
        <div class="box">
            <div class="box-top"></div>
            <div class="box-content welcome">
				<div class="head">
					 <h2>邮件订阅</h2>
				</div>
                <div class="sect">
				  <div class="succ">您的邮箱 <strong><?php echo $_POST['email']; ?></strong> 将会收到<strong><?php echo $city['name']; ?></strong>每天最新的团购信息。</div>
				 </div>
			</div>
		</div>
		<div class="box-bottom"></div>
	</div>

</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
