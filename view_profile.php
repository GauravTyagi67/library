<?php

	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$name="";
	$email="";
	$mobile="";
	$address="";
	//This is a database open user information(view) validations query
	$query = "select * from users where email= '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run))
	{
		$name=$row['name'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$address=$row['address'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	<meta charset="utf-8"name="viewport"content="width=device-width,initial-scale=1">
	<link rel="icon" type="image" href="assets/image/logo.jpg"size="16x16 32x32 64x64">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript"src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript"src="assets/js/jquery_latest.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="user_dashboard.php"class="navbar-brand text-white">Library Management System</a>
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
				<a href="logout.php"class="nav-link text-white">Logout</a>
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

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<center><h3>Your View Profile Page</h3></center>
			<form>
				<div class="form-group">
					<label>Name</label>
					<input type="text" value="<?php echo $name; ?>"class="form-control"disabled>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" value="<?php echo $email; ?>"class="form-control"disabled>
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="text" value="<?php echo $mobile; ?>"class="form-control"disabled>
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea row="3"cols="40"class="form-control"disabled><?php echo $address; ?></textarea>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>