<?php
$createTable[24] = "CREATE TABLE icp_tickets_msgs ([id] int IDENTITY(1,1) NOT NULL PRIMARY KEY,[msg_id] varchar(255) COLLATE Latin1_General_CI_AS NOT NULL,[message] nvarchar(max) COLLATE Latin1_General_CI_AS NOT NULL,[date] smalldatetime NOT NULL,[answered] varchar(255) COLLATE Latin1_General_CI_AS NOT NULL,[attach] varchar(255) COLLATE Latin1_General_CI_AS NOT NULL,[status] int DEFAULT '1' NOT NULL)";
$tableName[24] = "icp_tickets_msgs";
$columnsValue[24] = array();