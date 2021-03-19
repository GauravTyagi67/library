<?php

	require('functions.php');
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Book</title>
	<meta charset="utf-8"name="viewport"content="width=device-width,initial-scale=1">
	<link rel="icon" type="image" href="../assets/image/logo.jpg"size="16x16 32x32 64x64">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script type="text/javascript"src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript"src="../assets/js/jquery_latest.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="index.php"class="navbar-brand text-white">Library Management System</a>
		</div>
		<span style="color: white;"><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
				<a href="index.php"class="nav-link text-white">Home</a>
			</li>
			<li class="nav-item">
				<a href="view_profile.php"class="nav-link text-white">View Profile</a>
			</li>
			<li class="nav-item">
				<a href="edit_profile.php"class="nav-link text-white">Edit Profile</a>
			</li>
			<li class="nav-item">
				<a href="change_password.php"class="nav-link text-white">Change Password</a>
			</li>
			<li class="nav-item">
				<a href="../logout.php"class="nav-link text-white">Logout</a>
			</li>
		</ul>
	</div>
</nav>
<br>

<span>
	<marquee style="color: orange;">
		<b>This is a Library Management System .Library opens at 09:00AM to 04:00PM</b>
	</marquee>
</span><br>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item">
				<a href="add_book.php" class="dropdown-item">Add New Book</a>
			</li>
			<li class="nav-item">
				<a href="manage_book.php" class="dropdown-item">Manage Books</a>
			</li>
			<li class="nav-item">
				<a href="add_cat.php" class="dropdown-item">Add New Category</a>
			</li>
			<li class="nav-item">
				<a href="manage_cat.php" class="dropdown-item">Manage Category</a>
			</li>
			<li class="nav-item">
				<a href="add_author.php" class="dropdown-item">Add New Author</a>
			</li>
			<li class="nav-item">
				<a href="manage_author.php" class="dropdown-item">Manage Authors</a>
			</li>
			<li class="nav-item">
				<a href="issue_book.php" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav>

<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 style="color: red;"><center><b>Add New Book</b></center></h2>
			<form action=""method="post">
				<div class="form-group">
					<label>Book Name</label>
					<input type="text" name="book_name"class="form-control"placeholder="Enter Book Name"required="">
				</div>
				<div class="form-group">
					<label>Book Author</label>
					<input type="text" name="book_author"class="form-control"placeholder="Enter Book Name"required="">
				</div>
				<div class="form-group">
					<label>Book Category Name</label>
					<input type="text" name="book_cat"class="form-control"placeholder="Enter Book Name"required="">
				</div>
				<div class="form-group">
					<label>Book Number</label>
					<input type="text" name="book_no"class="form-control"placeholder="Enter Book Name"required="">
				</div>
				<div class="form-group">
					<label>Book Price</label>
					<input type="text" name="book_price"class="form-control"placeholder="Enter Book Name"required="">
				</div>
				<button class="btn btn-success"name="add_book">Add New Book</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>

<?php
	if(isset($_POST['add_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		//This is a database add book validations query
		$query = "insert into books values(null,'$_POST[book_name]','$_POST[book_author]','$_POST[book_cat]',$_POST[book_no],$_POST[book_price])";
		$query_run = mysqli_query($connection,$query);
	}
?>