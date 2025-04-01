<?php
	$message = "Hello, ";
	$myname=$_GET["myname"];
	if ($myname) echo $message.$myname."!";
	else echo $message."World!";
  ?>
