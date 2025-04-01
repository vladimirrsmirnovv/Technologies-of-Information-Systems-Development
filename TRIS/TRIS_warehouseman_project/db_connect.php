<?php
 	$DBSERVER = "localhost";
	$DBUSER = "host1878319";
	$DBPASS = "jNSPsiJdHk";
	$DB = "host1878319";

	$link = mysqli_connect($DBSERVER, $DBUSER, $DBPASS, $DB);
 
	if (!$link) {
   		echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
   		echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
   		echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
   		exit;
	} else mysqli_query($link, "SET NAMES utf8");
?>