<!DOCTYPE html>
<html>
<head>
	<title>Library Management System</title>
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
			<a href="index.php"class="navbar-brand text-white">Library Management System</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
				<a href="index.php"class="nav-link text-white">Home</a>
			</li>
			<li class="nav-item">
				<a href="admin/index.php"class="nav-link text-white">Admin Login</a>
			</li>
			<li class="nav-item">
				<a href="index.php"class="nav-link text-white">User Login</a>
			</li>
			<li class="nav-item">
				<a href="signup.php"class="nav-link text-white">Register</a>
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
		<div class="col-md-4"id="side_bar">
			<h5>Library Timeing</h5>
			<ul>
				<li>Opening Time: 09:00AM</li>
				<li>Closeing Time: 04:00PM</li>
				<li>Sunday Off</li>
			</ul>

			<h5>What we provide?</h5>
			<ul>
				<li>Full Furniture</li>
				<li>Free Wi-Fi</li>
				<li>News Paper</li>
				<li>Discussion Room</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>
		<div class="col-md-8"id="main_content">
			<center><h3>User Login Form</h3></center>
			<form action=""method="post">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email"placeholder="Enter Your Email"class="form-control"required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password"placeholder="Enter Your Password"class="form-control"required>
				</div>
				<button type="submit"class="btn btn-primary"name="login">Login</button>
			</form>
			<?php

			session_start();
			if(isset($_POST['login']))
			{
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,"library");
			//This is a database open user validations query
			$query = "select * from users where email= '$_POST[email]'";
			$query_run = mysqli_query($connection,$query);
			while($row = mysqli_fetch_assoc($query_run))
			{
			if($row['email'] == $_POST['email'])
			{
				if($row['password'] == $_POST['password'])
				{
					$_SESSION['name'] = $row['name'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['id'] = $row['id'];
					header("Location:user_dashboard.php");
				}
				else
				{
					?>
					<br><br><center><span class="alert-danger">Wrong password</span></center>
					<?php
				}
			}/*
			else
			{
				echo "Wrong email";
			}*/
			}					
			}

			?>
		</div>
	</div>
</div>

</body>
</html>