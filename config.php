<?php
	$con=mysqli_connect("localhost","jankistu_jankistudent","janki@2023","jankistu_gym_gauarv");
	if(!$con)
	{
		echo "<script>window.location.assign('login.php?msg=Error while establishing connection with database')</script>";
	}
?>