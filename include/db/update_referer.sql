/* 更新于 ZuituGo_Patch_CV2.0_23369_23934.tar.gz */
CREATE TABLE `referer` ( `id` BIGINT( 20 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'id', `user_id` BIGINT( 20 ) UNSIGNED NOT NULL COMMENT '用户id', `referer` VARCHAR( 400 ) NOT NULL COMMENT '来源', `create_time` INT( 10 ) UNSIGNED NOT NULL COMMENT '访问时间') ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT = '来源';
