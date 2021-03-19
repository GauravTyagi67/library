<?php

	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$password = "";
	//This is a database select user  validations query
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run))
	{
		$password = $row['password'];
	}
	if($password == $_POST['old_password']) 
	{
		// This is a database update user password query
		$query = "update users set password = '$_POST[new_password]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
	}

?>

<script type="text/javascript">
	alert("Your update password successfull...");
	//This is a redirect page validation query
	window.location.href="user_dashboard.php";
</script>