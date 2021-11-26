<?php
$connection = \Bitrix\Main\Application::getConnection();
$connection->queryExecute("SET sql_mode=''");
