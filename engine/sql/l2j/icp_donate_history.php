<?php
$createTable[4] = "CREATE TABLE `icp_donate_history` (`id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT, `account` varchar(255) NOT NULL, `amount` int(11) NOT NULL, `currency` varchar(255) NOT NULL, `price` decimal(11,2) NOT NULL, `status` varchar(255) NOT NULL, `transaction_id` varchar(255) NOT NULL, `date` varchar(255) NOT NULL, `method` varchar(255) NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
$tableName[4] = "icp_donate_history";
$columnsValue[4] = array();