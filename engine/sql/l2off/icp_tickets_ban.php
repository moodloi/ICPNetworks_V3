<?php
$createTable[23] = "CREATE TABLE icp_tickets_ban ([id] int IDENTITY(1,1) NOT NULL PRIMARY KEY,[login] varchar(255) COLLATE Latin1_General_CI_AS NOT NULL,[blockedLogin] varchar(255) COLLATE Latin1_General_CI_AS NOT NULL,[blockedDate] smalldatetime NOT NULL,[unblockedLogin] varchar(255) COLLATE Latin1_General_CI_AS NOT NULL,[unblockedDate] smalldatetime NOT NULL,[status] int DEFAULT '0' NOT NULL)";
$tableName[23] = "icp_tickets_ban";
$columnsValue[23] = array();