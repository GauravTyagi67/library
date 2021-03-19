<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	//This is a delete data from database validation query
	$query = "delete from authors where author_id = $_GET[aid]";
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Author Deleted Successfully...")
	//Redirect page functionality in javascript validation query
	window.location.href = "manage_author.php";
</script>