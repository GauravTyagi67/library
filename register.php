<?php

	$connection=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,"library");
	//This is a database save validations query
	$query="insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[address]')";
	$query_run=mysqli_query($connection,$query);

?>

<script type="text/javascript">
	//This is a message send validation
	alert("Registeration successfull.....you may login now.");
	//This is a redirect page validation
	window.location.href="login.php";
</script>