<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	//This is a delete data from database validation query
	$query = "delete from category where cat_id = $_GET[cid]";
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Category Deleted Successfully...")
	//Redirect page functionality in javascript validation query
	window.location.href = "manage_cat.php";
</script>