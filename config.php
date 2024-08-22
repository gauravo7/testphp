<?php
	$con=mysqli_connect("http://116.206.104.66","damancp_gymuser","Jalandhar@123","damancp_gym");
	if(mysqli_connect_errno($con)>0)
	{
		echo "Error in Connection".mysqli_connect_error($con);
	}
	else{
		echo "Connected";
	}
?>