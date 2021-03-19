<?php

	//This is a issued book validation query
	function get_user_issue_book_count()
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$user_issue_book_count=0;
		//Fetch category book data in database validation query
		$query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run))
		{
			$user_issue_book_count=$row['user_issue_book_count'];
		}
		return($user_issue_book_count);
	}

?>