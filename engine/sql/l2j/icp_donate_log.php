<?php
$createTable[5] = "CREATE TABLE `icp_donate_log` ( `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT, `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, `description` text NOT NULL, `cost` int(11) NOT NULL DEFAULT '0', `account` varchar(255) NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
$tableName[5] = "icp_donate_log";
$columnsValue[5] = array();