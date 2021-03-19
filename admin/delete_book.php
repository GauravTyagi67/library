<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	//This is a delete data from database validation query
	$query = "delete from books where book_no = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	/*header("location:manage_book.php");*/
?>

<script type="text/javascript">
	alert("Book Deleted Successfully...")
	//Redirect page functionality in javascript validation query
	window.location.href = "manage_book.php";
</script>