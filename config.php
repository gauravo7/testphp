<?php
	$con=mysqli_connect("http://116.206.104.66","damancp_gymuser","Jalandhar@123","damancp_gym");
	if(!$con)
	{
		echo "<script>window.location.assign('login.php?msg=Error while establishing connection with database')</script>";
	}
?>