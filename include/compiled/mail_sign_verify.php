hi <?php echo $user['username']; ?>,<br />
<br />
感谢您注册<?php echo $INI['system']['sitename']; ?>，请点击下面的链接验证您的Email：<br />
<br />
<a href="<?php echo $INI['system']['wwwprefix']; ?>/account/verify.php?code=<?php echo $user['secret']; ?>"><?php echo $INI['system']['wwwprefix']; ?>/account/verify.php?code=<?php echo $user['secret']; ?></a><br />
<br />
--<br />
<?php echo $INI['system']['sitename']; ?> - 精品团购每一天
