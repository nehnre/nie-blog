CREATE VIEW `blog_view_ar_tags` AS select `t1`.`blar_id` AS `blar_id`,`t2`.`blta_name` AS `blta_name`,`t2`.`blta_id` AS `blta_id` from (`blog_article_tags` `t1` join `blog_tags` `t2`) where (`t1`.`blta_id` = `t2`.`blta_id`)