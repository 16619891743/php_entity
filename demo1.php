<?php

/*
 *假设数据表
CREATE TABLE `task` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '描述',
  `task_status` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '任务状态',
  `finally_status` int(11) NOT NULL DEFAULT 0 COMMENT '最终状态',
  `add_time` date NOT NULL COMMENT '添加时间',
  `modify_time` date NOT NULL COMMENT '最近一次修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

*/

//如果用pdo的方式
$pdo = new PDO();


