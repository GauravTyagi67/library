<?php

	require('functions.php');
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Category</title>
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
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"library");
					//This is a database fetch data validations query
					$query = "select * from category";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<tr>
							<td><?php echo $row['cat_name']; ?></td>
							<td>
								<button class="btn btn-secondary"name=""><a href="edit_category.php?cid=	<?php echo $row['cat_id']; ?>">Edit</a></button>
								<button class="btn btn-danger"name=""><a href="delete_category.php?cid=		<?php echo $row['cat_id']; ?>">Delete</a></button>
							</td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

</body>
</html>