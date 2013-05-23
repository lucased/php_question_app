<!doctype html>
<html>
<head>
	<title>Question Application</title>

	<meta charset=utf-8>
	<meta name=description content="Question Applicaiton">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	<div id="wrapper">

		<?php include "include/header.php" ?>

		<section>
			<h2>Admin Area</h2>
			<h3>Create Account</h3>
			<form>
				<label for="name">Name</label>
				<input type="text" name="name" id="name" placeholder="Enter name" required><br>
				<label for="address">Address</label>
				<input type="text" name="address" id="address" placeholder="Enter address" required><br>
				<div class="clear"></div>
				<label for="company">Company</label>
				<input type="text" name="company" id="company" placeholder="Enter company name"><br>
				<label for="phone">Phone</label>
				<input type="tel" name="phone" id="phone" placeholder="Enter phone number" required><br>
				<div class="clear"></div>
				<label for="account-list">Account type</label>
				<select id="account-list">
					<option value="1">Select..</option>
					<option value="2">Writer</option>
					<option value="3">Producer</option>
					<option value="4">Administrator</option>
				</select><br>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="Enter email address" required><br>
				<label for="username">Username</label>
				<input type="text" name="username" placeholder="Enter username"><br>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Enter password" required><br>
				<div class="clear"></div>
				<input class="inline" type="submit" value="Submit">
				<input class="inline" type="button" value="Cancel">
			</form>
		</section>

		<?php include "include/footer.php" ?>

	</div> 

</body>
<script src="js/canvas_box.js"></script>

</html>