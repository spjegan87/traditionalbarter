<?php 
	$username = $_SESSION['username'];
	$sqlfetch = "select * from admin_register where username='".$username."'";
	$querydb = mysql_query($sqlfetch);
	while($row = mysql_fetch_assoc($querydb))
	{
		if($row['usertype'] == "normal")
		{
			echo "<form method='post' action=''><ul class='admin-menu'><li><a href='index.php?page=dashboard.php'><i class='fa fa-dashboard'>&nbsp;</i> Dashboard</a></li><li><a href='index.php?page=userdetails.php'><i class='fa fa-user'>&nbsp;</i> Users Details</a></li></ul></form>";
		}
		elseif($row['usertype'] == "admin")
		{
			echo "<form method='post' action=''><ul class='admin-menu'><li><a href='index.php?page=dashboard.php'><i class='fa fa-dashboard'>&nbsp;</i> Dashboard</a></li><li><a href='javascript:;'><i class='fa fa-bars' aria-hidden='true'>&nbsp;</i> Home Pages <span class='arrow'></span></a><ul class='sub-menu'><li><a href='index.php?page=homepagebanner.php'>Banner Content<br /><span>முகப்பு பக்கம்</span></a></li></ul></li></ul><p class='footer-empty'></p></form>";
		}
	}
?>