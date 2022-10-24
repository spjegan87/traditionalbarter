<?php
	include('../config/config.php');
	//Page Notification details		
	$nql = "select * from notification_register" ;
	$nquery = mysql_query($nql);
	$nrows = mysql_fetch_array($nquery);

	// Website Keywords and Description queries //
	$ksql = "select * from keywords_register where status='Active'" ;
	$kquery = mysql_query($ksql);
	$krows = mysql_fetch_array($kquery);
 ?>